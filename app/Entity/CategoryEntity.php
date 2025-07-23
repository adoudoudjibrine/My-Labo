<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * CategoryEntity class
 */

class CategoryEntity extends Entity
{
	/**
	 * Get the URL of the category	
	 * @return string
	 * This method returns the URL of the category
	 * public accces	
	 */

    public function getUrl()
	{
		return 'index.php?p=posts.category&id=' . $this->id;
	}

}  