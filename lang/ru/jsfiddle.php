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
        'name'                  => 'jsFiddle',
        'description'           => 'Вставляет jsFiddle.',
    ],
    'properties' => [
        'id' => [
            'title'             => 'jsFiddle',
            'description'       => 'ID или полный URL фиддла, который вы хотите отобразить. Например: https://jsfiddle.net/id/',
            'validationMessage' => 'Неправильный фиддл ID.',
        ],
        'tabs' => [
            'title'             => 'Вкладки',
            'description'       => 'Удалить или изменить вкладки. По умолчанию: "js,resources,html,css,result"',
            'validationMessage' => 'Неправильные вкладки.',
        ],
       'skin' => [
            'title'             => 'Стиль',
            'description'       => 'Выберите стиль, который необходимо использовать.',
            'light'             => 'Light',
            'presentation'      => 'Presentation',
        ],
    ],
];
