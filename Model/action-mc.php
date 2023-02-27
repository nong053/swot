<?php
include("../config-mc.php");
 $uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
 $sql = "SELECT * FROM users where uu_id='$uuid'";
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
        $sql = "DELETE FROM task_cate WHERE id=3";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }
    }else if($_REQUEST['action']=='insertCateTask'){
            $sql_insert = "
            INSERT INTO task_cate 
            (uu_id,tc_code,tc_name,created_date,updated_date) 
            VALUES
            ('$_REQUEST[uuid]','tcoode','$_REQUEST[tc_name]',now(),now())
            ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;
        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        if($checkError==true){
            $sql_task_cate = "
            select uu_id,tc_code,tc_name,created_date,updated_date
            from task_cate
            
            where uu_id='$_REQUEST[uuid]'
            order by tc_name asc
            ";
            $dataArray = array();
            $result_task_cate = $conn->query($sql_task_cate);
            if ($result_task_cate->num_rows > 0) {
            // output data of each row
                while($row = $result_task_cate->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            } 

            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        }
    }
       
       

    
    

 }else{
    echo "[{\"status\":\"404\",\"loginStatus\":\"notLogin\"}]";
 }
 $conn->close();

?>