<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbname = "phpdb";

$connection = mysqli_connect($host, $userName, $password, $dbname);

if (!$connection) {
    die("Connection Failed:" . mysqli_connect_error());
} else {
    echo "connection success";
}
