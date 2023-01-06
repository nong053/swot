<?php
include("../config.php");
 $sql = "SELECT * FROM admin where uu_id='$_REQUEST[uuid]'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='findOne'){

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "0 results";
        }


    }else if($_REQUEST['action']=='insert'){

        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        }

    }else if($_REQUEST['action']=='show'){

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "0 results";
        }

    }else if($_REQUEST['action']=='updated'){

        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }

    }else if($_REQUEST['action']=='delete'){
        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }
    }else if($_REQUEST['action']=='insertSwotMaster'){

        $sql = "
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_REQUEST[uuid]', 'ปัจจัยภายใน จุดแข็ง', NOW(),NOW()
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_REQUEST[uuid]', 'ปัจจัยภายใน จุดอ่อน', NOW(),NOW()
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_REQUEST[uuid]', 'ปัจจัยภายนอก โอกาส', NOW(),NOW()
        INSERT INTO aspect (uu_id, ap_name, created_date,updated_date) VALUES ('$_REQUEST[uuid]', 'ปัจจัยภายนอก อุปสรรค', NOW(),NOW()
        )";

        if ($conn->query($sql) === TRUE) {
            echo "[{\"status\":\"200\",\"statusData\":\"insert swot master success.\"}]";
        }

    }else if($_REQUEST['action']=='insertAndLoadExampleSwot'){

        //Loop start
        $checkError=true;
        $sql_select_aspect = "SELECT ap_id, ap_name FROM aspect where uu_id='$_REQUEST[uuid]'";
        $result_aspect = $conn->query($sql_select_aspect);
        
        if ($result_aspect->num_rows > 0) {
          // output data of each row
      
          $swot_list = array("ปัจจัยภายใน จุดแข็ง", "ปัจจัยภายใน จุดอ่อน", "ปัจจัยภายนอก โอกาส","ปัจจัยภายนอก อุปสรรค");
          $count=0;
          while($row = $result_aspect->fetch_assoc()) {
            // $row["uu_id"]
            $sql_select_performance = "
            INSERT INTO swot (ap_id, s_name, s_weight, s_score,s_total_score,created_date,updated_date) VALUES
            ('$count+1','$swot_list[$count]1', 0.25, 5, 1.25,NOW(),NOW()), 
            ('$count+1','$swot_list[$count]2', 0.25, 5, 1.25,NOW(),NOW()),
            ('$count+1','$swot_list[$count]3', 0.25, 5, 1.25,NOW(),NOW()),
            ('$count+1','$swot_list[$count]4', 0.25, 5, 1.25,NOW(),NOW());

           ";
           $count++;

           if ($conn->query($sql_select_performance) === TRUE) {
                $checkError=true;
            }else{
                echo "Error2: " . $sql . "<br>" . $conn->error;
                $checkError=false;
            }

          }
          if($checkError==true){

            //echo "[{\"status\":\"200\",\"statusData\":\"insert performance master success.\"}]";


            $sql = "SELECT ap.ap_id,ap.uu_id,ap.ap_name,s.s_id,s.ap_id,s.s_name,s.s_weight,s.s_score,s.s_total_score 
            FROM aspect ap 
            inner join swot s on ap.ap_id=s.ap_id  
            where ap.uu_id='$_REQUEST[uuid]'
            order by s.s_id asc";
            $dataArray = array();
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
                echo json_encode($dataArray);
            } else {
            echo "0 results";
            }

           


          }else{
            echo "[{\"status\":\"500\",\"statusData\":\"performance master error\"}]";
          }


        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //Loop end
         
         //per_id	ap_id	per_weight	per_score	per_total_score	created_date	updated_date

    }else if($_REQUEST['action']=='loadExampleSwot'){


        /*
        $sql = "SELECT ap.ap_id,ap.uu_id,ap.ap_name,s.s_id,s.ap_id,s.s_name,s.s_weight,s.s_score,s.s_total_score 
            FROM aspect ap 
            inner join swot s on ap.ap_id=s.ap_id  
            where ap.uu_id='d520c7a8-421b-4563-b955-f5abc56b97ec'
            order by s.s_id asc";

            if ($conn->query($sql) === TRUE) {
            echo"test";

            } else {
            echo "Error updating record: " . $conn->error;
            }
            */

        $sql = "SELECT ap.ap_id,ap.uu_id,ap.ap_name,s.s_id,s.ap_id,s.s_name,s.s_weight,s.s_score,s.s_total_score 
        FROM aspect ap 
        inner join swot s on ap.ap_id=s.ap_id  
        where ap.uu_id='$_REQUEST[uuid]'
        order by s.s_id asc";
        $dataArray = array();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
            echo json_encode($dataArray);
        } else {
        echo "0 results";
        }
    }  
            
    //coding here.
    

 }else{
    echo "[{\"loginStatus\":\"error\"}]";
 }
 $conn->close();

?>