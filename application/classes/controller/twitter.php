<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twitter extends Controller_Template {

	public $template = 'twitter_page';

	public function action_index()
	{
		$session = Session::instance();
		$this->template->session_data = $session->get('timestamp');
	}
}
?>
