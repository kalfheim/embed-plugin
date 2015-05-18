<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;
use Krisawzm\Embed\Models\Settings;

class GoogleMaps extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::googlemaps.details.name',
            'description' => 'krisawzm.embed::googlemaps.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'q' => [
                'title'             => 'krisawzm.embed::googlemaps.properties.q.title',
                'description'       => 'krisawzm.embed::googlemaps.properties.q.description',
                'default'           => 'Oslo, Norway',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::googlemaps.properties.q.validationMessage',
            ],

            'mapType' => [
                'title'             => 'krisawzm.embed::googlemaps.properties.mapType.title',
                'description'       => 'krisawzm.embed::googlemaps.properties.mapType.description',
                'default'           => 'roadmap',
                'type'              => 'dropdown',
                'options'           => ['roadmap' => 'krisawzm.embed::googlemaps.properties.mapType.roadmap', 'satellite' => 'krisawzm.embed::googlemaps.properties.mapType.satellite'],
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::common.properties.width.description',
                'default'           => '600',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.width.validationMessage',
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '450',
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
     * Returns the full src.
     *
     * @return string
     */
    public function src()
    {
        return 'https://www.google.com/maps/embed/v1/place?key='.
                Settings::get('googlemaps_api_key', '').
                '&amp;q='.rawurlencode($this->property('q')).
                '&amp;maptype='.$this->property('mapType');
    }
}
