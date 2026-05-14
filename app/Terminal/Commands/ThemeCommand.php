<?php

namespace App\Terminal\Commands;

class ThemeCommand extends AbstractCommand
{
    private const THEMES = ['phosphor', 'amber', 'matrix', 'dracula', 'ubuntu'];

    public function getName(): string
    {
        return 'theme';
    }

    public function getDescription(): string
    {
        return __('terminal.cmd_theme');
    }

    public function execute(string $args = ''): string
    {
        $theme = strtolower(trim($args));

        if ($theme === '' || $theme === 'list') {
            return $this->listThemes();
        }

        if (!in_array($theme, self::THEMES, true)) {
            return "<span class='text-ubuntu-red'>" . __('terminal.theme_unknown', [
                'theme'     => e($theme),
                'available' => implode(', ', self::THEMES),
            ]) . "</span>";
        }

        session(['theme' => $theme]);

        $applied = __('terminal.theme_applied', ['theme' => $theme]);

        return <<<HTML
            <div>
                <span class="text-ubuntu-green">▶</span>
                <span class="text-ubuntu-white">{$applied}</span>
            </div>
        HTML;
    }

    private function listThemes(): string
    {
        $rows = '';
        $current = session('theme', 'phosphor');
        $intro = __('terminal.theme_intro');
        $hint  = __('terminal.theme_hint');

        foreach (self::THEMES as $name) {
            $marker = $name === $current ? '●' : '○';
            $cls    = $name === $current ? 'text-ubuntu-green font-bold' : 'text-ubuntu-cyan';
            $desc   = __("terminal.theme_desc_{$name}");
            $rows  .= <<<HTML
                <div class="grid grid-cols-[24px_120px_1fr] items-center">
                    <span class="{$cls}">{$marker}</span>
                    <span class="{$cls}">{$name}</span>
                    <span class="text-ubuntu-white opacity-80">{$desc}</span>
                </div>
            HTML;
        }

        return <<<HTML
            <div class="space-y-2">
                <p class="text-ubuntu-yellow font-bold">{$intro}</p>
                <div class="space-y-1">{$rows}</div>
                <p class="text-ubuntu-purple text-xs">{$hint}</p>
            </div>
        HTML;
    }
}
