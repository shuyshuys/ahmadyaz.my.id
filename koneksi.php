<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "main";

// Create connection
$koneksi = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
