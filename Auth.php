<?php

require_once 'Log.php';

class Auth
{
	public static $username;
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	// compares static::$username to provided input - returns boolean and initiates log

	public static function attempt($username, $password)
	{
		$log = new Log();
		if ($username == 'guest' &&  password_verify($password, self::$password))
		{
			$_SESSION['LOGGED_IN_USER'] = $username;
			$log->info("User $username is logged in.");
		} else {
			$log->error("User $username failed to log in!");
		}
	}

	// checks to see if there is a logged-in user

	public static function check()
	{
		return isset($_SESSION['LOGGED_IN_USER']);
	}

	// returns $username if user is logged in
	public static function user()
	{
		if (self::check())
		{
			return $_SESSION['LOGGED_IN_USER'];
		}
	}

	public static function logout()
	{
	    session_unset();
	    session_regenerate_id(true);
	}
}