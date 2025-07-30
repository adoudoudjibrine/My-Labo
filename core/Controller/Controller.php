<?php

namespace Core\Controller;  

class Controller
{
    public $title = "Gestion des Theses"; // Title of the blog

    protected $viewPath;
    protected $template;

    public function render($view, $variables = [])
    {
        ob_start();

        extract($variables);

        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbidden()
    {
        header("HTTP/1.0 403 Forbidden");
        die('Accès interdit'); // Stop the script and display an error message
        // You can also redirect to a forbidden page
        header('Location:index.php?p=forbidden');
    }

    protected static function notFound()
    {
        header("HTTP/1.0 404 Not Found "); 
        die('Page non trouvée'); // Stop the script and display an error message
        // You can also redirect to a 404 page
        header('Location:index.php?p=404');
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public function setTitle ($title)
    {
        return $this->title = $title ;
    }

}