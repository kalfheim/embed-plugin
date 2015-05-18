<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Vimeo extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::vimeo.details.name',
            'description' => 'krisawzm.embed::vimeo.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::vimeo.properties.id.title',
                'description'       => 'krisawzm.embed::vimeo.properties.id.description',
                'default'           => '87031388',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::vimeo.properties.id.validationMessage',
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::common.properties.width.description',
                'default'           => '560',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.width.validationMessage',
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '315',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.height.validationMessage',
            ],

            'responsive' => [
                'title'             => 'krisawzm.embed::common.properties.responsive.title',
                'description'       => 'krisawzm.embed::common.properties.responsive.description',
                'default'           => '0',
                'type'              => 'dropdown',
                'options'           => ['0' => 'krisawzm.embed::common.properties.responsive.fixed', '4by3' => 'krisawzm.embed::common.properties.responsive.4by3', '16by9' => 'krisawzm.embed::common.properties.responsive.16by9'],
            ],
        ];
    }

    /**
     * Get the video ID.
     *
     * @return string
     */
    public function vId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = parse_url($id, PHP_URL_PATH);
            return current(explode('/', ltrim($path, '/')));
        }

        return $id;
    }
}
