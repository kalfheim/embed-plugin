<?php
namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;
use Krisawzm\Embed\Models\Settings;
use Lang;


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
        $css_units = Settings::get('valid_css_units', 'px');
        return [
            'id' => [
                'title'             => 'krisawzm.embed::spotify.properties.id.title',
                'description'       => 'krisawzm.embed::spotify.properties.id.description',
                'default'           => 'spotify:track:6JEK0CvvjDjjMUBFoXShNZ',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => Lang::get('krisawzm.embed::spotify.properties.id.validationMessage'),
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::common.properties.width.description',
                'default'           => '300',
                'type'              => 'string',
                'validationPattern' => '^(auto|0)$|^\d+(\.\d+)?(%|'.$css_units.')?$',
                'validationMessage' => Lang::get('krisawzm.embed::common.properties.width.validationMessage'),
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '380',
                'type'              => 'string',
                'validationPattern' => '^(auto|0)$|^\d+(\.\d+)?(%|'.$css_units.')?$',
                'validationMessage' => Lang::get('krisawzm.embed::common.properties.height.validationMessage'),
            ]
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

            return 'spotify:track:' . ($path[2] ?: '');
        }

        return $id;
    }

}
