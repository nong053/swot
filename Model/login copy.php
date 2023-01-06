<?php
include('../config.php');


$sql = "SELECT 	uu_id,rank,first_name,last_name,position,tel FROM admin where uu_id='$_REQUEST[uuid]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["p_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    echo "[{\"loginType\":\"oldUser\"}]";
  }
} else {
  //echo "0 results";
  
    $sql = "INSERT INTO admin (uu_id,created_date,updated_date) VALUES ('$_REQUEST[uuid]',NOW(),NOW())";
    if ($conn->query($sql) === TRUE) {
       
      //  echo "[{\"loginStatus\":\"success\"}]";
      
        $sql = "
         INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES
         ('$_REQUEST[uuid]', 'ปัจจัยภายใน จุดแข็ง', NOW(),NOW()), 
         ('$_REQUEST[uuid]', 'ปัจจัยภายใน จุดอ่อน', NOW(),NOW()),
         ('$_REQUEST[uuid]', 'ปัจจัยภายนอก โอกาส', NOW(),NOW()),
         ('$_REQUEST[uuid]', 'ปัจจัยภายนอก อุปสรรค', NOW(),NOW());
         
           
        ";

        if ($conn->query($sql) === TRUE) {
          echo "[{\"loginType\":\"newUser\"}]";
           // echo "[{\"status\":\"200\",\"statusData\":\"insert aspect master success.\"}]";
        }else{
            echo "Error2: " . $sql . "<br>" . $conn->error;
        }
        

    } else {
        echo "Error1: " . $sql . "<br>" . $conn->error;
    }
    
}
$conn->close();


// if($_POST['autoLogin']=='login'){
    
// }
?>