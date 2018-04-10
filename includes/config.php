<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'Login System with Google using OAuth PHP and MySQL - www.thesoftwareguy.in');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'sm4rtuniversity');
//Constantes para la conexión con la base de datos de Chamilo
define('DRIVER_CHAMILO', 'mysql');
define('SERVER_CHAMILO', 'localhost');
define('SERVER_USERNAME_CHAMILO', 'root');
define('SERVER_PASSWORD_CHAMILO', '');
define('DATABASE_CHAMILO', 'chamilo');

$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}
//Creación de objeto para trabajar con la base de datos de chamilo 
try {
  $DB2 = new PDO(DRIVER_CHAMILO . ':host=' . SERVER_CHAMILO . ';dbname=' . DATABASE_CHAMILO, SERVER_USERNAME_CHAMILO, SERVER_PASSWORD_CHAMILO, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}

/* make sure the url end with a trailing slash */
define("SITE_URL", "http://localhost:8080/sm4rtuniversity/");
/* the page where you will be redirected for authorzation */
define("REDIRECT_URL", SITE_URL."includes/google_login.php");

/* * ***** Google related activities start ** */
define("CLIENT_ID", "59929663330-hlsccvk911arbpk5fr3951fo8js2ngaj.apps.googleusercontent.com");
define("CLIENT_SECRET", "Jz-g-bOjMykzr6yGPsdnBeDx");

/* permission */
define("SCOPE", 'https://www.googleapis.com/auth/userinfo.email '.
		'https://www.googleapis.com/auth/userinfo.profile' );



/* logout both from google and your site **/
define("LOGOUT_URL", "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=". urlencode(SITE_URL."includes/logout.php"));
/* * ***** Google related activities end ** */
?>