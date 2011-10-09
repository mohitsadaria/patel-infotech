<?php

	/**
	 * Key
	 *
	 * Key is a lightweight PHP5 page authentication class.
	 *
	 *@author Filipe Dobreira <dobreira@gmail.com>
	 *@version 1.0.0
	 *@package Key
	 */
	class Key
	{
		
		/**
		 * Key::$defaultConfig
		 *
		 * A path to the default configuration file.
		 *@access protected
		 *@var string $defaultConfig
		 */
		protected static $defaultConfig = 'Config.php';

		/**
		 * Key::$users
		 *
		 * An internal copy of valid user data credentials.
		 *@access protected
		 *@var array $users
		 */
		protected static $users = array();

		/**
		 * Key::$hashfunc
		 *
		 * A list of accepted hashing functions. These will
		 * only be passed a single argument, when used.
		 *@access protected
		 *@var array $hashfunc
		 */
		protected static $hashfunc = array(
			'md5', 
			'sha1'
		);

		/**
		 * Key::load
		 *
		 * User data credentials setter.
		 *@param array $users
		 *@param return bool
		 *@throws RuntimeException If users array is empty.
		 */
		public static function load(array $users)
		{
			if(!$users)
				throw new RuntimeException('No users defined - you must first define some users!');
			
			// Usernames are always treated as lower-case.
			self::$users = array_change_key_case($users, CASE_LOWER);
		}

		/**
		 * Key::user
		 *
		 * User data credentials getter.
		 *@param string $username
		 *@return array|false False if user does not exist.
		 */
		public static function user($username)
		{
			$username = strtolower($username);
			if(isset(self::$users[$username]))
				return self::$users[$username];
			
			return false;
		}

		/**
		 * Key::auth
		 *
		 * Validates a username/password pair against
		 * the stored credentials.
		 *@param string $username
		 *@param string $password
		 *@throws RuntimeException If malformed credentials.
		 *@throws RuntimeException If invalid hashing method.
		 *@return bool True if logged in.
		 */
		public static function auth($username, $password)
		{
			if(!$user = self::user($username))
				return false;

			// Special case for hashed passwords:
			if(is_array($user))
			{
				if(count($user) < 2)
					throw new RuntimeException("Malformed credentials for user '$username'");

				$hashMethod = $user[1]; // holds the hashing function's name
				$compare = $user[0];  // holds the hashed resource
				
				if(!in_array($hashMethod, self::$hashfunc))
					throw new RuntimeException("'$hashMethod' is not an accepted or valid hashing method.");

				// Run the input password through the hashing function:
				$password = $hashMethod($password);

			} else
				$compare = $user;

			return (0 === strcmp($password, $compare));
		}

		/**
		 * Key::md5
		 *
		 * Helper function, returns an array that Key::auth
		 * can understand when using hashed passwords.
		 *@param string $password
		 *@return string
		 */
		public static function md5($password)
		{
			return array($password, 'md5');
		}

		/**
		 * Key::sha1
		 *
		 * Helper function, returns an array that Key::auth
		 * can understand when using hashed passwords.
		 *@param string $password
		 *@return string
		 */
		public static function sha1($password)
		{
			return array($password, 'sha1');
		}

		/**
		 * Key::lock
		 *
		 * Drop-in method, locks the page and requests a
		 * username/password combo. Uses PHP's builtin
		 * sessions to keep track of who's logged in.
		 *
		 *@return bool|null True if user logged in.
		 */
		public static function lock()
		{
			// Check the session parameter:
			if(!isset($_SESSION))
				session_start();
		
			if(isset($_SESSION['key:ok']))
				return true;

			$username = isset($_POST['username']) ? $_POST['username'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;

			if(!$username || !$password)
				self::renderPage();

			// Check if the users file is loaded - it probably isn't -
			// then load it if necessary, from the default location.
			if(!self::$users)
				self::load(require self::$defaultConfig);

			// Successful login - set session data and be done with it.
			if(self::auth($username, $password))
			{
				$_SESSION['key:ok'] = true;
				return true;
			}
			else
				self::renderPage('Uh oh...', '<span class="e">Incorrect Credentials</span>');
		}

		/**
		 * Key::renderPage
		 *
		 * A compact render method for the login page.
		 * Note: quits execution of the php script.
		 *
		 *@param string $page_title
		 *@param string $page_header
		 */
		protected static function renderPage($page_title = 'Please log-in.', $page_header = 'Protected Page')
		{
			exit(
				'
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Key :: '. $page_title .'</title>
		<style type="text/css">
			body { height:100%; }
			body { background:#e0e0e0; color:#252525; font:16px Helvetica, Arial, Tahoma, sans-serif; }
			.r,input {-moz-border-radius:6px; -webkit-border-radius:6px; border-radius:6px;}
			#w { 
				width:480px; margin:90px auto; padding:10px; background:white; 
				border:1px solid #b4baba; -moz-box-shadow:0 1px 0 #e9f1f2; -webkit-box-shadow:0 1px 0 #e9f1f2;
				box-shadow:0 1px 0 #e9f1f2;
			}
			h1 { margin:3px 0; font-size: 24px; color:#808282; font-weight:normal; }
			#h {font-size:11px; margin-bottom:10px; }
			#f { background:#f4f4f4; border:1px solid #dcdcdc; padding:10px 5px; }
			input { 
				display:block; width:450px; font:inherit; padding:6px; border:1px solid #dcdcdc;
				font-weight:bold; margin-bottom:5px; color:inherit;
			}
			.s { width:463px; margin-top:15px; cursor:pointer; -moz-box-shadow:0 1px 0 #dcdcdc;} 
			.s:hover { background:white;}
			input:hover, input:focus { border-color:#c9c9c9; }
			label { font-size:11px; text-shadow:0 1px 0 white; color:#7e7e7e; }
			.e { color:red; font-weight:bold; }
		</style>
	</head>
	<body>
		<div id="w" class="r">
			<div id="h">
				<h1>' . $page_header . '</h1>
				Please log-in to continue.
			</div>
			<form method="post" id="f" class="r">
				<label for="username">Username:</label>
				<input type="text" name="username">
				<label for="password">Password:</label>
				<input type="password" name="password">
				<input type="submit" value="Log-in" class="s">
			</form>
		</div>
	</body>
</html>
				'
			);
		}
	}