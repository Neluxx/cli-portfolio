<div class="space-y-4">
    <p class="text-ubuntu-yellow font-bold mb-2">Available commands:</p>
    <div>
        @foreach ($commands as $name => $command)
            <div class="grid grid-cols-[140px_1fr]">
                <span class="text-ubuntu-cyan">{{ $name }}</span>
                <span class="text-ubuntu-white">{{ $command->getDescription() }}</span>
            </div>
        @endforeach
    </div>
    <p class="text-ubuntu-purple text-xs">Tip: use ↑ / ↓ to navigate command history · Ctrl+L to clear</p>
</div>
