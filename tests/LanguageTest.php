<?php
namespace Krisawzm\Embed\Tests;

use File;
use PluginTestCase;

class LanguageTest extends PluginTestCase
{
    public function testLanguageFiles()
    {
        $baseDir = dirname(__DIR__) . '/lang';

        foreach (File::directories($baseDir) as $langDir) {
            foreach (File::files($langDir) as $langFile) {
                $this->assertInternalType('array', require_once $langFile);
            }
        }
    }
}
