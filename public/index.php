<?php

define('ROOT', dirname(__DIR__)); // Define the root directory

require ROOT .'/app/App.php'; // here we require the file Autoloader.php

App::load(); // here we register the autoloader

use App\Controller\EtudiantController; // here we import the PostsController class
use App\Controller\Admin\UsersController;

if(isset($_GET['p'])) { // here we check if the parameter p is set in the URL
    $page = $_GET['p']; // here we get the value of the parameter p
} else {
    $page = 'etudiant.index'; // here we set the default value of the parameter p to home
} 

$page = explode('.', $page); // here we split the value of the parameter p into an array
if($page[0] === 'admin') { // here we check if the first value of the array is admin
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller'; // here we create the name of the controller class by capitalizing the first letter of the second value of the array and adding Controller at the end
    $action =  $page[2]; // here we get the second value of the array or set it to index if it does not exist
} else {
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller'; // here we create the name of the controller class by capitalizing the first letter of the first value of the array and adding Controller at the end
    $action =  $page[1]; // here we get the second value of the array or set it to index if it does not exist
}

$controller = new $controller(); // here we create an instance of the controller class
$controller->$action(); // here we call the action method of the controller instance
