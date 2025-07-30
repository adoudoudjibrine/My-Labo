<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * CategoryEntity class
 * 
 * This class represents a post entity
 * It extends the Entity class
 **/

class DepartementEntity extends Entity
{
	/**
	 * getUrl() function 
	 * This function returns the URL of the post
	 * public access
	 * @return void
	 */

    public function getUrl()
	{
		return 'index.php?p=departement.show&id=' . $this->id;
	}

	/**
	 * getExtrait() function 
	 * This function returns an excerpt of the post
	 * public access
	 * @return string
	 * This function returns a string containing the first 100 characters of the post content
	 */
	public function getExtrait()
	{
		$html = '<p>' . substr($this->description, 0, 20) . '... </p>';
		return $html;
	}

}