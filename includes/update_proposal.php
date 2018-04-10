<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}


$stmt = $mysqli->prepare("UPDATE proposals SET status=?, name=?, ganador=?, description=?,leader=?, member1=?, member2=?, value=? WHERE id=?");
$stmt->bind_param('sssssssii',$_POST['status'],$_POST['name'],$_POST['ganador'],$_POST['description'],$_POST['leader'],$_POST['member1'],$_POST['member2'],$_POST['value'],$_POST['id']);


if ($stmt->execute() === TRUE) {
    
	$leaderid=getId($_POST['leader'], $mysqli);
$member1id=getId($_POST['member1'], $mysqli);
$member2id=getId($_POST['member2'], $mysqli);

updateSuds($leaderid, $mysqli);
updateSuds($member1id, $mysqli);
updateSuds($member2id, $mysqli);
updateYearSuds($leaderid, $mysqli);
updateYearSuds($member1id, $mysqli);
updateYearSuds($member2id, $mysqli);
header('Location: ../adminprojects.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$mysqli->close();

			
       
   