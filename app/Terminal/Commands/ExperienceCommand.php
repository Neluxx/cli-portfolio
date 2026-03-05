<?php

namespace App\Terminal\Commands;

class ExperienceCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'experience';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_experience');
    }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.experience');
    }
}
