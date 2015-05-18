Plugin for [OctoberCMS](https://octobercms.com/) which provides easier-than-ever embedding of content from various sites and services. Optimized for [Static Pages](https://octobercms.com/plugin/rainlab-pages). See the [Supported Providers](#supported-providers) list.

## Installation

**OctoberCMS Backend:**

Go to the plugin installation page. Search for `Krisawzm.Embed` and install the plugin.

**Command Line:**

    $ php artisan plugin:install Krisawzm.Embed

## Usage

Each provider is a component. Simply drag and drop any component in to a CMS page, partial, layout or content file. Then click on the component to configure its properties.

This plugin is optimized to work with the [Static Pages](https://octobercms.com/plugin/rainlab-pages) plugin. Every component this plugin provides will also be registered as a snippet. This makes it super easy to embed things on a static page with the rich editor. This makes it really easy for even end-users or clients to do embedding - without a line of code!

Simply open a page, then click on `Snippets` in the menu. Select any snippet. Now click on the new snippet to configure its properties.

## Plugin Settings

This plugin ships with a settings page. Go to `Settings` and you will see a menu item `Embed` listed under `Misc`.

By default every component will be enabled. This is in most cases unnecessary. Instead, it is recommended to only enable the components you will be needing. To do so, set the `Mode` to either `Use all except the following Embeds:` or `Use only the following Embeds:` -- then specify a comma separated list of component names in the text box under.

## Supported Providers

- [CodePen](#codepen)
- [Flickr](#flickr)
- [GitHub Gist](#github-gist)
- [Google Maps](#google-maps)
- [Google Plus](#google-plus)
- [Imgur](#imgur)
- [Instagram](#instagram)
- [jsFiddle](#jsfiddle)
- [Kickstarter](#kickstarter)
- [SoundCloud](#soundcloud)
- [Spotify](#spotify)
- [Twitter](#twitter)
- [Vimeo](#vimeo)
- [Vine](#vine)
- [YouTube](#youtube)

## Component Details

### CodePen

Property              | Description
--------------------- | ---------------------
**Pen**               | The Pen ID or the full URL copied from the browser address bar. Example: `https://codepen.io/stessyco/pen/noDCi`
**Default Tab**       | Select which tab shows up by default. **Options:** `Result` `HTML` `JS` `CSS`
**Widget Height**     | Height of the widget specified in pixels. **Default:** 268

### Flickr

Embed any Flickr URL. This includes links to photos, albums and user profiles.

Property              | Description
--------------------- | ---------------------
**URL**               | The full Flickr.com URL.
**Widget Width**      | Width of the widget specified in pixels. **Default:** 640
**Widget Height**     | Height of the widget specified in pixels. **Default:** 426
**Responsiveness**    | [Click here for details.](#responsiveness) **Default:** False

### GitHub Gist

Property              | Description
--------------------- | ---------------------
**Gist**              | The gist ID or full URL. It is recommended to include the username. Eg: `krisawzm/0db0766c46a465bb40e8` or `https://gist.github.com/krisawzm/0db0766c46a465bb40e8`

### Google Maps

Property              | Description
--------------------- | ---------------------
**Place**             | The place you want to display on the Map. Accepts any Google Maps search query. Eg: `Oslo, Norway`
**Map Type**          | Type of map to display. **Options:** `Roadmap` `Satellite`
**Widget Width**      | Width of the widget specified in pixels. **Default:** 600
**Widget Height**     | Height of the widget specified in pixels. **Default:** 450

> **Important note:** The Google Maps component requires a API key. Get your key from [Google Developers](https://developers.google.com/maps/documentation/embed/guide#api_key) and register it in the settings page.

### Google Plus

Property              | Description
--------------------- | ---------------------
**Link To Post**      | A direct link to the post. Click on the arrow in the top right corner of a post -> `Link to post`

### Imgur

Embed a Imgur image or album. If you are embedding an album, you must include the `a/` part of the ID or URL.
Image example: `id`, `https://imgur.com/id` or `https://imgur.com/gallery/id`
Album example: `a/id` or `https://imgur.com/a/id`

Property              | Description
--------------------- | ---------------------
**Post**              | The post ID or URL.
**Hide Post Details** | Hide metadata such as username, views and number of comments. **Default**: False

### Instagram

Property              | Description
--------------------- | ---------------------
**Post**              | The ID of the post or the full URL copied from the browser address bar.
**Hide Caption**      | Hide caption. **Default**: False

### jsFiddle

Property              | Description
--------------------- | ---------------------
**jsFiddle**          | The ID or full URL of the fiddle you wish to display. Eg: `https://jsfiddle.net/id/`
**Tabs**              | Remove or rearrange tabs. **Default:** `js,resources,html,css,result`
**Skin**              | Which skin should be used. **Options**: `Light` `Presentation`
**Height**            | Height of the widget specified in pixels. **Default:** 300

### Kickstarter

Property              | Description
--------------------- | ---------------------
**URL**               | The ID of the post or the full URL copied from the browser address bar.
**Display Type**      | How to display the widget. **Options**: `Video` `Card`
**Widget Width**      | Default for **Video**: 360 -- Default for **Card**: 220
**Widget Height**     | Default for **Video**: 480 -- Default for **Card**: 420

> **Note:** When switching to the `Card` display type, it is important to change the width and height so the widget contents display properly.

### SoundCloud

Embed any SoundCloud URL. This includes links to individual tracks, profiles, albums and playlists.

Property              | Description
--------------------- | ---------------------
**URL**               | Full SoundCloud URL copied from the browser address bar.
**Auto Play**         | Play begin playback when the widget loads. **Default:** False
**Widget Height**     | Height of the widget specified in pixels. **Default**: 166

> **Note:** When embedding a playlist or user profile, you must increase the `Widget Height` to display the playlist.

> **Important note:** The SoundCloud component requires a `Client ID` API key. Get your key from [SoundCloud.com](https://developers.soundcloud.com/) and register it in the settings page.

### Spotify

Embed a Spotify Play Button.

Property              | Description
--------------------- | ---------------------
**Track**             | The Spotify URI. Right click on a track -> `Copy Spotify URI`. Also accepts the Spotify HTTP URL.

### Twitter

Embed a tweet.

Property              | Description
--------------------- | ---------------------
**Tweet**             | Full URL. Click on a Tweet, then copy the URL in the address bar.
**Hide Media**        | Hide media such as images and videos. **Default**: False

### Vimeo

Property              | Description
--------------------- | ---------------------
**Video**             | Video ID or Vimeo URL copied from the browser address bar.
**Autoplay Audio**    | Automatically play audio. **Default:** False
**Type**              | How to display the widget. **Options:** `Simple` `Postcard`
**Size**              | The size of the widget. **Options:** `300px` `480px` `600px`
**Responsiveness**    | [Click here for details.](#responsiveness) **Default:** False

### Vine

Property              | Description
--------------------- | ---------------------
**Vine**              | Vine ID or the full URL. Eg: `https://vine.co/v/id`
**Widget Width**      | Default for **Video**: 360 -- Default for **Card**: 220
**Widget Height**     | Default for **Video**: 480 -- Default for **Card**: 420

### YouTube

Property              | Description
--------------------- | ---------------------
**Video**             | Video ID or Vimeo URL copied from the browser address bar.
**Widget Width**      | Default for **Video**: 360 -- Default for **Card**: 220
**Widget Height**     | Default for **Video**: 480 -- Default for **Card**: 420
**Responsiveness**    | [Click here for details.](#responsiveness) **Default:** False

## Responsiveness

Some components have a property named `Responsiveness`. This makes the widget responsive -- or fluid.

The way this is done is by wrapping the widget in a `div.embed-responsive` element. If you are using [Twitter Bootstrap](http://getbootstrap.com/), this will work automatically. However, if you are not using Bootstrap, you will have to add some CSS. Check out [this Gist](https://gist.github.com/krisawzm/59337b5806f27bd5f981) for an example of how you can achieve this.

**Options:**
- `Fixed` - Disables responsiveness and uses size defined with width and height.
- `4:3` - Enables responsiveness with 4:3 size.
- `16:9` - Enables responsiveness with 16:9 size.

> **Note**: When responsiveness is enabled, you can skip setting a fixed width and height.

## Contributing

### Bugs

If you have found a bug, please create an issue on GitHub.

### Feature requests

If you want to see a provider added to this plugin, don't hesitate to let me know. Feel free to create an issue with the `request` tag -- or better yet, make it yourself and create a pull request.

### Translations

Everyting in this plugin can be translated -- even components. If you create a translation for your own language, please give back to the community by creating a pull request!

## License

[MIT](http://opensource.org/licenses/MIT) © 2015 [Kristoffer Alfheim](https://github.com/krisawzm)
