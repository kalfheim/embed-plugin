<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class GitHub extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::github.details.name',
            'description' => 'krisawzm.embed::github.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::github.properties.id.title',
                'description'       => 'krisawzm.embed::github.properties.id.description',
                'default'           => 'krisawzm/0db0766c46a465bb40e8',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::github.properties.id.validationMessage',
            ],
        ];
    }

    /**
     * Get the Gist ID.
     *
     * @return string
     */
    public function gId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));

            if (count($path) >= 3) {
                $id = $path[1].'/'.$path[2];
            }
            else {
                $id = @$path[1];
            }
        }

        return $id;
    }
}
