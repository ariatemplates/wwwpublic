<?php
define('OS_Unix','u');
define('OS_Windows','w');
define('OS_Mac','m');

class Env {

	public static $subdomain;
	public static $user;
	public static $passwd;
	public static $host;
	public static $bdd;

	public static $isProd;
	public static $os_local;

	public static $manifestUrl;

	public static function init() {

		$host = $_SERVER['HTTP_HOST'];
		if (mb_substr($host, 0, 5)  == 'local') {
			error_reporting(E_ALL);
			self::$isProd = false;

			self::$subdomain = '';
			self::$user = 'root';
			self::$passwd = '';
			self::$host = '127.0.0.1';
			self::$bdd = '';
			self::$os_local = OS_Windows;

			Env::$manifestUrl = 'https://raw.githubusercontent.com/ariatemplates/documentation-code/master/manifest.json';

		} else {
			self::$isProd = true;

			self::$subdomain = '';
			self::$user = '';
			self::$passwd = '';
			self::$host = '';
			self::$bdd = '';
			self::$os_local = OS_Unix;

			Env::$manifestUrl = 'https://raw.githubusercontent.com/ariatemplates/documentation-code/master/manifest.json';

		}
	}
}

Env::init();

?>
