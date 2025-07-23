<?php

namespace App\Controller;

use App;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct(); // Call the parent constructor to set up the view path
        $this->loadModel('Post'); // Load the Post model
        $this->loadModel('Category'); // Load the Category model
    }

    public function index()
    {
        
    }

    public function category()
    {
        
        $categorie = $this->Category->find($_GET['id']);  // get the category by their id

        /**
         * check if the category exists
         * If not, redirect to the 404 page
         */
        if ($categorie === false) {
            $this->notFound();
        }

        $articles = $this->Post->lastByCategory($_GET['id']); // get the last articles by category
        $categories = $this->Category->all();  // get all categories
        // SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie

        $this->title = $categorie->titre;  // set the title of the page

        $this->render('posts.category', compact('categorie', 'articles', 'categories')); // Render the view with the category and articles data
        // compact('categorie', 'articles', 'categories'); C'est pareil pour le second paramètre de render

    }

    public function show()
    {
        $article = $this->Post->findWithCategory($_GET['id']); // Fetch the post with its category by ID
        $this->render('posts.show', [
            'post' => $article
        ]);
    }

    public function create()
    {
        // Code to create a new post
    }

    public function edit($id)
    {
        // Code to edit an existing post by ID
    }

    public function delete($id)
    {
        // Code to delete a post by ID
    }

   
}

