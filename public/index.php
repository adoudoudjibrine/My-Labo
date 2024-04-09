<?php

require '../app/Autoloader.php';

App\Autoloaer::register();

// Initialisation des objets
require '../app/Database.php';




if (isset($_GET['p']))
{
    $p = $_GET['p'];
}
else
{
    $p = 'home';
}

ob_start();

if ($p === 'home')
{
    require '../pages/home.php' ;
}
elseif ($p === 'article')
{
    require '../pages/article.php' ;
}

$content = ob_get_clean();
require '../pages/templates/default.php';