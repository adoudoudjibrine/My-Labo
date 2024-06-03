<?php

/**
 * Class Arche pour les arches 
 */

 class Arche extends Personnage{

    /*/**
     * variable definissant la dure de vie de l'arche
     * @var int Definir la vie de l'arche
     */
    public $vie = 80;

    public function attaque($cible)
    {
        $cible->vie -= $this->atk; 
        parent::attaque($cible);
    }   

 }