<?php
$servername_ct = "localhost";
$username_ct = "root";
$password_ct = "";
$dbname_ct = "central_db";

// Create connection
$conn_ct = new mysqli($servername_ct, $username_ct, $password_ct,$dbname_ct);
$conn_ct->set_charset("utf8");

// Check connection
if ($conn_ct->connect_error) {
  die("Connection failed: " . $conn_ct->connect_error);
}

?>


<?php 
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
require_once "JWT.php";
$key = '46196053844814367107123';
$token_data="";


//set type for encode json web token.
$header = '{"typ":"JWT","alg":"HS256"}';
$JWT = new JWT;


if (!function_exists('apache_request_headers')) { 
     eval(' 
         function apache_request_headers() { 
             foreach($_SERVER as $key=>$value) { 
                 if (substr($key,0,5)=="HTTP_") { 
                     $key=str_replace(" ","-",ucwords(strtolower(str_replace("_"," ",substr($key,5))))); 
                     $out[$key]=$value; 
                 } 
             } 
             return $out; 
         } 
     '); 
 } 

$headers = apache_request_headers();
if(isset($headers['Authorization'])){
  $authorization  = $headers['Authorization'];
  $token = explode("Bearer ", $authorization);
  $token_data= $token[1];
}


?>