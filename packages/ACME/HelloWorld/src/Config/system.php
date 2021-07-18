<?php

return [
    [
        'key' => 'helloworld_menu',
        'name' => 'Hello Menu Aprendizagem',
        'sort' => 10,
    ], [
        'key' => 'helloworld_menu.settings',
        'name' => 'General Settings',
        'sort' => 1,
    ], [
        'key' => 'helloworld_menu.settings.general_config',
        'name' => 'Config General',
        'sort' => 1,

        'fields' => [
            [
                'name' => 'meuprimeirocampo',
                'title' => 'Meu Primeiro Campo',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true
            ],
        ],
    ],
];