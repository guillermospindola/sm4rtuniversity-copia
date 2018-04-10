<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

$user = $_GET['uid'];
 $course= $_GET['cid'];
 $value = 'no';
 

			$stmt = $mysqli->prepare("UPDATE courses_members SET solicitado=? WHERE user_id=? AND course_id=?");
            $stmt->bind_param('sii',$value,$user,$course);

if ($stmt->execute() === TRUE) {
	
  header('Location: ../my-requests.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();

			
       
   ?>
       
   