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
        'name'                  => 'Imgur',
        'description'           => 'Вставляет картинки или альбомы с Imgur.',
    ],
    'properties' => [
        'id' => [
            'title'             => 'Пост',
            'description'       => 'ID поста или URL. Так же работает с альбомами.',
            'validationMessage' => 'Неправильная ссылка.',
        ],
       'hideDetails' => [
            'title'             => 'Скрыть подробности Поста',
            'description'       => 'Скрыть метаданные: имя пользователя, просмотры и количество комментариев.',
        ],
    ],
];
