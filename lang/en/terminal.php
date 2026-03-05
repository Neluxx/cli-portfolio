
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
    'lang_toggled' => 'Language switched to: <span class="text-ubuntu-yellow">:locale</span>',

    // Command descriptions
    'cmd_help'       => 'Not sure where to start?',
    'cmd_about'      => 'Get to know me',
    'cmd_clear'      => 'Clear the terminal',
    'cmd_skills'     => 'My technical skills',
    'cmd_education'  => 'My educational background',
    'cmd_socials'    => 'Find me online',
    'cmd_projects'   => 'Projects I have worked on',
    'cmd_experience' => 'My work experience',
    'cmd_lang'       => 'Toggle language (en/de)',

    // About
    'about_title'  => 'About Me',
    'about_intro'  => 'Hey, my name is Fabian. I am a full-stack software developer from Germany.',
    'about_body'   => 'I began my career with an apprenticeship in media design, which introduced me to web development and motivated me to pursue a degree in computer science. Since graduating, I have focused on software development, driven by curiosity and a commitment to continuously expand my knowledge of emerging technologies.',
    'about_footer' => 'I love clean code, open-source, and a good cup of coffee ☕',

    // Education
    'education_title'              => 'Education',
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
    'experience_title' => 'Work Experience',
    'experience_jobs'  => [
        [
            'title'       => 'Software developer',
            'company'     => 'ORCA Services AG · Aug 2021 – Present',
            'description' => 'Developed and implemented innovative web applications across various industries',
        ],
        [
            'title'       => 'Junior web developer',
            'company'     => 'Wackenhut GmbH & Co. KG · May 2021 – Jul 2021',
            'description' => 'Developed full-stack web applications with PHP and React',
        ],
        [
            'title'       => 'Research assistant',
            'company'     => 'Fraunhofer IOSB · Aug 2020 – Apr 2021',
            'description' => 'Collaborated to develop a web-based annotation tool using Python and Django',
        ],
        [
            'title'       => 'Internship in web development',
            'company'     => 'Agency teufels · Sep 2018 – Mar 2019',
            'description' => 'Implemented dynamic web projects using TYPO3',
        ],
    ],

    // Skills
    'skills_title'      => 'Skills',
    'skills_languages'  => 'Languages',
    'skills_frameworks' => 'Frameworks',
    'skills_tools'      => 'Tools',

    // Socials
    'socials_title' => 'Socials',

    // Projects
    'projects_title' => 'Projects',
    'projects_list'  => [
        [
            'name'        => 'CLI Portfolio',
            'description' => 'A personal portfolio built as an interactive browser-based terminal, powered by Laravel and Livewire',
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
            'description' => 'A sensor node developed with Python Django for the Raspberry Pi',
            'url'         => 'github.com/neluxx/enviro-node-django',
            'href'        => 'https://github.com/neluxx/enviro-node-django',
        ],
    ],
];
