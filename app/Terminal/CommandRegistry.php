<?php

namespace App\Terminal;

use App\Terminal\Commands\AboutCommand;
use App\Terminal\Commands\ClearCommand;
use App\Terminal\Commands\EducationCommand;
use App\Terminal\Commands\HelpCommand;
use App\Terminal\Commands\ExperienceCommand;
use App\Terminal\Commands\ProjectsCommand;
use App\Terminal\Commands\SkillsCommand;
use App\Terminal\Commands\SocialsCommand;
use App\Terminal\Commands\WelcomeCommand;
use Throwable;

class CommandRegistry
{
    protected array $commands = [];

    public function __construct()
    {
        $this->register([
            HelpCommand::class,
            AboutCommand::class,
            ClearCommand::class,
            SkillsCommand::class,
            EducationCommand::class,
            SocialsCommand::class,
            ProjectsCommand::class,
            ExperienceCommand::class,
            WelcomeCommand::class,
        ]);
    }

    public function register(array $commandClasses): void
    {
        foreach ($commandClasses as $class) {
            $command = new $class();
            $this->commands[$command->getName()] = $command;
        }
    }

    public function run(string $name, string $args = ''): string
    {
        try {
            if (!isset($this->commands[$name])) {
                return view('terminal.responses.not-found', ['command' => $name])->render();
            }

            if ($name === 'help') {
                return $this->commands['help']->executeWithCommands($this->commands);
            }

            return $this->commands[$name]->execute($args);
        } catch (Throwable $e) {
            return "<span class='text-[#ff5f56]'>Error: {$e->getMessage()}</span>";
        }
    }
}
