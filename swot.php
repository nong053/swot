<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWOT Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-ocean-blue.min.css" /> -->
    <!-- <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jquery.min.js"></script> -->
    
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" >
    <script src="./device-uuid-master/lib/device-uuid.js"></script>


    
    
    <style>

    @import url(fonts/thsarabunnew.css);

    /**{ margin: 0; padding: 0; }*/
    body{ 
        font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em; ; 
        background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#191970  );
    }
        .font-score{
            
        }
        .font-h-score{
            text-align: left;
            font-weight: bold;
        }
        .graph{
            width: 100%;
             height: 700px; 
            /* background-color:bisque; */
        }
        .setting-toggle {
            position: fixed;
            top:75px;
            right: 33px;
            text-decoration: none;
            z-index: 1016;
            -webkit-transform: rotate(-90deg) translate3d(-25px, 39px, 0);
            transform: rotate(-90deg) translate3d(-25px, 39px, 0);
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin-top: -83px;
            -webkit-box-shadow: var(--phoenix-setting-toggle-shadow);
            box-shadow: var(--phoenix-setting-toggle-shadow);
        }

        .widthSwotName{
            width: 70%;
        }
        .widthSwotWeight{
            width:15%;
            text-align: center;
        }
        .widthSwotScore{
            width: 15%;
            text-align: center;
        }
        .card-header{
            font-weight: bold;
        }
        .total-swot{
            text-align: right;
            font-weight: bold;
        }
        .accordion {
            --bs-accordion-body-padding-x: 5px;
        }
       
        .headeTitle{
            color:white;
            text-align: center;
            position: absolute;
            top:25px;
        }
        .swot_seq{
            width: 10%;
            text-align: center;
        }
        .swot_name{
            width: 70%;
            text-align: left;
        }
        .swot_score number_only{
            width: 20%;
            text-align: right;
        }
        .headerFixed{
             background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#191970  ); 
            position:fixed; z-index:10; display:block;width:100%;
            top:0px;
            height: 75px;
            /* border-bottom: 1px solid #000039; */
          
 
        }

        .alert {
   
            --bs-alert-margin-bottom: 0px;
        }



        
    </style>
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="headerFixed">
        <button class="btn btn-primary btn-circle btn-back  d-none d-lg-block" id="btn-back"  href="./"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
        <div class=" d-lg-none" style="margin-top: 55px;"></div>
        <div class="container">
            <h1 class="headeTitle"><i class="fa-sharp fa-solid fa-chart-line"></i> SWOT ANALYSIS</h1>
        </div>
</div>
<div style="margin-bottom: 80px;" class="d-none d-lg-block"></div>
<div style="margin-bottom: 75px;" class=" d-lg-none"></div>
<div class="container"  >
    
    <div id="tableRmDataAllArea"  >

    
    
    <div class="  mb-3">
        
        
        

        <div class="card text-bg-defualt  mb-3 " >
            <div class="card-header" id="swot_detail_header">ตัวอย่างข้อมูล SWOT
                <!-- SWOT Analysis (ระบบป้องกันภัยทางอากาศ  รุ่น “PECHORA-2D” SAM S-125-2D)  -->
            </div>
            <div class="card-body" >
                <div id="chart" class="graph" ></div>
            </div>
        </div>
  
    </div>

 
    
        <div class="card text-bg-default mb-3" >
                <div class="card-header">กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส) </div>
                <div class="card-body">
        <div class="row">
        <div class="col-md-6">
        
                <table class="table  table-striped tableRmData">
                        <thead>
                            <tr>
                                <th class="swot_seq">#</th>
                                <th class="swot_name">จุดแข็ง (Strengths)</th>
                                <th class="swot_score number_only">คะแนน</th>
                            </tr>
                        </thead>
                        <tbody class="dataStrengths">
