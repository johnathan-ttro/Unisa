<?php

/* 
 * The settings model classes should extend the Model class and implement,
 * the System.Behaviors.SettingsModel behavior.
 */

namespace UNISAStoryLine\PHPStencilComponent\Models;

use Model;

class Settings extends Model
{
    /*
     * @var
     * return true;
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'UNISAStoryLine_PHPStencilComponent_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
