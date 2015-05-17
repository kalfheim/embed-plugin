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
        'name'                  => 'Instagram',
        'description'           => 'Embed a Instagram post.',
    ],

    'properties' => [
        'id' => [
            'title'             => 'Post',
            'description'       => 'The ID of the post or the full URL.',
            'validationMessage' => 'Invalid post ID.',
        ],

       'caption' => [
            'title'             => 'Include Caption',
            'description'       => 'Uncheck to hide the caption.',
        ],
    ],
];
