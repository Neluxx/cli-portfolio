import './bootstrap';

/* ============================================================
   THEME SYSTEM
   ============================================================ */
const VALID_THEMES = ['phosphor', 'amber', 'matrix', 'dracula', 'ubuntu'];

function applyTheme(theme) {
    if (!VALID_THEMES.includes(theme)) theme = 'phosphor';
    document.documentElement.setAttribute('data-theme', theme);
    try { localStorage.setItem('terminal-theme', theme); } catch (e) {}
    const label = document.getElementById('status-theme');
    if (label) label.textContent = theme;
}

// Restore saved theme as early as possible (before paint, ideally)
(function bootstrapTheme() {
    let saved = null;
    try { saved = localStorage.getItem('terminal-theme'); } catch (e) {}
    if (saved && VALID_THEMES.includes(saved)) {
        document.documentElement.setAttribute('data-theme', saved);
    }
})();

// Livewire dispatches a `theme-changed` browser event from the ThemeCommand
window.addEventListener('theme-changed', (e) => {
    const theme = e?.detail?.theme ?? (Array.isArray(e?.detail) ? e.detail[0]?.theme : null);
    if (theme) applyTheme(theme);
});

/* ============================================================
   CRT MODE (on/off)
   ============================================================ */
function applyCrt(state) {
    const next = state === 'off' ? 'off' : 'on';
    document.documentElement.setAttribute('data-crt', next);
    try { localStorage.setItem('terminal-crt', next); } catch (e) {}
}

(function bootstrapCrt() {
    let saved = null;
    try { saved = localStorage.getItem('terminal-crt'); } catch (e) {}
    if (saved === 'on' || saved === 'off') {
        document.documentElement.setAttribute('data-crt', saved);
    }
})();

window.addEventListener('crt-changed', (e) => {
    const crt = e?.detail?.crt ?? (Array.isArray(e?.detail) ? e.detail[0]?.crt : null);
    if (crt) applyCrt(crt);
});

/* ============================================================
   STATUS BAR — clock + uptime
   ============================================================ */
function pad(n) { return n.toString().padStart(2, '0'); }

function startStatusBar() {
    const clockEl  = document.getElementById('status-clock');
    const uptimeEl = document.getElementById('status-uptime');
    const themeEl  = document.getElementById('status-theme');
    const startedAt = Date.now();

    if (themeEl) {
        themeEl.textContent = document.documentElement.getAttribute('data-theme') || 'phosphor';
    }

    function tick() {
        const now = new Date();
        if (clockEl) {
            clockEl.textContent = `${pad(now.getHours())}:${pad(now.getMinutes())}:${pad(now.getSeconds())}`;
        }
        if (uptimeEl) {
            const sec = Math.floor((Date.now() - startedAt) / 1000);
            const h = Math.floor(sec / 3600);
            const m = Math.floor((sec % 3600) / 60);
            const s = sec % 60;
            uptimeEl.textContent = h > 0
                ? `up ${pad(h)}:${pad(m)}:${pad(s)}`
                : `up ${pad(m)}:${pad(s)}`;
        }
    }
    tick();
    setInterval(tick, 1000);
}

/* ============================================================
   BLINKING CURSOR after live input
   ============================================================ */
function ensureCursor() {
    const input = document.querySelector('[x-ref="input"]');
    if (!input || input.dataset.cursorAttached) return;
    const cursor = document.createElement('span');
    cursor.className = 'crt-cursor';
    input.insertAdjacentElement('afterend', cursor);
    input.dataset.cursorAttached = '1';
}

/* ============================================================
   COMMAND COUNTER (from Livewire's history length)
   ============================================================ */
function updateCommandCounter() {
    const el = document.getElementById('status-cmds');
    if (!el) return;
    const inputs = document.querySelectorAll('#terminal-output .prompt');
    // -1 for the live input line at the bottom
    const n = Math.max(0, inputs.length - 1);
    el.textContent = `cmds ${n}`;
}

/* ============================================================
   BOOT SEQUENCE
   ============================================================ */
