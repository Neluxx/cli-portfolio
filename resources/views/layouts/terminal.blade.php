<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>~/portfolio $</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
</head>
<body class="bg-chrome-body h-screen flex items-center justify-center p-4 md:p-8">
<div class="w-full max-w-7xl flex flex-col h-[calc(100vh-2rem)] md:h-[calc(100vh-4rem)]">
    {{-- Window chrome --}}
    <div class="bg-chrome-bg rounded-t-lg px-4 py-3 flex items-center gap-2 border-b border-chrome-border shrink-0">
        <span class="w-3 h-3 rounded-full bg-dot-red hover:brightness-110 cursor-pointer transition-all"></span>
        <span class="w-3 h-3 rounded-full bg-dot-yellow hover:brightness-110 cursor-pointer transition-all"></span>
        <span class="w-3 h-3 rounded-full bg-dot-green hover:brightness-110 cursor-pointer transition-all"></span>
    </div>

    {{-- Terminal body --}}
    <div class="bg-ubuntu-bg rounded-b-lg border border-chrome-bg border-t-0 overflow-hidden flex-1">
        {{ $slot }}
    </div>
</div>
@livewireScripts
</body>
</html>
