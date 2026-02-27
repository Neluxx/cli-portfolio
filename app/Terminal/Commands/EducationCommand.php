<?php

namespace App\Terminal\Commands;

class EducationCommand extends AbstractCommand
{
    public function getName(): string { return 'education'; }
    public function getDescription(): string { return 'Show my educational background'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.education');
    }
}
