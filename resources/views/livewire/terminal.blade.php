<?php ?>
<div
    class="font-ubuntu-mono p-4 text-sm bg-ubuntu-bg text-ubuntu-white h-full overflow-y-auto"
    id="terminal-output"
    x-data="terminalHandler()"
    x-init="init()"
    @scroll-to-bottom.window="scrollToBottom()"
    @focus-input.window="$nextTick(() => $refs.input.focus())"
>
    {{-- Output history --}}
    <div class="space-y-1">
        @foreach ($history as $entry)
            @if ($entry['type'] === 'input')
                <div class="flex items-start gap-1 flex-wrap">
                    <span class="prompt shrink-0">
                        <span class="text-ubuntu-green font-bold">portfolio@ubuntu</span><span class="text-ubuntu-white font-bold">:</span><span class="text-ubuntu-blue font-bold">~</span><span class="text-ubuntu-white font-bold">$</span>
                    </span>
                    <span class="text-ubuntu-white break-all ml-1">{{ $entry['content'] }}</span>
                </div>
            @else
                <div class="terminal-output-block pl-0 py-1 leading-relaxed text-ubuntu-white">
                    {!! $entry['content'] !!}
                </div>
            @endif
        @endforeach
    </div>

    {{-- Live input line --}}
    <div class="flex items-center gap-1 mt-2 flex-wrap">
        <span class="prompt shrink-0">
            <span class="text-ubuntu-green font-bold">portfolio@ubuntu</span><span class="text-ubuntu-white font-bold">:</span><span class="text-ubuntu-blue font-bold">~</span><span class="text-ubuntu-white font-bold">$</span>
        </span>
        <input
            x-ref="input"
            wire:model="input"
            type="text"
            class="flex-1 bg-transparent outline-none break-all ml-1 text-ubuntu-white caret-ubuntu-white placeholder:text-ubuntu-purple"
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
                    if (el) el.scrollTop = el.scrollHeight;
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
