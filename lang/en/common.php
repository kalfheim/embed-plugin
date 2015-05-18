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
            'description'       => 'Widget Width in pixels.',
            'validationMessage' => 'Widget Width must be a number.',
        ],

        'height' => [
            'title'             => 'Widget Height',
            'description'       => 'Widget Height in pixels.',
            'validationMessage' => 'Widget Height must be a number.',
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
