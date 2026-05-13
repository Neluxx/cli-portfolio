import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const btnClose = document.getElementById('btn-close');
    const btnMinimize = document.getElementById('btn-minimize');
    const btnFullscreen = document.getElementById('btn-fullscreen');
    const terminalBody = document.getElementById('terminal-body');

    // Close: try to close the tab, fall back to blank page
    btnClose.addEventListener('click', () => {
        window.close();
        window.location.href = 'about:blank';
    });

    // Minimize: collapse/expand the terminal body
    btnMinimize.addEventListener('click', () => {
        terminalBody.classList.toggle('minimized');
    });

    // Fullscreen: toggle browser fullscreen mode
    btnFullscreen.addEventListener('click', () => {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        } else {
            document.documentElement.requestFullscreen();
        }
    });
});
