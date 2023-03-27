<?php
include("config-rm.php");
 $uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
 $sql = "SELECT * FROM users where uu_id='$uuid'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

    //coding here.
    if($_REQUEST['action']=='showRisk'){

        $sqlRisk = "
        SELECT 
        r.uu_id ,
        r.r_seq ,
        r.r_name ,
        r.r_description ,
        r.r_factor,
        r.r_effect ,
        r.r_code ,
        r.r_code_display ,
        r.responsible_person ,
        r.guidelines_risk ,
        r.duration_of_work, 
        r.lh_code , lh.lh_score,
        r.im_code , im.im_score,
        r.stm_code,stm.stm_name,
        r.total_score ,
        r.created_date,
        r.updated_date
        FROM risk r 
        inner join strategy_type_master stm on r.stm_code =stm.stm_code
        inner join likelihood_master lh on r.lh_code=lh.lh_code
        inner join impact_master im on r.im_code=im.im_code
        where r.uu_id='$_REQUEST[uuid]'
        and stm.uu_id='$_REQUEST[uuid]'
        and lh.uu_id='$_REQUEST[uuid]'
        and im.uu_id='$_REQUEST[uuid]'
        order by r.total_score DESC
        
        ";
        $dataRiskArray = array();
        $resultRisk = $conn->query($sqlRisk);
        if ($resultRisk->num_rows > 0) {
            // output data of each row
                while($row = $resultRisk->fetch_assoc()) {
                    $dataRiskArray[] = $row;
                }
        }

        //strategy type master
        $sqlStm = "SELECT 
        *
        FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
        $dataStmArray = array();
        $resultStm = $conn->query($sqlStm);

        if ($resultStm->num_rows > 0) {
            while($row = $resultStm->fetch_assoc()) {
                $dataStmArray[] = $row;
            }
        }

        
       
        //likelihood master
        $sqlLh = "SELECT 
        *
        FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
        $dataLhArray = array();
        $resultLh = $conn->query($sqlLh);

        if ($resultLh->num_rows > 0) {
        // output data of each row
            while($row = $resultLh->fetch_assoc()) {
                $dataLhArray[] = $row;
            }
        }

        //impact master
        $sqlIm = "SELECT 
        *
        FROM impact_master where uu_id='$_REQUEST[uuid]'";
        $dataImArray = array();
        $resultIm = $conn->query($sqlIm);

        if ($resultIm->num_rows > 0) {
        // output data of each row
            while($row = $resultIm->fetch_assoc()) {
                $dataImArray[] = $row;
            }
        }


       


        echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray).",
            \"dataStm\":".json_encode($dataStmArray).",
            \"dataLh\":".json_encode($dataLhArray).",
            \"dataIm\":".json_encode($dataImArray)."}]";

    }else if($_REQUEST['action']=='stmSelectData'){

        $sql = "SELECT 
        *
        FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";


    }else if($_REQUEST['action']=='lhSelectData'){

        $sql = "SELECT 
        *
        FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";


    }else if($_REQUEST['action']=='imSelectData'){

        $sql = "SELECT 
        *
        FROM impact_master where uu_id='$_REQUEST[uuid]'";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";


    }else if($_REQUEST['action']=='reSelectData'){

        $sql = "SELECT 
        *
        FROM risk_evaluation_master where uu_id='$_REQUEST[uuid]'";
        $dataArray = array();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }
        echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";


    }else if($_REQUEST['action']=='updatedRisk'){
       
       
        $sql = "
        UPDATE risk SET 
        r_code_display='$_REQUEST[r_code_display]',
        r_name='$_REQUEST[r_name]',
        r_description='$_REQUEST[r_description]',
        r_factor='$_REQUEST[r_factor]',
        r_effect='$_REQUEST[r_effect]',
        responsible_person='$_REQUEST[responsible_person]',
        guidelines_risk='$_REQUEST[guidelines_risk]',
        duration_of_work ='$_REQUEST[duration_of_work]',
        lh_code='$_REQUEST[lh_code]',
        im_code='$_REQUEST[im_code]',
        stm_code='$_REQUEST[stm_code]',
        total_score='$_REQUEST[total_score]',
        updated_date=now()

        WHERE r_code='$_REQUEST[r_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {


            $sqlRisk = "
            SELECT 
        r.uu_id ,
        r.r_seq ,
        r.r_name ,
        r.r_description ,
        r.r_factor,
        r.r_effect ,
        r.r_code ,
        r.r_code_display ,
        r.responsible_person ,
        r.guidelines_risk ,
        r.duration_of_work, 
        r.lh_code , lh.lh_score,
        r.im_code , im.im_score,
        r.stm_code,stm.stm_name,
        r.total_score ,
        r.created_date,
        r.updated_date
        FROM risk r 
        inner join strategy_type_master stm on r.stm_code =stm.stm_code
        inner join likelihood_master lh on r.lh_code=lh.lh_code
        inner join impact_master im on r.im_code=im.im_code
        where r.uu_id='$_REQUEST[uuid]'
        and stm.uu_id='$_REQUEST[uuid]'
        and lh.uu_id='$_REQUEST[uuid]'
        and im.uu_id='$_REQUEST[uuid]'

        ";
        
            $dataRiskArray = array();
            $resultRisk = $conn->query($sqlRisk);
            if ($resultRisk->num_rows > 0) {
                // output data of each row
                    while($row = $resultRisk->fetch_assoc()) {
                        $dataRiskArray[] = $row;
                    }
            }


            //strategy type master
            $sqlStm = "SELECT 
            *
            FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }

            
        
            //likelihood master
            $sqlLh = "SELECT 
            *
            FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
            $dataLhArray = array();
            $resultLh = $conn->query($sqlLh);

            if ($resultLh->num_rows > 0) {
            // output data of each row
                while($row = $resultLh->fetch_assoc()) {
                    $dataLhArray[] = $row;
                }
            }

            //impact master
            $sqlIm = "SELECT 
            *
            FROM impact_master where uu_id='$_REQUEST[uuid]'";
            $dataImArray = array();
            $resultIm = $conn->query($sqlIm);

            if ($resultIm->num_rows > 0) {
            // output data of each row
                while($row = $resultIm->fetch_assoc()) {
                    $dataImArray[] = $row;
                }
            }

            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray).",
                \"dataStm\":".json_encode($dataStmArray).",
                \"dataLh\":".json_encode($dataLhArray).",
                \"dataIm\":".json_encode($dataImArray)."}]";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        

    }else if($_REQUEST['action']=='deleteRisk'){
        // sql to delete a record
        $checkError=true;
        $sql = "DELETE FROM risk WHERE  r_code='$_REQUEST[r_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
    
        

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){


            $sqlRisk = "SELECT 
            r.uu_id ,
            r.r_seq ,
            r.r_name ,
            r.r_description ,
            r.r_factor,
            r.r_effect ,
            r.r_code ,
            r.r_code_display ,
            r.responsible_person ,
            r.guidelines_risk ,
            r.duration_of_work, 
            r.lh_code , lh.lh_score,
            r.im_code , im.im_score,
            r.stm_code,stm.stm_name,
            r.total_score ,
            r.created_date,
            r.updated_date
            FROM risk r 
            inner join strategy_type_master stm on r.stm_code =stm.stm_code
            inner join likelihood_master lh on r.lh_code=lh.lh_code
            inner join impact_master im on r.im_code=im.im_code 
            where r.uu_id='$_REQUEST[uuid]'
            and stm.uu_id='$_REQUEST[uuid]'
            and lh.uu_id='$_REQUEST[uuid]'
            and im.uu_id='$_REQUEST[uuid]'
            ";
            $dataRiskArray = array();
            $resultRisk = $conn->query($sqlRisk);
    
            if ($resultRisk->num_rows > 0) {
       
                while($row = $resultRisk->fetch_assoc()) {
                    $dataRiskArray[] = $row;
                }
            }
             //strategy type master
            $sqlStm = "SELECT 
            *
            FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }


              //likelihood master
            $sqlLh = "SELECT 
            *
            FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
            $dataLhArray = array();
            $resultLh = $conn->query($sqlLh);

            if ($resultLh->num_rows > 0) {
            // output data of each row
                while($row = $resultLh->fetch_assoc()) {
                    $dataLhArray[] = $row;
                }
            }

            //impact master
            $sqlIm = "SELECT 
            *
            FROM impact_master where uu_id='$_REQUEST[uuid]'";
            $dataImArray = array();
            $resultIm = $conn->query($sqlIm);

            if ($resultIm->num_rows > 0) {
            // output data of each row
                while($row = $resultIm->fetch_assoc()) {
                    $dataImArray[] = $row;
                }
            }
            
            echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray).",
                \"dataStm\":".json_encode($dataStmArray).",
                \"dataLh\":".json_encode($dataLhArray).",
                \"dataIm\":".json_encode($dataImArray)."}]";
            //echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray)."}]";

        }

    }else if($_REQUEST['action']=='insertRisk'){
        $sql_insert = "
        INSERT INTO risk 
        (
        uu_id ,
        r_code,
        r_code_display,
        r_seq ,
        r_name ,
        r_description ,
        r_factor,
        r_effect ,
        responsible_person ,
        guidelines_risk,
        duration_of_work, 
        lh_code ,
        im_code ,
        stm_code, 
        total_score ,
        created_date,
        updated_date
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '',
        '',
        0,
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '1',
        '1',
        '1',
        0,
        now(),
        now()
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
        $checkError=true;

        $last_id = mysqli_insert_id($conn);
        $sql = "UPDATE risk SET r_code='$last_id' WHERE r_id='$last_id'";
        $conn->query($sql);
       

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        if($checkError==true){
        
            $sqlRisk = "SELECT 
            r.uu_id ,
            r.r_seq ,
            r.r_name ,
            r.r_description ,
            r.r_factor,
            r.r_effect ,
            r.r_code ,
            r.r_code_display ,
            r.responsible_person ,
            r.guidelines_risk ,
            r.duration_of_work, 
            r.lh_code , lh.lh_score,
            r.im_code , im.im_score,
            r.stm_code,stm.stm_name,
            r.total_score ,
            r.created_date,
            r.updated_date
            FROM risk r 
            inner join strategy_type_master stm on r.stm_code =stm.stm_code
            inner join likelihood_master lh on r.lh_code=lh.lh_code
            inner join impact_master im on r.im_code=im.im_code 
            where r.uu_id='$_REQUEST[uuid]'
            and stm.uu_id='$_REQUEST[uuid]'
            and lh.uu_id='$_REQUEST[uuid]'
            and im.uu_id='$_REQUEST[uuid]'
            ";
            $dataRiskArray = array();
            $resultRisk = $conn->query($sqlRisk);

            if ($resultRisk->num_rows > 0) {
    
                while($row = $resultRisk->fetch_assoc()) {
                    $dataRiskArray[] = $row;
                }
            }


             //strategy type master
        $sqlStm = "SELECT 
        *
        FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
        $dataStmArray = array();
        $resultStm = $conn->query($sqlStm);

        if ($resultStm->num_rows > 0) {
            while($row = $resultStm->fetch_assoc()) {
                $dataStmArray[] = $row;
            }
        }

        
       
        //likelihood master
        $sqlLh = "SELECT 
        *
        FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
        $dataLhArray = array();
        $resultLh = $conn->query($sqlLh);

        if ($resultLh->num_rows > 0) {
        // output data of each row
            while($row = $resultLh->fetch_assoc()) {
                $dataLhArray[] = $row;
            }
        }

        //impact master
        $sqlIm = "SELECT 
        *
        FROM impact_master where uu_id='$_REQUEST[uuid]'";
        $dataImArray = array();
        $resultIm = $conn->query($sqlIm);

        if ($resultIm->num_rows > 0) {
        // output data of each row
            while($row = $resultIm->fetch_assoc()) {
                $dataImArray[] = $row;
            }
        }

            echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray).",
            \"dataStm\":".json_encode($dataStmArray).",
            \"dataLh\":".json_encode($dataLhArray).",
            \"dataIm\":".json_encode($dataImArray)."}]";
            //echo "[{\"status\":\"200\",\"dataRisk\":".json_encode($dataRiskArray)."}]";

        }

    }else if($_REQUEST['action']=='insertTableMaster'){

        // risk_evaluation_master start
        $sql_insert_rem = "
        INSERT INTO risk_evaluation_master 
        (
        uu_id ,
        re_code,
        re_score_start ,
        re_score_end ,
        re_score_color,
        re_name,
        created_date,
        updated_date
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '',
        '',
        '',
        '',
        '',
        now(),
        now()
        )
        ";

        if ($conn->query($sql_insert_rem) === TRUE) {
        $checkError=true;

        $last_id = mysqli_insert_id($conn);
        $sql = "UPDATE risk_evaluation_master SET re_code='$last_id' WHERE re_id='$last_id'";
        $conn->query($sql);

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }
        // risk_evaluation_master end
        // strategy_type_master start
        $sql_insert_stm = "
        INSERT INTO strategy_type_master 
        (
        uu_id ,
        stm_code,
        stm_name ,
        re_score_end ,
        stm_description ,
        created_date,
        updated_date
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '',
        '',
        '',
        '',
        now(),
        now()
        )
        ";

        if ($conn->query($sql_insert_stm) === TRUE) {
        $checkError=true;

        $last_id = mysqli_insert_id($conn);
        $sql = "UPDATE strategy_type_master SET stm_code='$last_id' WHERE stm_id='$last_id'";
        $conn->query($sql);

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }
        // strategy_type_master end


        if($checkError==true){
            echo "[{\"status\":\"200\"}]";
        }
    
    }else if($_REQUEST['action']=='likelihoodUpdate'){
       
       
        $sql = "
        UPDATE likelihood_master SET 
       
        lh_name='$_REQUEST[lh_name]',
        lh_score='$_REQUEST[lh_score]',
        lh_description='$_REQUEST[lh_description]',
        updated_date=now()

        WHERE lh_code='$_REQUEST[lh_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {

            //likelihood master
            $sqlLh = "SELECT 
            *
            FROM likelihood_master where uu_id='$_REQUEST[uuid]'";
            $dataLhArray = array();
            $resultLh = $conn->query($sqlLh);

            if ($resultLh->num_rows > 0) {
            // output data of each row
                while($row = $resultLh->fetch_assoc()) {
                    $dataLhArray[] = $row;
                }
            }

           

            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"dataLh\":".json_encode($dataLhArray)."}]";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        

    }else if($_REQUEST['action']=='impactRiskUpdate'){
       
       
        $sql = "
        UPDATE impact_master SET 
       
        im_name='$_REQUEST[im_name]',
        im_description='$_REQUEST[im_description]',
        im_score='$_REQUEST[im_score]',
        updated_date=now()

        WHERE im_code='$_REQUEST[im_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {

            //impact master
            $sqlIm = "SELECT 
            *
            FROM impact_master where uu_id='$_REQUEST[uuid]'";
            $dataImArray = array();
            $resultIm = $conn->query($sqlIm);

            if ($resultIm->num_rows > 0) {
            // output data of each row
                while($row = $resultIm->fetch_assoc()) {
                    $dataImArray[] = $row;
                }
            }

           

            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"dataIm\":".json_encode($dataImArray)."}]";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        

    }else if($_REQUEST['action']=='strategyTypeRiskUpdate'){
       
       
        $sql = "
        UPDATE strategy_type_master SET 
       
        stm_name='$_REQUEST[stm_name]',
        stm_description='$_REQUEST[stm_description]',
       
        updated_date=now()

        WHERE stm_code='$_REQUEST[stm_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {

             //strategy type master
            $sqlStm = "SELECT 
            *
            FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }

           

            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"dataStm\":".json_encode($dataStmArray)."}]";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        

    }else if($_REQUEST['action']=='insertStrategyTypeRisk'){
       
        $sql_insert = "
        INSERT INTO strategy_type_master 
        (
        uu_id ,
        stm_code,
        stm_name,
        stm_description,
        created_date,
        updated_date

        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '',
        '',
        '',
        now(),
        now()
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
        $checkError=true;

        $last_id = mysqli_insert_id($conn);
        $sql = "UPDATE strategy_type_master SET stm_code='$last_id' WHERE stm_id='$last_id'";
        $conn->query($sql);
       

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        if($checkError==true){
        
           
             //strategy type master
            $sqlStm = "SELECT 
            *
            FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataStmArray)."}]";
           

        }

        

    }else if($_REQUEST['action']=='deleteStrategyTypeRisk'){
       
       
         // sql to delete a record
         $checkError=true;
         $sql = "DELETE FROM strategy_type_master WHERE  stm_code='$_REQUEST[stm_code]' and uu_id='$_REQUEST[uuid]'";
 
         if ($conn->query($sql) === TRUE) {
     
            $checkError=true;
 
         } else {
             $checkError==false;
         echo "Error deleting record: " . $conn->error;
         }
 
         if($checkError==true){
 
 
           
              //strategy type master
             $sqlStm = "SELECT 
             *
             FROM strategy_type_master where uu_id='$_REQUEST[uuid]'";
             $dataStmArray = array();
             $resultStm = $conn->query($sqlStm);
 
             if ($resultStm->num_rows > 0) {
                 while($row = $resultStm->fetch_assoc()) {
                     $dataStmArray[] = $row;
                 }
             }
             echo "[{\"status\":\"200\",\"data\":".json_encode($dataStmArray)."}]";

 
         }
        

    }else if($_REQUEST['action']=='evaluationRiskUpdate'){
       
       
        $sql = "
        UPDATE risk_evaluation_master SET 
       
        re_name='$_REQUEST[re_name]',
        re_score_start='$_REQUEST[re_score_start]',
        re_score_end='$_REQUEST[re_score_end]',
        re_score_color='$_REQUEST[re_score_color]',
        updated_date=now()
        WHERE re_code='$_REQUEST[re_code]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {

             //strategy type master
            $sqlStm = "SELECT 
            *
            FROM risk_evaluation_master where uu_id='$_REQUEST[uuid]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }

           

            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"dataStm\":".json_encode($dataStmArray)."}]";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        

    }else if($_REQUEST['action']=='saveExampleData'){
       
        $checkError=true;
     
        $sql_check = "
        SELECT * FROM risk_cate_ex where rce_name='$_REQUEST[rce_name]'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            echo "[{\"status\":\"201\",\"data\":\"data_duplicate\"}]";

        }else{

    

        $sql_insert = "
        INSERT INTO risk_cate_ex 
        (
        uu_id ,
        rce_name,
        rce_type_code,
        rce_type_name 
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '$_REQUEST[rce_name]',
        '$_REQUEST[rce_type_code]',
        '$_REQUEST[rce_type_name]'
        
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;
            $rce_id = mysqli_insert_id($conn);
            
           //SAVE EXAMPLE TO STORE START
           //impact_master_ex
           
            $sql_save_to_impact_master_ex ="
            INSERT INTO 
            impact_master_ex 
            (rce_id,im_code, im_name, im_description,im_score)
            SELECT 
            $rce_id,im_code, im_name,im_description,im_score
            FROM impact_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_impact_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_impact_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //likelihood_master_ex
            $sql_save_to_likelihood_master_ex ="
            INSERT INTO 
            likelihood_master_ex 
            (rce_id,lh_code, lh_name, lh_score,lh_description)
            SELECT 
            $rce_id, lh_code,lh_name,lh_score, lh_description
            FROM likelihood_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_likelihood_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_likelihood_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //risk_evaluation_master_ex
            $sql_save_to_evaluation_master_ex ="
            INSERT INTO 
            risk_evaluation_master_ex 
            (rce_id,re_code,re_name,re_score_start, re_score_end, re_score_color)
            SELECT 
            $rce_id,re_code,re_name,re_score_start, re_score_end,re_score_color
            FROM risk_evaluation_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_evaluation_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_evaluation_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }

            //strategy_type_master_ex
            $sql_save_to_strategy_type_master_ex ="
            INSERT INTO 
            strategy_type_master_ex 
            (rce_id,stm_code,stm_name,stm_description)
            SELECT 
            $rce_id,stm_code,stm_name,stm_description
            FROM strategy_type_master
            WHERE uu_id = '$_REQUEST[uuid]'";

            if ($conn->query($sql_save_to_strategy_type_master_ex) === TRUE) {
                $checkError=true;
            }else{
                echo "Error insert: " . $sql_save_to_strategy_type_master_ex . "<br>" . $conn->error;
                $checkError=false;
            }
             //risk_ex
             $sql_save_to_risk_ex ="
             INSERT INTO 
             risk_ex 
             (rce_id,r_seq,r_code,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score)
             SELECT 
           $rce_id,'r_seq',r_code,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score
             FROM risk
             WHERE uu_id = '$_REQUEST[uuid]'";
 
             if ($conn->query($sql_save_to_risk_ex) === TRUE) {
                 $checkError=true;
             }else{
                 echo "Error insert: " . $sql_save_to_risk_ex . "<br>" . $conn->error;
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
            FROM risk_cate_ex where uu_id='$_REQUEST[uuid]'";
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
    }//check name unige
        
    }else if($_REQUEST['action']=='updateExampleData'){
       
        $checkError=true;
        $sql = "
        UPDATE risk_cate_ex SET 
        rce_name='$_REQUEST[rce_name]',
        rce_type_code='$_REQUEST[rce_type]'
        WHERE rce_id='$_REQUEST[rce_id]'";

        if ($conn->query($sql) === TRUE) {
            /*
            $sql = "DELETE FROM impact_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            $conn->query($sql);
            */
            //DELETE EXAMPLE FOR NEW LOAD
            $sql_impact = "DELETE FROM impact_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_impact) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
            }

            $sql_likelihood_master_ex = "DELETE FROM likelihood_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_likelihood_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }

            $sql_evaluation_master_ex = "DELETE FROM risk_evaluation_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_evaluation_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }

            $sql_strategy_type_master_ex = "DELETE FROM strategy_type_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_strategy_type_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }
            $sql_risk_ex = "DELETE FROM risk_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_risk_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
            }

            //SAVE EXAMPLE TO STORE START
           //impact_master_ex
           
           $sql_save_to_impact_master_ex ="
           INSERT INTO 
           impact_master_ex 
           (rce_id,im_code, im_name, im_description,im_score)
           SELECT 
           $_REQUEST[rce_id],im_code, im_name,im_description,im_score
           FROM impact_master
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_impact_master_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_impact_master_ex . "<br>" . $conn->error;
               $checkError=false;
           }

           //likelihood_master
           $sql_save_to_likelihood_master_ex ="
           INSERT INTO 
           likelihood_master_ex 
           (rce_id,lh_code, lh_name, lh_score,lh_description)
           SELECT 
           $_REQUEST[rce_id], lh_code,lh_name,lh_score, lh_description
           FROM likelihood_master
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_likelihood_master_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_likelihood_master_ex . "<br>" . $conn->error;
               $checkError=false;
           }

           //risk_evaluation_master
           $sql_save_to_evaluation_master_ex ="
           INSERT INTO 
           risk_evaluation_master_ex 
           (rce_id,re_code,re_name,re_score_start, re_score_end, re_score_color)
           SELECT 
           $_REQUEST[rce_id],re_code,re_name,re_score_start, re_score_end,re_score_color
           FROM risk_evaluation_master
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_evaluation_master_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_evaluation_master_ex . "<br>" . $conn->error;
               $checkError=false;
           }

           //strategy_type_master
           $sql_save_to_strategy_type_master_ex ="
           INSERT INTO 
           strategy_type_master_ex 
           (rce_id,stm_code,stm_name,stm_description)
           SELECT 
           $_REQUEST[rce_id],stm_code,stm_name,stm_description
           FROM strategy_type_master
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_strategy_type_master_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_strategy_type_master_ex . "<br>" . $conn->error;
               $checkError=false;
           }
           //risk_ex
           $sql_save_to_risk_ex ="
           INSERT INTO 
           risk_ex 
           (           rce_id,r_seq,r_code,r_code_display,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score)
           SELECT 
           $_REQUEST[rce_id],'r_seq',r_code,r_code_display,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score
           FROM risk
           WHERE uu_id = '$_REQUEST[uuid]'";

           if ($conn->query($sql_save_to_risk_ex) === TRUE) {
               $checkError=true;
           }else{
               echo "Error insert: " . $sql_save_to_risk_ex . "<br>" . $conn->error;
               $checkError=false;
           }
           //SAVE EXAMPLE TO STORE END

           
            

        } else {
        echo "Error updating record: " . $conn->error;
        }

        if( $checkError==true){
            $sql = "SELECT 
            *
            FROM risk_cate_ex where uu_id='$_REQUEST[uuid]'";
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
        $sql = "DELETE FROM risk_cate_ex WHERE  rce_id='$_REQUEST[rce_id]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
    
         
            $sql_impact = "DELETE FROM impact_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_impact) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
                echo "Error deleting impact_master_ex: " . $conn->error."<br>";
            }

            $sql_likelihood_master_ex = "DELETE FROM likelihood_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_likelihood_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting likelihood_master_ex: " . $conn->error."<br>";
            }

            $sql_evaluation_master_ex = "DELETE FROM risk_evaluation_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_evaluation_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting risk_evaluation_master_ex: " . $conn->error."<br>";
            }

            $sql_strategy_type_master_ex = "DELETE FROM strategy_type_master_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_strategy_type_master_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting strategy_type_master_ex: " . $conn->error."<br>";
            }

            $sql_risk_ex = "DELETE FROM risk_ex WHERE  rce_id='$_REQUEST[rce_id]'";
            if ($conn->query($sql_risk_ex) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting risk_ex: " . $conn->error."<br>";
            }
            

        } else {
            $checkError==false;
        echo "Error deleting record: " . $conn->error;
        }

        if($checkError==true){

            $sql = "
            SELECT 
            *
            FROM risk_cate_ex where uu_id='$_REQUEST[uuid]'";
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
            FROM risk_cate_ex where rce_id='$_REQUEST[rce_id]'";
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
        FROM risk_cate_ex where  uu_id='$_REQUEST[uuid]'";
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
            FROM risk_cate_ex 
            where  rce_type_code=2 
            or uu_id='$_REQUEST[uuid]'";



            $dataArray = array();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $dataArray[] = $row;
                }
            }
            //echo "[{\"status\":\"200\"}]";
            echo "[{\"status\":\"200\",\"data\":".json_encode($dataArray)."}]";
            
            


        }else if($_REQUEST['action']=='loadExampleData'){
            
            
                

           //DELETE EXAMPLE FOR NEW LOAD START
           $sql_impact_delete = "DELETE FROM impact_master WHERE  uu_id='$_REQUEST[uuid]'";
           if ($conn->query($sql_impact_delete) === TRUE) {
               $checkError=true;
               
           
           }else{
               $checkError=false;
               echo "Error deleting sql_impact_delete: " . $conn->error."<br>";
           }

           $sql_likelihood_master_delete = "DELETE FROM likelihood_master WHERE  uu_id='$_REQUEST[uuid]'";
           if ($conn->query($sql_likelihood_master_delete) === TRUE) {
               $checkError=true;
           }else{
               $checkError=false;
               echo "Error deleting sql_likelihood_master_delete: " . $conn->error."<br>";
           }

           $sql_evaluation_master_delete = "DELETE FROM risk_evaluation_master WHERE  uu_id='$_REQUEST[uuid]'";
           if ($conn->query($sql_evaluation_master_delete) === TRUE) {
               $checkError=true;
           }else{
               $checkError=false;
               echo "Error deleting sql_evaluation_master_delete: " . $conn->error."<br>";
           }

           $sql_strategy_type_master_delete = "DELETE FROM strategy_type_master WHERE  uu_id='$_REQUEST[uuid]'";
           if ($conn->query($sql_strategy_type_master_delete) === TRUE) {
               $checkError=true;
           }else{
               $checkError=false;
               echo "Error deleting sql_strategy_type_master_delete: " . $conn->error."<br>";
           }
           $sql_risk_delete = "DELETE FROM risk WHERE  uu_id='$_REQUEST[uuid]'";
           if ($conn->query($sql_risk_delete) === TRUE) {
               $checkError=true;
           }else{
               $checkError=false;
               echo "Error deleting sql_risk_delete: " . $conn->error."<br>";
           }
           
           //DELETE EXAMPLE FOR NEW LOAD END

           //LOAD EXAMPLE FROM STORE START

          //impact_master_ex
          $sql_load_from_impact_master_ex ="
          INSERT INTO 
          impact_master
          (uu_id,im_code, im_name, im_description,im_score)
          SELECT 
          '$_REQUEST[uuid]',im_code, im_name,im_description,im_score
          FROM impact_master_ex 
          WHERE rce_id = '$_REQUEST[rce_id]'";

          if ($conn->query($sql_load_from_impact_master_ex) === TRUE) {
              $checkError=true;
          }else{
              echo "Error insert: " . $sql_load_from_impact_master_ex . "<br>" . $conn->error;
              $checkError=false;
          }

          //likelihood_master
          $sql_load_from_likelihood_master_ex ="
          INSERT INTO 
          likelihood_master
          (uu_id,lh_code, lh_name, lh_score,lh_description)
          SELECT 
          '$_REQUEST[uuid]', lh_code,lh_name,lh_score, lh_description
          FROM likelihood_master_ex
          WHERE rce_id = '$_REQUEST[rce_id]'";

          if ($conn->query($sql_load_from_likelihood_master_ex) === TRUE) {
              $checkError=true;
          }else{
              echo "Error insert: " . $sql_load_from_likelihood_master_ex . "<br>" . $conn->error;
              $checkError=false;
          }

          //risk_evaluation_master
          $sql_load_from_evaluation_master_ex ="
          INSERT INTO 
          risk_evaluation_master
          (uu_id,re_code,re_name,re_score_start, re_score_end, re_score_color)
          SELECT 
          '$_REQUEST[uuid]',re_code,re_name,re_score_start, re_score_end,re_score_color
          FROM risk_evaluation_master_ex
          WHERE rce_id = '$_REQUEST[rce_id]'";

          if ($conn->query($sql_load_from_evaluation_master_ex) === TRUE) {
              $checkError=true;
          }else{
              echo "Error insert: " . $sql_load_from_evaluation_master_ex . "<br>" . $conn->error;
              $checkError=false;
          }

          //strategy_type_master
          $sql_load_from_strategy_type_master_ex ="
          INSERT INTO 
          strategy_type_master
          (uu_id,stm_code,stm_name,stm_description)
          SELECT 
          '$_REQUEST[uuid]',stm_code,stm_name,stm_description
          FROM strategy_type_master_ex
          WHERE rce_id = '$_REQUEST[rce_id]'";

          if ($conn->query($sql_load_from_strategy_type_master_ex) === TRUE) {
              $checkError=true;
          }else{
              echo "Error insert: " . $sql_load_from_strategy_type_master_ex . "<br>" . $conn->error;
              $checkError=false;
          }


          //risk_ex
          $sql_load_from_risk_ex ="
          INSERT INTO 
          risk
          (uu_id,r_seq,r_code,r_code_display,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score,created_date,updated_date)
          SELECT 
          '$_REQUEST[uuid]',r_seq,r_code,r_code_display,r_name,r_description,r_factor,r_effect,responsible_person,guidelines_risk,duration_of_work,stm_code,im_code,lh_code,total_score,now(),now()
          FROM risk_ex
          WHERE rce_id = '$_REQUEST[rce_id]'";

          if ($conn->query($sql_load_from_risk_ex) === TRUE) {
              $checkError=true;
          }else{
              echo "Error insert: " . $sql_load_from_risk_ex . "<br>" . $conn->error;
              $checkError=false;
          }
          
          
          //LOAD EXAMPLE FROM STORE END
            
            


          if($checkError==true){

           
            echo "[{\"status\":\"200\"}]";
           

            }



        }else if($_REQUEST['action']=="exportExampleData"){

            //risk_ex
            $sqlRisk = "SELECT 
            *
            FROM risk_ex  
            where rce_id='$_REQUEST[rce_id]'";
            $dataRiskArray = array();
            $resultRisk = $conn->query($sqlRisk);
    
            if ($resultRisk->num_rows > 0) {
       
                while($row = $resultRisk->fetch_assoc()) {
                    $dataRiskArray[] = $row;
                }
            }
             //strategy_type_master_ex
            $sqlStm = "SELECT 
            *
            FROM strategy_type_master_ex where rce_id='$_REQUEST[rce_id]'";
            $dataStmArray = array();
            $resultStm = $conn->query($sqlStm);

            if ($resultStm->num_rows > 0) {
                while($row = $resultStm->fetch_assoc()) {
                    $dataStmArray[] = $row;
                }
            }


              //likelihood_master_ex
            $sqlLh = "SELECT 
            *
            FROM likelihood_master_ex where rce_id='$_REQUEST[rce_id]'";
            $dataLhArray = array();
            $resultLh = $conn->query($sqlLh);

            if ($resultLh->num_rows > 0) {
            // output data of each row
                while($row = $resultLh->fetch_assoc()) {
                    $dataLhArray[] = $row;
                }
            }

            //impact_master_ex
            $sqlIm = "SELECT 
            *
            FROM impact_master_ex where rce_id='$_REQUEST[rce_id]'";
            $dataImArray = array();
            $resultIm = $conn->query($sqlIm);

            if ($resultIm->num_rows > 0) {
            // output data of each row
                while($row = $resultIm->fetch_assoc()) {
                    $dataImArray[] = $row;
                }
            }

             //risk_evaluation_master_ex
             $sqlRe = "SELECT 
             *
             FROM risk_evaluation_master_ex where rce_id='$_REQUEST[rce_id]'";
             $dataReArray = array();
             $resultRe = $conn->query($sqlRe);
 
             if ($resultRe->num_rows > 0) {
             // output data of each row
                 while($row = $resultRe->fetch_assoc()) {
                     $dataReArray[] = $row;
                 }
             }
            
            echo "[{\"status\":\"200\",
                \"dataRisk\":".json_encode($dataRiskArray).",
                \"dataStm\":".json_encode($dataStmArray).",
                \"dataLh\":".json_encode($dataLhArray).",
                \"dataIm\":".json_encode($dataImArray).",
                \"dataRe\":".json_encode($dataReArray)."
            }]";
           
        }else if($_REQUEST['action']=="importExampleJsonData"){

            $riskLength=sizeof($_REQUEST['dataRisk']);
            $StmLength=sizeof($_REQUEST['dataStm']);
            $LhLength=sizeof($_REQUEST['dataLh']);
            $ImLength=sizeof($_REQUEST['dataIm']);
            $ReLength=sizeof($_REQUEST['dataRe']);
            $checkError=true;
    

            

            $impact_master_delete = "DELETE FROM impact_master WHERE  uu_id='$_REQUEST[uuid]'";
            if ($conn->query($impact_master_delete) === TRUE) {
                $checkError=true;
            
            }else{
                $checkError=false;
                echo "Error deleting: " . $impact_master_delete . "<br>" . $conn->error;
            }

            $sql_likelihood_master_delete = "DELETE FROM likelihood_master WHERE  uu_id='$_REQUEST[uuid]'";
            if ($conn->query($sql_likelihood_master_delete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting: " . $sql_likelihood_master_delete . "<br>" . $conn->error;
            }

            $sql_evaluation_master_delete = "DELETE FROM risk_evaluation_master WHERE  uu_id='$_REQUEST[uuid]'";
            if ($conn->query($sql_evaluation_master_delete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting: " . $sql_evaluation_master_delete . "<br>" . $conn->error;
            }

            $sql_strategy_type_master_delete = "DELETE FROM strategy_type_master WHERE  uu_id='$_REQUEST[uuid]'";
            if ($conn->query($sql_strategy_type_master_delete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting: " . $sql_strategy_type_master_delete . "<br>" . $conn->error;
            }
            $sql_risk_delete = "DELETE FROM risk WHERE  uu_id='$_REQUEST[uuid]'";
            if ($conn->query($sql_risk_delete) === TRUE) {
                $checkError=true;
            }else{
                $checkError=false;
                echo "Error deleting: " . $sql_risk_delete . "<br>" . $conn->error;
            }

    
            for ($i = 0; $i < $riskLength; $i++) {
         

                $sql_insert_risk = "
                INSERT INTO risk 
                (
                uu_id ,
                r_code,
                r.r_code_display ,
                r_seq ,
                r_name ,
                r_description ,
                r_factor,
                r_effect ,
                responsible_person ,
                guidelines_risk,
                duration_of_work, 
                lh_code ,
                im_code ,
                stm_code, 
                total_score ,
                created_date,
                updated_date
                ) 
                VALUES
                (
                '".$_REQUEST['uuid']."',
                '".$_REQUEST['dataRisk'][$i]['r_code']."',
                '".$_REQUEST['dataRisk'][$i]['r_code_display']."',
                ".$_REQUEST['dataRisk'][$i]['r_seq'].",
                '".$_REQUEST['dataRisk'][$i]['r_name']."',
                '".$_REQUEST['dataRisk'][$i]['r_description']."',
                '".$_REQUEST['dataRisk'][$i]['r_factor']."',
                '".$_REQUEST['dataRisk'][$i]['r_effect']."',
                '".$_REQUEST['dataRisk'][$i]['responsible_person']."',
                '".$_REQUEST['dataRisk'][$i]['guidelines_risk']."',
                '".$_REQUEST['dataRisk'][$i]['duration_of_work']."',
                ".$_REQUEST['dataRisk'][$i]['lh_code'].",
                ".$_REQUEST['dataRisk'][$i]['im_code'].",
                ".$_REQUEST['dataRisk'][$i]['stm_code'].",
                ".$_REQUEST['dataRisk'][$i]['total_score'].",
                now(),
                now()
                )
                ";

                if ($conn->query($sql_insert_risk) === TRUE) {
                    $checkError=true;
                }else{
                    echo "Error insert: " . $sql_insert_risk . "<br>" . $conn->error;
                    $checkError=false;
                } 
                
            }

            for ($i = 0; $i < $StmLength; $i++) {
               

                $sql_insert_stm = "
                INSERT INTO strategy_type_master 
                (
                    uu_id,stm_code,stm_name,stm_description,created_date,updated_date
                ) 
                VALUES
                (
                '".$_REQUEST['uuid']."',
                '".$_REQUEST['dataStm'][$i]['stm_code']."',
                '".$_REQUEST['dataStm'][$i]['stm_name']."',
                '".$_REQUEST['dataStm'][$i]['stm_description']."',
                now(),
                now()
                )
                ";

                if ($conn->query($sql_insert_stm) === TRUE) {
                    $checkError=true;
                }else{
                    echo "Error insert: " . $sql_insert_stm . "<br>" . $conn->error;
                    $checkError=false;
                } 
                
            }

            for ($i = 0; $i < $LhLength; $i++) {
               

                $sql_insert_lh = "
                INSERT INTO likelihood_master 
                (
                    uu_id,lh_code, lh_name, lh_score,lh_description,created_date,updated_date
                ) 
                VALUES
                (
                '".$_REQUEST['uuid']."',
                '".$_REQUEST['dataLh'][$i]['lh_code']."',
                '".$_REQUEST['dataLh'][$i]['lh_name']."',
                '".$_REQUEST['dataLh'][$i]['lh_score']."',
                '".$_REQUEST['dataLh'][$i]['lh_description']."',
                now(),
                now()
                )
                ";

                if ($conn->query($sql_insert_lh) === TRUE) {
                    $checkError=true;
                }else{
                    echo "Error insert: " . $sql_insert_lh . "<br>" . $conn->error;
                    $checkError=false;
                } 
                
            }

            for ($i = 0; $i < $ImLength; $i++) {
               

                $sql_insert_Im = "
                INSERT INTO impact_master 
                (
                    uu_id,im_code, im_name, im_description,im_score,created_date,updated_date
                ) 
                VALUES
                (
                '".$_REQUEST['uuid']."',
                '".$_REQUEST['dataIm'][$i]['im_code']."',
                '".$_REQUEST['dataIm'][$i]['im_name']."',
                '".$_REQUEST['dataIm'][$i]['im_description']."',
                '".$_REQUEST['dataIm'][$i]['im_score']."',
                now(),
                now()
                )
                ";

                if ($conn->query($sql_insert_Im) === TRUE) {
                    $checkError=true;
                }else{
                    echo "Error insert: " . $sql_insert_Im . "<br>" . $conn->error;
                    $checkError=false;
                } 
                
            }


            for ($i = 0; $i < $ReLength; $i++) {
               

                $sql_insert_Re = "
                INSERT INTO risk_evaluation_master 
                (
                    uu_id,re_code,re_name,re_score_start, re_score_end, re_score_color,created_date,updated_date
                ) 
                VALUES
                (
                '".$_REQUEST['uuid']."',
                '".$_REQUEST['dataRe'][$i]['re_code']."',
                '".$_REQUEST['dataRe'][$i]['re_name']."',
                '".$_REQUEST['dataRe'][$i]['re_score_start']."',
                '".$_REQUEST['dataRe'][$i]['re_score_end']."',
                '".$_REQUEST['dataRe'][$i]['re_score_color']."',
                now(),
                now()
                )
                ";

                if ($conn->query($sql_insert_Re) === TRUE) {
                    $checkError=true;
                }else{
                    echo "Error insert: " . $sql_insert_Re . "<br>" . $conn->error;
                    $checkError=false;
                } 
                
            }




            if($checkError==true){

            echo "[{\"status\":\"200\"}]";

            }

        }

        //importExampleJsonData

 }else{
    echo "[{\"status\":\"404\",\"loginStatus\":\"notLogin\"}]";
 }
 $conn->close();

?>