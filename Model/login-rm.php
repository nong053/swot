<?php
include('config-rm.php');

if($_REQUEST['uuid']!=""){
    $sql = "SELECT 	uu_id,rank,first_name,last_name,position,tel FROM users where uu_id='$_REQUEST[uuid]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      //while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["p_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
            //echo "[{\"loginType\":\"oldUser\"}]";
            $sql_check_data = "SELECT * FROM risk  where uu_id='$_REQUEST[uuid]'";
            $result_check_data = $conn->query($sql_check_data);
    
            if ($result_check_data->num_rows == 0) {
              echo "[{\"loginType\":\"oldUserAndEmptyData\"}]";
            }else{
              echo "[{\"loginType\":\"oldUser\"}]";
            }

      //}
    } else {


              $sql = "INSERT INTO users (uu_id,created_date,updated_date) VALUES ('$_REQUEST[uuid]',NOW(),NOW())";
              if ($conn->query($sql) === TRUE) {
                echo "[{\"loginType\":\"newUser\"}]";
              }

          
        
    }
    $conn->close();

}else{
  echo "[{\"loginType\":\"error\"}]";
}
// if($_POST['autoLogin']=='login'){
    
// }
?>