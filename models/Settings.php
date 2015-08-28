<?php
namespace Krisawzm\Embed\Models;

use Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

/**
 * Settings Model
 */
class Settings extends Model
{
    use ValidationTrait;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'Krisawzm_Embed_Settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [];
}
