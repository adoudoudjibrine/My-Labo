<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * CategoryEntity class
 */

class ParcoursEntity extends Entity
{
	/**
	 * Get the URL of the category	
	 * @return string
	 * This method returns the URL of the category
	 * public accces	
	 */

    public function getUrl()
	{
		return 'index.php?p=etudiant.parcours&id=' . $this->id;
	}

}  