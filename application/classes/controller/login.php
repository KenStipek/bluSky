<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

	public $template = 'login_page';

	public function action_index()
	{
		$this->template->post_data = '/index.php/login/login'; //$this->request->uri(array('action' => 'login'));
	}

	public function action_login()
	{
		$auth = new Model_Auth;

		// Get user provided login information
		if(isset($_POST['email']) && isset($_POST['password']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			if($auth->user($email, $password))
			{
				// Successfull Login

				// Set earliest "check-in" time for current user.
				Session::instance()->set('timestamp', time());
				$this->request->redirect('/twitter');
			
			} else {
				// Unsuccesfull login
				echo json_encode('unauthorized');
			}
		} else {
			echo json_encode('unauthorized');
		}
	}

	public function action_logout()
	{
		// Get user provided login information

		// Check login information against model

		// If the login is correct, create session and re-direct to next page

		// If not, return json with message
	}

	public function action_session()
	{
		// Check if session is still valid

		// If not, redirect to login page with message
	}

	private function valid_email($email)
	{
		return true;
	}

} // End Welcome
