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
        'name'                  => 'Kickstarter',
        'description'           => 'Вставляет проект с Kickstarter.',
    ],
    'properties' => [
        'url' => [
            'title'             => 'URL проекта',
            'description'       => 'Полный URL. Например: https://www.kickstarter.com/projects/id/title',
            'validationMessage' => 'Неправильный URL.',
        ],
        'type' => [
            'title'             => 'Тип отображения',
            'description'       => 'Выберите как отображать этот виджет.',
        ],
        'width' => [
            'description' => 'В пикселях. Рекомендуемое значение для видео: 360. Для карточки: 220',
        ],
        'height' => [
            'description' => 'В пикселях. Рекомендуемое значение для видео: 480. Для карточки: 420',
        ],
    ],
];
