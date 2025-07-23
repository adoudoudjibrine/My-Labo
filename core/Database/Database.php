<?php

namespace Core\Database;


/**
 * Abstract Database class
 * @package Core\Database
 */
abstract class Database
{
    /**
     * Execute a SQL query and return the results
     * @param string $statement SQL query to execute
     * @param string|null $class_name Class name to use for results
     * @param bool $one Whether to return a single result
     * @return array|object Query results
     */
    abstract public function query($statement, $class_name = null, $one = false);

    /**
     * Prepare and execute a SQL statement with parameters
     * @param string $statement SQL statement to prepare
     * @param array $attributes Parameters for the statement
     * @param string $class_name Class name to use for results
     * @param bool $one Whether to return a single result
     * @return array|object Query results
     */
    abstract public function prepare($statement, $attributes, $class_name, $one = false);


}