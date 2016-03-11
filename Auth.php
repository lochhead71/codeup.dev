<?php

require_once 'Log.php';

class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password)
	{
		if ($username == 'guest' &&  password_verify($Password) == self::password) {
			$_SESSION['LOGGED_IN_USER'] = $username;
			$log = new Log();
			$log->info("User $username is logged in.");
		} else {
			$log = new Log();
			$log->error("User $username failed to log in!");
		}
	}

	public static function check()
	{
		isset($_SESSION['LOGGED_IN_USER'];
	}

	public static function user()
	{
		$username = $_SESSION['LOGGED_IN_USER'];
		return $username;
	}

	public static function logout()
	{
		clearSession();
		header('location: /login.php');
		die();
	}
}