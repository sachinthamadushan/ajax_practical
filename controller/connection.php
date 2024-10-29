<?php

$localhost = "localhost";
$username = "root";
$password = "Sachi@123";
$database = "online_shop";

$conn = mysqli_connect($localhost, $username,
 $password, $database);

if (!$conn) {   
    die("Connection failed: " . mysqli_connect_error());
}