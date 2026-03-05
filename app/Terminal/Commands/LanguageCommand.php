<?php

namespace App\Terminal\Commands;

class LanguageCommand extends AbstractCommand
{
    public function getName(): string
    {
        return 'lang';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_lang');
    }

    public function execute(string $args = ''): string
    {
        $current = session('locale', config('app.locale', 'en'));
        $next = $current === 'en' ? 'de' : 'en';

        session(['locale' => $next]);
        app()->setLocale($next);

        return "<span class='text-ubuntu-green'>" . __('terminal.lang_toggled', ['locale' => strtoupper($next)]) . "</span>";
    }
}
