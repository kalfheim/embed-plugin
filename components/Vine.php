<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;

/**
 * @todo
 */
class Vine extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Vine',
            'description' => 'Embed a Vine clip.',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [];
    }
}
