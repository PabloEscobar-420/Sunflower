<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dBName = "Sunflower";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dBName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
};
