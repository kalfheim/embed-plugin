<?php
namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;
use Krisawzm\Embed\Models\Settings;
use Lang;

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
        $css_units = Settings::get('valid_css_units', 'px');
        return [
            'id' => [
                'title'             => 'krisawzm.embed::codepen.properties.id.title',
                'description'       => 'krisawzm.embed::codepen.properties.id.description',
                'default'           => 'noDCi',
                'type'              => 'string',
                'validationPattern' => '^.*$',
                'validationMessage' => Lang::get('krisawzm.embed::codepen.properties.id.validationMessage'),
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
                'validationPattern' => '^(auto|0)$|^\d+(\.\d+)?(%|'.$css_units.')?$',
                'validationMessage' => Lang::get('krisawzm.embed::common.properties.height.validationMessage'),
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

            return @$path[3] ?: '';
        }

        return $id;
    }
}
