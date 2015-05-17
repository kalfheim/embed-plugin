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
        'name'                  => 'Imgur',
        'description'           => 'Embed a Imgur image or album.',
    ],

    'properties' => [
        'id' => [
            'title'             => 'Post',
            'description'       => 'The post ID or a URL. Also works with albums.',
            'validationMessage' => 'Invalid link.',
        ],

       'hideDetails' => [
            'title'             => 'Hide Post Details',
            'description'       => 'Hide metadata such as username, views and number of comments.',
        ],
    ],
];
