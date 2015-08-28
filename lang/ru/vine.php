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
        'name'                  => 'Vine',
        'description'           => 'Вставляет клип Vine.',
    ],
    'properties' => [
        'id' => [
            'title'             => 'Vine',
            'description'       => 'Vine ID или полный URL. Например: https://vine.co/v/Ml16lZVTTxe',
            'validationMessage' => 'Неправильный Vine ID.',
        ],
        'audio' => [
            'title'             => 'Автовоспроизведение Аудио',
            'description'       => 'Автоматически воспроизводит аудио.',
        ],
        'type' => [
            'title'             => 'Тип',
            'description'       => 'Выберите, как стоит отображать виджет.',
        ],
        'size' => [
            'title'             => 'Размер',
            'description'       => 'Выберите размер виджета.',
        ],
    ],
];
