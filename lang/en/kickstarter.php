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
        'description'           => 'Embed a Kickstarter project.',
    ],

    'properties' => [
        'url' => [
            'title'             => 'Project URL',
            'description'       => 'Full URL. Eg: https://www.kickstarter.com/projects/id/title',
            'validationMessage' => 'The URL is invalid.',
        ],

        'type' => [
            'title'             => 'Display Type',
            'description'       => 'Select how to display this widget.',
        ],

        'width' => [
            'description' => 'In pixels. Recommended for Video: 360. For Card: 220',
        ],

        'height' => [
            'description' => 'In pixels. Recommended for Video: 480. For Card: 420',
        ],
    ],
];
