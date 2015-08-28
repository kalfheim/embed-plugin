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
        'name'                  => 'Twitter',
        'description'           => 'Вставляет твит с Twitter.',
    ],
    'properties' => [
        'href' => [
            'title'             => 'Твит',
            'description'       => 'Нажмите на Твит, затем скопируйте URL с адресной строки..',
            'validationMessage' => 'Неправильная ссылка на Твит.',
        ],
        'hideMedia' => [
            'title'             => 'Спрятать изображение и видео',
            'description'       => 'Отключает отображение изображений и видео.',
        ],
    ],
];
