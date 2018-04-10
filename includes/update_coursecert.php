<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

 $type = $_POST['type'];
 $id= $_POST['id'];
 $old= $_POST['valueold'];
 $new= $_POST['value'];
 $path= $_POST['path'];
 
 
 
 
	if(isset($_POST['active']))
	{
		$active='Activo';
	}
	else{
		$active = 'Inactivo';
	}
		
$stmt = $mysqli->prepare("UPDATE courses SET active=?, name=?, path=?, description=?, value=?, class=? WHERE id=?");
$stmt->bind_param('ssssisi', $active, $_POST['name'], $_POST['path'], $_POST['description'], $_POST['value'], $_POST['class'], $_POST['id']);



if ($stmt->execute() === TRUE) {
	
	if($_POST['value']!=$_POST['valueold']){
		
		updateCoursecertValue($type, $id, $old, $new, $mysqli);
	}
	
    header("location:javascript://history.go(-2)");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
updateSuds($_POST['userid'], $mysqli);
updateYearSuds($_POST['userid'], $mysqli);
$mysqli->close();

			
       
   