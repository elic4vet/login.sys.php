<?php

$host = "localhost";
$user = "root ";
$pass = "";
$db = 'login';

$conn = mysqli_connect($host, $user, $pass, $db) or die("Could not connect to database");

echo "Connected to database";
?>

