<?php

namespace App\Livewire;

use Livewire\Component;
use App\Terminal\CommandRegistry;

class Terminal extends Component
{
    public string $input = '';
    public array $history = [];
    public int $historyIndex = -1;
    public array $commandHistory = [];

    protected CommandRegistry $registry;

    public function boot(): void
    {
        $this->registry = app(CommandRegistry::class);
    }

    public function mount(): void
    {
        $this->history[] = [
            'type'    => 'output',
            'content' => view('terminal.welcome')->render(),
        ];
    }

    public function submit(): void
    {
        $input = trim($this->input);

        if (empty($input)) {
            return;
        }

        $this->commandHistory[] = $input;
        $this->history[] = ['type' => 'input', 'content' => $input];

        $output = $this->processCommand($input);

        if ($output === '__CLEAR__') {
            $this->history = [];
        } else {
            $this->history[] = ['type' => 'output', 'content' => $output];
        }

        $this->input = '';
        $this->historyIndex = -1;

        $this->dispatch('scroll-to-bottom');
        $this->dispatch('focus-input');
    }

    protected function processCommand(string $input): string
    {
        $parts   = explode(' ', $input, 2);
        $command = strtolower($parts[0]);
        $args    = $parts[1] ?? '';

        return $this->registry->run($command, $args);
    }

    public function navigateHistory(string $direction): void
    {
        if (empty($this->commandHistory)) {
            return;
        }

        if ($direction === 'up') {
            $this->historyIndex = min($this->historyIndex + 1, count($this->commandHistory) - 1);
        } else {
            $this->historyIndex = max($this->historyIndex - 1, -1);
        }

        $this->input = $this->historyIndex >= 0
            ? $this->commandHistory[count($this->commandHistory) - 1 - $this->historyIndex]
            : '';
    }

    public function clear(): void
    {
        $this->history = [];
        $this->input   = '';
    }

    public function render()
    {
        return view('livewire.terminal')->layout('layouts.terminal');
    }
}
