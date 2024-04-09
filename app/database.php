<?php

namespace App;

use \PDO;

class Database 
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass ='', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO()
    {
        if ($this->pdo === null)
        {
            $pdo = new PDO('mysql:dbname=blog; host=localhost','root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            // var_dump('PDO initialise called');
        }
        // var_dump('getPDO called');
        return $this->pdo;

    }
 
    public function query($statement, $class_name)
    {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        // var_dump($datas);die(); 
        return $datas; 
    }
   
    public function prepare($stmt, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($stmt);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one)
        {
            $datas = $req->fetch();
        }
        else
        {
            $datas = $req->fetchAll();
        }
        
        return $datas;
    }


}


?> 