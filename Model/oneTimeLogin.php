<?php
include('config.php');

$sql_check = "
SELECT * FROM users where email='$_REQUEST[email]'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    echo "[{\"status\":\"403\",\"data\":\"data_duplicate\"}]";

}else{

    $sql = "INSERT INTO users (email,password,created_date,updated_date) VALUES ('$_REQUEST[email]','$_REQUEST[password]',NOW(),NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "[{\"status\":\"200\",\"data\":\"success\"}]";
    //echo "[{\"loginType\":\"newUser\"}]";
    }

}
?>