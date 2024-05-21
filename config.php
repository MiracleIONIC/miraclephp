<?php

$host       = "localhost"; 
$username   = "root"; 
$pass       = ""; 
$db         = "profile_miraclekusen"; 
$conn    = mysqli_connect($host, $username, $pass, $db); 

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}
?>