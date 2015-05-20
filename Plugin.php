<?php namespace Krisawzm\Embed;

use System\Classes\PluginBase;
use Krisawzm\Embed\Models\Settings;

/**
 * Embed Plugin Information File
 *
 * @todo Enable responsiveness on more components?
 */
class Plugin extends PluginBase
{
    // public $suggest = [
    //     'RainLab.Pages',
    // ];

    /**
     * {@inheritdoc}
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'krisawzm.embed::lang.plugin.name',
            'description' => 'krisawzm.embed::lang.plugin.description',
            'author'      => 'Kristoffer Alfheim',
            'icon'        => 'icon-link',
            'homepage'    => 'https://github.com/krisawzm/embed-plugin',
        ];
    }

    /**
     * List of all available components.
     *
     * @var array
     */
    protected $componentList = [
        'CodePen',
        'Flickr',
        'GitHub',
        'GoogleMaps',
        'GooglePlus',
        'Imgur',
        'Instagram',
        'JsFiddle',
        'Kickstarter',
        'SoundCloud',
        'Spotify',
        'Twitter',
        'Vimeo',
        'Vine',
        'YouTube',
    ];

    /**
     * Get components to be added.
     *
     * @return array
     */
    protected function getComponentsToRegister()
    {
        static $components = null;

        if (!is_null($components)) {
            return $components;
        }

        $mode = Settings::get('mode', 'all');
        $componentsTmp = [];

        if ($mode == 'allBut') {
            $componentsTmp = array_udiff(
                $this->componentList,
                $this->getSettingsList(),
                'strcasecmp'
            );
        }
        elseif ($mode == 'only') {
            $componentsTmp = array_uintersect(
                $this->componentList,
                $this->getSettingsList(),
                'strcasecmp'
            );
        }
        else {
            $componentsTmp = $this->componentList;
        }

        $components = [];

        foreach ($componentsTmp as $component) {
            $components['Krisawzm\\Embed\\Components\\'.$component] = $component.'Embed';
        }

        return $components;
    }

    /**
     * Get list from Settings as array.
     *
     * @return array
     */
    protected function getSettingsList()
    {
        return array_map('trim', explode(',', Settings::get('list', '')));
    }

    /**
     * {@inheritdoc}
     */
    public function registerComponents()
    {
        return $this->getComponentsToRegister();
    }

    /**
     * Register snippets with the RainLab.Pages plugin.
     *
     * @return array
     * @see https://octobercms.com/plugin/rainlab-pages
     */
    public function registerPageSnippets()
    {
        return $this->getComponentsToRegister();
    }

    /**
     * {@inheritdoc}
     *
     * @todo (Consideration) Include $this->componentList in keywords
     */
    public function registerSettings()
    {
        return [
            'general' => [
                'label'       => 'krisawzm.embed::lang.settings_menu.label',
                'description' => 'krisawzm.embed::lang.settings_menu.description',
                'icon'        => 'icon-link',
                'class'       => 'Krisawzm\Embed\Models\Settings',
                'permissions' => ['krisawzm.embed.settings'],
                'keywords'    => 'embed krisawzm',
                // 'keywords'    => 'embed krisawzm'.implode(' ', $this->componentList),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerPermissions()
    {
        return [
            'krisawzm.embed.settings' => ['label' => 'Manage Embed settings'],
        ];
    }
}
