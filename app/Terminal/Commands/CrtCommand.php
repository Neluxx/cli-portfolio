<?php

namespace App\Terminal\Commands;

class CrtCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'crt';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_crt');
    }

    public function execute(string $args = ''): string
    {
        $arg     = strtolower(trim($args));
        $current = session('crt', 'on');

        $next = match ($arg) {
            'on'             => 'on',
            'off'            => 'off',
            '', 'toggle'     => $current === 'on' ? 'off' : 'on',
            default          => null,
        };

        if ($next === null) {
            return "<span class='text-ubuntu-red'>" . __('terminal.crt_usage') . "</span>";
        }

        session(['crt' => $next]);

        $msg = $next === 'on'
            ? __('terminal.crt_enabled')
            : __('terminal.crt_disabled');

        $color = $next === 'on' ? 'text-ubuntu-green' : 'text-ubuntu-yellow';

        return "<div><span class='{$color}'>▶</span> <span class='text-ubuntu-white'>{$msg}</span></div>";
    }
}
