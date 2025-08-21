<?php

namespace App\Table; // here we define the namespace of the class App


use Core\Table\Table; // Import the Table class

/**
 * CategoryTable class
 */

class ParcoursTable extends Table
{
    
    protected $table = 'parcours';  // the name of the table in the database

 /**
     * Get the last articles
     * returns the last articles
     * @return array
     * @throws \Exception
     * public access
     * @throws \Core\table\TableException
     */
     
    public function last()
    {
        return $this->query("
            SELECT *
            FROM parcours 
        ");
    }

     /**
      * find an article by id
      * returns the article with the given id and its category
      * @param [type] $id
      * @return void
      * public access
      */

    public function findWithDepartement($id)
    {
        return $this->query("
            SELECT parcours.id, parcours.intitule, parcours.code, parcours.description, departement.intitule as departement
            FROM parcours 
            LEFT JOIN departement 
                ON departement_id = departement.id
            WHERE departement.id = ?",
            [$id],
            true
        );
    }

}