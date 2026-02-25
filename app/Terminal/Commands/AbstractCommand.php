<?php

namespace App\Terminal\Commands;

use Throwable;

abstract class AbstractCommand
{
    abstract public function getName(): string;
    abstract public function getDescription(): string;
    abstract public function execute(string $args = ''): string;

    protected function view(string $template, array $data = []): string
    {
        try {
            return view($template, $data)->render();
        } catch (Throwable $e) {
            return "<span class='text-[#ff5f56]'>Error rendering command: {$e->getMessage()}</span>";
        }
    }
}
