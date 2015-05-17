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
        'name'                  => 'SoundCloud',
        'description'           => 'Embed a SoundCloud track or playlist.',
    ],

    'properties' => [
        'url' => [
            'title'             => 'Sound URL',
            'description'       => 'Full URL. Works with singles, profiles, albums and playlists.',
            'validationMessage' => 'The URL is invalid.',
        ],

        'autoPlay' => [
            'title'             => 'Auto Play',
            'description'       => 'Play automatically when the page loads.',
        ],
    ],
];
