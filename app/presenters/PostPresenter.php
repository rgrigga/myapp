<?php

// It is typically considered good practice to default 
// to the lowest visibility required as this promotes 
// data encapsulation and good interface design. 
// When considering member variable and method visibility 
// think about the role the member plays in the interaction 
// with other objects.

// http://stackoverflow.com/questions/4361553/php-public-private-protected

use Robbo\Presenter\Presenter;

class PostPresenter extends Presenter
{
	public function presentTags()
	{
		return $this->tags();
	}

	// public function presentAuthor()
	// {
	// 	return $this->author();
	// }

}