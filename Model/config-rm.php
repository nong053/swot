<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rm_db";

/*
$servername = "localhost";
$username = "dashboa2_rmuser";
$password = "5013076025";
$dbname = "dashboa2_rmdb";
*/

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";








?>