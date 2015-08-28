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
        'name'                  => 'Instagram',
        'description'           => 'Вставляет Instagram пост.',
    ],
    'properties' => [
        'id' => [
            'title'             => 'Пост',
            'description'       => 'ID поста или полная ссылка.',
            'validationMessage' => 'Неправильный ID поста.',
        ],
       'caption' => [
            'title'             => 'Включить Подпись',
            'description'       => 'Снимите, чтобы скрыть заголовок.',
        ],
    ],
];
