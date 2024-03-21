<?php 

namespace App;

/**
 * Class Autoloader
 * @package App
 */

 class Autoloaer
 {
    /**
     * Enregistrer notre Autoloader
     */

     static function register()
     {
        spl_autoload_register(array(__CLASS__, 'autoload'));
     }

     /**
      * Inclure les fichiers correspondants a notre class
      * @param  $class string le nom de la classe a charger
      */

      static function autoload($class)
      {

        if (strpos($class, __NAMESPACE__. '\\') === 0)
        {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            return __DIR__ . '/' . $class . '.php';
        }

      }

 }