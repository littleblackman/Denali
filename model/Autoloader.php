<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 04/10/2017
 * Time: 11:12
 */

class Autoloader
{
    // Enregistrement via la fonction spl_auto_loader
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {
        require __DIR__.'\\'.$class.'.php';
    }
}
