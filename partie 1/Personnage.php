<?php


class Personnage{

    private $vie = 80;
    private $atk = 20;
    private $nom;

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
            $this->vie = 100;
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