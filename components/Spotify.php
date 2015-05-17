<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Spotify extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::spotify.details.name',
            'description' => 'krisawzm.embed::spotify.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::spotify.properties.id.title',
                'description'       => 'krisawzm.embed::spotify.properties.id.description',
                'default'           => 'spotify:track:6JEK0CvvjDjjMUBFoXShNZ',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::spotify.properties.id.validationMessage',
            ],
        ];
    }

    /**
     * Get the Spotify URI.
     *
     * @return string
     */
    public function uri()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));
            return 'spotify:track:'.@$path[2];
        }

        return $id;
    }
}
