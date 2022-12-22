<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swot_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



/*
    $sql = "SELECT 	p_id,rank,first_name,last_name,position,tel FROM admin where p_id='$_POST[uuid]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo"ok";

    }else{
        echo"not ok";
    }
*/




//$conn->close();






?>