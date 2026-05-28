
<?php

return [
    // General
    'not_found'        => ':command: command not found — try <span class="text-ubuntu-yellow">help</span> to list available commands',
    'tip'              => 'Tip: use ↑ / ↓ to navigate command history · Ctrl+L to clear',

    // Welcome
    'welcome_subtitle' => 'Ubuntu 24.04 LTS — Laravel 12 / Livewire 4',
    'welcome_message'  => 'Welcome to my interactive portfolio',
    'welcome_hint'     => 'Type <span class="text-ubuntu-yellow">help</span> to see all available commands',

    // Help
    'available_commands' => 'Available commands:',

    // Lang command
    'lang_toggled'       => 'Language switched to: <span class="text-ubuntu-yellow">:locale</span>',
    'lang_not_available' => 'Language "<span class="text-ubuntu-yellow">:locale</span>" is not available. Available languages: :available',

    // Theme command
    'theme_intro'        => 'Available themes — type <span class="text-ubuntu-yellow">theme &lt;name&gt;</span> to switch:',
    'theme_hint'         => 'Your selection is remembered in this browser.',
    'theme_applied'      => 'Theme switched to <span class="text-ubuntu-yellow">:theme</span>',
    'theme_unknown'      => 'Unknown theme "<span class="text-ubuntu-yellow">:theme</span>" — available: :available',
    'theme_desc_phosphor' => 'Classic green CRT phosphor (default)',
    'theme_desc_amber'    => 'Vintage amber monochrome monitor',
    'theme_desc_matrix'   => 'Hyper-saturated digital rain green',
    'theme_desc_dracula'  => 'Purple haze, easy on the eyes',
    'theme_desc_ubuntu'   => 'The original purple Ubuntu look',

    // CRT command
    'crt_enabled'  => 'CRT effect <span class="text-ubuntu-green">enabled</span> — scanlines, glow and flicker active',
    'crt_disabled' => 'CRT effect <span class="text-ubuntu-yellow">disabled</span> — switched to clean reading mode',
    'crt_usage'    => 'Usage: <span class="text-ubuntu-yellow">crt</span> [on|off|toggle]',

    // Command descriptions
    'cmd_help'       => 'Not sure where to start?',
    'cmd_about'      => 'Get to know me',
    'cmd_clear'      => 'Clear the terminal',
    'cmd_skills'     => 'My technical skills',
    'cmd_education'  => 'My educational background',
    'cmd_socials'    => 'Find me online',
    'cmd_projects'   => 'Projects I have worked on',
    'cmd_experience' => 'My work experience',
    'cmd_welcome'    => 'Back to the start',
    'cmd_lang'       => 'Switch language (e.g. lang en)',
    'cmd_theme'      => 'Switch color theme (e.g. theme matrix)',
    'cmd_crt'        => 'Toggle the CRT effect (e.g. crt off)',

    // About
    'about_title'  => 'Let me introduce myself!',
    'about_intro'  => 'Hey, my name is Fabian. I am a full-stack software developer from Germany.',
    'about_body'   => 'I began my career with an apprenticeship in media design, which introduced me to web development and motivated me to pursue a degree in computer science. Since graduating, I have focused on software development, driven by curiosity and a commitment to continuously expand my knowledge of emerging technologies.',
    'about_footer' => 'I love clean code, open-source, and a good cup of coffee ☕',

    // Education
    'education_title'              => 'How I got here',
    'education_degree'             => 'B.Sc. Media Informatics',
    'education_university'         => 'Furtwangen University · Sep 2017 – Mar 2021',
    'education_thesis_label'       => "Bachelor's Thesis:",
    'education_thesis_item'        => 'Development of a web-based preprocessing application for machine learning workflows',
    'education_engagement_label'   => 'Academic Engagement:',
    'education_engagement_items'   => [
        'Semester Representative',
        'Student Council Assistant',
        'Student Representative of the Media Informatics Study Commission',
        'Participant HFU Excellence Coaching Program',
        'Tutor for Mathematics and Physics',
    ],

    // Experience
    'experience_title' => 'Where I\'ve worked so far',
    'experience_jobs'  => [
        [
            'title'       => 'Software developer',
            'company'     => 'ORCA Services AG · Aug 2021 – Present',
            'description' => 'Designing and building web applications for clients across various industries',
        ],
        [
            'title'       => 'Junior web developer',
            'company'     => 'Wackenhut GmbH & Co. KG · May 2021 – Jul 2021',
            'description' => 'Built full-stack web applications with PHP and React',
        ],
        [
            'title'       => 'Research assistant',
            'company'     => 'Fraunhofer IOSB · Aug 2020 – Apr 2021',
            'description' => 'Helped build a web-based annotation tool with Python and Django',
        ],
        [
            'title'       => 'Internship in web development',
            'company'     => 'Agency teufels · Sep 2018 – Mar 2019',
            'description' => 'Built dynamic websites with the TYPO3 CMS',
        ],
    ],

    // Skills
    'skills_title'      => 'Here\'s what I work with',
    'skills_languages'  => 'Languages',
    'skills_frameworks' => 'Frameworks',
    'skills_tools'      => 'Tools',

    // Socials
    'socials_title' => 'Get in touch with me!',

    // Projects
    'projects_title' => 'Some things I\'ve built',
    'projects_list'  => [
        [
            'name'        => 'CLI Portfolio',
            'description' => 'My personal portfolio, built as an interactive browser-based terminal with Laravel and Livewire',
            'url'         => 'github.com/neluxx/cli-portfolio',
            'href'        => 'https://github.com/neluxx/cli-portfolio',
        ],
        [
            'name'        => 'Enviro Hub',
            'description' => 'Symfony-based API for storing, processing, and alerting based on environmental sensor data from distributed nodes',
            'url'         => 'github.com/neluxx/enviro-hub-symfony',
            'href'        => 'https://github.com/neluxx/enviro-hub-symfony',
        ],
        [
            'name'        => 'Enviro Node',
            'description' => 'A Raspberry Pi sensor node built with Python and Django',
            'url'         => 'github.com/neluxx/enviro-node-django',
            'href'        => 'https://github.com/neluxx/enviro-node-django',
        ],
        [
            'name'        => 'Minecraft Datapacks',
            'description' => 'A collection of Minecraft datapacks focused on custom world generation',
            'url'         => 'github.com/Neluxx?tab=repositories&q=minecraft',
            'href'        => 'https://github.com/Neluxx?tab=repositories&q=minecraft',
        ],
    ],
];
