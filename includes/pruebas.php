<?php


include_once 'db_connect.php';

$sql = "SELECT picture, direccion, role, id 		
	  FROM members WHERE email='".$user->email."'";
		$query = mysqli_query($mysqli, $sql); 
		$row = mysqli_fetch_array($query);
					$_SESSION['picture']=$row['picture'];
					$_SESSION['direccion']=$row['direccion'];
					$_SESSION['rol']=$row['role'];
					$_SESSION['id']=$row['id'];
                    $_SESSION['uid']=$row['id'];
                    
                echo $row['id'];

?>