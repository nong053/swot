<?php
include("config-mc.php");
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
    }else if($_REQUEST['action']=='saveExampleData'){
       
        $checkError=true;
        $sql_insert = "
        INSERT INTO manpower_cate_ex 
        (
        uu_id ,
        mc_name,
        mc_release_type_code,
        mc_release_type_name,
        created_date,
        updated_date
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '$_REQUEST[mc_name]',
        '$_REQUEST[mc_release_type_code]',
        '$_REQUEST[mc_release_type_name]',
        now(),
        now()
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;
            $mc_id = mysqli_insert_id($conn);
            
           //SAVE EXAMPLE TO STORE START
           //task_cate_ex
            $sql_save_to_task_cate_ex ="
            INSERT INTO 
            task_cate_ex 
            (mc_id,tc_code, tc_name, current_person,created_date,updated_date)
            SELECT 
            $mc_id,tc_code, tc_name,current_person,now(),now()
            FROM task_cate
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_task_cate_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_task_cate_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //task_ex
            $sql_save_to_task_ex ="
            INSERT INTO 
            task_ex 
            (mc_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,created_date,updated_date)
            SELECT 
            $mc_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,now(),now()
            FROM task
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_task_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_task_ex . "<br>" . $conn->error;
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
            FROM manpower_cate_ex where uu_id='$_REQUEST[uuid]'";
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
        UPDATE manpower_cate_ex SET 
        mc_name='$_REQUEST[mc_name]',
        mc_release_type_code='$_REQUEST[mc_release_type_code]',
        mc_release_type_name='$_REQUEST[mc_release_type_name]'
        WHERE mc_id='$_REQUEST[mc_id]'";

        $checkError=true;

        if ($conn->query($sql) === TRUE) {
          
            //DELETE EXAMPLE FOR NEW LOAD
            
            $task_cate_ex_delete = "DELETE FROM task_cate_ex WHERE  mc_id='$_REQUEST[mc_id]'";
            if ($conn->query($task_cate_ex_delete) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
            }

            $task_ex_detete = "DELETE FROM task_ex WHERE  mc_id='$_REQUEST[mc_id]'";
            if ($conn->query($task_ex_detete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }

          

            //SAVE EXAMPLE TO STORE START
           //task_cate_ex
           
           $sql_save_to_task_cate_ex ="
           INSERT INTO 
           task_cate_ex 
           (mc_id,tc_code, tc_name, current_person,updated_date)
           SELECT 
           $_REQUEST[mc_id],tc_code,tc_name, current_person,now()
           FROM task_cate
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_task_cate_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_task_cate_ex . "<br>" . $conn->error;
               $checkError=false;
           }

           //task_ex
           $sql_save_to_task_ex ="
           INSERT INTO 
           task_ex 
           (        mc_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,t_quantity,manpower,updated_date)
           SELECT 
           $_REQUEST[mc_id],t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,t_quantity,manpower,now()
           FROM task
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_task_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_task_ex . "<br>" . $conn->error;
               $checkError=false;
           }

           //SAVE EXAMPLE TO STORE END

           
            

        } else {
        echo "Error updating record: " . $conn->error;
        }

        if( $checkError==true){
            $sql = "SELECT 
            *
            FROM manpower_cate_ex where uu_id='$_REQUEST[uuid]'";
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
        $sql = "DELETE FROM manpower_cate_ex WHERE  mc_id='$_REQUEST[mc_id]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
    
         
            $task_cate_ex_delete = "DELETE FROM task_cate_ex WHERE  mc_id='$_REQUEST[mc_id]'";
            if ($conn->query($task_cate_ex_delete) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
            }

            $task_ex_detete = "DELETE FROM task_ex WHERE  mc_id='$_REQUEST[mc_id]'";
            if ($conn->query($task_ex_detete) === TRUE) {
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
            FROM manpower_cate_ex where uu_id='$_REQUEST[uuid]'";
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
            FROM manpower_cate_ex where mc_id='$_REQUEST[mc_id]'";
            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
            
            

        
    }else if($_REQUEST['action']=='showAllExampleDataByUuid'){
       
       
        

        $sql = "SELECT 
        *
        FROM manpower_cate_ex where  uu_id='$_REQUEST[uuid]'";
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
        FROM manpower_cate_ex where  uu_id='$_REQUEST[uuid]'";
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
        $sqlTaskCate = "SELECT 
        *
        FROM task_cate_ex  
        where mc_id='$_REQUEST[mc_id]'";
        $dataTaskCateArray = array();
        $resulTaskCate = $conn->query($sqlTaskCate);

        if ($resulTaskCate->num_rows > 0) {
   
            while($row = $resulTaskCate->fetch_assoc()) {
                $dataTaskCateArray[] = $row;
            }
        }
         //strategy_type_master_ex
        $sqlTask = "SELECT 
        *
        FROM task_ex where mc_id='$_REQUEST[mc_id]'";
        $dataTaskArray = array();
        $resultTask = $conn->query($sqlTask);

        if ($resultTask->num_rows > 0) {
            while($row = $resultTask->fetch_assoc()) {
                $dataTaskArray[] = $row;
            }
        }


        
        echo "[{\"status\":\"200\",
            \"dataTaskCate\":".json_encode($dataTaskCateArray).",
            \"dataTask\":".json_encode($dataTaskArray)."
        }]";
       
    }else if($_REQUEST['action']=="importExampleJsonData"){

        $TaskCateLength=sizeof($_REQUEST['dataTaskCate']);
        $TaskLength=sizeof($_REQUEST['dataTask']);
        $checkError=true;


        

        $task_cate_delete = "DELETE FROM task_cate WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($task_cate_delete) === TRUE) {
            $checkError=true;
        
        }else{
            $checkError=false;
            echo "Error deleting: " . $task_cate_delete . "<br>" . $conn->error;
        }

        $task_delete = "DELETE FROM task WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($task_delete) === TRUE) {
            $checkError=true;
        }else{
            $checkError=false;
            echo "Error deleting: " . $task_delete . "<br>" . $conn->error;
        }

       


        for ($i = 0; $i < $TaskCateLength; $i++) {
     

            $sql_insert_task_cate = "
            INSERT INTO task_cate 
            (
            uu_id ,
            tc_code,
            tc_name ,
            current_person ,
            created_date,
            updated_date
            ) 
            VALUES
            (
            '".$_REQUEST['uuid']."',
            '".$_REQUEST['dataTaskCate'][$i]['tc_code']."',
            ".$_REQUEST['dataTaskCate'][$i]['tc_name'].",
            '".$_REQUEST['dataTaskCate'][$i]['current_person']."',
            now(),
            now()
            )
            ";

            if ($conn->query($sql_insert_task_cate) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_insert_task_cate . "<br>" . $conn->error;
                $checkError=false;
            } 
            
        }

        for ($i = 0; $i < $TaskLength; $i++) {
           

            $sql_insert_task = "
            INSERT INTO task 
            (
                uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,created_date,updated_date
            ) 
            VALUES
            (
            '".$_REQUEST['uuid']."',
            '".$_REQUEST['dataTask'][$i]['t_code']."',
            '".$_REQUEST['dataTask'][$i]['tc_code']."',
            '".$_REQUEST['dataTask'][$i]['t_name']."',
            '".$_REQUEST['dataTask'][$i]['t_day']."',
            '".$_REQUEST['dataTask'][$i]['t_hour']."',
            '".$_REQUEST['dataTask'][$i]['t_minute']."',
            '".$_REQUEST['dataTask'][$i]['t_quantity']."',
            '".$_REQUEST['dataTask'][$i]['t_x_time']."',
            '".$_REQUEST['dataTask'][$i]['manpower']."',
            now(),
            now()
            )
            ";

            if ($conn->query($sql_insert_task) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_insert_task . "<br>" . $conn->error;
                $checkError=false;
            } 
            
        }

        




        if($checkError==true){

        echo "[{\"status\":\"200\"}]";

        }

    }else if($_REQUEST['action']=='loadExampleData'){
            
            
            
        //DELETE EXAMPLE FOR NEW LOAD START
        $sql_task_cate_delete = "DELETE FROM task_cate WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($sql_task_cate_delete) === TRUE) {
            $checkError=true;
            
        
        }else{
            $checkError=false;
            echo "Error deleting task_cate: " . $conn->error."<br>";
        }

        $sql_task_delete = "DELETE FROM task WHERE  uu_id='$_REQUEST[uuid]'";
        if ($conn->query($sql_task_delete) === TRUE) {
            $checkError=true;
        }else{
            $checkError=false;
            echo "Error deleting task: " . $conn->error."<br>";
        }

       
        
        //DELETE EXAMPLE FOR NEW LOAD END

        //LOAD EXAMPLE FROM STORE START

       //impact_master_ex
       $sql_load_from_task_cate_ex ="
       INSERT INTO 
       task_cate
       (uu_id,tc_code, tc_name, current_person,created_date,updated_date)
       SELECT 
       '$_REQUEST[uuid]',tc_code, tc_name, current_person,now(),now()
       FROM task_cate_ex 
       WHERE mc_id = '$_REQUEST[mc_id]'";

       if ($conn->query($sql_load_from_task_cate_ex) === TRUE) {
           $checkError=true;
       }else{
           echo "Error insert: " . $sql_load_from_task_cate_ex . "<br>" . $conn->error;
           $checkError=false;
       }

       //likelihood_master
       $sql_load_from_task_ex ="
       INSERT INTO 
       task
       (uu_id,t_code, tc_code, t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,created_date,updated_date)
       SELECT 
       '$_REQUEST[uuid]',t_code, tc_code, t_name,t_day,t_hour,t_minute,t_quantity,t_x_time,manpower,now(),now()
       FROM task_ex
       WHERE mc_id = '$_REQUEST[mc_id]'";

       if ($conn->query($sql_load_from_task_ex) === TRUE) {
           $checkError=true;
       }else{
           echo "Error insert: " . $sql_load_from_task_ex . "<br>" . $conn->error;
           $checkError=false;
       }

       //LOAD EXAMPLE FROM STORE END
         

       if($checkError==true){

        
         echo "[{\"status\":\"200\"}]";
        

         }



     }

       
       

    
    

 }else{
    echo "[{\"status\":\"404\",\"loginStatus\":\"notLogin\"}]";
 }
 $conn->close();

?>