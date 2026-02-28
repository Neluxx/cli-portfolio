<div class="space-y-1">
    <p class="text-ubuntu-yellow font-bold">Available commands:</p>
    @foreach ($commands as $name => $command)
        <div class="grid grid-cols-[140px_1fr]">
            <span class="text-ubuntu-cyan">{{ $name }}</span>
            <span class="text-ubuntu-white">{{ $command->getDescription() }}</span>
        </div>
    @endforeach
    <p class="text-ubuntu-purple mt-2 text-xs">Tip: use ↑ / ↓ to navigate command history · Ctrl+L to clear</p>
</div>
