<?php

namespace App\Table; // here we define the namespace of the class App

use Core\Table\Table; // Import the Table class


class DepartementTable extends Table
{

    protected $table = 'departement';

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
            FROM departement 
        ");
    }

     /**
      * find an article by id
      * returns the article with the given id and its category
      * @param [type] $id
      * @return void
      * public access
      */

    public function findWithEtablissement($id)
    {
        return $this->query("
            SELECT departement.id, departement.intitule, departement.code, departement.description, etablissement.intitule as etablissement
            FROM departement 
            LEFT JOIN etablissement 
                ON etablissement_id = etablissement.id
            WHERE departement.id = ?",
            [$id],
            true
        );
    }

    /**
     * Get the last articles by category
     * returns the last articles by category
     * @param [type] $category_id
     * @return void
     * public access
     * @throws \Core\table\TableException
     */

    public function lastByCategory($category_id)
    {
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles 
            LEFT JOIN categories 
                ON category_id = categories.id
            WHERE articles.category_id= ?
            ORDER BY articles.date DESC",
            [$category_id]
        );
    }

} 