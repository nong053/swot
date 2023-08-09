<?php
include("config-central-public.php");
include("config.php");



    //coding here.
    if($_REQUEST['action']=='swotByCompany'){

        $sql = "
  


        SELECT s_id,s_code,ap_code,bt.b_id,bt.b_type_name,seq_id,form_id,s_name,s_weight,s_score,s_total_score,swot_detail 
            FROM swot_ex se
            inner join business_type bt on bt.b_id=se.b_id
            where se.b_id=".$_REQUEST['b_id']."
            order by ap_code,seq_id

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


    }


 $conn->close();

?>