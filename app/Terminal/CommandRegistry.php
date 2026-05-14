<?php

namespace App\Terminal;

use App\Terminal\Commands\AboutCommand;
use App\Terminal\Commands\ClearCommand;
use App\Terminal\Commands\CrtCommand;
use App\Terminal\Commands\EasterEggs\CoffeeCommand;
use App\Terminal\Commands\EasterEggs\EasterEggCommand;
use App\Terminal\Commands\EasterEggs\FortyTwoCommand;
use App\Terminal\Commands\EducationCommand;
use App\Terminal\Commands\HelpCommand;
use App\Terminal\Commands\ExperienceCommand;
use App\Terminal\Commands\LanguageCommand;
use App\Terminal\Commands\ProjectsCommand;
use App\Terminal\Commands\SkillsCommand;
use App\Terminal\Commands\SocialsCommand;
use App\Terminal\Commands\ThemeCommand;
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
            LanguageCommand::class,
            ThemeCommand::class,
            CrtCommand::class,
            // Easter eggs
            CoffeeCommand::class,
            FortyTwoCommand::class,
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
                $visibleCommands = array_filter(
                    $this->commands,
                    static fn($command) => !($command instanceof EasterEggCommand)
                );

                return $this->commands['help']->executeWithCommands($visibleCommands);
            }

            return $this->commands[$name]->execute($args);
        } catch (Throwable $e) {
            return "<span class='text-ubuntu-red'>Error: {$e->getMessage()}</span>";
        }
    }

    public function getCommandNames(): array
    {
        return array_keys($this->commands);
    }
}
