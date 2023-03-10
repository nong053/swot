<?php
include("../config-rm.php");
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
        where r.uu_id='$_REQUEST[uuid]'";
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
        
        where r.uu_id='$_REQUEST[uuid]'";
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
            inner join impact_master im on r.im_code=im.im_code where r.uu_id='$_REQUEST[uuid]'";
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
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
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
        $sql = "UPDATE risk SET r_code='RISK$last_id' WHERE r_id='$last_id'";
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
            inner join impact_master im on r.im_code=im.im_code where r.uu_id='$_REQUEST[uuid]'";
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
       
       
        $sql_insert = "
        INSERT INTO risk_cate_ex 
        (
        uu_id ,
        rce_name,
        rce_type_code 
        ) 
        VALUES
        (
        '$_REQUEST[uuid]',
        '$_REQUEST[rce_name]',
        '$_REQUEST[rce_type_code]',
        
        )
        ";
        if ($conn->query($sql_insert) === TRUE) {
            $checkError=true;

        }else{
            echo "Error insert: " . $sql_insert . "<br>" . $conn->error;
            $checkError=false;
        }

        
    }else if($_REQUEST['action']=='updateExampleData'){
       
       
        $sql = "
        UPDATE risk_cate_ex SET 
       
        rce_name='$_REQUEST[rce_name]',
        rce_type_code='$_REQUEST[rce_type]'
       
        WHERE rce_id='$_REQUEST[rce_id]'";

        if ($conn->query($sql) === TRUE) {

     
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

        } else {
        echo "Error updating record: " . $conn->error;
        }

        
    }else if($_REQUEST['action']=='delExampleData'){
       
       
        $checkError=true;
        $sql = "DELETE FROM risk_cate_ex WHERE  rce_id='$_REQUEST[rce_id]' and uu_id='$_REQUEST[uuid]'";

        if ($conn->query($sql) === TRUE) {
    
        

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
            
            


        }
    //findOneExampleData
       
   

    
    

 }else{
    echo "[{\"status\":\"404\",\"loginStatus\":\"notLogin\"}]";
 }
 $conn->close();

?>