<?php

namespace App\Terminal\Commands;

class SkillsCommand extends AbstractCommand
{
    public function getName(): string { return 'skills'; }
    public function getDescription(): string { return 'List my technical skills'; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.skills');
    }
}
