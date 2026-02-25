<?php ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>~/portfolio — terminal</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;700&display=swap" rel="stylesheet" />
</head>
<body class="bg-[#1a1a1a] min-h-screen flex items-start justify-center p-4 md:p-8">

<div class="w-full max-w-5xl">
    {{-- Window chrome --}}
    <div class="bg-[#2d2d2d] rounded-t-lg px-4 py-3 flex items-center gap-2 border-b border-[#3a3a3a]">
        <span class="w-3 h-3 rounded-full bg-[#ff5f56] hover:brightness-110 cursor-pointer transition-all"></span>
        <span class="w-3 h-3 rounded-full bg-[#ffbd2e] hover:brightness-110 cursor-pointer transition-all"></span>
        <span class="w-3 h-3 rounded-full bg-[#27c93f] hover:brightness-110 cursor-pointer transition-all"></span>
    </div>

    {{-- Terminal body --}}
    <div class="bg-[#0d0d0d] rounded-b-lg min-h-[80vh] border border-[#2d2d2d] border-t-0">
        {{ $slot }}
    </div>
</div>

@livewireScripts
</body>
</html>
