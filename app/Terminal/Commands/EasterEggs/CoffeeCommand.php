<?php

namespace App\Terminal\Commands\EasterEggs;

class CoffeeCommand extends EasterEggCommand
{
    public function getName(): string
    {
        return 'coffee';
    }

    public function getDescription(): string
    {
        return 'Brew a cup of coffee';
    }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.easter-eggs.coffee');
    }
}
