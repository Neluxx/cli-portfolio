<?php

namespace App\Terminal\Commands;

class HelloWorldCommand extends AbstractCommand
{
    public function getName(): string { return 'hello'; }
    public function getDescription(): string { return 'Greet the world!'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.hello-world');
    }
}
