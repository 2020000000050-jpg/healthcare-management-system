<?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "sourcecodester_healthcaredb";
$dbname = "health_care_management_system";
$db = mysqli_connect($host, $user, $pass, $dbname);


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


error_reporting(0);
?>
