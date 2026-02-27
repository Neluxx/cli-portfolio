<?php

namespace App\Terminal\Commands;

class ProjectsCommand extends AbstractCommand
{
    public function getName(): string { return 'projects'; }
    public function getDescription(): string { return "Things I've built"; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.projects');
    }
}
