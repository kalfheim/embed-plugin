<?php namespace Krisawzm\Embed\Models;

use Model;

/**
 * Settings Model
 *
 * @todo Permissions
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'Krisawzm_Embed_Settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'mode' => 'required',
    ];
}
