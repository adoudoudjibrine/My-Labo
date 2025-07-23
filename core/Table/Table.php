<?php

namespace Core\Table;
 
use Core\Database\Database; // Import the Database class

class Table
{

    protected $table; // Table name 
    protected $db; // Database instance

    public function __construct(Database $db)
    { 
        $this->db = $db; // Database instance
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this)); // Get the class name
            $class_name = end($parts); // Get the table name
            $this->table = strtolower(str_replace('Table', '', $class_name)); // Remove the Table from the class name 
        }    
    } 

    public function all()
    {
        return $this->query('SELECT * FROM ' . $this->table); // Get all the data from the table
    }

    public function find($id) 
    {
        return $this->query('
            SELECT * 
            FROM ' . $this->table  . '
            WHERE id = ? ', 
            [$id], 
            true
        );
    }

    public function create($fields) 
    {
        $sql_parts = [];
        $attributes = [];

        foreach($fields as $k => $v ){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts); // Join the sql parts with a comma
        return $this->query("
            INSERT INTO  {$this->table}  
            SET $sql_part", 
            $attributes, 
            true
        );
    }

    public function update($id, $fields) 
    {
        $sql_parts = [];
        $attributes = [];

        foreach($fields as $k => $v ){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id; // Add the id to the attributes array
        $sql_part = implode(', ', $sql_parts); // Join the sql parts with a comma
        return $this->query("
            UPDATE  {$this->table}  
            SET $sql_part
            WHERE id = ? ", 
            $attributes, 
            true
        );
    }

    public function delete($id) 
    {
        return $this->query("
            DELETE FROM  {$this->table}  
            WHERE id = ? ", 
            [$id], 
            true
        );
    }

    public function extract ($key, $values)
    {
        $records = $this->all();
        $return = [];
        foreach($records as $v)
        {
            $return[$v->$key] = $v->$values;
        }
        return $return;
    }

    public function query($statement, $attributes = null, $one = false)
    {
        if ($attributes)
        {
            return $this->db->prepare(
                $statement,
                $attributes, 
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
        else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }  
    }

}