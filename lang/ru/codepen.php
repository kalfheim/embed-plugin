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
        'name'                  => 'CodePen',
        'description'           => 'Вставляет Pen с CodePen.',
    ],
    'properties' => [
        'id' => [
            'title'             => 'Pen',
            'description'       => 'ID или полный URL вашего Pen, который вы хотите отобразить. Например: http://codepen.io/user/pen/id',
            'validationMessage' => 'Неправильный Pen ID.',
        ],
        'defaultTab' => [
            'title'             => 'Стандартная вкладка',
            'description'       => 'Выберите, какую вкладку отображать сначала.',
        ],
    ],
];
