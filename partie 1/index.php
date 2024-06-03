<?php

require 'Personnage.php';

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');


$merlin->attaque($harry);

var_dump($merlin);
var_dump($harry);

if($harry->mort() === true )
{
    echo $harry->getNom() . ' est mort :(';
}
else
{
    echo $harry->getNom() . ' a survecu avec ' . $harry->getVie() .' de vies';
}
