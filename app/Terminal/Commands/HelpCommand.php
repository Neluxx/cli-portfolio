<?php

namespace App\Terminal\Commands;

class HelpCommand extends AbstractCommand
{
    public function getName(): string { return 'help'; }
    public function getDescription(): string { return 'List all available commands'; }

    public function execute(string $args = ''): string
    {
        // Commands will be passed via $args workaround — handled in Registry
        return ''; // placeholder, see Registry fix below
    }

    public function executeWithCommands(array $commands): string
    {
        return $this->view('terminal.responses.help', compact('commands'));
    }
}
