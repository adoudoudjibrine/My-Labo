<?php

class BootstrapForm extends Form{

    /**
     * Undocumented function
     *
     * @param string $html Code html a entourer par le tag
     * @return string 
     */

     protected function surround($html)
     {
        return "<div class=\"form-group\"> $html </div>";
     }
 

    /**
     * @param string $name
     * @return string
     */

     public function input($name)
     {
         return $this->surround(
        '<label>' . $name . '</label>' .
         '<input 
             type="texte" 
             name="'. $name .'"
             value = "'. $this->getValue($name) .'" classe="form-control"
         >');
     }

     /**
     * @param   $name
     */

    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary"> Envoyer </button>');
    }
    
      
}