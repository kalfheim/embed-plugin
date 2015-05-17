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
        'name'                  => 'Google Maps',
        'description'           => 'Embed a map with Google Maps.',
    ],

    'properties' => [
        'q' => [
            'title'             => 'Place',
            'description'       => 'The place you want to display on the Map. Eg: "Oslo, Norway"',
            'validationMessage' => 'Invalid place.',
        ],

        'mapType' => [
            'title'             => 'Map Type',
            'description'       => 'Select which Map Type to display.',
            'roadmap'           => 'Roadmap',
            'satellite'         => 'Satellite',
        ],
    ],
];
