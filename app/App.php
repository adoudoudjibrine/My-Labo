<?php

use Core\Config; // Import the Config class
use Core\Database\MysqlDatabase;

/**
 * App class
 * this class is the main class of the application
 * it is a singleton class
 */
class App
{
    // here we create the properties of the class App, const for the database name, user, password and host
    private static $_instance; // Singleton instance
    private $_db_instance; // Database instance


   /**
    * getInstance function, this function is used to get the instance of the class App
    * @return 
    */
    public static function getInstance() // Singleton pattern
    {
        if (is_null(self::$_instance)) { // Check if instance is null
            // If it is, create a new instance  
            self::$_instance = new App();
        }
        return self::$_instance; // Return the instance
    }

    public static function load() // Method to load the class
    {
        session_start(); // Start the session
        require '../app/Autoloader.php'; // Require the Autoloader class from the app directory
        App\Autoloader::register(); // Register the autoloader  
        require '../core/Autoloader.php'; // Require the Autoloader class from the core directory
        Core\Autoloader::register(); // Register the autoloader  
    }

    public function getTable($name) // Method to get the table
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table'; // Create the class name
        return new $class_name($this->getDb()); // Return a new instance of the class
    }

    public function getDb() // Method to get the database connection
    {
        $config = Config::getInstance(ROOT . '/config/config.php'); // Get the config instance
        if (is_null($this->_db_instance)) { // Check if the database instance is null
            return new MysqlDatabase( // Return a new instance of the Database class
                $config->get('db_name'), // Get the database name
                $config->get('db_user'), // Get the database user
                $config->get('db_password'), // Get the database password
                $config->get('db_host') // Get the database host
            );
        }

        return $this->_db_instance; // Return the database instance
        
    }


}