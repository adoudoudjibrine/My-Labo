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
		return 'index.php?p=parcours.show&id=' . $this->id; 
	}

	public function getExtrait()
	{
		$html = '<p>' . substr($this->description, 0, 20) . '... </p>';
		return $html;
	}

}  