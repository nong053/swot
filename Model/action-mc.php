<?php
include("../config-mc.php");
 $uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
 $sql = "SELECT * FROM users where uu_id='$uuid'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='findOneCate'){

        $sql = "
       select * from task_cate where tc_id='$_REQUEST[tc_id]'
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


    }else if($_REQUEST['action']=='showCate'){

        $sql = "SELECT tc_id, tc_name,tc_code FROM task_cate";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";

    }else if($_REQUEST['action']=='updatedCate'){

        $sql = "UPDATE task_cate SET tc_name='$_REQUEST[tc_name]' WHERE tc_id='$_REQUEST[tc_id]'";

        if ($conn->query($sql) === TRUE) {
       // echo "Record updated successfully";
        echo "[{\"status\":\"200\"}]";
        } else {
        echo "Error updating record: " . $conn->error;
        }

    }else if($_REQUEST['action']=='deleteCate'){
        // sql to delete a record
        $checkError=true;
        $sql = "DELETE FROM task_cate WHERE tc_id='$_REQUEST[tc_id]'";

        if ($conn->query($sql) === TRUE) {
        
       // echo "[{\"status\":\"200\"}]";
        

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){
            $sql_task_cate = "
            select uu_id,tc_code,tc_name,created_date,updated_date,tc_id
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

    }else if($_REQUEST['action']=='insertTaskCate'){
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
            select uu_id,tc_code,tc_name,created_date,updated_date,tc_id
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