<!--                             
                            <tr>
                                <td >1</td>
                                <td scope="row">บริษัทฯ อยู่ในเครือบริษัทพระนครยนตรการ ก่อตั้งเมื่อปี ๒๕๐๐ ประกอบธุรกิจอุตสาหกรรมด้านยานยนต์เป็นทั้งผู้ประกอบและผู้จัดจำหน่ายภายในประเทศ</td>
                                <td>1</td>
                            </tr>
                            
                            <tr>
                                <td >2</td>
                                <td scope="row">ระบบไฮโดรลิค ช่วยทำให้การปรับเปลี่ยนเคลื่ยนย้ายการทำงานจากการปฎิบัติภารกิจแบบเคลื่อนที่(Combat) มาเป็นแบบประจำที่ (Stowed) หรือจะเป็นในทางกลับกันใช้เวลาเพียงไม่เกิน ๑๐ นาที</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td >3</td>
                                <td scope="row">การทำลายล้างสูง</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td >4</td>
                                <td scope="row">ระยะหวังผลไกล</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="total-swot">เฉลี่ย=1 </td>
                            </tr> -->
                        </tbody>
                    </table>
                   
                


        </div>
        <div class="col-md-6">
                <!--content here-->
                

                    <table class="table  table-striped tableRmData">
                        <thead>
                            <tr>
                                 <th class="swot_seq">#</th>
                                <th class="swot_name">โอกาส (Opportunities)</th>
                                <th class="swot_score number_only">คะแนน</th>
                            </tr>
                        </thead>
                        <tbody class="dataOpportunities">
                        <!-- <tr>
                            <td >1</td>
                            <td scope="row">เป็นระบบควบคุมอำนวยการยุทธในสงครามสมัยใหม่ที่มีขีดความสามารถสูง</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td >2</td>
                            <td scope="row">ทอ.สามารถรับมือกับภัยคุกคามทางอากาศได้อย่างมีประสิทธิภาพมากขึ้น</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td >3</td>
                            <td scope="row">เชื่อมต่อระบบเข้ากับกองทัพเรือได้</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td >4</td>
                            <td scope="row">ติดกล้องที่หัว missile แล้วถ่ายภาพกลับมาที่ระบบ C2 ได้</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="total-swot">เฉลี่ย=3 </td>
                        </tr> -->
                        </tbody>
                    </table>
                <!--content here-->
        </div>
    </div>
    </div>

    </div>
    

    <div class="card text-bg-default  mb-3" >
        <div class="card-header">กลยุทธ์เชิงป้องกัน ST (จุดแข็งและภัยคุกคาม)</div>
        <div class="card-body">

        <div class="row">
            <div class="col-md-6">


                <table class="table  table-striped tableRmData">
                        <thead>
                            <tr>
                                 <th class="swot_seq">#</th>
                                <th class="swot_name">จุดแข็ง (Strengths)</th>
                                <th class="swot_score number_only">คะแนน</th>
                            </tr>
                        </thead>
                        <tbody class="dataStrengths">
                            <!-- <tr>
                                <td >1</td>
                                <td scope="row">บริษัทฯ อยู่ในเครือบริษัทพระนครยนตรการ ก่อตั้งเมื่อปี ๒๕๐๐ ประกอบธุรกิจอุตสาหกรรมด้านยานยนต์เป็นทั้งผู้ประกอบและผู้จัดจำหน่ายภายในประเทศ</td>
                                <td>1</td>
                            </tr>
                            
                            <tr>
                                <td >2</td>
                                <td scope="row">ระบบไฮโดรลิค ช่วยทำให้การปรับเปลี่ยนเคลื่ยนย้ายการทำงานจากการปฎิบัติภารกิจแบบเคลื่อนที่(Combat) มาเป็นแบบประจำที่ (Stowed) หรือจะเป็นในทางกลับกันใช้เวลาเพียงไม่เกิน ๑๐ นาที</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td >3</td>
                                <td scope="row">การทำลายล้างสูง</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td >4</td>
                                <td scope="row">ระยะหวังผลไกล</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="total-swot">เฉลี่ย=1 </td>
                            </tr> -->
                        </tbody>
                </table>
            </div>
        
            <div class="col-md-6">
                <table class="table  table-striped tableRmData">
                    <thead>
                        <tr>
                             <th class="swot_seq">#</th>
                            <th class="swot_name">ภัยคุกคาม (Threats)</th>
                            <th class="swot_score number_only">คะแนน</th>
                        </tr>
                    </thead>
                    <tbody class="dataThreats">
                    <!-- <tr>    
                            <td >1</td>
                            <td scope="row">ความเข้ากันได้ของรถหัวลาก ทอ.กับระบบ PECHORA-2D</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >2</td>
                            <td scope="row">องค์ความรู้ของระบบ PECHORA-2D ยังน้อย</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >3</td>
                            <td scope="row">ค่อนข้างเชื่อมต่อระบบยาก</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >4</td>
                            <td scope="row">-เคลื่อนย้ายเข้าไปในจุดพื้นที่การรบลำบาก</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="total-swot">เฉลี่ย=4 </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <div class="card text-bg-default  mb-3" >
        <div class="card-header">กลยุทธ์เชิงแก้ไข WO (จุดอ่อนและโอกาส)</div>
        <div class="card-body">
        <div class="row">
            <div class="col-md-6">

            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                         <th class="swot_seq">#</th>
                        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataWeaknesses">
                <!-- <tr>
                    <td>1</td>
                    <td scope="row">ต้องมีการต่ออายุการบำรุงรักษาเป็นรายปี</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td scope="row">ต้องซื้อ Launcher missile รุ่น 5P73-D เพิ่มเติม</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td scope="row">ระบบ Command and Control (C2) ไม่สามารถเชื่อต่อกับกองทัพอากาศได้</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td scope="row">ระบบ Support Radar (Antenna Post) ความแม่่นยำน้อย</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td colspan="3" class="total-swot">เฉลี่ย=2 </td>
                </tr> -->
                </tbody>
            </table>
            </div>
            <div class="col-md-6">

            
            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                         <th class="swot_seq">#</th>
                        <th class="swot_name">โอกาส (Opportunities)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataOpportunities">
                <!-- <tr>
                    <td >1</td>
                    <td scope="row">เป็นระบบควบคุมอำนวยการยุทธในสงครามสมัยใหม่ที่มีขีดความสามารถสูง</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td >2</td>
                    <td scope="row">ทอ.สามารถรับมือกับภัยคุกคามทางอากาศได้อย่างมีประสิทธิภาพมากขึ้น</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td >3</td>
                    <td scope="row">เชื่อมต่อระบบเข้ากับกองทัพเรือได้</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td >4</td>
                    <td scope="row">ติดกล้องที่หัว missile แล้วถ่ายภาพกลับมาที่ระบบ C2 ได้</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td colspan="3" class="total-swot">เฉลี่ย=3 </td>
                </tr> -->
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <div class="card text-bg-default  mb-3" >
        <div class="card-header">กลยุทธ์เชิงรับ WT (จุดอ่อนและภัยคุกคาม)</div>
        <div class="card-body">

        <div class="row">
            <div class="col-md-6">

            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                         <th class="swot_seq">#</th>
                        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataWeaknesses">
                <!-- <tr>
                    <td>1</td>
                    <td scope="row">ต้องมีการต่ออายุการบำรุงรักษาเป็นรายปี</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td scope="row">ต้องซื้อ Launcher missile รุ่น 5P73-D เพิ่มเติม</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td scope="row">ระบบ Command and Control (C2) ไม่สามารถเชื่อต่อกับกองทัพอากาศได้</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td scope="row">ระบบ Support Radar (Antenna Post) ความแม่่นยำน้อย</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td colspan="3"  class="total-swot">เฉลี่ย=2 </td>
                </tr> -->
                </tbody>
            </table>
            </div>
            <div class="col-md-6">
            <table class="table  table-striped tableRmData">
                    <thead>
                        <tr>
                             <th class="swot_seq">#</th>
                            <th class="swot_name">ภัยคุกคาม (Threats)</th>
                            <th class="swot_score number_only">คะแนน</th>
                        </tr>
                    </thead>
                    <tbody class="dataThreats">
                    <!-- <tr>    
                            <td >1</td>
                            <td scope="row">ความเข้ากันได้ของรถหัวลาก ทอ.กับระบบ PECHORA-2D</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >2</td>
                            <td scope="row">องค์ความรู้ของระบบ PECHORA-2D ยังน้อย</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >3</td>
                            <td scope="row">ค่อนข้างเชื่อมต่อระบบยาก</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td >4</td>
                            <td scope="row">เคลื่อนย้ายเข้าไปในจุดพื้นที่การรบลำบาก</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="total-swot">เฉลี่ย=4 </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>


    </div><!-- #tableRmDataAllArea-->



    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;"><i data-bs-dismiss="offcanvas" aria-label="Close" class="fa-sharp fa-solid fa-angles-right"></i> SWOT FORM </h5>
        <button type="button" id="OffcanvasClose" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="container"  >
            <div class="col-md-121" style="text-align: left; margin-bottom:10px; margin-right:15px">

                <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitSave" class="btn btn-success btn-circle ">
                    <i class="fa-solid fa-floppy-disk"></i>
                </button>
                <button style="margin-bottom:10px; margin:1px; float:right; "  data-bs-toggle="modal" data-bs-target="#exampleModel" type="button" id="getExampleModel" class="btn btn-secondary btn-circle ">
                    <i class="fa-sharp fa-solid fa-bars-progress"></i>
                </button>

                <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitExcel" class="btn btn-warning btn-circle ">
                <i class="fa-sharp fa-solid fa-file-excel"></i>
                </button>


                <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitPrint" class="btn btn-info btn-circle ">
                    <i class="fa-sharp fa-solid fa-print"></i>
                </button>

                <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitPDF" class="btn btn-danger btn-circle ">
                    <i class="fa-sharp fa-solid fa-file-pdf"></i>
                </button>
                <br style="clear: both;">
            </div>
        </div>

        <div class="offcanvas-body">

            <form >
            
            <!--box-->
            <div class="card text-bg-default mb-3" >
                            <div class="card-header">

                                รายละเอียด SWOT

                            </div>
                            <div class="card-body">
                                <div id="swot_detail_alert" class="row alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                                    <!-- <i class="fa fa-exclamation" aria-hidden="true"></i> -->
                                    <!-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg> -->
                                    <!-- <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span> -->
                                    <div id="swot_detail_alert_text"></div>
                                </div>
                                <div class="row mb-31">

                                    <textarea class="form-control" id="swot_detail" ></textarea>
                                
                                </div>
                                

                            </div>
                        </div>
                        <!--box-->
                        <!--box-->
                        <div class="card text-bg-default mb-3" >
                            <div class="card-header">

                                <!-- <div class="row ">
                                    <div class="col-1"><b>#</b></div>
                                    <div class="col-8"><b>ปัจจัยภายใน จุดแข็ง</b></div>
                                    
                                    <div class="col-3 font-h-score">คะแนน</div>
                                </div> -->
                                <table>
                                        <thead>

                                            <th class="widthSwotName">
                                                ปัจจัยภายใน จุดแข็ง
                                            </th>
                                            <th class="widthSwotWeight">
                                                น้ำหนัก
                                            </th>
                                            <th class="widthSwotScore">
                                                คะแนน
                                            </th>

                                        </tr>
                                        
                                    </thead>
                                </table>

                            </div>
                            <div class="card-body">
                                <div class="row ">
                                    <!-- <div class="col-1">1</div> -->
                                    <div id="s_alert" class=" alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                                       
                                        <div id="s_alert_text">
                                            
                                        </div>
                                    </div>
                                    <table>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s1_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s1_weight" id="s1_weight" class=" s_weight number_only form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s1_score" id="s1_score" class="s_score number_only form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s2_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s2_weight" id="s2_weight" class="s_weight number_only form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s2_score" id="s2_score" class=" s_score number_only form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s3_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s3_weight" id="s3_weight" class="s_weight number_only form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s3_score" id="s3_score" class="s_score number_only form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s4_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s4_weight" id="s4_weight" class="s_weight number_only form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s4_score" id="s4_score" class="s_score number_only form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s5_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s5_weight" id="s5_weight" class="s_weight number_only form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s5_score" id="s5_score" class="s_score number_only form-control">
                                            </td>

                                        </tr>
                                        
                                    </table>
                                    

                                
                                </div>
                                
                
                                
                
                                
                
                            
                                    
                            </div>
                        </div>
                        <!--box-->
                        <!--box-->
                        <div class="card text-bg-default mb-3" >
                            <div class="card-header">

                                

                                <table>
                                        <thead>

                                            <th class="widthSwotName">
                                                ปัจจัยภายใน จุดอ่อน
                                            </th>
                                            <th class="widthSwotWeight">
                                                น้ำหนัก
                                            </th>
                                            <th class="widthSwotScore">
                                                คะแนน
                                            </th>

                                        </tr>
                                        
                                    </thead>
                                </table>


                            </div>
                            <div class="card-body">
                                <div class="row ">
                                    <div id="w_alert" class=" alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                                       
                                        <div id="w_alert_text">
                                            
                                        </div>
                                    </div>
                                    <table>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w1_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w1_weight" id="w1_weight" class="w_weight number_only form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w1_score" id="w1_score" class="w_score number_only form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w2_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w2_weight" id="w2_weight" class="w_weight number_only form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w2_score" id="w2_score" class="w_score number_only form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w3_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w3_weight" id="w3_weight" class="w_weight number_only form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w3_score" id="w3_score" class="w_score number_only form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w4_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w4_weight" id="w4_weight" class="w_weight number_only form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w4_score" id="w4_score" class="w_score number_only form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w5_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w5_weight" id="w5_weight" class="w_weight number_only form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w5_score" id="w5_score" class="w_score number_only form-control">
                                                </td>

                                            </tr>
                                            
                                        </table>
                                    
                                </div>  
                            </div>
                        </div>
                        <!--box-->
                        <!--box-->
                        <div class="card text-bg-default  mb-3" >
                            <div class="card-header">

                                
                                <table>
                                        <thead>

                                            <th class="widthSwotName">
                                                ปัจจัยภายนอก โอกาส
                                            </th>
                                            <th class="widthSwotWeight">
                                                น้ำหนัก
                                            </th>
                                            <th class="widthSwotScore">
                                                คะแนน
                                            </th>

                                        </tr>
                                        
                                    </thead>
                                </table>

                            </div>
                            <div class="card-body">
                                <div class="row ">
                                <div id="o_alert" class=" alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                                    
                                    <div id="o_alert_text">
                                        
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o1_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o1_weight" id="o1_weight" class="o_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o1_score" id="o1_score" class="o_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o2_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o2_weight" id="o2_weight" class="o_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o2_score" id="o2_score" class="o_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o3_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o3_weight" id="o3_weight" class="o_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o3_score" id="o3_score" class="o_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o4_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o4_weight" id="o4_weight" class="o_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o4_score" id="o4_score" class="o_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o5_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o5_weight" id="o5_weight" class="o_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o5_score" id="o5_score" class="o_score number_only form-control">
                                        </td>

                                    </tr>
                                    
                                </table>
                                </div>
                            </div>
                        </div>
                        <!--box-->
                        <!--box-->
                        <div class="card text-bg-default  mb-3" >
                            <div class="card-header">

                                

                                <table>
                                        <thead>

                                            <th class="widthSwotName">
                                                ปัจจัยภายนอก อุปสรรค
                                            </th>
                                            <th class="widthSwotWeight">
                                                น้ำหนัก
                                            </th>
                                            <th class="widthSwotScore">
                                                คะแนน
                                            </th>

                                        </tr>
                                        
                                    </thead>
                                </table>


                            </div>
                            <div class="card-body">
                            <div class="row ">
                                <div id="t_alert" class=" alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                                    
                                    <div id="t_alert_text">
                                        
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t1_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t1_weight" id="t1_weight" class="t_weight number_only  form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t1_score" id="t1_score" class="t_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t2_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t2_weight" id="t2_weight" class="t_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t2_score" id="t2_score" class="t_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t3_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t3_weight" id="t3_weight" class="t_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t3_score" id="t3_score" class="t_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t4_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t4_weight" id="t4_weight" class="t_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t4_score" id="t4_score" class="t_score number_only form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t5_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t5_weight" id="t5_weight" class="t_weight number_only form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t5_score" id="t5_score" class="t_score number_only form-control">
                                        </td>

                                    </tr>
                                    
                                </table>
                            </div>
                            </div>
                        </div>
                        <!--box-->
                       
               
             
            </form>


        </div>
    </div>
   


    <a class="card setting-toggle" href="#offcanvasRight" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
        <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover">
                <span class="ripple">
                    <span class="fa-spin position-absolute all-0 d-flex flex-center" style="left:2px; top:15px; ">
                        <i class="fa-sharp fa-solid fa-gear fa-xl"></i>
                    </span>
                </span>
            </div>

        </div>
        <!-- <small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end"></small> -->
        </div>
    </a>
