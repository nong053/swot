<?php
include('config-central.php');

if($_REQUEST['uuidByMobile']!="" && $_REQUEST['action']=="mobileLogin"){
    $sql = "SELECT id,email,password,c_uu_id,role FROM users where c_uu_id='$_REQUEST[uuidByMobile]'";
    $result = $conn_ct->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $rs = $result->fetch_assoc();
                //echo "[{\"loginType\":\"oldUser\"},]";
                $payload = '{"iss":"'.$rs['id'].'",
                  "id":"'.$rs['id'].'",
                  "email":"",
                  "c_uu_id":"'.$_REQUEST['uuidByMobile'].'",
                  "role":"'.$rs['role'].'",
                  "login_status":"1",
                  "exp":1300819380
              }';
              $token = $JWT->encode($header, $payload, $key);
      
              echo "[{\"status\":\"200\",\"data\":\"$rs[id]\",\"token\":\"$token\"}]";
              //echo "[{\"status\":\"200\",\"loginType\":\"oldUser\",\"id\":\"".$rs['id']."\"}]";
        

    } else {


              $sql = "INSERT INTO users (c_uu_id,created_date,updated_date) VALUES ('$_REQUEST[uuidByMobile]',NOW(),NOW())";
              if ($conn_ct->query($sql) === TRUE) {
                  $id=$conn_ct -> insert_id;
           
                  $payload = '{"iss":"'.$id.'",
                    "id":"'.$id.'",
                    "email":"",
                    "c_uu_id":"'.$_REQUEST['uuidByMobile'].'",
                    "role":"1",
                    "login_status":"1",
                    "exp":1300819380
                }';
                $token = $JWT->encode($header, $payload, $key);
                echo "[{\"status\":\"200\",\"data\":\"$id\",\"token\":\"$token\"}]";
                //echo "[{\"status\":\"200\",\"loginType\":\"newUser\",\"id\":\"".$id."\"}]";

              }   
    }
    
    $conn_ct->close();

}else{
  echo "[{\"loginType\":\"error\"}]";
}

?>