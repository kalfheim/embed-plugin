<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Twitter extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::twitter.details.name',
            'description' => 'krisawzm.embed::twitter.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'href' => [
                'title'             => 'krisawzm.embed::twitter.properties.href.title',
                'description'       => 'krisawzm.embed::twitter.properties.href.description',
                'default'           => '//twitter.com/rickastley/status/14727077121',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::twitter.properties.href.validationMessage',
            ],

            'hideMedia' => [
                'title' => 'krisawzm.embed::twitter.properties.hideMedia.title',
                'description' => 'krisawzm.embed::twitter.properties.hideMedia.description',
                'default' => '0',
                'type' => 'checkbox',
            ]
        ];
    }

    /**
     * Get the href.
     *
     * @return string
     */
    public function href()
    {
        $href = ltrim($this->property('href'), 'https:');

        if (strpos($href, '//') !== 0) {
            $href = '//'.$href;
        }

        return $href;
    }
}
