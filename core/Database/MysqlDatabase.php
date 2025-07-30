<?php

namespace Core\Database;
use PDO;
/**
 * Class Database
 * @package App
 */
class MysqlDatabase extends Database
{
    /**
     * @var string
     */
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    /**
     * Database constructor.
     * @param $db_name
     * @param string $db_user
     * @param string $db_pass
     * @param string $db_host
     */

    public function __construct($db_name, $db_user ="root", $db_pass="", $db_host="localhost")
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    /**
     * @return \PDO
     */
    // here we create a method that will return the pdo object
    private function getPDO()
    {
        // if the pdo is not set, we create a new one
        if ($this->pdo === null) {
            $pdo = new \PDO('mysql:dbname=these;host=localhost', 'root', '');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo; // 
        } // 
        return $this->pdo; // here we return the pdo object to the user and the function can called anytime we want to avoid to lose some memory 
    }

    /**
     * @param $statement
     * @param $class_name
     * @return array
     */
    /** 
     * @param $statement
     * @param null $class_name
     * @param bool $one
     */
    public function query($statement, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ){
            return $req; // here we return the result of the query if it is an update, insert or delete query
        }

        if ($class_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);   // here we set the fetch mode to fetch the object
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name); // here we set the fetch mode to fetch the class name
        }
        
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    /**
     * @param $statement
     * @param $attributes
     * @param $class_name
     * @param bool $one
     */
    // here we create a prepare method that will return the result of the query in an object
    public function prepare($statement, $attributes, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ){
            return $res; // here we return the result of the query if it is an update, insert or delete query
        }

        if ($class_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);   // here we set the fetch mode to fetch the object
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name); // here we set the fetch mode to fetch the class name
        }

        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    public function lastInsertId()
    {
        return $this->getPDO()->lastInsertId(); // here we return the last insert id of the query
    }

}