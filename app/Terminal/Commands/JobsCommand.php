<?php

namespace App\Terminal\Commands;

class JobsCommand extends AbstractCommand
{
    public function getName(): string { return 'jobs'; }
    public function getDescription(): string { return 'View my work experience'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.jobs');
    }
}
