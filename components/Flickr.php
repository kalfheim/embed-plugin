<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Flickr extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::flickr.details.name',
            'description' => 'krisawzm.embed::flickr.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'url' => [
                'title'             => 'krisawzm.embed::flickr.properties.width.title',
                'description'       => 'krisawzm.embed::flickr.properties.width.description',
                'default'           => 'https://www.flickr.com/photos/tobeelynn/3605080317/',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::flickr.properties.width.validationMessage',
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::common.properties.width.description',
                'default'           => '640',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Wkrisawzm.embed::common.properties.width.validationMessage',
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '426',
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
     * Get the iframe src.
     *
     * @return string
     */
    public function src()
    {
        $url = $this->property('url');

        $url = ltrim($url, 'http:');
        $url = ltrim($url, 'https:');

        if (strpos($url, '//') !== 0) {
            $url = '//'.$url;
        }

        return rtrim($url, '/').'/player/';
    }
}
