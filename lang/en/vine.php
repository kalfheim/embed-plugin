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
        'description'           => 'Embed a Vine clip.',
    ],

    'properties' => [
        'id' => [
            'title'             => 'Vine',
            'description'       => 'Vine ID or the full URL. Eg: https://vine.co/v/Ml16lZVTTxe',
            'validationMessage' => 'Invalid Vine ID.',
        ],

        'audio' => [
            'title'             => 'Autoplay Audio',
            'description'       => 'Automatically play audio.',
        ],

        'type' => [
            'title'             => 'Type',
            'description'       => 'Select how to display the widget.',
        ],

        'size' => [
            'title'             => 'Size',
            'description'       => 'Select the size of the widget.',
        ],
    ],
];
