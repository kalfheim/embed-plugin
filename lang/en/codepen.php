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
        'name'                  => 'CodePen',
        'description'           => 'Embed a Pen from CodePen.',
    ],

    'properties' => [
        'id' => [
            'title'             => 'Pen',
            'description'       => 'The ID or full URL of the Pen you wish to display. Eg: http://codepen.io/user/pen/id',
            'validationMessage' => 'Invalid Pen ID.',
        ],

        'defaultTab' => [
            'title'             => 'Default Tab',
            'description'       => 'Select which tab to display first.',
        ],
    ],
];
