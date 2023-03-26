
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

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

$data="ภาษาไทย testttt==";
?>


<!DOCTYPE html>
<html>
<head>
<title>PDF</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<style>
body {
    font-family: sarabun;
}
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1 >ตัวอย่างในการเก็บโค้ด HTML มาเป็น PDF111<?=$data?></h1>
<table >
  <tr>
    <th>ชื่อ</th>
    <th>ที่อยู่</th>
    <th>ประเทศ</th>
  </tr>
  <tr>
    <td>น้องไก่ คนงาม</td>
    <td>นายบ้าน บ้าน</td>
    <td>ไทย</td>
  </tr>
  <tr>
    <td>นายรักเรียน</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>นายรักดี</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
</table>

</body>
</html>






<?php


$data = ob_get_contents();
$mpdf->WriteHTML($data);
$mpdf->Output("MyPDF.pdf");
//$mpdf->Output("MyPDF.pdf",\Mpdf\Output\Destination::INLINE);
//$mpdf->Output("MyPDF.pdf",\Mpdf\Output\Destination::DOWNLOAD);
ob_end_flush()
?>

ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF.pdf">คลิกที่นี้</a>