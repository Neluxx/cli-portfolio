<?php

namespace App\Terminal\Commands;

class HelpCommand extends AbstractCommand
{
    public function getName(): string { return 'help'; }
    public function getDescription(): string { return 'Not sure where to start?'; }

    public function execute(string $args = ''): string
    {
        return '';
    }

    public function executeWithCommands(array $commands): string
    {
        return $this->view('terminal.responses.help', compact('commands'));
    }
}
