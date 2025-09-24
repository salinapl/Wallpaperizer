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
    ]
        // plugin magic happens here
]);