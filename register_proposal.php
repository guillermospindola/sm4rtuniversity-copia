<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}



// Uploaded file handling
if(isset($_FILES['myFile']))
    {
        $file = $_FILES['myFile'];
        $file_name = $file['name'];
        $file_size = $file['size'];
        $file_type = $file['type'];
        $file_tmpname = $file['tmp_name'];  
        $upload_dir = "../uploads/";
        $ext_str = "doc,docx,ppt,pptx,txt,pdf";
        $allowed_extensions=explode(',',$ext_str);
        $max_file_size = 10485760;
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
        if (!in_array($ext, $allowed_extensions))
            echo "only ".$ext_str." files allowed to upload";
        if($file['size']>=$max_file_size)
            echo "only the file less than ".$max_file_size."mb  allowed to upload";
        $path = $upload_dir.$file_name;
        if(move_uploaded_file($file_tmpname, $upload_dir.$file_name))
             echo "The file was moved to target directory.";

        else
            echo "The file cant moved to target directory.";

    }




//Database 


$email = $_SESSION['email'];

 // if (isset($_POST['name'], $_POST['description'], $_POST['leader'], $_POST['member1'], $_POST['member2'])) {
    
     // $name = filter_input(INPUT_POST, $_POST['name'], FILTER_SANITIZE_STRING);
	 // $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
	 // $leader = filter_input(INPUT_POST, 'leader', FILTER_SANITIZE_STRING);
	 // $member1 = filter_input(INPUT_POST, 'member1', FILTER_SANITIZE_STRING);
	 // $member2 = filter_input(INPUT_POST, 'member2', FILTER_SANITIZE_STRING);
 // }
	
		

$sql = "INSERT INTO proposals (name, description, leader, member1, member2, created, created_by, status, attachment) VALUES ('".$_POST['name']."','".$_POST['description']."','".$_POST['leader']."','".$_POST['member1']."','".$_POST['member2']."','".date("Y/m/d")."','".$email."','Revisión','".$upload_dir.$file_name."')";

if ($mysqli->query($sql) === TRUE) {
    header('Location: ../projects.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();

			
       
   