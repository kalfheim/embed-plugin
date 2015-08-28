<?php
namespace Krisawzm\Embed\Tests;

use PluginTestCase;
use Krisawzm\Embed\Models\Settings;

use Krisawzm\Embed\Components\CodePen;
use Krisawzm\Embed\Components\Flickr;
use Krisawzm\Embed\Components\GitHub;
use Krisawzm\Embed\Components\GoogleMaps;
use Krisawzm\Embed\Components\GooglePlus;
use Krisawzm\Embed\Components\Imgur;
use Krisawzm\Embed\Components\Instagram;
use Krisawzm\Embed\Components\JsFiddle;
use Krisawzm\Embed\Components\Kickstarter;
use Krisawzm\Embed\Components\SoundCloud;
use Krisawzm\Embed\Components\Spotify;
use Krisawzm\Embed\Components\Twitter;
use Krisawzm\Embed\Components\Vimeo;
use Krisawzm\Embed\Components\Vine;
use Krisawzm\Embed\Components\YouTube;

class ComponentsTest extends PluginTestCase
{
    public function setUp()
    {
        parent::setUp();

        Settings::set('googlemaps_api_key', 'foo');
    }

    public function testCodePen()
    {
        foreach ([
            'http://codepen.io/krisawzm/pen/KprxOV',
            'https://codepen.io/krisawzm/pen/KprxOV',
            'https://codepen.io/krisawzm/pen/KprxOV/foo'
        ] as $url) {
            $this->assertEquals(
                'KprxOV',
                (new CodePen(null, ['id' => $url]))->pId()
            );
        }

        $this->assertEquals(
            'this_is_invalid',
            (new CodePen(null, ['id' => 'this_is_invalid']))->pId()
        );
    }

    public function testFlickr()
    {
        foreach ([
            'https://www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/' =>
            '//www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/player/',

            '//www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/player' =>
            '//www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/player/',

            '//www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/player/' =>
            '//www.flickr.com/photos/oneredballoon/20300562193/in/explore-2015-08-27/player/',

            'https://www.flickr.com/photos/flickr/20954902195/' =>
            '//www.flickr.com/photos/flickr/20954902195/player/',

            'http://www.flickr.com/photos/flickr/20954902195/' =>
            '//www.flickr.com/photos/flickr/20954902195/player/',
        ] as $url => $expected) {
            $this->assertEquals(
                $expected,
                (new Flickr(null, ['url' => $url]))->src()
            );
        }
    }

    public function testGitHub()
    {
        foreach ([
            'https://gist.github.com/krisawzm/0db0766c46a465bb40e8',
            'http://gist.github.com/krisawzm/0db0766c46a465bb40e8',
            'http://gist.github.com/krisawzm/0db0766c46a465bb40e8/foo',
            'krisawzm/0db0766c46a465bb40e8'
        ] as $url) {
            $this->assertEquals(
                'krisawzm/0db0766c46a465bb40e8',
                (new GitHub(null, ['id' => $url]))->gId()
            );
        }

        foreach ([
            'http://gist.github.com/0db0766c46a465bb40e8',
            'https://gist.github.com/0db0766c46a465bb40e8',
            '0db0766c46a465bb40e8'
        ] as $url) {
            $this->assertEquals(
                '0db0766c46a465bb40e8',
                (new GitHub(null, ['id' => $url]))->gId()
            );
        }

        $this->assertEquals(
            'this_is_invalid',
            (new GitHub(null, ['id' => 'this_is_invalid']))->gId()
        );
    }

    public function testGoogleMaps()
    {
        $this->assertEquals(
            'foo',
            Settings::get('googlemaps_api_key')
        );

        $this->assertEquals(
            'https://www.google.com/maps/embed/v1/place?key=foo&amp;q=Oslo%2C%20Norway&amp;maptype=satellite',
            (new GoogleMaps(null, [
                'q' => 'Oslo, Norway',
                'mapType' => 'satellite'
            ]))->src()
        );
    }

    public function testGooglePlus()
    {
        $this->assertEquals(
            '//plus.google.com/+google/posts/bwAKpXeA4dS',
            (new GooglePlus(null, [
                'link' => 'https://plus.google.com/+google/posts/bwAKpXeA4dS'
            ]))->link()
        );
    }

