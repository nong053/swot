
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
include("../config-mc.php");

$uuid=isset($_REQUEST['uuid']) ? $_REQUEST['uuid'] : '';
$sql = "SELECT * FROM users where uu_id='$uuid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp',
    'fontdata' => $fontData + [
            'sarabun' => [
                'R' => 'THSarabunNew.ttf',
                'I' => 'THSarabunNewItalic.ttf',
                'B' =>  'THSarabunNewBold.ttf',
                'BI' => "THSarabunNewBoldItalic.ttf",
            ]
        ],
        'default_font' =>'thsarabun'
]);

//ob_start(); // Start get HTML code
$data="
<style>body {
  font-family: sarabun;
  font-size:24px;
}
</style>";
$data.="<h1 style='text-align:center;'>รายงานสรุปประสิทธิภาพความเหมาะสมคนกับงาน</h1>";

$sqlTaskCate = "SELECT tc_id, tc_name,tc_code,current_person FROM task_cate where uu_id='$_REQUEST[uuid]'";
        $dataTaskCateArray = array();
        $resultTaskCate = $conn->query($sqlTaskCate);

        if ($resultTaskCate->num_rows > 0) {
        // output data of each row
            while($row_cate_task = $resultTaskCate->fetch_assoc()) {
                $data.="<h2 style=''>".$row_cate_task['tc_name']."</h2>";
    
                $data.="<table style='width:100%; border:0px;' >";
                    $data.="<thead><tr><th style='width:5%; text-algin:center;'>ลำดับ</th> <th  style='width:50%;'>รายละเอียดงาน</th> <th  style='width:10%;text-algin:right;'>เวลา:หน่วย</th> <th  style='width:10%;text-algin:right;'>ปริมาณงาน:ครั้ง</th> <th  style='width:10%;text-algin:right;'>อัตรากำลัง:ปี</th> </tr></thead>"; 
                    $data.="<tbody >";
                    
                        $sqlTask = "SELECT t_id,uu_id,t_code,tc_code,t_name,t_day,t_hour,t_minute,t_x_time,manpower ,t_quantity
                        FROM task where uu_id='$_REQUEST[uuid]' and tc_code='$row_cate_task[tc_code]'";
                        $dataTaskArray = array();
                        $resultTask = $conn->query($sqlTask);

                        if ($resultTask->num_rows > 0) {
                        // output data of each row
                        $count=1;
                        $totalManpower=0;
                            while($row_task = $resultTask->fetch_assoc()) {
                                if ($count % 2 == 0) {
                                    $data.="<tr style='background:white;'>";
                                  }else{
                                    $data.="<tr style='background:#cccccc;'>";
                                  }
                                
                                    $data.="<td >".$count."</td>";
                                    $data.="<td >".$row_task['t_name']."</td>";
                                    $data.="<td >".number_format($row_task['t_x_time'])."</td>";
                                    $data.="<td >".$row_task['t_quantity']."</td>";
                                    $data.="<td >".$row_task['manpower']."</td>";
                                    $totalManpower+=$row_task['manpower'];
                                   
                                $data.="</tr>";
                              
                    
                               $count++;
                            }
                        }

                        $data.="<tr style=\"background-color:antiquewhite;\">";
                             $data.="<td colspan=\"4\">อัตรากำลังพล</td>";
                             $data.="<td >".$totalManpower."/".$row_cate_task['current_person']."</td>";
                        $data.="</tr>";

                    $data.="</tbody>";
                $data.="</table >";
            }
        }

        



   
            






//echo  $data;
//$data = ob_get_contents();

$mpdf->AddPage('L');
$mpdf->WriteHTML($data);
//$mpdf->Output("risk-mangement-report.pdf");
//$mpdf->Output("swot-analysis.pdf",\Mpdf\Output\Destination::INLINE);
$mpdf->Output("risk-mangement-report.pdf",\Mpdf\Output\Destination::DOWNLOAD);
ob_end_flush();


}else{
    echo "[{\"status\":\"401\",\"loginStatus\":\"Unauthorized\"}]";
 }
 $conn->close();

?>

