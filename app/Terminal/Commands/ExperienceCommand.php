<?php

namespace App\Terminal\Commands;

class ExperienceCommand extends AbstractCommand
{
    public function getName(): string { return 'experience'; }
    public function getDescription(): string { return "Where I've worked"; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.experience');
    }
}
