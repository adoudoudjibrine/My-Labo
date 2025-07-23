<?php

namespace Core\HTML;

class BootstrapForm extends Form{

    /**
     * Undocumented function
     *
     * @param string $html Code html a entourer par le tag
     */

    protected function surround($html)
    {
        return "<div class=\"form-group\"> $html </div>";
    }
 

    /**
     * @param string $name
     */

    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label for="' . $name . '">' . $label . '</label>';
        $input = '<input type="'. $type .'" class="form-control" name="'. $name .'" value = "'. $this->getValue($name) .'" classe="form-control" >';
        if ($type === 'textarea') {
            $input = '<textarea class="form-control" name="'. $name .'" >'. $this->getValue($name) .'</textarea>';
        }
        else {
            $input = '<input type="'. $type .'" class="form-control" name="'. $name .'" value = "'. $this->getValue($name) .'" classe="form-control" >';
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options)
    {
        $label = '<label for="' . $name . '">' . $label . '</label>';
        $input = '<select class="form-control" name="'. $name .'">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }   
            $input .= "<option value='$k' $attributes> $v </option>";   
        }

        $input .= '</select>';

        return $this->surround($label . $input);
    }

    /**
     * @param   $name
     */

    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary"> Envoyer </button>');
    }
    
      
}