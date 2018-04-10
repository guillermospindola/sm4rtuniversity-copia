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


$stmt = $mysqli->prepare("INSERT INTO courses_members(course_id, user_id, active, suma, solicitado, fecha_solicitud, status_solicitud) VALUES (?, ?,'Inactivo', 'si', 'si', ?,'Revisión') ON DUPLICATE KEY UPDATE solicitado='si', fecha_solicitud=?, status_solicitud='Revisión', comentarios_solicitud=' '");

$stmt->bind_param('iiss',$_GET['id'],$_SESSION['id'],$date,$date);



if ($stmt->execute() === TRUE) {
    
    header('Location: ../'.$_GET['type'].'.php');
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
updateSuds($_POST['userid'], $mysqli);
updateYearSuds($_POST['userid'], $mysqli);
$mysqli->close();


			
       
   