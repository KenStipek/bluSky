<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

	public $template = 'login_page';

	// Default login page.
	public function action_index()
	{
		$this->template->show_alert = false;
		$this->template->alert_data = '';

		// Check if param is stating that the user had timed out.
		if(isset($_GET['timeout'])) {
			if($_GET['timeout'] == 'true') {
				$this->template->show_alert = true;
				$this->template->alert_data = 'Your session has timed out, please log back in.';
			}
		}
	}

	// Controller action for doing logins via ajax.
	public function action_login()
	{
		$this->auto_render = false;
		$this->is_ajax = true;
		header('content-type: application/json');

		// Create new authentication object.
		$auth = new Model_Auth;

		// Get user provided login information
		if(isset($_POST['email']) && isset($_POST['password']))
		{
			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);

			// Check if user is authorized.
			if($auth->user($email, $password))
			{
				// Successfull Login
				// Set earliest session "check-in" time for current user.
				Session::instance()->set('timestamp', time());
				echo json_encode(0);
			
			} else {
				// Unsuccesfull login
				echo json_encode(1);
			}
		} else {
			echo json_encode(1);
		}
	}
}
