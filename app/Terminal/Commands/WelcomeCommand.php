<?php

namespace App\Terminal\Commands;

class WelcomeCommand extends AbstractCommand
{
    public function getName(): string { return 'welcome'; }
    public function getDescription(): string { return 'Back to the beginning'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.welcome');
    }
}
