<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "apitest";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>