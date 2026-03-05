<?php

namespace App\Terminal\Commands;

class EducationCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'education';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_education');
    }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.education');
    }
}
