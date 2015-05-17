<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class JsFiddle extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::jsfiddle.details.name',
            'description' => 'krisawzm.embed::jsfiddle.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::jsfiddle.properties.id.title',
                'description'       => 'krisawzm.embed::jsfiddle.properties.id.description',
                'default'           => 'dwqujux4',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::jsfiddle.properties.id.validationMessage',
            ],

            'tabs' => [
                'title'             => 'krisawzm.embed::jsfiddle.properties.tabs.title',
                'description'       => 'krisawzm.embed::jsfiddle.properties.tabs.description',
                'default'           => 'js,resources,html,css,result',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::jsfiddle.properties.tabs.validationMessage',
            ],

            'skin' => [
                'title'             => 'krisawzm.embed::jsfiddle.properties.skin.title',
                'description'       => 'krisawzm.embed::jsfiddle.properties.skin.description',
                'default'           => 'light',
                'type'              => 'dropdown',
                'options'           => ['light' => 'krisawzm.embed::jsfiddle.properties.skin.light', 'presentation' => 'krisawzm.embed::jsfiddle.properties.skin.presentation'],
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '300',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.height.validationMessage',
            ],
        ];
    }

    /**
     * Get the fiddle ID.
     *
     * @return string
     */
    public function fId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            return current(explode('/', ltrim(parse_url($id, PHP_URL_PATH), '/')));
        }

        return $id;
    }
}
