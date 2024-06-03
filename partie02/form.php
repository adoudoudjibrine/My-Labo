<?php

/**
 * Class Form 
 * permet de generer des formulaires 
 */
class Form{

    /**
     * @var [array]
     * Donnees utilisees par le formulaire 
     */
    private $data;

    /**
     * le Tag utilise pour entourer les champs
     * @var string
     */
    public $surround = 'p';

    /**
     * @param  array $data
     */

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * Undocumented function
     *
     * @param string $html Code html a entourer par le tag
     * @return string 
     */

    protected function surround($html)
    {
       return "<{$this->surround}> $html </{$this->surround}>";
    }

    /**
     * @param string $index index de la valeur a recuperer
     * @return int 
     */

    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param string $name
     * @return string
     */

    public function input($name)
    {
        return $this->surround(' 
        <input 
            type="texte" 
            name="'. $name .'"
            value = "'. $this->getValue($name) .'"
        >');
    }

    /**
     * @param   $name
     */

    public function submit()
    {
        return $this->surround('<button type="submit"> Envoyer </button>');
    }
    
}