</div>


<!-- Modal -->
<div class="modal fade" id="pdfModel" tabindex="-1" aria-labelledby="pdfModelLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pdfModelLabel">Download PDF file</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ยืนยันการการดาวน์โหลด
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="submitDownloadPDF" class="btn btn-primary">Load</button>
      </div>
    </div>
  </div>
</div>
<!--Model -->
<!-- for export pdf start-->
<table id="forExportPDF" class="table" style="display:none;">
            
    <tr>
        <td colspan="2">กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส)</td>
    </tr>
    <tr>
        <td>
            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">จุดแข็ง (Strengths)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataStrengths">

                </tbody>
            </table>
        </td>
        <td>
            <table class="table  table-striped ">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">โอกาส (Opportunities)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataOpportunities ">

                </tbody>
            </table>
        </td>
        
    </tr>

    <tr>
        <td colspan="2">กลยุทธ์เชิงป้องกัน ST (จุดแข็งและภัยคุกคาม)</td>
    </tr>
    <tr>
        <td>
            <table class="table  table-striped ">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">จุดแข็ง (Strengths)</th>
                        <th class="swot_score number_onlyX">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataStrengths"></tbody>
            </table>
        </td>
        <td>
            <table class="table  table-striped ">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">ภัยคุกคาม (Threats)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataThreats">

                </tbody>
            </table>
        </td>
        
    </tr>


    <tr>
        <td colspan="2">กลยุทธ์เชิงแก้ไข WO (จุดอ่อนและโอกาส)</td>
    </tr>
    
    <tr>
        <td>
            <table class="table  table-striped ">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataWeaknesses"></tbody>
            </table>
        </td>
        <td>
            <table class="table  table-striped ">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">โอกาส (Opportunities)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataOpportunities">
                    
                </tbody>
            </table>
        </td>
        
    </tr>


    <tr>
        <td colspan="2">กลยุทธ์เชิงรับ WT (จุดอ่อนและภัยคุกคาม)</td>
    </tr>
    <tr>
        <td>
            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataWeaknesses">

                </tbody>
            </table>
        </td>
        <td>
            <table class="table  table-striped tableRmData">
                <thead>
                    <tr>
                        <th class="swot_seq">#</th>
                        <th class="swot_name">ภัยคุกคาม (Threats)</th>
                        <th class="swot_score number_only">คะแนน</th>
                    </tr>
                </thead>
                <tbody class="dataThreats">

                </tbody>
            </table>
        </td>
        
    </tr>

    
