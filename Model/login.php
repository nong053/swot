<?php
include('../config.php');


$sql = "SELECT 	uu_id,rank,first_name,last_name,position,tel FROM admin where uu_id='$_POST[uuid]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["p_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    echo "[{\"loginStatus\":\"success\"}]";
  }
} else {
  //echo "0 results";
    $sql = "INSERT INTO admin (uu_id,created_date,updated_date) VALUES ('$_POST[uuid]',NOW(),NOW())";

    if ($conn->query($sql) === TRUE) {
       
        //echo "[{\"loginStatus\":\"success\"}]";

        $sql = "
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_POST[uuid]', 'ปัจจัยภายใน จุดแข็ง', NOW(),NOW());
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_POST[uuid]', 'ปัจจัยภายใน จุดอ่อน', NOW(),NOW());
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_POST[uuid]', 'ปัจจัยภายนอก โอกาส', NOW(),NOW());
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_POST[uuid]', 'ปัจจัยภายนอก อุปสรรค', NOW(),NOW());
        ";

        if ($conn->query($sql) === TRUE) {
            echo "[{\"status\":\"200\",\"statusData\":\"insert swot master success.\"}]";
            echo "New record created successfully";
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