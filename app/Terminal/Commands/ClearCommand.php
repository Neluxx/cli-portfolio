<?php

namespace App\Terminal\Commands;

class ClearCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'clear';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_clear');
    }

    public function execute(string $args = ''): string
    {
        return '__CLEAR__';
    }
}
