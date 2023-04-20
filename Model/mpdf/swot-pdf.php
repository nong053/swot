
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
include("../config.php");

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
select s.s_id,s.uu_id,s.form_id,s.ap_code,ap.ap_name,
s.s_name,s.s_weight,s.s_score,
s.s_total_score,s.swot_name,s.swot_detail
from swot s
inner join aspect_master ap on s.ap_code=ap.ap_code
where s.uu_id='$uuid'   and  ap.uu_id='$uuid'


order by s.ap_code,s.form_id asc

";
$data1="";
$data2="";
$data3="";
$data4="";
$dataArray = array();
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
   
        $sum_s_score=0.00;
        $sum_w_score=0.00;
        $sum_o_score=0.00;
        $sum_t_score=0.00;
        $swot_detail="";
        $count=1;
        $count_data1=1;
        $count_data2=1;
        $count_data3=1;
        $count_data4=1;
        while($row = $result->fetch_assoc()) {
            if($count==1){
                $swot_name="".$row['swot_name'];
                $swot_detail="".$row['swot_detail'];
            }
          if($row['ap_code']=='1' && ($row['s_name']!='' && $row['s_total_score']!=0)){
            $sum_s_score+=$row['s_total_score'];
            if ($count_data1 % 2 == 0) {
                $data1.="<tr style='background:white;'>";
              }else{
                $data1.="<tr style='background:#F5F5F5;'>";
              }
            //$data1.="<tr>";
                $data1.="<td >".$row['s_name']."</td>";
                $data1.="<td >".$row['s_total_score']."</td>";

            $data1.="</tr>";
            $count_data1++;
          }

          if($row['ap_code']=='2' && ($row['s_name']!='' && $row['s_total_score']!=0)){
            $sum_w_score+=$row['s_total_score'];
              if ($count_data2 % 2 == 0) {
                $data2.="<tr style='background:white;'>";
              }else{
                $data2.="<tr style='background:#F5F5F5;'>";
              }

            //$data2.="<tr>";
                $data2.="<td>".$row['s_name']."</td>";
                $data2.="<td>".$row['s_total_score']."</td>";
            $data2.="</tr>";
            $count_data2++;
          }

          if($row['ap_code']=='3' && ($row['s_name']!='' && $row['s_total_score']!=0)){
            $sum_o_score+=$row['s_total_score'];
            if ($count_data3 % 2 == 0) {
                $data3.="<tr style='background:white;'>";
              }else{
                $data3.="<tr style='background:#F5F5F5;'>";
              }
            //$data3.="<tr>";
                $data3.="<td>".$row['s_name']."</td>";
                $data3.="<td>".$row['s_total_score']."</td>";
            $data3.="</tr>";
            $count_data3++;
          }

          if($row['ap_code']=='4' && ($row['s_name']!='' && $row['s_total_score']!=0)){
            $sum_t_score+=$row['s_total_score'];
            //$data4.="<tr>";
            if ($count_data4 % 2 == 0) {
                $data4.="<tr style='background:white;'>";
              }else{
                $data4.="<tr style='background:#F5F5F5;'>";
              }
                $data4.="<td>".$row['s_name']."</td>";
                $data4.="<td>".$row['s_total_score']."</td>";
            $data4.="</tr>";
            $count_data4++;
          }
           $count++;
        }


        $data1.="<tr style='border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; background:#FFFFCC;'>";
            $data1.="<td><b>คะแนนรวม</b></td>";
            $data1.="<td><b>".number_format($sum_s_score,2, '.', '')."</b></td>";
        $data1.="</tr>";

        $data2.="<tr style='border-top:1px solid #cccccc; border-bottom:1px solid #cccccc;background:#FFFFCC;' >";
            $data2.="<td><b>คะแนนรวม</b></td>";
            $data2.="<td><b>".number_format($sum_w_score,2, '.', '')."</b></td>";
        $data2.="</tr>";

        $data3.="<tr style='border-top:1px solid #cccccc;  border-bottom:1px solid #cccccc; background:#FFFFCC;'>";
            $data3.="<td><b>คะแนนรวม</b></td>";
            $data3.="<td><b>".number_format($sum_o_score,2, '.', '')."</b></td>";
        $data3.="</tr>";

        $data4.="<tr style='border-top:1px solid #cccccc; border-bottom:1px solid #cccccc;background:#FFFFCC;'>";
            $data4.="<td><b>คะแนนรวม</b></td>";
            $data4.="<td><b>".number_format($sum_t_score,2, '.', '')."</b></td>";
        $data4.="</tr>";
    
    } 
    $data.="<h1 style='text-align:center;'>".$swot_name."</h1>";
    $data.="<div>".$swot_name."</div>";
    $data.="<h3>กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส)</h3>";
    $data.="<table  style='width:100%;'  border=''>";
    $data.="<thead><tr ><th>จุดแข็ง (Strengths)</th> <th>โอกาส (Opportunities)</th></tr></thead>"; 
    $data.="<tbody>";
        $data.="<tr>";
        
            $data.="<td>";
            
                $data.="<table style='width:100%;'>";
                    //$data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data1;
                    $data.="</tbody>";
                $data.="</table >";
                
            $data.="</td>";
            $data.="<td>";
            
                $data.="<table style='width:100%;'>";
                    //$data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                   $data.="<tbody>";
                    $data.=$data2;
                   $data.="</tbody>";
                $data.="</table>";
                
            $data.="</td>";
            
        $data.="</tr>";
    $data.="</tbody>";
    $data.="</table>"; 


    
    $data.="<h3>กลยุทธ์เชิงป้องกัน ST (จุดแข็งและภัยคุกคาม)</h3>";
    $data.="<table class='table' style='width:100%;'  border=''>";
    $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>ภัยคุกคาม (Threats)</th></tr></thead>"; 
    $data.="<tbody>";
        $data.="<tr>";
            $data.="<td>";
                $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data3;
                       

                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
            $data.="<td>";
                    $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>ภัยคุกคาม (Threats)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data4;
                       

                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
        $data.="</tr>";
    $data.="</tbody>";
    $data.="</table>"; 


    $data.="<h3>กลยุทธ์เชิงแก้ไข WO (จุดอ่อนและโอกาส)</h3>";
    $data.="<table class='table' style='width:100%;'  border=''>";
    $data.="<thead><tr><th>จุดอ่อน (Weaknesses)</th> <th>โอกาส (Opportunities)</th></tr></thead>"; 
    $data.="<tbody>";
        $data.="<tr>";
            $data.="<td>";
                $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data1;
                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
            $data.="<td>";
                    $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>ภัยคุกคาม (Threats)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data2;
                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
        $data.="</tr>";
    $data.="</tbody>";
    $data.="</table>"; 


    $data.="<h3>กลยุทธ์เชิงรับ WT (จุดอ่อนและภัยคุกคาม)</h3>";
    $data.="<table class='table' style='width:100%;'  border=''>";
    $data.="<thead><tr><th>จุดอ่อน (Weaknesses)</th> <th>ภัยคุกคาม (Threats)</th></tr></thead>"; 
    $data.="<tbody>";
        $data.="<tr>";
            $data.="<td>";
                $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data1;
                    $data.="</tbody>";
               $data.="</table>";
            $data.="</td>";
            $data.="<td>";
                    $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>ภัยคุกคาม (Threats)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data2;
                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
        $data.="</tr>";
    $data.="</tbody>";
    $data.="</table>"; 






//echo  $data;
//$data = ob_get_contents();
$mpdf->use_kwt = true;
$mpdf->WriteHTML($data);
$mpdf->Output("swot-analysis.pdf");
//$mpdf->Output("swot-analysis.pdf",\Mpdf\Output\Destination::INLINE);
$mpdf->Output("swot-analysis.pdf",\Mpdf\Output\Destination::DOWNLOAD);
ob_end_flush();


}else{
    echo "[{\"status\":\"401\",\"loginStatus\":\"Unauthorized\"}]";
 }
 $conn->close();

?>

