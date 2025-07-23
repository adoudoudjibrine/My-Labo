<?php

use Core\Auth\DbAuth;

define('ROOT', dirname(__DIR__)); // Define the root directory

require ROOT .'/app/App.php'; // here we require the file Autoloader.php

App::load(); // here we register the autoloader

if(isset($_GET['p'])) { // here we check if the parameter p is set in the URL
    $page = $_GET['p']; // here we get the value of the parameter p
} else {
    $page = 'home'; // here we set the default value of the parameter p to home
} 

// Auth
$app = App::getInstance(); // here we get the instance of the App class
$auth = new DbAuth($app->getDb()); // here we get the instance of the DbAuth class
if (!$auth->logged()) { // here we check if the user is not logged in
    $app->forbidden(); // here we call the forbidden method of the App class
}  

ob_start(); // here we start the output buffer
// here we start the output buffer
if($page === 'home') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/articles/index.php'; // here we include the file home.php
} 
else if($page === 'posts.edit') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/articles/edit.php'; // here we include the file home.php
}
else if($page === 'posts.add') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/articles/add.php'; // here we include the file home.php
}
else if($page === 'posts.delete') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/articles/delete.php'; // here we include the file home.php
}
else if($page === 'categories.index') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/categories/index.php'; // here we include the file home.php
} 
else if($page === 'categories.edit') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/categories/edit.php'; // here we include the file home.php
}
else if($page === 'categories.add') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/categories/add.php'; // here we include the file home.php
}
else if($page === 'categories.delete') { // here we check if the value of the parameter p is home
    require ROOT . '/pages/admin/categories/delete.php'; // here we include the file home.php
}
else {
    App::getInstance()->notFound(); // here we call the notFound method of the App class
}

$content = ob_get_clean();

require ROOT . '/pages/Templates/default.php';