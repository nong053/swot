<?php
include("../config-mc.php");
 $uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
 $sql = "SELECT * FROM users where uu_id='$uuid'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='findOneCate'){

        $sql = "
       select * from task_cate where tc_code='$_REQUEST[tc_code]'
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

        $sqlTaskCate = "SELECT tc_id, tc_name,tc_code,current_person FROM task_cate where uu_id='$_REQUEST[uuid]'";
        $dataTaskCateArray = array();
        $resultTaskCate = $conn->query($sqlTaskCate);

        if ($resultTaskCate->num_rows > 0) {
        // output data of each row
            while($row = $resultTaskCate->fetch_assoc()) {
                $dataTaskCateArray[] = $row;
            }
        }

        $sqlTask = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
        FROM task where uu_id='$_REQUEST[uuid]'";
        $dataTaskArray = array();
        $resultTask = $conn->query($sqlTask);

        if ($resultTask->num_rows > 0) {
        // output data of each row
            while($row = $resultTask->fetch_assoc()) {
                $dataTaskArray[] = $row;
            }
        }

        echo "[{\"status\":\"200\",\"dataTaskCate\":".json_encode($dataTaskCateArray).",\"dataTask\":".json_encode($dataTaskArray)."}]";

    }else if($_REQUEST['action']=='updatedCate'){

        $sql = "UPDATE task_cate SET tc_name='$_REQUEST[tc_name]',current_person='$_REQUEST[current_person]'   WHERE tc_code='$_REQUEST[tc_code]'";

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
        
        /* untill again
        $sql_task = "DELETE FROM task WHERE t_id='$_REQUEST[tc_id]'";
        $conn->query($sql_task);
        */
        

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){

            /*
            $sql_task_cate = "
            select uu_id,tc_code,tc_name,created_date,updated_date,tc_id
            from task_cate
            
            where uu_id='$_REQUEST[uuid]'
            order by tc_name asc
            ";
            $dataArray = array();
            $result_task_cate = $conn->query($sql_task_cate);
            if ($result_task_cate->num_rows > 0) {
                while($row = $result_task_cate->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            } 
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
            */

            $sqlTaskCate = "SELECT tc_id, tc_name,tc_code FROM task_cate where uu_id='$_REQUEST[uuid]'";
            $dataTaskCateArray = array();
            $resultTaskCate = $conn->query($sqlTaskCate);
    
            if ($resultTaskCate->num_rows > 0) {
            // output data of each row
                while($row = $resultTaskCate->fetch_assoc()) {
                    $dataTaskCateArray[] = $row;
                }
            }
    
            $sqlTask = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
            FROM task where uu_id='$_REQUEST[uuid]'";
            $dataTaskArray = array();
            $resultTask = $conn->query($sqlTask);
    
            if ($resultTask->num_rows > 0) {
            // output data of each row
                while($row = $resultTask->fetch_assoc()) {
                    $dataTaskArray[] = $row;
                }
            }
    
            echo "[{\"status\":\"200\",\"dataTaskCate\":".json_encode($dataTaskCateArray).",\"dataTask\":".json_encode($dataTaskArray)."}]";

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

            $last_id = mysqli_insert_id($conn);
            $sql = "UPDATE task_cate SET tc_code='$last_id' WHERE tc_id='$last_id'";
            $conn->query($sql);
            

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        if($checkError==true){
            /*
            $sql_task_cate = "
            select uu_id,tc_code,tc_name,created_date,updated_date,tc_id
            from task_cate
            
            where uu_id='$_REQUEST[uuid]'
            order by tc_name asc
            ";
            $dataArray = array();
            $result_task_cate = $conn->query($sql_task_cate);
            if ($result_task_cate->num_rows > 0) {
                while($row = $result_task_cate->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            } 

            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
            */

            $sqlTaskCate = "SELECT tc_id, tc_name,tc_code FROM task_cate where uu_id='$_REQUEST[uuid]'";
            $dataTaskCateArray = array();
            $resultTaskCate = $conn->query($sqlTaskCate);
    
            if ($resultTaskCate->num_rows > 0) {
            // output data of each row
                while($row = $resultTaskCate->fetch_assoc()) {
                    $dataTaskCateArray[] = $row;
                }
            }
    
            $sqlTask = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
            FROM task where uu_id='$_REQUEST[uuid]'";
            $dataTaskArray = array();
            $resultTask = $conn->query($sqlTask);
    
            if ($resultTask->num_rows > 0) {
            // output data of each row
                while($row = $resultTask->fetch_assoc()) {
                    $dataTaskArray[] = $row;
                }
            }
    
            echo "[{\"status\":\"200\",\"dataTaskCate\":".json_encode($dataTaskCateArray).",\"dataTask\":".json_encode($dataTaskArray)."}]";


        }
    }






    if($_REQUEST['action']=='findOneTask'){

        $sql = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
        FROM task where uu_id='$_REQUEST[uu_id]' and t_id='$_REQUEST[t_id]'";
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


    }else if($_REQUEST['action']=='showTask'){

       

        $sqlTask = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
        FROM task where uu_id='$_REQUEST[uuid]' and tc_code='$_REQUEST[tc_code]'";
        $dataTaskArray = array();
        $resultTask = $conn->query($sqlTask);

        if ($resultTask->num_rows > 0) {
        // output data of each row
            while($row = $resultTask->fetch_assoc()) {
                $dataTaskArray[] = $row;
            }
        }

        echo "[{\"status\":\"200\",\"dataTask\":".json_encode($dataTaskArray)."}]";

    }else if($_REQUEST['action']=='updateTask'){

        $sql = "UPDATE task 
        SET 
        t_name='$_REQUEST[t_name]',
        t_day='$_REQUEST[t_day]',
        t_hour='$_REQUEST[t_hour]', 
        t_minute='$_REQUEST[t_minute]',
        t_quantity='$_REQUEST[t_quantity]',
        t_x_time='$_REQUEST[t_x_time]',
        manpower='$_REQUEST[manpower]'
       
         
        WHERE t_code='$_REQUEST[t_code]'";

        if ($conn->query($sql) === TRUE) {
       // echo "Record updated successfully";
        echo "[{\"status\":\"200\"}]";
        } else {
        echo "Error updating record: " . $conn->error;
        }

    }else if($_REQUEST['action']=='deleteTask'){
        // sql to delete a record
        $checkError=true;
        $sql = "DELETE FROM task WHERE t_code='$_REQUEST[t_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
        
       // echo "[{\"status\":\"200\"}]";
        

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){
            $sql_task = "
            SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
        FROM task where uu_id='$_REQUEST[uuid]' and tc_code='$_REQUEST[tc_code]'
            ";
            $dataArray = array();
            $result_task = $conn->query($sql_task);
            if ($result_task->num_rows > 0) {
            // output data of each row
                while($row = $result_task->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            } 

            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
        }

    }else if($_REQUEST['action']=='insertTask'){
            $sql_insert = "
            INSERT INTO task 
            (uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,created_date,updated_date) 
            VALUES
            ('$_REQUEST[uuid]','','$_REQUEST[tc_code]','','0','0','0','0','0','0',now(),now())
            ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;
            $last_id = mysqli_insert_id($conn);
            $sql = "UPDATE task SET t_code='$last_id' WHERE t_id='$last_id'";
            $conn->query($sql);

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        if($checkError==true){
            $sql_task = "
            SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
            FROM task where uu_id='$_REQUEST[uuid]' and tc_code='$_REQUEST[tc_code]'
            ";
            $dataArray = array();
            $result_task = $conn->query($sql_task);
            if ($result_task->num_rows > 0) {
            // output data of each row
                while($row = $result_task->fetch_assoc()) {
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