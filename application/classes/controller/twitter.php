<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twitter extends Controller_Template {

	public $template = 'twitter_page';

	// Twitter landing page.
	public function action_index()
	{
		// Retrieve session and check if the account has been good within the last minute.
		$session = Session::instance();
		if(($session->get('timestamp') + 60) < time()) {
			
			// Delete session
			$session->delete('timestamp');

			// Bump to homepage with message if timed out.
			$this->request->redirect('/?timeout=true');
		}
	}

	// Ajax controller for sending back latest tweets.
	public function action_twitter()
	{
		// Set up return data to be json
		$this->auto_render = false;
		$this->is_ajax = true;
		header('content-type: application/json');

		// Create twitter object.
		$twitter = new Model_Twitter;

		// Retrieve session and check if the account has been good within the last minute.
		$session = Session::instance();
		if(($session->get('timestamp') + 60) < time()) {

			// Delete session
			$session->delete('timestamp');

			// Send the ajax call the redirect code.
			echo json_encode(2);

		} else {

			// Reset session timestamp.
			$session->set('timestamp', time());

			// Check for handle and 
			if(isset($_POST['handle']))
			{
				// Get handle from post and remove any html tags.
				$handle = strip_tags($_POST['handle']);

				// Echo latest 5 tweets from given user.
				echo json_encode($twitter->get_tweets($handle));
			}
		}
	}
}
?>
