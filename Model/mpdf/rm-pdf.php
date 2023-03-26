
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
include("../config-rm.php");

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

$sql = "
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


$data1="";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

   
        
        $count=1;
        while($row = $result->fetch_assoc()) {
           

            if ($count % 2 == 0) {
                $data1.="<tr style='background:white;'>";
              }else{
                $data1.="<tr style='background:#cccccc;'>";
              }
            
                $data1.="<td >".$count."</td>";
                $data1.="<td >(".$row['r_code_display'].")".$row['r_name']."</td>";
                $data1.="<td >".$row['total_score']."</td>";
                $data1.="<td >".$row['stm_name']."</td>";
                $data1.="<td >".$row['guidelines_risk']."</td>";
                $data1.="<td>".$row['responsible_person']."</td>";
                $data1.="<td >".$row['duration_of_work']."</td>";
               
            $data1.="</tr>";
          

           $count++;
        }


      
    
    } 

    $data.="<h1 style='text-align:center;'>รายงานสรุปการบริหารความความเสี่ยง</h1>";
    
    $data.="<table style='width:100%; border:0px;' >";
         $data.="<thead><tr><th>ลำดับ</th> <th>ชื่อความเสี่ยง</th> <th>ระดับความเสี่ยง</th> <th>กลยุทธ์</th> <th>จัดการความเสี่ยง</th> <th>ผู้รับผิดชอบ</th> <th>ระยะเวลาปฏิบัติ</th></tr></thead>"; 
        $data.="<tbody >";
        $data.=$data1;
        $data.="</tbody>";
    $data.="</table >";
            






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

