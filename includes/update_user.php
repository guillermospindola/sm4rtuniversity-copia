<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

$date = date("Y-m-d");

foreach ($_SESSION['course'] as $course)
{
	if(isset($_POST[$course]))
	{
		$check="Activo";
		
	}
	else{
		$check="Inactivo";
		
	}
	
$stmt = $mysqli->prepare("INSERT INTO courses_members(course_id, user_id, active, added, suma) VALUES (?,?,?,?,'si') ON DUPLICATE KEY UPDATE active=?");
$stmt->bind_param('iisss',$course,$_POST['userid'],$check,$date,$check);

	
	if ($stmt->execute() === TRUE) {
   
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

foreach ($_SESSION['cert'] as $cert)
{
	if(isset($_POST[$cert]))
	{
		$check="Activo";
	}
	else{
		$check="Inactivo";
	}

	$stmt = $mysqli->prepare("INSERT INTO courses_members(course_id, user_id, active, added, suma) VALUES (?,?,?,?,'si') ON DUPLICATE KEY UPDATE active=?");
$stmt->bind_param('iisss',$cert,$_POST['userid'],$check,$date,$check);
	
	
	if ($stmt->execute() === TRUE) {
    
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

updateSuds($_POST['userid'], $mysqli);
updateYearSuds($_POST['userid'], $mysqli);
	   //$email = getEmail($_POST['userid'], $mysqli);
	   
	   
	   header('Location: ' . $_SERVER["HTTP_REFERER"] );
	

   