</table>
<!-- for export pdf end-->
<!-- for export excel start-->
<table id="forExportExcel" class="table" style="display:none;">
            
    <tr>
        <td colspan="3">กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส)</td>
    </tr>
   
    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">จุดแข็ง (Strengths)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataStrengths">

    </tbody>
            
    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">โอกาส (Opportunities)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataOpportunities ">

    </tbody>
            
       
        
     

    <tr>
        <td colspan="3">กลยุทธ์เชิงป้องกัน ST (จุดแข็งและภัยคุกคาม)</td>
    </tr>
    <tr>
       
        <th class="swot_seq">#</th>
        <th class="swot_name">จุดแข็ง (Strengths)</th>
        <th class="swot_score number_onlyX">คะแนน</th>
    </tr>
              
     <tbody class="dataStrengths"></tbody>
            
        
     <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">ภัยคุกคาม (Threats)</th>
        <th class="swot_score number_only">คะแนน</th>
     </tr>

     <tbody class="dataThreats"></tbody>

               


    <tr>
        <td colspan="3">กลยุทธ์เชิงแก้ไข WO (จุดอ่อนและโอกาส)</td>
    </tr>
    
   
    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataWeaknesses"></tbody>

    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">โอกาส (Opportunities)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataOpportunities"></tbody>
            


    <tr>
        <td colspan="3">กลยุทธ์เชิงรับ WT (จุดอ่อนและภัยคุกคาม)</td>
    </tr>
   
    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">จุดอ่อน (Weaknesses)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataWeaknesses"></tbody>

    <tr>
        <th class="swot_seq">#</th>
        <th class="swot_name">ภัยคุกคาม (Threats)</th>
        <th class="swot_score number_only">คะแนน</th>
    </tr>

    <tbody class="dataThreats"></tbody>

               
        
    </tr> 

    
