<?php

class Model_Auth extends Model
{
	// Stored user information (as if it was in the database).
	private $user_email = 'test@test.com';
	private $user_password_encrypted = 'salttest';

	// Public facing user authentication method, true or false based on user information matching.
    public function user($email, $password)
    {
        return $this->valid_password($email, $password);
    }

	// Private method for checking if the user is valid, and they have supplied a valid password.
	private function valid_password($email, $password)
	{
		// This is where I would get the user data from the database.
		if(($encrypted_password = $this->get_user_encrypted_password($email)))
			// Check password
			return ($this->encrypt($password) == $this->user_password_encrypted);
		else
			// If there was no user.
			return false;
	}

	// Returns the user's encrypted password from email address. We would do some sanitizing here if we were using a database.
	private function get_user_encrypted_password($email)
	{
		if($email == $this->user_email)
			return $this->user_password_encrypted;
		else
			return false;
	}

	// Fake password encryption.
	private function encrypt($password)
	{
		return 'salt' . $password;
	}
}
