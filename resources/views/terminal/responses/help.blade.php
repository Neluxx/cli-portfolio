<?php ?>
<div class="space-y-1">
    <p class="text-ubuntu-yellow font-bold mb-2">Available commands:</p>
    @foreach ($commands as $name => $command)
        <div class="grid grid-cols-[160px_1fr] gap-2">
            <span class="text-ubuntu-cyan">{{ $name }}</span>
            <span class="text-ubuntu-fg">{{ $command->getDescription() }}</span>
        </div>
    @endforeach
    <p class="text-ubuntu-purple mt-2 text-xs">Tip: use ↑ / ↓ to navigate command history · Ctrl+L to clear</p>
</div>
