<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Kickstarter extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::kickstarter.details.name',
            'description' => 'krisawzm.embed::kickstarter.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'url' => [
                'title'             => 'krisawzm.embed::kickstarter.properties.url.title',
                'description'       => 'krisawzm.embed::kickstarter.properties.url.description',
                'default'           => 'https://',
                'type'              => 'string',
                'validationPattern' => '^https?:\/\/(www\.)?kickstarter\.com\/?.+$',
                'validationMessage' => 'krisawzm.embed::kickstarter.properties.url.validationMessage',
            ],

            'type' => [
                'title'             => 'krisawzm.embed::kickstarter.properties.type.title',
                'description'       => 'krisawzm.embed::kickstarter.properties.type.description',
                'default'           => 'video',
                'type'              => 'dropdown',
                'options'           => ['video' => 'Video', 'card' => 'Card'],
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::kickstarter.properties.width.description',
                'default'           => '360',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.width.validationMessage',
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::kickstarter.properties.height.description',
                'default'           => '480',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.height.validationMessage',
            ],
        ];
    }

    /**
     * Get the iframe src.
     *
     * @return string
     */
    public function src()
    {
        $path = rtrim(parse_url($this->property('url'), PHP_URL_PATH), '/');
        return '//www.kickstarter.com'.$path.'/widget/'.$this->property('type').'.html';
    }
}
