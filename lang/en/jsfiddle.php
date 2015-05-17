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
        'name'                  => 'jsFiddle',
        'description'           => 'Embed jsFiddle.',
    ],

    'properties' => [
        'id' => [
            'title'             => 'jsFiddle',
            'description'       => 'The ID or full URL of the fiddle you wish to display. Eg: https://jsfiddle.net/id/',
            'validationMessage' => 'Invalid fiddle ID.',
        ],

        'tabs' => [
            'title'             => 'Tabs',
            'description'       => 'Remove or rearrange tabs. Default: "js,resources,html,css,result"',
            'validationMessage' => 'Invalid tabs.',
        ],

       'skin' => [
            'title'             => 'Skin',
            'description'       => 'Select which skin should be used.',
            'light'             => 'Light',
            'presentation'      => 'Presentation',
        ],
    ],
];
