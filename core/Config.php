<?php

namespace Core;



class Config
{
    private $settings = []; // Array to hold configuration settings
    private static $_instance ; // Singleton instance

    public static function getInstance($file) // Singleton pattern
    {
        if (is_null(self::$_instance)) { // Check if instance is null
            // If it is, create a new instance  
            self::$_instance = new Config($file); // Pass the configuration file to the constructor
        }
        return self::$_instance; // Return the instance
    }
    

    public function __construct($file)
    {
        $this->settings = require($file); // Load the configuration settings from the specified file
    }

    public function get($key) // Method to get a configuration setting
    {
        if (array_key_exists($key, $this->settings)) { // Check if the key exists in the settings array
            return $this->settings[$key]; // Return the value associated with the key
        }
        return null; // Return null if the key does not exist
    }

    
}