const BOOT_LINES = [
    { text: 'POST: checking memory...... ', tail: 'OK', cls: 'boot-ok',   delay: 35 },
    { text: 'POST: detecting CPU........ ', tail: 'Curiosity v4.7', cls: 'boot-info', delay: 35 },
    { text: 'BIOS: loading bootloader... ', tail: 'OK', cls: 'boot-ok',   delay: 35 },
    { text: '', delay: 50 },
    { text: '[    0.0042 ] Linux portfolio 6.6.0-coffee #1 SMP',                       cls: 'boot-dim',  delay: 35 },
    { text: '[    0.0118 ] mounting /home/neluxx ............... ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '[    0.0203 ] starting humor.service ............... ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '[    0.0317 ] checking caffeine levels ............. ', tail: '[ LOW ]', cls: 'boot-warn', delay: 35 },
    { text: '[    0.0480 ] loading personality matrix ........... ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '[    0.0612 ] starting laravel.service ............. ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '[    0.0791 ] starting livewire.target ............. ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '[    0.0902 ] initializing portfolio ............... ', tail: '[ OK ]', cls: 'boot-ok',   delay: 35 },
    { text: '', delay: 80 },
    { text: 'login: neluxx', cls: 'boot-info', delay: 80 },
    { text: 'Last login: just now on tty1', cls: 'boot-dim', delay: 80 },
];

function runBootSequence(container, onDone) {
    if (!container) { onDone?.(); return; }

    // Skip if already booted in this session
    if (sessionStorage.getItem('booted') === '1') {
        container.remove();
        onDone?.();
        return;
    }

    let i = 0;
    function next() {
        if (i >= BOOT_LINES.length) {
            showPressAnyKey();
            return;
        }
        const line = BOOT_LINES[i++];
        const div = document.createElement('div');
        div.className = 'boot-line ' + (line.cls || '');
        if (line.tail) {
            div.innerHTML =
                `<span>${line.text}</span><span class="${line.cls || ''}" style="font-weight:bold">${line.tail}</span>`;
        } else {
            div.textContent = line.text || ' ';
        }
        container.appendChild(div);
        container.scrollTop = container.scrollHeight;
        setTimeout(next, line.delay ?? 40);
    }

    function showPressAnyKey() {
        const spacer = document.createElement('div');
        spacer.className = 'boot-line';
        spacer.innerHTML = '&nbsp;';
        container.appendChild(spacer);

        const prompt = document.createElement('div');
        prompt.className = 'boot-line';
        prompt.style.marginTop = '12px';
        prompt.innerHTML =
            '<span class="boot-info" style="font-weight:bold">▸ Press any key to continue</span>' +
            '<span class="crt-cursor" style="margin-left:6px"></span>';
        container.appendChild(prompt);
        container.scrollTop = container.scrollHeight;

        const dismiss = () => {
            window.removeEventListener('keydown', dismiss);
            window.removeEventListener('mousedown', dismiss);
            window.removeEventListener('touchstart', dismiss);
            try { sessionStorage.setItem('booted', '1'); } catch (e) {}
            container.style.transition = 'opacity 0.35s ease';
            container.style.opacity = '0';
            setTimeout(() => {
                container.remove();
                onDone?.();
            }, 360);
        };
        window.addEventListener('keydown', dismiss);
        window.addEventListener('mousedown', dismiss);
        window.addEventListener('touchstart', dismiss);
    }

    next();
}

/* ============================================================
   WINDOW CHROME BUTTONS
   ============================================================ */
function wireChromeButtons() {
    const btnClose      = document.getElementById('btn-close');
    const btnMinimize   = document.getElementById('btn-minimize');
    const btnFullscreen = document.getElementById('btn-fullscreen');
    const terminalBody  = document.getElementById('terminal-body');

    btnClose?.addEventListener('click', () => {
        window.close();
        window.location.href = 'about:blank';
    });

    btnMinimize?.addEventListener('click', () => {
        terminalBody?.classList.toggle('minimized');
    });

    btnFullscreen?.addEventListener('click', () => {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        } else {
            document.documentElement.requestFullscreen();
        }
    });
}

/* ============================================================
   INIT
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {
    wireChromeButtons();
    startStatusBar();
    ensureCursor();
    updateCommandCounter();

    const boot = document.getElementById('boot-sequence');
    const terminalApp = document.getElementById('terminal-app');
    if (terminalApp) terminalApp.style.opacity = '0';
    runBootSequence(boot, () => {
        if (terminalApp) {
            terminalApp.style.transition = 'opacity 0.4s ease';
            terminalApp.style.opacity = '1';
            // Focus the input after boot
            const input = document.querySelector('[x-ref="input"]');
            input?.focus();
        }
    });
});

// Re-attach cursor and refresh counter after Livewire morphs
document.addEventListener('livewire:init', () => {
    Livewire.hook('morph.updated', () => {
        ensureCursor();
        updateCommandCounter();
    });
});

// Click anywhere → focus input
document.addEventListener('click', () => {
    const input = document.querySelector('[x-ref="input"]');
    if (input) input.focus();
});
