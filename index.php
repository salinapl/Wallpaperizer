<?php

Kirby::plugin('salinapl/wallpaperizer', [
    'blueprints' => [
        'pages/wpz-wallpaper' => __DIR__ . '/blueprints/wpz-wallpaper.yml',
    ],
    'controllers' => [
        //'room' => require __DIR__ . '/controllers/room.php'
    ],
    'templates' => [
        'wpz-wallpaper' => __DIR__ . '/templates/wpz-wallpaper.php',
    ],
    'snippets' => [
        'wpz-layout' => __DIR__ . '/snippets/wpz-layout.php',
    ],
    'options' => [
        'colors' => [
            '#00bef2' => 'Cyan',
            '#004d71' => 'Dark Blue',
            '#ffc46c' => 'Tan',
            '#2e2926' => 'Black',
            'rgba(101, 102, 106, 0.8)' => 'Gray',
            '#fafafa' => 'Light Gray',
            '#dad5d2' => 'Inverted Light Gray',
            'rgba(0, 0, 0, 0.5)' => 'Shadow'
        ]
    ]
        // plugin magic happens here
]);