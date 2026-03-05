<?php

namespace App\Terminal\Commands;

class AboutCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'about';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_about');
    }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.about');
    }
}
