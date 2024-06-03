<?php


class Personnage{

    protected $vie = 90;
    protected $atk = 10;
    protected $nom;

    const MAX_VIE = 100;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return 'Mme/Mlle/Mr ' . $this->nom;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function setNom($nom)
    {
        return $this->nom;
    }

    public function setVie($vie)
    {
        return $this->vie;
    }

    public function setAtk($atk)
    {
        return $this->atk;
    }

    public function regenerer($vie = null)
    {   
        if(is_null($vie))
        {
            $this->vie = self::MAX_VIE;
        }
        else
        {
            $this->vie =  $this->vie + $vie;
        }
        
    }

    public function mort()
    {
        if($this->vie <= 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk; 
    }

}