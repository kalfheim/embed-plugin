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
        'description'           => 'Embed a Twitter Tweet.',
    ],

    'properties' => [
        'href' => [
            'title'             => 'Tweet',
            'description'       => 'Click on a Tweet, then copy the URL in the address bar.',
            'validationMessage' => 'Invalid Tweet URL.',
        ],

        'hideMedia' => [
            'title'             => 'Hide Media',
            'description'       => 'Hide media such as images and videos.',
        ],
    ],
];
