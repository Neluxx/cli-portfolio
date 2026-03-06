
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

    // About
    'about_title'  => 'Über mich',
    'about_intro'  => 'Hey, ich bin Fabian – ein Full-Stack Softwareentwickler aus Deutschland.',
    'about_body'   => 'Meine Karriere begann mit einer Ausbildung zum Mediengestalter, die mich zur Webentwicklung brachte und mich dazu motivierte, Informatik zu studieren. Seitdem konzentriere ich mich auf Softwareentwicklung – angetrieben von Neugier und dem Wunsch, mein Wissen über neue Technologien stetig zu erweitern.',
    'about_footer' => 'Ich mag sauberen Code, Open-Source und eine gute Tasse Kaffee ☕',

    // Education
    'education_title'              => 'Bildung',
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
    'experience_title' => 'Berufserfahrung',
    'experience_jobs'  => [
        [
            'title'       => 'Softwareentwickler',
            'company'     => 'ORCA Services AG · Aug 2021 – Heute',
            'description' => 'Entwicklung und Implementierung innovativer Webanwendungen in verschiedenen Branchen',
        ],
        [
            'title'       => 'Junior Webentwickler',
            'company'     => 'Wackenhut GmbH & Co. KG · Mai 2021 – Jul 2021',
            'description' => 'Entwicklung von Full-Stack Webanwendungen mit PHP und React',
        ],
        [
            'title'       => 'Wissenschaftlicher Mitarbeiter',
            'company'     => 'Fraunhofer IOSB · Aug 2020 – Apr 2021',
            'description' => 'Mitentwicklung eines webbasierten Annotationswerkzeugs mit Python und Django',
        ],
        [
            'title'       => 'Praktikum Webentwicklung',
            'company'     => 'Agentur teufels · Sep 2018 – Mär 2019',
            'description' => 'Umsetzung dynamischer Webprojekte mit TYPO3',
        ],
    ],

    // Skills
    'skills_title'      => 'Fähigkeiten',
    'skills_languages'  => 'Sprachen',
    'skills_frameworks' => 'Frameworks',
    'skills_tools'      => 'Werkzeuge',

    // Socials
    'socials_title' => 'Soziale Medien',

    // Projects
    'projects_title' => 'Projekte',
    'projects_list'  => [
        [
            'name'        => 'CLI Portfolio',
            'description' => 'Ein persönliches Portfolio als interaktives browserbasiertes Terminal, betrieben mit Laravel und Livewire',
            'url'         => 'github.com/neluxx/cli-portfolio',
            'href'        => 'https://github.com/neluxx/cli-portfolio',
        ],
        [
            'name'        => 'Enviro Hub',
            'description' => 'Symfony-basierte API zum Speichern, Verarbeiten und Alarmieren auf Basis von Umgebungssensordaten verteilter Knoten',
            'url'         => 'github.com/neluxx/enviro-hub-symfony',
            'href'        => 'https://github.com/neluxx/enviro-hub-symfony',
        ],
        [
            'name'        => 'Enviro Node',
            'description' => 'Ein Sensorknoten für den Raspberry Pi, entwickelt mit Python Django',
            'url'         => 'github.com/neluxx/enviro-node-django',
            'href'        => 'https://github.com/neluxx/enviro-node-django',
        ],
    ],
];
