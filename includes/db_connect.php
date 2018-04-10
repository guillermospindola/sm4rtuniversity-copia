
<?php

include_once 'psl-config.php';   // Ya que functions.php no est� incluido.
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
$mysqli->set_charset("utf8");

$mysql2 = new mysqli(HOST, USER, PASSWORD, DATABASE2);
$mysql2->set_charset("utf8");