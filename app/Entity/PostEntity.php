<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * CategoryEntity class
 * 
 * This class represents a post entity
 * It extends the Entity class
 **/

class PostEntity extends Entity
{
	/**
	 * getUrl() function 
	 * This function returns the URL of the post
	 * public access
	 * @return void
	 */

    public function getUrl()
	{
		return 'index.php?p=posts.show&id=' . $this->id;
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
		$html = '<p>' . substr($this->contenu, 0, 100) . '... </p>';
		$html .= '<p> <a href="'.$this->getUrl() . '">Voir la suite </a></p>';
		return $html;
	}

}