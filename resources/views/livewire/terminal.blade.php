<?php ?>
<div class="relative h-full w-full">

    {{-- Boot sequence overlay (removed by JS once done; skipped on subsequent navigations within session) --}}
    <div
        id="boot-sequence"
        class="absolute inset-0 z-10 font-ubuntu-mono text-sm p-4 overflow-y-auto"
        style="color: var(--fg);"
    ></div>

    {{-- Terminal app --}}
    <div
        id="terminal-app"
        class="font-ubuntu-mono p-4 text-sm h-full overflow-y-auto terminal-text"
        x-data="terminalHandler()"
        x-init="init()"
        @scroll-to-bottom.window="scrollToBottom()"
        @focus-input.window="$nextTick(() => $refs.input.focus())"
    >
        {{-- Output history --}}
        <div id="terminal-output" class="space-y-2">
            @foreach ($history as $entry)
                @if ($entry['type'] === 'input')
                    <div class="flex items-start gap-1 flex-wrap">
                        <span class="prompt shrink-0">
                            <span class="text-ubuntu-green font-bold">neluxx@portfolio</span><span class="font-bold">:</span><span class="text-ubuntu-blue font-bold">~</span><span class="font-bold">$</span>
                        </span>
                        <span class="break-all ml-1">{{ $entry['content'] }}</span>
                    </div>
                @else
                    <div class="terminal-output-block pl-0 py-1 leading-relaxed">
                        {!! $entry['content'] !!}
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Live input line --}}
        <div class="flex items-center gap-1 mt-2 flex-wrap">
            <span class="prompt shrink-0">
                <span class="text-ubuntu-green font-bold">neluxx@portfolio</span><span class="font-bold">:</span><span class="text-ubuntu-blue font-bold">~</span><span class="font-bold">$</span>
            </span>
            <input
                x-ref="input"
                wire:model="input"
                type="text"
                class="flex-1 bg-transparent outline-none break-all ml-1 placeholder:opacity-50"
                placeholder="type a command… (try 'help' or 'theme')"
                autofocus
                autocomplete="off"
                autocorrect="off"
                autocapitalize="off"
                spellcheck="false"
                @keydown.enter="$wire.submit()"
                @keydown.arrow-up.prevent="$wire.navigateHistory('up')"
                @keydown.arrow-down.prevent="$wire.navigateHistory('down')"
                @keydown.ctrl.l.prevent="$wire.clear()"
                @keydown.tab.prevent="$wire.autocomplete()"
            />
        </div>
    </div>
</div>

<script>
    function terminalHandler() {
        return {
            init() {
                this.$nextTick(() => {
                    this.scrollToBottom();
                });
            },
            scrollToBottom() {
                this.$nextTick(() => {
                    const el = document.getElementById('terminal-app');
                    if (el) el.scrollTop = el.scrollHeight;
                });
            }
        }
    }
</script>
