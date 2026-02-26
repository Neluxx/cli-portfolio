<?php ?>
<div
    class="p-4 font-mono text-sm text-[#d4d4d4]"
    style="font-family: 'JetBrains Mono', monospace;"
    x-data="terminalHandler()"
    x-init="init()"
    @scroll-to-bottom.window="scrollToBottom()"
    @focus-input.window="$nextTick(() => $refs.input.focus())"
>
    {{-- Output history --}}
    <div id="terminal-output" class="space-y-1">
        @foreach ($history as $entry)
            @if ($entry['type'] === 'input')
                <div class="flex items-start gap-2">
                    <span class="prompt shrink-0">
                        <span class="text-[#27c93f]">portfolio</span><span class="text-[#6b6b6b]">@</span><span class="text-[#5ec1f0]">ubuntu</span><span class="text-[#6b6b6b]">:</span><span class="text-[#c792ea]">~</span><span class="text-[#6b6b6b]">$</span>
                    </span>
                    <span class="text-white break-all">{{ $entry['content'] }}</span>
                </div>
            @else
                <div class="terminal-output-block pl-0 py-1 leading-relaxed">
                    {!! $entry['content'] !!}
                </div>
            @endif
        @endforeach
    </div>

    {{-- Live input line --}}
    <div class="flex items-center gap-2 mt-2">
        <span class="prompt shrink-0">
            <span class="text-[#27c93f]">portfolio</span><span class="text-[#6b6b6b]">@</span><span class="text-[#5ec1f0]">ubuntu</span><span class="text-[#6b6b6b]">:</span><span class="text-[#c792ea]">~</span><span class="text-[#6b6b6b]">$</span>
        </span>
        <input
            x-ref="input"
            wire:model="input"
            type="text"
            class="flex-1 bg-transparent outline-none text-white caret-[#27c93f] placeholder-[#4a4a4a]"
            placeholder="type a command… (try 'help')"
            autocomplete="off"
            autocorrect="off"
            autocapitalize="off"
            spellcheck="false"
            @keydown.enter="$wire.submit()"
            @keydown.arrow-up.prevent="$wire.navigateHistory('up')"
            @keydown.arrow-down.prevent="$wire.navigateHistory('down')"
            @keydown.ctrl.l.prevent="$wire.clear()"
        />
    </div>
</div>

<script>
    function terminalHandler() {
        return {
            init() {
                this.$nextTick(() => {
                    this.$refs.input.focus();
                    this.scrollToBottom();
                });
            },
            scrollToBottom() {
                this.$nextTick(() => {
                    const el = document.getElementById('terminal-output');
                    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'end' });
                });
            }
        }
    }

    // Click anywhere on terminal → focus input
    document.addEventListener('click', () => {
        const input = document.querySelector('[x-ref="input"]');
        if (input) input.focus();
    });
</script>

