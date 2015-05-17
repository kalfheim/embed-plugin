<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Vine extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::vine.details.name',
            'description' => 'krisawzm.embed::vine.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::vine.properties.id.title',
                'description'       => 'krisawzm.embed::vine.properties.id.description',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::vine.properties.id.validationMessage',
            ],

            'audio' => [
                'title'             => 'krisawzm.embed::vine.properties.audio.title',
                'description'       => 'krisawzm.embed::vine.properties.audio.description',
                'default'           => '0',
                'type'              => 'checkbox',
            ],

            'type' => [
                'title'             => 'krisawzm.embed::vine.properties.type.title',
                'description'       => 'krisawzm.embed::vine.properties.type.description',
                'default'           => 'simple',
                'type'              => 'dropdown',
                'options'           => ['simple' => 'Simple', 'postcard' => 'Postcard'],
            ],

            'size' => [
                'title'             => 'krisawzm.embed::vine.properties.size.title',
                'description'       => 'krisawzm.embed::vine.properties.size.description',
                'default'           => '480',
                'type'              => 'dropdown',
                'options'           => ['300' => '300px', '480' => '480px', '600' => '600px'],
            ],
        ];
    }

    /**
     * Get the Vine ID.
     *
     * @return string
     */
    public function vId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));
            $id = @$path[2];
        }

        return $id;
    }
}