</table>
<!-- for export exel end-->
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModelLabel">ตัวอย่างข้อมูล</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select" id="dataBusinessType" aria-label="Default select example">
           
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="getExampleSubmit" class="btn btn-primary">Load</button>
      </div>
    </div>
  </div>
</div> -->
<!--Model -->
<!-- Modal -->
<div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModelLabel">จัดการข้อมูล</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">โหลดข้อมูล</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">บันทึกข้อมูล</button>
            </li>
 
           
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row " >
                    <div class="col-md-12 " >
                        <form id="formImportFile" enctype="multipart/form-data">
                            <div class="mb-3" style="padding-top: 15px;">
                                <select class="form-select" id="b_id_load" >
                                    <option>ตัวอย่างข้อมูล 1</option>
                                    <option>ตัวอย่างข้อมูล 2</option>
                                </select>
                            </div>
                            <div>หรือ(JSON file)</div>
                            <div >
                                <!-- <label for="file_import" class="form-label">ไฟล์ JSON</label> -->
                                <input type="file" class="form-control" id="file_import" onchange="processFiles(this.files)">
                                
                                <div  style="padding-top:10px;" >
                                    <div id="message_area" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px; display:none;" role="alert">
                                        <span><i class="fa-sharp fa-solid fa-circle-info"></i> <span> ข้อมูลทั่วไป
                                        <div id="message"> </div>
                                    </div>
                                </div>
                                

                                
                                <div id="fileOutput"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row1">
                    <div class="col-md-12 " style="padding:5px;">
                    <div class="mb-3">
                        <!-- <label for="exampleFindData" class="form-label">ค้นหา</label> -->
                        <input type="text" class="form-control" id="b_name_find" placeholder="ค้นหา">
                    </div>
                    <table class="table" id="exampleDataTable">
                        <thead>
                            <!-- <th>#</th> -->
                            <th>ข้อมูลตัวอย่าง</th>
                            <!-- <th>ประเภท</th> -->
                             <th style="text-align: right;">จัดการ</th> 
                        </thead>
                        <tbody id="dataExampleArea">
                       
                        </tbody>
                    </table>

                   
                        
                        <div id="example_data_alert" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px; display:none;" role="alert">
                            <div id="example_data_alert_text"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> กรุณากรอกชื่อข้อมูลตัวอย่าง</div>
                        </div>
                       
                    
                        <div class="mb-3">
                            <label for="b_type_name" class="form-label">ชื่อข้อมูลตัวอย่าง</label>
                            <input type="text" class="form-control" id="b_type_name" placeholder="ชื่อข้อมูลตัวอย่าง">
                        </div>
                        <div class="mb-3">
                            
                            <label for="b_release_type_code" class="form-label">ประเภทข้อมูล</label>
                            <select class="form-select" id="b_release_type_code" aria-label="">
                                <!-- <option value="1">ผู้ดูแลระบบ</option> -->
                        
                                <option value="2">สาธารณะ</option>
                                <option value="3">ส่วนตัว</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
           
        </div>
       
      </div>
      <div class="modal-footer">
        <input type="hidden" id="actionExample" value="add">
        <input type="hidden" id="b_id" value="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" style="display:none;" id="btnSaveExample" class="btn btn-primary">บันทึก</button>
        <button type="button" id="btnLoadExample" class="btn btn-primary">โหลดข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--Model -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    <!-- jquery confirm start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- jquery confirm end-->
    <!-- jquery mloading start-->
    <link rel="stylesheet" href="css/jquery.mloading.css">
    <script src="js/jquery.mloading.js"></script>
    <!-- jquery mloading end-->

     <!-- export excel-->
     <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <!-- export pdf-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <!-- printing-->
    <script type="text/javascript" src="printThis-master/printThis.js"></script>


    <script src="Controller/swot.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn-back").click(function(){
                window.location.href = './';
            });
        
        });
    </script>

</body>
</html>