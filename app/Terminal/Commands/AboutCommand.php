<?php

namespace App\Terminal\Commands;

class AboutCommand extends AbstractCommand
{
    public function getName(): string { return 'about'; }
    public function getDescription(): string { return 'Get to know me'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.about');
    }
}
