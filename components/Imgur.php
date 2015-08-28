<?php
namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class Imgur extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::imgur.details.name',
            'description' => 'krisawzm.embed::imgur.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::imgur.properties.id.title',
                'description'       => 'krisawzm.embed::imgur.properties.id.description',
                'default'           => 'NLitg',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::imgur.properties.id.validationMessage',
            ],

            'hideDetails' => [
                'title' => 'krisawzm.embed::imgur.properties.hideDetails.title',
                'description' => 'krisawzm.embed::imgur.properties.hideDetails.description',
                'default' => '0',
                'type' => 'checkbox',
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

            if (!$path) {
                return $id;
            }

            if ($path[1] === 'gallery') {
                return $path[2] ?: '';
            }

            if ($path[1] === 'a') {
               return 'a/' . ($path[2] ?: '');
            }

            return $path[1];
        }

        return $id;
    }
}
