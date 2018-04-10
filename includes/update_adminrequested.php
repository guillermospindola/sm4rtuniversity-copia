<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

$userid = $_POST['mid'];
$courseid = $_POST['cid'];
$status = $_POST['status'];
$comments = $_POST['comments'];

$stmt = $mysqli->prepare("UPDATE courses_members SET status_solicitud= ?, comentarios_solicitud= ?  WHERE user_id = ? AND course_id = ?");

$stmt->bind_param('ssii', $_POST['status'], $_POST['comments'], $_POST['mid'], $_POST['cid']);

if ($stmt->execute() === TRUE) {
    
    header('Location: ../requests.php');
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();


			
       
   