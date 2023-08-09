<?php

$servername_ct = "localhost";
$username_ct = "root";
$password_ct = "";
$dbname_ct = "central_db";

/*
$servername_ct = "localhost";
$username_ct = "dashboa2_centraluser";
$password_ct = "5013076025";
$dbname_ct = "dashboa2_centraldb";
*/
// Create connection
$conn_ct = new mysqli($servername_ct, $username_ct, $password_ct,$dbname_ct);
$conn_ct->set_charset("utf8");

// Check connection
if ($conn_ct->connect_error) {
  die("Connection failed: " . $conn_ct->connect_error);
}

?>


