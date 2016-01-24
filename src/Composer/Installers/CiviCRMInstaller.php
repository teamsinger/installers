<?php
namespace Composer\Installers;

class CiviCRMInstaller extends BaseInstaller
{
    protected $locations = array(
        'extension' => 'web/sites/default/civicrm_extensions/{$name}/',
    );
}
