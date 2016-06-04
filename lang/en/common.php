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
            'title'             => 'Widget Width',
            'description'       => 'Widget Width in valid CSS value.',
            'validationMessage' => 'Widget Width must use a valid CSS unit',
        ],

        'height' => [
            'title'             => 'Widget Height',
            'description'       => 'Widget Height in valid CSS value.',
            'validationMessage' => 'Widget Width must use a valid CSS unit',
        ],

        'responsive' => [
            'title'             => 'Responsiveness',
            'description'       => 'Makes the player size fluid. If enabled, ignore fixed sizing.',
            'fixed'             => 'Fixed size',
            '4by3'              => '4:3',
            '16by9'             => '16:9',
        ],
    ],
];
