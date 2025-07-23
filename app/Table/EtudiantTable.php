<?php

namespace App\Table; // here we define the namespace of the class App

use Core\Table\Table; // Import the Table class


class EtudiantTable extends Table
{

    protected $table = 'etudiant';

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
            FROM etudiant 
        ");
    }

     /**
      * find an article by id
      * returns the article with the given id and its category
      * @param [type] $id
      * @return void
      * public access
      */

    public function findWithCategory($id)
    {
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles 
            LEFT JOIN categories 
                ON category_id = categories.id
            WHERE articles.id = ?",
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