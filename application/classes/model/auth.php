<?php

class Model_Auth extends Model
{

	private $user_email = 'test@test.com';
	private $user_password_encrypted = 'salttest';

    public function user($email, $password)
    {
        return $this->valid_password($email, $password);
    }

	private function valid_password($email, $password)
	{
		// This is where I would get the user data from the database.
		if(($encrypted_password = $this->get_user_encrypted_password($email)))
		{
			if($this->encrypt($password) == $this->user_password_encrypted)
			{
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}


	private function get_user_encrypted_password($email)
	{
		if($email == $this->user_email)
		{
			return $this->user_password_encrypted;
		} else {
			return false;
		}
	}

	private function encrypt($password)
	{
		return 'salt' . $password;
	}

}

?>
