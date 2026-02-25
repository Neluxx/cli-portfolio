<?php ?>
<div class="space-y-1">
    <p class="text-[#ffbd2e] font-bold mb-2">Available commands:</p>
    @foreach ($commands as $name => $command)
        <div class="grid grid-cols-[160px_1fr] gap-2">
            <span class="text-[#5ec1f0]">{{ $name }}</span>
            <span class="text-[#6b6b6b]">{{ $command->getDescription() }}</span>
        </div>
    @endforeach
    <p class="text-[#6b6b6b] mt-2 text-xs">Tip: use ↑ / ↓ to navigate command history · Ctrl+L to clear</p>
</div>

