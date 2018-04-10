<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

	
if(isset($_POST['active']))
	{
		$active='Activo';
	}
	else{
		$active = 'Inactivo';
	}

$stmt = $mysqli->prepare("INSERT INTO courses (name, description, value, type, active, class) VALUES (?,?,?,?,?,?)");

$stmt->bind_param('ssisss', $_POST['name'], $_POST['description'], $_POST['value'], $_POST['certification'],$active, $_POST['class']);


if ($stmt->execute() === TRUE) {
	$mysqli->close();
    header('Location: ../admincerts.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



			
       
   