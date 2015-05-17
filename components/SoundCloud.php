<?php namespace Krisawzm\Embed\Components;

use Cms\Classes\ComponentBase;
use Krisawzm\Embed\Models\Settings;
use October\Rain\Network\Http;
use Cache;
use Exception;

class SoundCloud extends ComponentBase
{
    /**
     * {@inheritdoc}
     */
    public function componentDetails()
    {
        return [
            'name'        => 'krisawzm.embed::soundcloud.details.name',
            'description' => 'krisawzm.embed::soundcloud.details.description',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function defineProperties()
    {
        return [
            'url' => [
                'title'             => 'krisawzm.embed::soundcloud.properties.url.title',
                'description'       => 'krisawzm.embed::soundcloud.properties.url.description',
                'default'           => 'https://',
                'type'              => 'string',
                'validationPattern' => '^https?:\/\/soundcloud\.com\/?.+$',
                'validationMessage' => 'krisawzm.embed::soundcloud.properties.url.validationMessage',
            ],

            'autoPlay' => [
                'title'             => 'krisawzm.embed::soundcloud.properties.autoPlay.title',
                'description'       => 'krisawzm.embed::soundcloud.properties.autoPlay.description',
                'default'           => '0',
                'type'              => 'checkbox',
            ],

            'height' => [
                'title'             => 'krisawzm.embed::common.properties.height.title',
                'description'       => 'krisawzm.embed::common.properties.height.title',
                'default'           => '166',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'krisawzm.embed::common.properties.height.validationMessage',
            ],
        ];
    }

    /**
     * Resolve Track URI using the SoundCloud API.
     *
     * @return string rawurlencoded
     */
    public function uri()
    {
        $url = $this->property('url');
        $cacheKey = 'krisawzm_embed_soundcloud_'.md5($url);

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $http = Http::get('http://api.soundcloud.com/resolve.json', function($http) use ($url) {
            $http->data([
                'url' => $url,
                'client_id' => Settings::get('soundcloud_client_id', '')
            ]);
        });

        if ($http->code != 200) {
            throw new Exception(sprintf('Krisawzm.Embed: SoundCloud API error. Is your Client ID key set? %s', $http->body));
        }

        $response = json_decode($http->body, true);

        if (!is_array($response)) {
            throw new Exception('Krisawzm.Embed: SoundCloud API error. Invalid response.');
        }

        if (isset($response['error'])) {
            throw new Exception(sprintf('Krisawzm.Embed: SoundCloud API error: %s', $response['error']));
        }

        if (!isset($response['uri']) || !is_string($response['uri'])) {
            throw new Exception('Krisawzm.Embed: SoundCloud API did not respond with a proper URI.');
        }

        $uri = rawurlencode($response['uri']);

        Cache::put($cacheKey, $uri, 4320);
        return $uri;
    }
}
