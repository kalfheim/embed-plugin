<?php

/*
|--------------------------------------------------------------------------
| Language File For Krisawzm.Embed Plugin
|--------------------------------------------------------------------------
|
| If you translate this to a different language,
| please share it on Github!
|
| https://github.com/krisawzm/embed-plugin
|
*/

return [
    'plugin' => [
        'name'         => 'Embed',
        'description'  => 'Позволяет как никогда просто вставлять элементы с других ресурсов.',
    ],
    'settings_menu' => [
        'label'        => 'Embed',
        'description'  => 'Управление плагином Embed.',
    ],
    'settings' => [
        'mode' => [
            'label'   => 'Режим',
            'all'     => 'Использовать все доступные компоненты.',
            'allBut'  => 'Использовать все, кроме следующих компонентов:',
            'only'    => 'Использовать только следующие компоненты:'
        ],
        'list' => [
            'comment' => 'Разделенный запятыми список, содержащий имена компонентов Embed. Например: "YouTube, Vimeo"',
        ],
        'googlemaps_api_key' => [
            'label'   => 'Google Maps API Ключ',
            'comment' => 'Не обязательно. Если вы используете Google Maps вставку, и у вас есть API ключ. Смотрите https://developers.google.com/maps/documentation/embed/guide#api_key'
        ],
        'soundcloud_client_id' => [
            'label'   => 'SoundCloud Client ID',
            'comment' => 'Не обязательно. Если вы используете SoundCloud Player, и у вас есть специальный Client ID. Смотрите https://developers.soundcloud.com/'
        ],
    ],
];
