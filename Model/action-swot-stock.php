<?php
include("config-central.php");
include("config.php");

// Convert JSON string to Array
$JWT->decode($token_data, $key);
/*
$json = $JWT->decode($token_data, $key);
$jsonArray = json_decode($json, true);
*/
// if($jsonArray["login_status"]==1){


// $uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
//  $sql = "SELECT * FROM users where uu_id='$uuid'";
//  $result = $conn->query($sql);
//  if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='findOne'){

        $sql = "
        select s.s_id,s.b_id,s.uu_id,s.form_id,s.ap_code,ap.ap_name,
        s.s_name,s.s_weight,s.s_score,
        s.s_total_score,s.swot_name,s.swot_detail
        from swot s
        inner join aspect_master ap on s.ap_code=ap.ap_code
       
        where s.uu_id='$_REQUEST[uuid]' and s.b_id='$_REQUEST[b_id]'    and  ap.uu_id='$_REQUEST[uuid]'
        order by s.ap_code,s.form_id asc

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
        $sql_delete = " DELETE FROM swot WHERE uu_id='$_REQUEST[uuid]' and b_id='$_REQUEST[b_id]'";

        if ($conn->query($sql_delete) === TRUE) {
            $sql_insert_swot = "
                INSERT INTO swot 
                (uu_id,b_id,s_code,form_id,ap_code, s_name, s_weight,s_score,s_total_score,created_date,updated_date,swot_name,swot_detail) 
                VALUES
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','1','s1','1','$_REQUEST[s1_name]','$_REQUEST[s1_weight]','$_REQUEST[s1_score]','$_REQUEST[s1_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','2','s2','1','$_REQUEST[s2_name]','$_REQUEST[s2_weight]','$_REQUEST[s2_score]','$_REQUEST[s2_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','3','s3','1','$_REQUEST[s3_name]','$_REQUEST[s3_weight]','$_REQUEST[s3_score]','$_REQUEST[s3_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','4','s4','1','$_REQUEST[s4_name]','$_REQUEST[s4_weight]','$_REQUEST[s4_score]','$_REQUEST[s4_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','5','s5','1','$_REQUEST[s5_name]','$_REQUEST[s5_weight]','$_REQUEST[s5_score]','$_REQUEST[s5_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),


                ('$_REQUEST[uuid]','$_REQUEST[b_id]','6','w1','2','$_REQUEST[w1_name]','$_REQUEST[w1_weight]','$_REQUEST[w1_score]','$_REQUEST[w1_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','7','w2','2','$_REQUEST[w2_name]','$_REQUEST[w2_weight]','$_REQUEST[w2_score]','$_REQUEST[w2_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','8','w3','2','$_REQUEST[w3_name]','$_REQUEST[w3_weight]','$_REQUEST[w3_score]','$_REQUEST[w3_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','9','w4','2','$_REQUEST[w4_name]','$_REQUEST[w4_weight]','$_REQUEST[w4_score]','$_REQUEST[w4_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','10','w5','2','$_REQUEST[w5_name]','$_REQUEST[w5_weight]','$_REQUEST[w5_score]','$_REQUEST[w5_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),

                ('$_REQUEST[uuid]','$_REQUEST[b_id]','11','o1','3','$_REQUEST[o1_name]','$_REQUEST[o1_weight]','$_REQUEST[o1_score]','$_REQUEST[o1_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','12','o2','3','$_REQUEST[o2_name]','$_REQUEST[o2_weight]','$_REQUEST[o2_score]','$_REQUEST[o2_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','13','o3','3','$_REQUEST[o3_name]','$_REQUEST[o3_weight]','$_REQUEST[o3_score]','$_REQUEST[o3_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','14','o4','3','$_REQUEST[o4_name]','$_REQUEST[o4_weight]','$_REQUEST[o4_score]','$_REQUEST[o4_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','15','o5','3','$_REQUEST[o5_name]','$_REQUEST[o5_weight]','$_REQUEST[o5_score]','$_REQUEST[o5_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),

                ('$_REQUEST[uuid]','$_REQUEST[b_id]','16','t1','4','$_REQUEST[t1_name]','$_REQUEST[t1_weight]','$_REQUEST[t1_score]','$_REQUEST[t1_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','17','t2','4','$_REQUEST[t2_name]','$_REQUEST[t2_weight]','$_REQUEST[t2_score]','$_REQUEST[t2_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','18','t3','4','$_REQUEST[t3_name]','$_REQUEST[t3_weight]','$_REQUEST[t3_score]','$_REQUEST[t3_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','19','t4','4','$_REQUEST[t4_name]','$_REQUEST[t4_weight]','$_REQUEST[t4_score]','$_REQUEST[t4_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]'),
                ('$_REQUEST[uuid]','$_REQUEST[b_id]','20','t5','4','$_REQUEST[t5_name]','$_REQUEST[t5_weight]','$_REQUEST[t5_score]','$_REQUEST[t5_total_score]',now(),now(),'$_REQUEST[swot_name]','$_REQUEST[swot_detail]')




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
           




                    select s.s_id,s.b_id,s.uu_id,s.form_id,s.ap_code,ap.ap_name,
                    s.s_name,s.s_weight,s.s_score,
                    s.s_total_score,s.swot_name,s.swot_detail
                    from swot s
                    inner join aspect_master ap on s.ap_code=ap.ap_code
                   
                    where s.uu_id='$_REQUEST[uuid]'   and  ap.uu_id='$_REQUEST[uuid]' and  s.b_id='$_REQUEST[b_id]'
                    order by s.ap_code,s.form_id asc

                    

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
        $sql_delete = "DELETE FROM swot WHERE uu_id='$_REQUEST[uuid]';";

        if ($conn->query($sql_delete) === TRUE) {

            $sql_select_swot = "SELECT * FROM swot_ex where b_id='$_REQUEST[b_id]';";
            $result_swot = $conn->query($sql_select_swot);
            if ($result_swot->num_rows > 0) {

                $count=0;
                while($row = $result_swot->fetch_assoc()) {
                   
                    $sql_select_swot = "
                    INSERT INTO swot (uu_id,b_id,s_code,form_id,ap_code, s_name, s_weight, s_score,s_total_score,created_date,updated_date,swot_name,swot_detail) VALUES
                    ('$_REQUEST[uuid]','$row[b_id]','$row[s_code]','$row[form_id]','$row[ap_code]','$row[s_name]','$row[s_weight]', '$row[s_score]', '$row[s_total_score]',NOW(),NOW(),'$row[swot_name]','$row[swot_detail]')";
        
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

            /*
            select s.s_id,s.uuid,s.form_id,s.ap_id,ap_name,
            s.s_name,s.s_weight,s.s_score,
            s.s_total_score 
            from swot s
            inner join aspect_master am on s.ap_id=am.ap_id
            where uuid='$_REQUEST[uuid]'
            order by ap_id asc
            */

            $sql_swot = "

            
            select s.s_id,s.b_id,s.uu_id,s.form_id,s.ap_code,ap.ap_name,
            s.s_name,s.s_weight,s.s_score,
            s.s_total_score,s.swot_name,s.swot_detail
            from swot s
            inner join aspect_master ap on s.ap_code=ap.ap_code
        
            where s.uu_id='$_REQUEST[uuid]'  and  ap.uu_id='$_REQUEST[uuid]'
            order by s.ap_code,s.form_id asc

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



    }else if($_REQUEST['action']=='showAllExampleDataByUuid'){
       
       
        

        $sql = "SELECT 
        *
        FROM business_type 
        where  
        uu_id='$_REQUEST[uuid]' ";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        //echo "[{\"status\":\"200\"}]";
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        
        

    
    }else if($_REQUEST['action']=='showAllExampleLoadData'){
        
        
            

        $sql = "SELECT 
        *
        FROM business_type where  b_release_type_code=2 or uu_id='$_REQUEST[uuid]'";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        //echo "[{\"status\":\"200\"}]";
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        
    }else if($_REQUEST['action']=='saveExampleData'){
       
        $checkError=true;
        $sql_insert = "
        INSERT INTO business_type 
        (
        uu_id ,
        b_type_name,
        b_release_type_code,
        b_release_type_name,
        created_date,
        updated_date
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '$_REQUEST[b_type_name]',
        '$_REQUEST[b_release_type_code]',
        '$_REQUEST[b_release_type_name]',
        now(),
        now()
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;
            $b_id = mysqli_insert_id($conn);
            
           //SAVE EXAMPLE TO STORE START
           //aspect_master_ex
            $sql_save_to_aspect_master_ex="
            INSERT INTO 
            aspect_master_ex 
            (b_id,ap_code, ap_name,created_date,updated_date)
            SELECT 
            $b_id,ap_code, ap_name,now(),now()
            FROM aspect_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_aspect_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_aspect_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //task_ex
            $sql_save_to_swot_ex="
            INSERT INTO 
            swot_ex 
            (b_id,s_code,ap_code,seq_id,form_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,created_date,updated_date)
            SELECT 
            $b_id,s_code,ap_code,seq_id,form_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,now(),now()
            FROM swot
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_swot_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_swot_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //SAVE EXAMPLE TO STORE END

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }
        if( $checkError==true){
            $sql = "SELECT 
            *
            FROM business_type where  uu_id='$_REQUEST[uuid]'";
            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        }
        
    }else if($_REQUEST['action']=='updateExampleData'){
       
       
        $sql = "
        UPDATE business_type SET 
        b_type_name='$_REQUEST[b_type_name]',
        b_release_type_code='$_REQUEST[b_release_type_code]',
        b_release_type_name='$_REQUEST[b_release_type_name]'
        WHERE b_id='$_REQUEST[b_id]'";

        $checkError=true;

        if ($conn->query($sql) === TRUE) {
          
            //DELETE EXAMPLE FOR NEW LOAD
            
            $aspect_master_ex_delete = "DELETE FROM aspect_master_ex WHERE  b_id='$_REQUEST[b_id]'";
            if ($conn->query($aspect_master_ex_delete) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
            }

            $swot_ex_detete = "DELETE FROM swot_ex WHERE  b_id='$_REQUEST[b_id]'";
            if ($conn->query($swot_ex_detete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }

          

            //SAVE EXAMPLE TO STORE START
            //aspect_master_ex
            $sql_save_to_aspect_master_ex="
            INSERT INTO 
            aspect_master_ex 
            (b_id,ap_code, ap_name,created_date,updated_date)
            SELECT 
            $_REQUEST[b_id],ap_code, ap_name,now(),now()
            FROM aspect_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_aspect_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_aspect_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //swot_ex
            $sql_save_to_swot_ex="
            INSERT INTO 
            swot_ex 
            (b_id,s_code,ap_code,seq_id,form_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,created_date,updated_date)
            SELECT 
            $_REQUEST[b_id],s_code,ap_code,seq_id,form_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,now(),now()
            FROM swot
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_swot_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_swot_ex . "<br>" . $conn->error;
                $checkError=false;
            }

           //SAVE EXAMPLE TO STORE END

        } else {
        echo "Error updating record: " . $conn->error;
        }

        if( $checkError==true){
            $sql = "SELECT 
            *
            FROM business_type where uu_id='$_REQUEST[uuid]'";
            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        }

        
    }else if($_REQUEST['action']=='delExampleData'){
       
       
        $checkError=true;
        $sql = "DELETE FROM business_type WHERE  b_id='$_REQUEST[b_id]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
    
         
            $aspect_master_ex_delete = "DELETE FROM aspect_master_ex WHERE  b_id='$_REQUEST[b_id]'";
            if ($conn->query($aspect_master_ex_delete) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
            }

            $swot_ex_detete = "DELETE FROM swot_ex WHERE  b_id='$_REQUEST[b_id]'";
            if ($conn->query($swot_ex_detete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }


           

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){

            $sql = "
            SELECT 
            *
            FROM business_type where uu_id='$_REQUEST[uuid]'";
            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
            
            }else{
                echo "Error deleting record: " . $conn->error;
            }

        
    }else if($_REQUEST['action']=='findOneExampleData'){
       
       
        

            $sql = "SELECT 
            *
            FROM business_type where b_id='$_REQUEST[b_id]'";
            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        
    }else if($_REQUEST['action']=="exportExampleData"){

        //risk_ex
        $sqlAspectMasterEx = "SELECT 
        *
        FROM aspect_master_ex  
        where b_id='$_REQUEST[b_id]'";
        $dataAspectMasterExArray = array();
        $resultAspectMasterEx = $conn->query($sqlAspectMasterEx);

        if ($resultAspectMasterEx->num_rows > 0) {
   
            while($row = $resultAspectMasterEx->fetch_assoc()) {
                $dataAspectMasterExArray[] = $row;
            }
        }
         //strategy_type_master_ex
        $sqlSwotEx = "SELECT 
        *
        FROM swot_ex where b_id='$_REQUEST[b_id]'";
        $dataSwotExArray = array();
        $resultSwotEx = $conn->query($sqlSwotEx);

        if ($resultSwotEx->num_rows > 0) {
            while($row = $resultSwotEx->fetch_assoc()) {
                $dataSwotExArray[] = $row;
            }
        }


        
        echo "[{\"status\":\"200\",
            \"dataAspectMasterEx\":".json_encode($dataAspectMasterExArray).",
            \"dataSwotEx\":".json_encode($dataSwotExArray)."
        }]";
       
    }else if($_REQUEST['action']=='loadExampleData'){
            
           
        $checkError=true;    
        //DELETE EXAMPLE FOR NEW LOAD START
        $sql_aspect_master_delete = "DELETE FROM aspect_master WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($sql_aspect_master_delete) === TRUE) {
            $checkError=true;
            
        
        }else{
            $checkError=false;
            echo "Error deleting sql_aspect_master_delete: " . $conn->error."<br>";
        }

        $sql_swot_delete = "DELETE FROM swot WHERE  uu_id='$_REQUEST[uuid]' and b_id='$_REQUEST[b_id]'";
        if ($conn->query($sql_swot_delete) === TRUE) {
            $checkError=true;
        }else{
            $checkError=false;
            echo "Error deleting swot: " . $conn->error."<br>";
        }

       
        
        //DELETE EXAMPLE FOR NEW LOAD END

        //LOAD EXAMPLE FROM STORE START

       //impact_master_ex
       $sql_load_from_aspect_master_ex ="
       INSERT INTO 
       aspect_master
       (uu_id,ap_code,ap_name,created_date,updated_date)
       SELECT 
       '$_REQUEST[uuid]',ap_code,ap_name,now(),now()
       FROM aspect_master_ex 
       WHERE b_id = '$_REQUEST[b_id]'";

       if ($conn->query($sql_load_from_aspect_master_ex) === TRUE) {
           $checkError=true;
       }else{
           echo "Error insert: " . $sql_load_from_aspect_master_ex . "<br>" . $conn->error;
           $checkError=false;
       }

       //likelihood_master
       $sql_load_from_swot_ex ="
       INSERT INTO 
       swot
                  (uu_id,b_id,s_code, ap_code, form_id,seq_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,created_date,updated_date)
       SELECT 
       '$_REQUEST[uuid]',b_id,s_code, ap_code, form_id,seq_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,now(),now()
       FROM swot_ex
       WHERE b_id = '$_REQUEST[b_id]'";

       if ($conn->query($sql_load_from_swot_ex) === TRUE) {
           $checkError=true;
       }else{
           echo "Error insert: " . $sql_load_from_swot_ex . "<br>" . $conn->error;
           $checkError=false;
       }

       //LOAD EXAMPLE FROM STORE END
         

       if($checkError==true){    
         
        echo "[{\"status\":\"200\"}]";

         }

     }else if($_REQUEST['action']=="importExampleJsonData"){

        $AspectMasterExLength=sizeof($_REQUEST['dataAspectMasterEx']);
        $SwotExLength=sizeof($_REQUEST['dataSwotEx']);
        $checkError=true;


        

        $aspect_master_delete = "DELETE FROM aspect_master WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($aspect_master_delete) === TRUE) {
            $checkError=true;
        
        }else{
            $checkError=false;
            echo "Error deleting: " . $aspect_master_delete . "<br>" . $conn->error;
        }

        $swot_delete = "DELETE FROM swot WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($swot_delete) === TRUE) {
            $checkError=true;
        }else{
            $checkError=false;
            echo "Error deleting: " . $swot_delete . "<br>" . $conn->error;
        }

       


        for ($i = 0; $i < $AspectMasterExLength; $i++) {
     

            $sql_insert_aspect_master = "
            INSERT INTO aspect_master 
            (
            uu_id ,
            ap_code,
            ap_name ,
            created_date,
            updated_date
            ) 
            VALUES
            (
            '".$_REQUEST['uuid']."',
            '".$_REQUEST['dataAspectMasterEx'][$i]['ap_code']."',
            '".$_REQUEST['dataAspectMasterEx'][$i]['ap_name']."',
            now(),
            now()
            )
            ";

            if ($conn->query($sql_insert_aspect_master) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_insert_aspect_master . "<br>" . $conn->error;
                $checkError=false;
            } 
            
        }

        for ($i = 0; $i < $SwotExLength; $i++) {
           

            $sql_insert_swot = "
            INSERT INTO swot 
            (
                uu_id,b_id,s_code,ap_code,form_id,seq_id,s_name,s_weight,s_score,s_total_score,swot_name,swot_detail,created_date,updated_date
            ) 
            VALUES
            (
            '".$_REQUEST['uuid']."',
            '".$_REQUEST['dataSwotEx'][$i]['b_id']."',
            '".$_REQUEST['dataSwotEx'][$i]['s_code']."',
            '".$_REQUEST['dataSwotEx'][$i]['ap_code']."',
            '".$_REQUEST['dataSwotEx'][$i]['form_id']."',
            '".$_REQUEST['dataSwotEx'][$i]['seq_id']."',
            '".$_REQUEST['dataSwotEx'][$i]['s_name']."',
            '".$_REQUEST['dataSwotEx'][$i]['s_weight']."',
            '".$_REQUEST['dataSwotEx'][$i]['s_score']."',
            '".$_REQUEST['dataSwotEx'][$i]['s_total_score']."',
            '".$_REQUEST['dataSwotEx'][$i]['swot_name']."',
            '".$_REQUEST['dataSwotEx'][$i]['swot_detail']."',
            now(),
            now()
            )
            ";

            if ($conn->query($sql_insert_swot) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_insert_swot . "<br>" . $conn->error;
                $checkError=false;
            } 
            
        }

        




        if($checkError==true){

        echo "[{\"status\":\"200\"}]";

        }

    }  

    

//  }else{
//     echo "[{\"status\":\"401\",\"data\":\"Unauthorized\"}]";
//  }


 $conn->close();

?>