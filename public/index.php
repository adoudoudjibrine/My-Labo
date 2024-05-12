<?php
session_start();

require '../app/Autoloader.php';

App\Autoloaer::register();

$app = App\App::getInstance();

$app->title = "titre de test ";


