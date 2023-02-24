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
        s.s_total_score,s.swot_detail
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

/*
$sql_insert_swot = "
INSERT INTO swot 
(uuid,form_id,ap_id, s_name, s_weight,s_score,s_total_score,created_date,updated_date,swot_detail) 
VALUES
('1','2','3','4','5','6','7','8','9','10'),
('1','2','3','4','5','6','7','8','9','10'),
('1','2','3','4','5','6','7','8','9','10')
";
if ($conn->query($sql_insert_swot) === TRUE) {
    $checkError=true;
}else{
    echo "Error2: " . $sql . "<br>" . $conn->error;
    $checkError=false;
}
*/

        $checkError=true;
        $sql_delete = " DELETE FROM swot WHERE uuid='$_REQUEST[uuid]'";

        if ($conn->query($sql_delete) === TRUE) {
            $sql_insert_swot = "
                INSERT INTO swot 
                (uuid,form_id,ap_id, s_name, s_weight,s_score,s_total_score,created_date,updated_date,swot_detail) 
                VALUES
                ('$_REQUEST[uuid]','s1','1','$_REQUEST[s1_name]','$_REQUEST[s1_weight]','$_REQUEST[s1_score]','$_REQUEST[s1_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','s2','1','$_REQUEST[s2_name]','$_REQUEST[s2_weight]','$_REQUEST[s2_score]','$_REQUEST[s2_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','s3','1','$_REQUEST[s3_name]','$_REQUEST[s3_weight]','$_REQUEST[s3_score]','$_REQUEST[s3_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','s4','1','$_REQUEST[s4_name]','$_REQUEST[s4_weight]','$_REQUEST[s4_score]','$_REQUEST[s4_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','s5','1','$_REQUEST[s5_name]','$_REQUEST[s5_weight]','$_REQUEST[s5_score]','$_REQUEST[s5_total_score]',now(),now(),'$_REQUEST[swot_detail]'),


                ('$_REQUEST[uuid]','w1','2','$_REQUEST[w1_name]','$_REQUEST[w1_weight]','$_REQUEST[w1_score]','$_REQUEST[w1_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','w2','2','$_REQUEST[w2_name]','$_REQUEST[w2_weight]','$_REQUEST[w2_score]','$_REQUEST[w2_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','w3','2','$_REQUEST[w3_name]','$_REQUEST[w3_weight]','$_REQUEST[w3_score]','$_REQUEST[w3_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','w4','2','$_REQUEST[w4_name]','$_REQUEST[w4_weight]','$_REQUEST[w4_score]','$_REQUEST[w4_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','w5','2','$_REQUEST[w5_name]','$_REQUEST[w5_weight]','$_REQUEST[w5_score]','$_REQUEST[w5_total_score]',now(),now(),'$_REQUEST[swot_detail]'),

                ('$_REQUEST[uuid]','o1','3','$_REQUEST[o1_name]','$_REQUEST[o1_weight]','$_REQUEST[o1_score]','$_REQUEST[o1_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','o2','3','$_REQUEST[o2_name]','$_REQUEST[o2_weight]','$_REQUEST[o2_score]','$_REQUEST[o2_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','o3','3','$_REQUEST[o3_name]','$_REQUEST[o3_weight]','$_REQUEST[o3_score]','$_REQUEST[o3_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','o4','3','$_REQUEST[o4_name]','$_REQUEST[o4_weight]','$_REQUEST[o4_score]','$_REQUEST[o4_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','o5','3','$_REQUEST[o5_name]','$_REQUEST[o5_weight]','$_REQUEST[o5_score]','$_REQUEST[o5_total_score]',now(),now(),'$_REQUEST[swot_detail]'),

                ('$_REQUEST[uuid]','t1','4','$_REQUEST[t1_name]','$_REQUEST[t1_weight]','$_REQUEST[t1_score]','$_REQUEST[t1_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','t2','4','$_REQUEST[t2_name]','$_REQUEST[t2_weight]','$_REQUEST[t2_score]','$_REQUEST[t2_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','t3','4','$_REQUEST[t3_name]','$_REQUEST[t3_weight]','$_REQUEST[t3_score]','$_REQUEST[t3_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','t4','4','$_REQUEST[t4_name]','$_REQUEST[t4_weight]','$_REQUEST[t4_score]','$_REQUEST[t4_total_score]',now(),now(),'$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','t5','4','$_REQUEST[t5_name]','$_REQUEST[t5_weight]','$_REQUEST[t5_score]','$_REQUEST[t5_total_score]',now(),now(),'$_REQUEST[swot_detail]')




                ";
            if ($conn->query($sql_insert_swot) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_insert_swot . "<br>" . $conn->error;
                $checkError=false;
            }
        }else{
            echo "Error delete: " . $sql_delete . "<br>" . $conn->error;
            $checkError=false;
        } 

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

                    echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
           // echo "[{\"status\":\"200\"}]";
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

    }else if($_REQUEST['action']=='business-type'){

        $sql = "SELECT id,b_type_name FROM business_type";
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

    }else if($_REQUEST['action']=='loadExampleSwot'){

        $checkError=true;
        $sql_set = "SET SQL_SAFE_UPDATES = 0";
        $conn->query($sql_set);
        $sql_delete = "DELETE FROM swot WHERE uuid='$_REQUEST[uuid]';";

        if ($conn->query($sql_delete) === TRUE) {

            $sql_select_swot = "SELECT * FROM swot_example where b_id='$_REQUEST[b_id]';";
            $result_swot = $conn->query($sql_select_swot);
            if ($result_swot->num_rows > 0) {

                $count=0;
                while($row = $result_swot->fetch_assoc()) {
                   
                    $sql_select_swot = "
                    INSERT INTO swot (uuid,form_id,ap_id, s_name, s_weight, s_score,s_total_score,created_date,updated_date,swot_detail) VALUES
                    ('$_REQUEST[uuid]','$row[form_id]','$row[ap_id]','$row[s_name]','$row[s_weight]', '$row[s_score]', '$row[s_total_score]',NOW(),NOW(),'$_REQUEST[swot_detail]')";
        
                   $count++;
        
                   if ($conn->query($sql_select_swot) === TRUE) {
                        $checkError=true;
                    }else{
                        echo "Error2: " . $sql . "<br>" . $conn->error;
                        $checkError=false;
                    }
                  } //while 

                  
                  
                  
            }

         
        }else{
            $checkError=false;
            echo "step3: " . $sql_delete . "<br>" . $conn->error;
        } 

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

            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
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