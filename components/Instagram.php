<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Instagram extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::instagram.details.name',
            'description' => 'krisawzm.embed::instagram.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::instagram.properties.id.title',
                'description'       => 'krisawzm.embed::instagram.properties.id.description',
                'default'           => 'tWdDeNImrp',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::instagram.properties.id.validationMessage',
            ],

            'width' => [
                'title'             => 'krisawzm.embed::common.properties.width.title',
                'description'       => 'krisawzm.embed::common.properties.width.description',
                'default'           => '350',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.width.validationMessage',
            ],

            'caption' => [
                'title'             => 'krisawzm.embed::instagram.properties.caption.title',
                'description'       => 'krisawzm.embed::instagram.properties.caption.description',
                'default'           => '1',
                'type'              => 'checkbox',
            ],
        ];
    }

    /**
     * Get the post ID.
     *
     * @return string
     */
    public function pId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));
            $id = @$path[2];
        }

        return $id;
    }
}
