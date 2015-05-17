<?php namespace Krisawzm\Embed\Components;

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
     *
     * https://imgur.com/gallery/NLitg
     * https://imgur.com/NLitg
     *
     * https://imgur.com/a/1pK8O
     */
    public function pId()
    {
        static $id = null;

        if (!is_null($id)) {
            return $id;
        }

        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));

            if ($path[1] == 'gallery') {
                $id = $path[2];
            }
            elseif ($path[1] == 'a') {
                $id = 'a/'.$path[2];
            }
            else {
                $id = $path[1];
            }
        }

        return $id;
    }

    /**
     * Check if post is an album.
     *
     * @return bool
     */
    // public function isAlbum()
    // {
    //     return strpos($this->id(), 'a/') === 0;
    // }
}