    public function testImgur()
    {
        foreach ([
            'http://imgur.com/id' => 'id',
            'https://imgur.com/id' => 'id',
            'https://imgur.com/id/foo' => 'id',
            'https://imgur.com/gallery/id' => 'id',
            'https://imgur.com/gallery/id/foo' => 'id',
            'https://imgur.com/a/id' => 'a/id',
            'https://imgur.com/a/id/foo' => 'a/id',
            'id' => 'id',
            'a/id' => 'a/id'
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new Imgur(null, ['id' => $id]))->pId()
            );
        }
    }

    public function testInstagram()
    {
        $this->assertEquals(
            '65Ppa1BQXN',
            (new Instagram(null, [
                'id' => 'https://instagram.com/p/65Ppa1BQXN/'
            ]))->pId()
        );
    }

    public function testJsFiddle()
    {
        foreach ([
            'http://jsfiddle.net/id/' => 'id',
            'https://jsfiddle.net/id/' => 'id',
            'https://jsfiddle.net/id' => 'id',
            'https://jsfiddle.net/id/foo' => 'id',
            'id' => 'id',
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new JsFiddle(null, ['id' => $id]))->fId()
            );
        }
    }

    public function testKickstarter()
    {
        foreach ([
            'https://www.kickstarter.com/projects/1953508775/wood-kubb-the-wooden-miniature-french-computer?ref=home_featured' =>
            '//www.kickstarter.com/projects/1953508775/wood-kubb-the-wooden-miniature-french-computer/widget/card.html',

            'http://www.kickstarter.com/projects/1953508775/' =>
            '//www.kickstarter.com/projects/1953508775/widget/card.html',

            'http://www.kickstarter.com/projects/1953508775//' =>
            '//www.kickstarter.com/projects/1953508775/widget/card.html',
        ] as $url => $expected) {
            $this->assertEquals(
                $expected,
                (new Kickstarter(null, [
                    'url' => $url,
                    'type' => 'card'
                ]))->src()
            );
        }
    }

    /**
     * @todo
     *
     * @expectedException \October\Rain\Exception\ApplicationException
     */
    public function testSoundCloud()
    {
        (new SoundCloud)->uri();
    }

    public function testSpotify()
    {
        foreach ([
            'spotify:track:foo' => 'spotify:track:foo',
            'http://open.spotify.com/track/foo' => 'spotify:track:foo',
            'https://open.spotify.com/track/foo' => 'spotify:track:foo',
            'https://open.spotify.com/track/foo/bar' => 'spotify:track:foo',
            'foo' => 'foo',
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new Spotify(null, ['id' => $id]))->uri()
            );
        }
    }

    public function testTwitter()
    {
        foreach ([
            'https://twitter.com/twitter/status/637004609551101952' =>
            '//twitter.com/twitter/status/637004609551101952',

            'https://twitter.com/twitter/status/637004609551101952/foo' =>
            '//twitter.com/twitter/status/637004609551101952/foo',
        ] as $href => $expected) {
            $this->assertEquals(
                $expected,
                (new Twitter(null, ['href' => $href]))->href()
            );
        }
    }

    public function testVimeo()
    {
        foreach ([
            'http://vimeo.com/79963873' => '79963873',
            'https://vimeo.com/79963873' => '79963873',
            'https://vimeo.com/79963873/foo' => '79963873',
            '79963873' => '79963873',
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new Vimeo(null, ['id' => $id]))->vId()
            );
        }
    }

    public function testVine()
    {
        foreach ([
            'http://vine.co/v/id' => 'id',
            'https://vine.co/v/id' => 'id',
            'https://vine.co/v/id/foo' => 'id',
            'id' => 'id',
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new Vine(null, ['id' => $id]))->vId()
            );
        }
    }

    public function testYouTube()
    {
        foreach ([
            'http://www.youtube.com/watch?v=yBwD4iYcWC4&list=RDyBwD4iYcWC4#t=1' => 'yBwD4iYcWC4',
            'https://www.youtube.com/watch?v=yBwD4iYcWC4&list=RDyBwD4iYcWC4#t=1' => 'yBwD4iYcWC4',
            'https://www.youtube.com/watch?v=yBwD4iYcWC4' => 'yBwD4iYcWC4',
            'https://www.youtube.com/foo/watch?v=yBwD4iYcWC4' => 'yBwD4iYcWC4',
            'yBwD4iYcWC4' => 'yBwD4iYcWC4',
        ] as $id => $expected) {
            $this->assertEquals(
                $expected,
                (new YouTube(null, ['id' => $id]))->vId()
            );
        }
    }
}
