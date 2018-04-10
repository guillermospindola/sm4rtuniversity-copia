<?php 

if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
      // user already logged in the site
      header("location:" . SITE_URL);
    }
    if(!isset($_GET['id']))
              {
                  $_GET['id']=$_SESSION['id'];
              }

    $user=getUserInfo ($_GET['id'], $mysqli);

 ?>