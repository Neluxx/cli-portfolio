
<?php

return [
    // General
    'not_found'        => ':command: Befehl nicht gefunden — Tippe <span class="text-ubuntu-yellow">help</span> um alle Befehle zu sehen',
    'tip'              => 'Tipp: ↑ / ↓ zum Navigieren im Verlauf · Strg + L zum Leeren',

    // Welcome
    'welcome_subtitle' => 'Ubuntu 24.04 LTS — Laravel 12 / Livewire 4',
    'welcome_message'  => 'Willkommen in meinem interaktiven Portfolio',
    'welcome_hint'     => 'Tippe <span class="text-ubuntu-yellow">help</span> um alle Befehle zu sehen',

    // Help
    'available_commands' => 'Verfügbare Befehle:',

    // Lang command
    'lang_toggled'       => 'Sprache gewechselt zu: <span class="text-ubuntu-yellow">:locale</span>',
    'lang_not_available' => 'Sprache "<span class="text-ubuntu-yellow">:locale</span>" ist nicht verfügbar. Verfügbare Sprachen: :available',

    // Theme command
    'theme_intro'        => 'Verfügbare Themes — tippe <span class="text-ubuntu-yellow">theme &lt;name&gt;</span> zum Wechseln:',
    'theme_hint'         => 'Deine Auswahl wird in diesem Browser gespeichert.',
    'theme_applied'      => 'Theme gewechselt zu <span class="text-ubuntu-yellow">:theme</span>',
    'theme_unknown'      => 'Unbekanntes Theme "<span class="text-ubuntu-yellow">:theme</span>" — verfügbar: :available',
    'theme_desc_phosphor' => 'Klassisches grünes CRT-Phosphor (Standard)',
    'theme_desc_amber'    => 'Vintage Amber-Monochrom-Monitor',
    'theme_desc_matrix'   => 'Hypergesättigtes Digital-Rain-Grün',
    'theme_desc_dracula'  => 'Lila Dunst, schonend für die Augen',
    'theme_desc_ubuntu'   => 'Der originale lila Ubuntu-Look',

    // CRT command
    'crt_enabled'  => 'CRT-Effekt <span class="text-ubuntu-green">aktiviert</span> — Scanlines, Glow und Flackern aktiv',
    'crt_disabled' => 'CRT-Effekt <span class="text-ubuntu-yellow">deaktiviert</span> — sauberer Lesemodus aktiviert',
    'crt_usage'    => 'Verwendung: <span class="text-ubuntu-yellow">crt</span> [on|off|toggle]',

    // Command descriptions
    'cmd_help'       => 'Nicht sicher, wo du anfangen sollst?',
    'cmd_about'      => 'Lern mich kennen',
    'cmd_clear'      => 'Verlauf leeren',
    'cmd_skills'     => 'Meine technischen Fähigkeiten',
    'cmd_education'  => 'Mein Bildungsweg',
    'cmd_socials'    => 'Lass uns vernetzen',
    'cmd_projects'   => 'Projekte, an denen ich gearbeitet habe',
    'cmd_experience' => 'Meine Berufserfahrung',
    'cmd_welcome'    => 'Zurück zum Anfang',
    'cmd_lang'       => 'Sprache wechseln (z. B. lang en)',
    'cmd_theme'      => 'Farbtheme wechseln (z. B. theme matrix)',
    'cmd_crt'        => 'CRT-Effekt umschalten (z. B. crt off)',

    // About
    'about_title'  => 'Darf ich mich vorstellen?',
    'about_intro'  => 'Hey, ich bin Fabian. Ich bin ein Full-Stack-Softwareentwickler aus Deutschland, dessen Leidenschaft darin besteht, Dinge im Web zu entwickeln, zu Open-Source-Projekten beizutragen und mit neuen Technologien zu experimentieren. Ursprünglich komme ich aus dem Bereich Mediendesign, was mein Interesse an der Entwicklung geweckt und mich schließlich zur Informatik geführt hat.',
    'about_body'   => 'Wenn ich nicht gerade an Software arbeite, erstelle ich meist Minecraft-Datapacks oder bastele an Nebenprojekten herum.',
    'about_footer' => 'Ich mag sauberen Code, Open-Source und eine gute Tasse Kaffee ☕',

    // Education
    'education_title'              => 'Wie ich hierher gekommen bin',
    'education_degree'             => 'B.Sc. Medieninformatik',
    'education_university'         => 'Hochschule Furtwangen · Sep 2017 – Mär 2021',
    'education_thesis_label'       => 'Bachelorarbeit:',
    'education_thesis_item'        => 'Entwicklung einer webbasierten Preprocessing Anwendung im Bereich des Machine Learnings',
    'education_engagement_label'   => 'Akademisches Engagement:',
    'education_engagement_items'   => [
        'Semestersprecher des Studienganges Medieninformatik',
        'Fachschaftsaushilfe der Fakultät Digitale Medien',
        'Vertreter der Studienkommission Medieninformatik',
        'Teilnehmer des HFU Excellence Coaching Programms',
        'Tutor in Mathe und Physik an der Hochschule Furtwangen',
    ],

    // Experience
    'experience_title' => 'Wo ich bisher gearbeitet habe',
    'experience_jobs'  => [
        [
            'title'       => 'Softwareentwickler',
            'company'     => 'ORCA Services AG · Aug 2021 – Heute',
            'description' => 'Konzeption und Entwicklung von Webanwendungen für Kunden aus verschiedenen Branchen',
        ],
        [
            'title'       => 'Junior Webentwickler',
            'company'     => 'Wackenhut GmbH & Co. KG · Mai 2021 – Jul 2021',
            'description' => 'Entwicklung von Full-Stack-Webanwendungen mit PHP und React',
        ],
        [
            'title'       => 'Wissenschaftlicher Mitarbeiter',
            'company'     => 'Fraunhofer IOSB · Aug 2020 – Apr 2021',
            'description' => 'Mitentwicklung eines webbasierten Annotationswerkzeugs mit Python und Django',
        ],
        [
            'title'       => 'Praktikum Webentwicklung',
            'company'     => 'Agentur teufels · Sep 2018 – Mär 2019',
            'description' => 'Umsetzung dynamischer Websites mit dem CMS TYPO3',
        ],
    ],

    // Skills
    'skills_title'      => 'Damit arbeite ich',
    'skills_languages'  => 'Sprachen',
    'skills_frameworks' => 'Frameworks',
    'skills_tools'      => 'Werkzeuge',

    // Socials
    'socials_title' => 'Melde dich bei mir!',

    // Projects
    'projects_title' => 'Ein paar meiner Projekte',
    'projects_list'  => [
        [
            'name'        => 'CLI Portfolio',
            'description' => 'Mein persönliches Portfolio als interaktives, browserbasiertes Terminal mit Laravel und Livewire',
            'url'         => 'github.com/neluxx/cli-portfolio',
            'href'        => 'https://github.com/neluxx/cli-portfolio',
        ],
        [
            'name'        => 'Enviro Hub',
            'description' => 'Laravel-basierte API, die Umweltsensordaten von verteilten Nodes speichert, verarbeitet und bei kritischen Werten Alarme auslöst',
            'url'         => 'github.com/neluxx/enviro-hub',
            'href'        => 'https://github.com/neluxx/enviro-hub',
        ],
        [
            'name'        => 'Enviro Node',
            'description' => 'Ein mit Python entwickelter Sensor-Node für den Raspberry Pi',
            'url'         => 'github.com/neluxx/enviro-node',
            'href'        => 'https://github.com/neluxx/enviro-node',
        ],
        [
            'name'        => 'Minecraft Datapacks',
            'description' => 'Eine Sammlung von Minecraft-Datapacks mit Schwerpunkt auf eigener Weltgenerierung',
            'url'         => 'github.com/Neluxx?tab=repositories&q=minecraft',
            'href'        => 'https://github.com/Neluxx?tab=repositories&q=minecraft',
        ],
    ],
];
