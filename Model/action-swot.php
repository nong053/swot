<?php
include("../config.php");
 $sql = "SELECT * FROM admin where uu_id='$_REQUEST[uuid]'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='findOne'){

        $sql = "
        select s.s_id,s.uuid,s.form_id,s.ap_id,ap_name,
        s.s_name,s.s_weight,s.s_score,
        s.s_total_score 
        from swot s
        inner join aspect_master am on s.ap_id=am.ap_id
        where uuid='$_REQUEST[uuid]'  
        order by ap_id,form_id asc
        ";
        $dataArray = array();
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
               
            } 
            //echo"[]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";


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
swot_example
id,b_id,ap_id,seq_id,s_name,s_weight,s_score,s_total_score
swot
s_id,uuid,ap_id,s_name,s_weight,s_score,s_total_score
*/
        $checkError=true;
        $sql_delete = " DELETE FROM swot WHERE uuid='$_REQUEST[uuid]';";

        if ($conn->query($sql_delete) === TRUE) {
            $sql_select_swot = "SELECT * FROM swot_example where b_id='$_REQUEST[b_id]'";
            $result_swot = $conn->query($sql_select_swot);
            if ($result_swot->num_rows > 0) {

                $count=0;
                while($row = $result_swot->fetch_assoc()) {
                   
                    $sql_select_swot = "
                    INSERT INTO swot (uuid,form_id,ap_id, s_name, s_weight, s_score,s_total_score,created_date,updated_date) VALUES
                    ('$_REQUEST[uuid]','$row[form_id]','$row[ap_id]','$row[s_name]','$row[s_weight]', '$row[s_score]', '$row[s_total_score]',NOW(),NOW())";
        
                   $count++;
        
                   if ($conn->query($sql_select_swot) === TRUE) {
                        $checkError=true;
                    }else{
                        echo "Error2: " . $sql . "<br>" . $conn->error;
                        $checkError=false;
                    }
                  } //while 

                  if($checkError==true){

                    $sql_swot = "
                    select s.s_id,s.uuid,s.form_id,s.ap_id,ap_name,
                    s.s_name,s.s_weight,s.s_score,
                    s.s_total_score 
                    from swot s
                    inner join aspect_master am on s.ap_id=am.ap_id
                    where uuid='$_REQUEST[uuid]'
                    order by ap_id asc
                    ";
                    $dataArray = array();
                    $result_swot = $conn->query($sql_swot);
                    if ($result_swot->num_rows > 0) {
                    // output data of each row
                        while($row = $result_swot->fetch_assoc()) {
                            $dataArray[] = $row;
                        }
                        //echo json_encode($dataArray);
                    } 

                    echo "[{\"status\":\"200\",\"data\":\".".json_encode($dataArray)."\"}]";
                  }
                  
                  
            }
        }else{
            echo "step3: " . $sql_delete . "<br>" . $conn->error;
        } 


       

    }else if($_REQUEST['action']=='calculateSwot'){
        
        $s1_name="";
        $s1_score="";
        $s2_name="";
        $s2_score="";
        $s3_name="";
        $s3_score="";
        $s4_name="";
        $s4_score="";
        $s5_name="";
        $s5_score="";

        $s1_total_score=0.00;
        $s2_total_score=0.00;
        $s3_total_score=0.00;
        $s4_total_score=0.00;
        $s5_total_score=0.00;
        $s_total_score=0.00;


        $w1_name="";
        $w1_score="";
        $w2_name="";
        $w2_score="";
        $w3_name="";
        $w3_score="";
        $w4_name="";
        $w4_score="";
        $w5_name="";
        $w5_score="";

        $o1_name="";
        $o1_score="";
        $o2_name="";
        $o2_score="";
        $o3_name="";
        $o3_score="";
        $o4_name="";
        $o4_score="";
        $o5_name="";
        $o5_score="";

        $t1_name="";
        $t1_score="";
        $t2_name="";
        $t2_score="";
        $t3_name="";
        $t3_score="";
        $t4_name="";
        $t4_score="";
        $t5_name="";
        $t5_score="";
        
        //Strang
        if($_REQUEST['s1_name']!==""){
            $s1_name=$_REQUEST['s1_name'];
            $s1_weight=$_REQUEST['s1_weight'];
            $s1_score=$_REQUEST['s1_score'];
            $s1_total_score =  $s1_weight*$s1_score;

        }
        if($_REQUEST['s2_name']!==""){
            $s2_name=$_REQUEST['s2_name'];
            $s2_weight=$_REQUEST['s2_weight'];
            $s2_score=$_REQUEST['s2_score'];
            $s2_total_score =  $s2_weight*$s2_score;
        }
        if($_REQUEST['s3_name']!==""){
            $s3_name=$_REQUEST['s3_name'];
            $s3_weight=$_REQUEST['s3_weight'];
            $s3_score=$_REQUEST['s3_score'];
            $s3_total_score =  $s3_weight*$s3_score;
        }
        if($_REQUEST['s4_name']!==""){
            $s4_name=$_REQUEST['s4_name'];
            $s4_weight=$_REQUEST['s4_weight'];
            $s4_score=$_REQUEST['s4_score'];
            $s4_total_score =  $s4_weight*$s4_score;
        }
        if($_REQUEST['s5_name']!==""){
            $s5_name=$_REQUEST['s5_name'];
            $s5_weight=$_REQUEST['s5_weight'];
            $s5_score=$_REQUEST['s5_score'];
            $s5_total_score =  $s5_weight*$s5_score;
        }

        $s_total_score="";



    }   

    

 }else{
    echo "[{\"loginStatus\":\"notLogin\"}]";
 }
 $conn->close();

?>