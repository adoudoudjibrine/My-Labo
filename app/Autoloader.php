<?php

namespace App;

/**
 * Class Autoloader pour charger une classe automatiquement
 */

class Autoloader{

    /**
     * Enregistrer la classe a charger
     * @return void
     */
    static function  register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Charger un autoloder
     * @param string $class_name
     * @return void
     */
    static function autoload($class_name)
    {
        if (strpos($class_name, __NAMESPACE__ .'\\') === 0)
        {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class_name);
            $class = str_replace('\\', '/', $class);
            $file = __DIR__ . '/' . $class . '.php';
            if (file_exists($file)) {
                require_once($file);
            } else {
                // Gérer le cas où le fichier de classe n'existe pas
            }
        }
    }

}