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
        'name'                  => 'Google Карты',
        'description'           => 'Вставляет карты Google Maps.',
    ],
    'properties' => [
        'q' => [
            'title'             => 'Место',
            'description'       => 'Место, которое вы хотите отобразить. Например: "Oslo, Norway"',
            'validationMessage' => 'Неправильное место.',
        ],
        'mapType' => [
            'title'             => 'Тип карты',
            'description'       => 'Выберите, какой стиль карты должен отображаться.',
            'roadmap'           => 'Roadmap',
            'satellite'         => 'Satellite',
        ],
    ],
];
