<?php
require('http.php');
require('oauth_client.php');
require('config.php');
include_once 'db_connect.php';

$cero = 0;
$uno = 1;
$cinco=5;
$plataforma = 'platform';
$language = 'spanish';
$roles = 'a:0:{}';
$fechaActual = date('m/d/Y h:i:sa');

$client = new oauth_client_class;

// set the offline access only if you need to call an API
// when the user is not present and the token may expire
$client->offline = FALSE;

$client->debug = false;
$client->debug_http = true;
$client->redirect_uri = REDIRECT_URL;

$client->client_id = CLIENT_ID;
$application_line = __LINE__;
$client->client_secret = CLIENT_SECRET;

if (strlen($client->client_id) == 0 || strlen($client->client_secret) == 0)
  die('Please go to Google APIs console page ' .
          'http://code.google.com/apis/console in the API access tab, ' .
          'create a new client ID, and in the line ' . $application_line .
          ' set the client_id to Client ID and client_secret with Client Secret. ' .
          'The callback URL must be ' . $client->redirect_uri . ' but make sure ' .
          'the domain is valid and can be resolved by a public DNS.');

/* API permissions
 */
$client->scope = SCOPE;
if (($success = $client->Initialize())) {
  if (($success = $client->Process())) {
    if (strlen($client->authorization_error)) {
      $client->error = $client->authorization_error;
      $success = false;
    } elseif (strlen($client->access_token)) {
      $success = $client->CallAPI(
              'https://www.googleapis.com/oauth2/v1/userinfo', 'GET', array(), array('FailOnAccessError' => true), $user);
        $mail = explode("@", $user->email);
        $nombre = explode(" ", $user->name);

        $lastname = array($nombre[0], $nombre[1]);
        $firstname = array($nombre[2], $nombre[3]);

        $join1 = join(' ', $lastname);
        $join2 = join(' ', $firstname);
			 /*if($mail[1] != 'sm4rt.com')
			 {
				session_destroy();
				header("location:../index.php");
			 }*/
    }
  }
  $success = $client->Finalize($success);
}
if ($client->exit)
  exit;
if ($success) {
  // Now check if user exist with same email ID
  $sql = "SELECT COUNT(*) AS count from members where email = :email_id";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":email_id", $user->email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      // User Exist 
	  
	   $sql = "UPDATE members SET name=:name, picture=:picture WHERE email=:email";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":name", $user->name);
	  $stmt->bindValue(":email", $user->email);
	  $stmt->bindValue(":picture", $user->picture);
      $stmt->execute();

      $_SESSION["name"] = $user->name;
      $_SESSION["email"] = $user->email;
      $_SESSION["new_user"] = "no";
	  
	  $namearray = explode(" ", $user->name);
	  $_SESSION["nameshort"] = $namearray[0] ;
	  
	  $sql = "SELECT picture, direccion, role, id 		
	  FROM members WHERE email='".$user->email."'";
		$query = mysqli_query($mysqli, $sql); 
		$row = mysqli_fetch_array($query);
					$_SESSION['picture']=$row['picture'];
					$_SESSION['direccion']=$row['direccion'];
					$_SESSION['rol']=$row['role'];
					$_SESSION['id']=$row['id'];
					$_SESSION['uid']=$row['id'];
					
    } else {
      // New user, Insert in database
      $sql = "INSERT INTO members (name, email, picture) VALUES (:name, :email, :picture)";
      $stmt = $DB->prepare($sql);
      $stmt->bindParam(":name", $user->name);
      $stmt->bindParam(":email", $user->email);
	  $stmt->bindParam(":picture", $user->picture);
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["name"] = $user->name;
        $_SESSION["email"] = $user->email;
		$_SESSION["picture"] = $user->picture;
        $_SESSION["new_user"] = "yes";
        $_SESSION["e_msg"] = "";
      }
	  
    }
	
  } catch (Exception $ex) {
    $_SESSION["e_msg"] = $ex->getMessage();
  }

  $_SESSION["user_id"] = $user->id;

  //AQUI--------------------------------------------------------------------
  $sql = "SELECT COUNT(*) AS count from user where email = :email_id";
  try {
    $stmt = $DB2->prepare($sql);
    $stmt->bindValue(":email_id", $user->email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      // User Exist in CHAMILO
	  
	   $sql = "UPDATE user SET username=:name, username_canonical=:canonical, email_canonical=:ecanonical, 
     email=:email, picture_uri=:picture WHERE email=:email";
      $stmt = $DB2->prepare($sql);
      $stmt->bindValue(":name", $mail[0]);
      $stmt->bindValue(":canonical", $mail[0]);
      $stmt->bindValue(":ecanonical", $user->email);
      $stmt->bindValue(":email", $user->email);
	    $stmt->bindValue(":picture", $user->picture);
      $stmt->execute();
					
    } else {
      // New user, Insert in CHAMILO database
      $sql = "INSERT INTO user (username, username_canonical, email_canonical, email, locked, enabled, 
      expired, credentials_expired, lastname, firstname, password, auth_source, status, picture_uri, 
      creator_id, language, registration_date, active, hr_dept_id, roles) 
      VALUES (:username, :username_canonical, :email_canonical, :email, :locked, :enabled, :expired, 
      :credentials_expired, :lastname, :firstname, :password, :auth_source, :status, 
      :picture_uri, :creator_id, :language, :registration_date, :active, :hr_dept_in, :roles)";
      $stmt = $DB2->prepare($sql);
      $stmt->bindParam(":username", $mail[0]);
      $stmt->bindParam(":username_canonical", $mail[0]);
      $stmt->bindParam(":email_canonical", $user->email);
      $stmt->bindParam(":email", $user->email);
      $stmt->bindParam(":locked", $cero);
      $stmt->bindParam(":enabled", $uno);
      $stmt->bindParam(":expired", $cero);
      $stmt->bindParam(":credentials_expired", $cero);
      $stmt->bindParam(":lastname", $join1);
      $stmt->bindParam(":firstname", $join2);
      /*$stmt->bindParam(":lastname", $join1);
      $stmt->bindParam(":firstname", $join2);*/
      $stmt->bindParam(":password", password_hash($user->email, PASSWORD_BCRYPT));
      $stmt->bindParam(":auth_source", $plataforma);
      $stmt->bindParam(":status", $cinco);
      $stmt->bindParam(":picture_uri", $user->picture);
      $stmt->bindParam(":creator_id", $uno);
      $stmt->bindParam(":language", $language);
      $stmt->bindParam(":registration_date", $fechaActual);
      $stmt->bindParam(":active", $uno);
      $stmt->bindParam(":hr_dept_in", $cero);
      $stmt->bindParam(":roles",$roles);
      $stmt->execute();
      $result = $stmt->rowCount();
      /*if ($result > 0) {
        $_SESSION["name"] = $user->name;
        $_SESSION["email"] = $user->email;
		$_SESSION["picture"] = $user->picture;
        $_SESSION["new_user"] = "yes";
        $_SESSION["e_msg"] = "";
      }*/
      $sql = "UPDATE user SET user_id = id;";
      $stmt = $DB2->prepare($sql);
      $stmt->execute();	  
    }
	
  } catch (Exception $ex) {
    $_SESSION["e_msg"] = $ex->getMessage();
  }

  $_SESSION["user_id"] = $user->id;

} else {
  $_SESSION["e_msg"] = $client->error;
}
header("location:../profile.php");
exit;
?>