<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}

if(isset($_POST['renovacion']))
 {
 $renovacion = 'si';
 }
 
 if(isset($_POST['independent']))
 {
	 $independent = 'si';
 } 
	 if(isset($_POST['previous']))
 {
	 $previous = 'si';
 }
 $user = $_POST['userid'];
 $course= $_POST['courseid'];
 $start= $_POST['inicio'];
 $end= $_POST['fin'];
 $cert = $_POST['cert'];
 $provider = $_POST['provider'];
 $suma = $_POST['suma'];
 $type = $_POST['type'];
 
 
if(isset($_FILES['myFile']))
    {
       $file = $_FILES['myFile'];
        $file_name = $user."-".$course."-".$file['name'];
        $file_size = $file['size'];
        $file_type = $file['type'];
        $file_tmpname = $file['tmp_name'];  
        $upload_dir = "../uploads/";
        $ext_str = "doc,docx,ppt,pptx,txt,pdf";
        $allowed_extensions=explode(',',$ext_str);
        $max_file_size = 1000485760;
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
        if (!in_array($ext, $allowed_extensions))
            echo "only ".$ext_str." files allowed to upload";
        if($file['size']>=$max_file_size)
            echo "only the file less than ".$max_file_size."mb  allowed to upload";
        $path = $upload_dir.$file_name;
        if(move_uploaded_file($file_tmpname, $upload_dir.$file_name))
		{ 
			$url = $upload_dir.$file_name;
			$stmt = $mysqli->prepare("UPDATE courses_members SET active='Activo', added=?, validity=?, independent=?, previous=?, provider=?, suma=?, renovacion=?, certfile=?, certificate=? WHERE user_id=? AND course_id=?");
$stmt->bind_param('sssssssssii',$start,$end,$independent,$previous,$provider,$suma,$renovacion,$url,$cert,$user,$course);
		}

        else
		{
            echo "The file cant moved to target directory.";
		$url = "";
		$stmt = $mysqli->prepare("UPDATE courses_members SET active='Activo', added=?, validity=?, independent=?, previous=?, provider=?, suma=?, renovacion=?, certificate=? WHERE user_id=? AND course_id=?");
$stmt->bind_param('ssssssssii',$start,$end,$independent,$previous,$provider,$suma,$renovacion,$cert,$user,$course);
		}
		


		}
 

if ($stmt->execute() === TRUE) {
	
    header("location:javascript://history.go(-1)");
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
updateSuds($_POST['userid'], $mysqli);
updateYearSuds($_POST['userid'], $mysqli);

$mysqli->close();

			
       
   ?>
       
   