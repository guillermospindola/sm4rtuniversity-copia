<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}
	
$sql = "SELECT id FROM members";

while ($row = mysqli_fetch_array($sql))
		{
			updateYearSuds($row['id'], $mysqli);
			updateSuds($row['id'], $mysqli);
		}
		 header("location: university.sm4rt.com/profile.php");
		
$mysqli->close();

			
       
   ?>