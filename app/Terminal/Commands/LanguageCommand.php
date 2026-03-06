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
        $available = ['en', 'de'];
        $lang = strtolower(trim($args));

        if (!in_array($lang, $available)) {
            return "<span class='text-red-400'>" . __('terminal.lang_not_available', ['locale' => $lang ?: '?', 'available' => implode(', ', $available)]) . "</span>";
        }

        session(['locale' => $lang]);
        app()->setLocale($lang);

        return "<span class='text-ubuntu-green'>" . __('terminal.lang_toggled', ['locale' => strtoupper($lang)]) . "</span>";
    }
}
