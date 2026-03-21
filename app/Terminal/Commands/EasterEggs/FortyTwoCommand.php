<?php

namespace App\Terminal\Commands\EasterEggs;

class FortyTwoCommand extends EasterEggCommand
{
    public function getName(): string
    {
        return '42';
    }

    public function getDescription(): string
    {
        return 'The answer';
    }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.easter-eggs.forty-two');
    }
}
