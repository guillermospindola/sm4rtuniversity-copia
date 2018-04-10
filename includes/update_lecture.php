<?php
require_once 'config.php';
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}


$stmt = $mysqli->prepare('UPDATE lectures SET subject=?, duration=?, date_time=?, category=?, location=?, area_all=?, 
area_dir=?, area_mgmt=?, area_leaders=?, area_pm=?, area_implementation=?, area_vm=?, 
area_qa=?, area_ch=?, area_rh=?, area_admin_fin=?, area_sales=?, area_sd=?, 
area_presale=?, area_soc=?, area_sl=?, area_cess=?, area_app=?, area_process=?, 
area_bi=?, summary=?, requirements=? WHERE id =?');

$stmt->bind_param('sssssssssssssssssssssssssssi',$_POST['subject'], $_POST['duration'], $_POST['date'],$_POST['category'],
$_POST['location'],$_POST['all'],$_POST['directors'],$_POST['managers'],$_POST['leaders'],
$_POST['pm'],$_POST['implementation'],$_POST['vm'],$_POST['qa'],$_POST['cm'],$_POST['rh'],$_POST['admin'],
$_POST['sales'],$_POST['sd'],$_POST['presale'],$_POST['soc'],$_POST['sl'],$_POST['cess'],$_POST['app'],
$_POST['process'],$_POST['bi'],$_POST['summary'],$_POST['requirements'],$_POST['id']);


if ($stmt->execute() === TRUE) {
header('Location: ../lectures.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
	
	echo '<table>';
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
echo '</table>';
}



$mysqli->close();

			
       
   