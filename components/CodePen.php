<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

class CodePen extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::codepen.details.name',
            'description' => 'krisawzm.embed::codepen.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'krisawzm.embed::codepen.properties.id.title',
                'description'       => 'krisawzm.embed::codepen.properties.id.description',
                'default'           => 'noDCi',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => 'krisawzm.embed::codepen.properties.id.validationMessage',
            ],

            'defaultTab' => [
                'title'             => 'krisawzm.embed::codepen.properties.defaultTab.title',
                'description'       => 'krisawzm.embed::codepen.properties.defaultTab.description',
                'default'           => 'result',
                'type'              => 'dropdown',
                'options'           => [ 'result' => 'Result', 'html' => 'HTML', 'js' => 'JS', 'css' => 'CSS' ],
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.description',
                'default'           => '268',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.height.validationMessage',
            ],
        ];
    }

    /**
     * Get the Pen ID.
     *
     * @return string
     */
    public function pId()
    {
        $id = $this->property('id');

        if (strpos($id, 'http') === 0) {
            $path = explode('/', parse_url($id, PHP_URL_PATH));
            $id = @$path[3];
        }

        return $id;
    }
}
