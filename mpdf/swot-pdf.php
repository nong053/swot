
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
include("../Model/config.php");

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
s.s_total_score,s.swot_detail
from swot s
inner join aspect_master ap on s.ap_code=ap.ap_code
where s.uu_id='2c106cc61b26f9f71ec3da85c01c56cd'   and  ap.uu_id='2c106cc61b26f9f71ec3da85c01c56cd'


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
   

        while($row = $result->fetch_assoc()) {
          if($row['ap_code']=='1'){
            $data1.="<tr>";
                $data1.="<td>".$row['s_name']."</td>";
                $data1.="<td>".$row['s_total_score']."</td>";
            $data1.="</tr>";
          }
          if($row['ap_code']=='2'){
            $data2.="<tr>";
                $data2.="<td>".$row['s_name']."</td>";
                $data2.="<td>".$row['s_total_score']."</td>";
            $data2.="</tr>";
          }

          if($row['ap_code']=='3'){
            $data3.="<tr>";
                $data3.="<td>".$row['s_name']."</td>";
                $data3.="<td>".$row['s_total_score']."</td>";
            $data3.="</tr>";
          }

          if($row['ap_code']=='4'){
            $data4.="<tr>";
                $data4.="<td>".$row['s_name']."</td>";
                $data4.="<td>".$row['s_total_score']."</td>";
            $data4.="</tr>";
          }
           
        }
    
    } 
    $data.="<h1 style='text-align:center;'>SWOT ANALISYS REPORT</h1>";
    $data.="<h3>กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส)</h3>";
    $data.="<table class='table' style='width:100%;'  border='1'>";
    $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>โอกาส (Opportunities)</th></tr></thead>"; 
    $data.="<tbody>";
        $data.="<tr>";
            $data.="<td>";
                $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data1;
                       

                    $data.="</tbody>";
                $data.="</table >";
            $data.="</td>";
            $data.="<td>";
                $data.="<table style='width:100%;'>";
                    // $data.="<thead><tr><th>จุดแข็ง (Strengths)</th> <th>คะแนน</th></tr></thead>"; 
                    $data.="<tbody>";
                    $data.=$data2;
                    $data.="</tbody>";
                $data.="</table>";
            $data.="</td>";
        $data.="</tr>";
    $data.="</tbody>";
    $data.="</table>"; 


    
    $data.="<h3>กลยุทธ์เชิงป้องกัน ST (จุดแข็งและภัยคุกคาม)</h3>";
    $data.="<table class='table' style='width:100%;'  border='1'>";
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
    $data.="<table class='table' style='width:100%;'  border='1'>";
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
    $data.="<table class='table' style='width:100%;'  border='1'>";
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

$mpdf->WriteHTML($data);
$mpdf->Output("swot-analysis.pdf");
$mpdf->Output("swot-analysis.pdf",\Mpdf\Output\Destination::INLINE);
//$mpdf->Output("swot-analysis.pdf",\Mpdf\Output\Destination::DOWNLOAD);
ob_end_flush()

?>

