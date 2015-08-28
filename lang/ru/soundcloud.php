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
    'details' => [
        'name'                  => 'SoundCloud',
        'description'           => 'Вставляет трек или плейлист с SoundCloud.',
    ],
    'properties' => [
        'url' => [
            'title'             => 'Sound URL',
            'description'       => 'Полный URL. Работает с синглами, профилями, альбомами и плейлистами.',
            'validationMessage' => 'URL неправильный.',
        ],
        'autoPlay' => [
            'title'             => 'Автовоспроизведение',
            'description'       => 'Воспроизводить автоматически, когда загружается страница.',
        ],
    ],
];
