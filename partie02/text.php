<?php

/**
 * Classe text pour formatter un texte 
 */

class Text{

    private static $suffix = ' $';

    /**
     * Fonction pour formatter un nombre
     * @param int $chiffre
     * @return int
     */

    // public static function publicwithZero($chiffre)
    // {
    //     return self::withZero($chiffre);
    // }
    
    /**
     * Fonction pour formatter un nombre
     * @param int $chiffre
     * @return int
     */

    public static function withZero($chiffre)
    {
        if($chiffre < 10 )
        {
            return '0' . $chiffre . self::$suffix;
        }
        else{
            return $chiffre . self::$suffix;
        }
    }

}