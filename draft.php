<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 04/10/2017
 * Time: 11:12
 */

class Autoloader
{
    // Enregistrement de la fonction en autoload afin qu'elle soit appele des que l'on instanciera une classe
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {
        require __DIR__.'\\'.$class.'.php';
    }
}
