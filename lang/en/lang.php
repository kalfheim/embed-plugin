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
    'plugin' => [
        'name'         => 'Embed',
        'description'  => 'Provides easier-than-ever embedding.',
    ],

    'settings_menu' => [
        'label'        => 'Embed',
        'description'  => 'Manage the Embed plugin.',
    ],

    'settings' => [
        'mode' => [
            'label'   => 'Mode',
            'all'     => 'Use all available Embeds.',
            'allBut'  => 'Use all except the following Embeds:',
            'only'    => 'Use only the following Embeds:'
        ],

        'list' => [
            'comment' => 'Comma separated list containing names of Embed components. Example: "YouTube, Vimeo"',
        ],

        'googlemaps_api_key' => [
            'label'   => 'Google Maps API Key',
            'comment' => 'Optional. If you\'re using the Google Maps embed, you\'ll have to specify a API key. See https://developers.google.com/maps/documentation/embed/guide#api_key'
        ],

        'soundcloud_client_id' => [
            'label'   => 'SoundCloud Client ID',
            'comment' => 'Optional. If you\'re using the SoundCloud Player, you\'ll have to specify a CLient ID. See https://developers.soundcloud.com/'
        ],
    ],
];
