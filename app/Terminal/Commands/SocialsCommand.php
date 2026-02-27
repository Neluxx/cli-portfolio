<?php

namespace App\Terminal\Commands;

class SocialsCommand extends AbstractCommand
{
    public function getName(): string { return 'socials'; }
    public function getDescription(): string { return "Let's connect"; }

    public function execute(string $args = ''): string
    {
        return $this->view('terminal.responses.socials');
    }
}
