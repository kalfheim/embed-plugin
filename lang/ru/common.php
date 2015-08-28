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
    'properties' => [
        'width' => [
            'title'             => 'Ширина Виджета',
            'description'       => 'Ширина Виджета в пикселях.',
            'validationMessage' => 'Ширина Виджета должна быть числом.',
        ],
        'height' => [
            'title'             => 'Высота Виджета',
            'description'       => 'Высота Виджета в пикселях.',
            'validationMessage' => 'Высота Виджета должна быть числом.',
        ],
        'responsive' => [
            'title'             => 'Респонсивный',
            'description'       => 'Делает размер плеера растекаемым. Если включено - игнорирует фиксированные размеры.',
            'fixed'             => 'Фиксированный размер',
            '4by3'              => '4:3',
            '16by9'             => '16:9',
        ],
    ],
];
