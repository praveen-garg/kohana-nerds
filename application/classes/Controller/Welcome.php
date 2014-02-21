<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$tutorial_url = URL::base() . 'index.php/rating';
		$this->response->body('Welcome, Oh! looking for bootstrap and tutorial stuff? <a href="'. $tutorial_url .'">then click me</a>');
	}

} // End Welcome
