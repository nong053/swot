<?php
//include('config.php');
include('config-central.php');

if($_REQUEST['action']=='register'){
    $sql_check = "
    SELECT * FROM users where email='$_REQUEST[email]'";
    $result_check = $conn_ct->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "[{\"status\":\"403\",\"data\":\"data_duplicate\"}]";

    }else{

        $sql = "INSERT INTO users (email,password,role,created_date,updated_date) VALUES ('$_REQUEST[email]',MD5('$_REQUEST[password]'),'1',NOW(),NOW())";
        if ($conn_ct->query($sql) === TRUE) {
            $id = mysqli_insert_id($conn_ct);
           // echo "[{\"status\":\"200\",\"data\":\"success\"}]";
            $payload = '{"iss":"'.$_REQUEST['email'].'",
                "id":"'.$id.'",
                "email":"'.$_REQUEST['email'].'",
                "c_uu_id":"",
                "role":"1",
                "login_status":"1",
                "exp":1300819380
            }';
            $token = $JWT->encode($header, $payload, $key);
    
            echo "[{\"status\":\"200\",\"data\":\"$id\",\"token\":\"$token\"}]";

        }else{
            echo"error ".$conn_ct->error;
        }

    }
}else if($_REQUEST['action']=='login'){
   
    $sql_check = "
    SELECT * FROM users where email='$_REQUEST[email]' and password=MD5('$_REQUEST[password]')";
    $result_check = $conn_ct->query($sql_check);

    if ($result_check->num_rows > 0) {
        $rs = $result_check->fetch_assoc();
            
        
        $payload = '{"iss":"'.$rs['email'].'",
            "id":"'.$rs['id'].'",
            "email":"'.$rs['email'].'",
            "c_uu_id":"",
            "role":"'.$rs['role'].'",
            "login_status":"1",
            "exp":1300819380
        }';
        $token = $JWT->encode($header, $payload, $key);
      
        echo "[{\"status\":\"200\",\"data\":\"".$rs['id']."\",\"token\":\"$token\"}]";

    }else{
        echo "[{\"status\":\"401\",\"data\":\"Unauthorized\"}]";
    }
    
}
?>