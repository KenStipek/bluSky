<?php

class Model_Twitter extends Model
{
	// Twitter app API information, I would normally store these in an environmental variable on the server.
	private $consumer_key = 'AAFex7oEaltXqizsYtoQ';
	private $consumer_secret = 'u8IxB021U22Q9rs8jQYsV7pO63lHr9QJOvL8VrFxNus';
	private $access_token = '432171841-6VRM0Nz066NIdZ6QMyMQN3ZRdZujSzrQhMDpZbwF';
	private $access_token_secret = '3323kT4L244Gp8gzsCfGqv5naKjeuL35Qq27XYtjrc';

	// Method for retrieving, pretty much just a copy of the exmpales from the plugin I am using - https://github.com/themattharris/tmhOAuth
	public function get_tweets($handle) {
		if(!empty($handle) && $handle != 'Twitter%20Username') {
			$tmhOAuth = new tmhOAuth(array(
				'consumer_key'    => $this->consumer_key,
				'consumer_secret' => $this->consumer_secret,
				'user_token'      => $this->access_token,
				'user_secret'     => $this->access_token_secret,
				'curl_ssl_verifypeer'   => false
			));

			$code = $tmhOAuth->request('GET', $tmhOAuth->url('1/statuses/user_timeline'), array(
				'include_entities' => '1',
				'include_rts'      => '1',
				'screen_name'      => $handle,
				'count'            => 5,
			));

			if($code == 200)
			{
				$tweets = array();
				$timeline = json_decode($tmhOAuth->response['response'], true);
				foreach ($timeline as $tweet) {
					$entified_tweet = tmhUtilities::entify_with_options($tweet);
					$tweets[] = $entified_tweet;
				}
				return $tweets;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}
