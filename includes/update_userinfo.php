<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

		
$stmt = $mysqli->prepare("UPDATE members SET numero_empleado=?, direccion=?, cursos_impartidos=?, combo=?, abroad=?, bomberazo=? WHERE id=?");
$stmt->bind_param('isisssi',$_POST['nempleado'],$_POST['direccion'],$_POST['cimpartidos'],$_POST['combo'],$_POST['abroad'],$_POST['bomberazo'],$_POST['userid']);


if ($stmt->execute() === TRUE) {
	
    header('Location: ../users.php');
	
} else {
    echo "Error: " . $stmt . "<br>" . $mysqli->error;
}
$mysqli->close();

			
       
   