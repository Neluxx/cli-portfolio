<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="{{ session('theme', 'phosphor') }}" data-crt="{{ session('crt', 'on') }}">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>~/portfolio $</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
</head>
<body class="bg-chrome-body">
<div class="w-full h-screen p-3 sm:p-5 flex flex-col">
    <div class="crt-bezel flex-1 flex flex-col min-h-0">
        <div class="crt-screen flex-1 flex flex-col min-h-0">

            {{-- Window chrome --}}
            <div class="window-chrome px-4 py-3 flex items-center gap-2 shrink-0">
                <span id="btn-close" class="w-3 h-3 rounded-full bg-dot-red hover:brightness-110 cursor-pointer transition-all"></span>
                <span id="btn-minimize" class="w-3 h-3 rounded-full bg-dot-yellow hover:brightness-110 cursor-pointer transition-all"></span>
                <span id="btn-fullscreen" class="w-3 h-3 rounded-full bg-dot-green hover:brightness-110 cursor-pointer transition-all"></span>
                <span class="ml-auto text-[10px] tracking-widest uppercase opacity-70" style="color: var(--fg); text-shadow: var(--glow-soft);">tty1 — /bin/portfolio</span>
            </div>

            {{-- Terminal body --}}
            <div id="terminal-body" class="flex-1 min-h-0 overflow-hidden">
                {{ $slot }}
            </div>

            {{-- Status bar --}}
            <div class="status-bar flex items-center shrink-0">
                <span class="status-segment flex items-center"><span class="led"></span>online</span>
                <span class="status-segment" id="status-theme">phosphor</span>
                <span class="status-segment hidden sm:inline" id="status-uptime">up 00:00</span>
                <span class="status-segment hidden sm:inline" id="status-cmds">cmds 0</span>
                <span class="status-segment ml-auto" id="status-clock">--:--:--</span>
            </div>

        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
