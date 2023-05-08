<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Risk Managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-ocean-blue.min.css" /> -->
    <!-- <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jquery.min.js"></script> -->
    <link href="images/favicon_io/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/9770e5b059.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" >
    <link rel="stylesheet" href="css/rm.css" >
    <script src="./device-uuid-master/lib/device-uuid.js"></script>


    
    
    <style>

    @import url(./fonts/thsarabunnew.css);

    /**{ margin: 0; padding: 0; }*/
    body{
         font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em;
          /* background-color: darkblue; */
         /* set background */
         /* background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#000039  ); */
         background: radial-gradient(farthest-side ellipse at 10% 0,#000039   20%,#191970  );
         background-attachment: fixed;
         background-size: cover;
         background-repeat: no-repeat;
         /* set background */
        }
       

        
        
    </style>
</head>
  <body>
<!-- set header fixed start-->
<div class="headerFixed" style="display: none;">
<!-- d-none d-lg-block -->
        <button class="btn btn-primary btn-circle btn-back  " id="btn-back" style="display: none;"  onclick="window.location.href='./'"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
        <div class=" d-lg-none" style="margin-top: 55px;"></div>
        
        <div class="container">
       
           <span style="float:right; position:relative; top:30px; color:white; cursor: pointer;" class='btnDevTeam d-none d-lg-block' data-toggle="modal" data-target="#teamModal">@DevTeamByDICT</span>
           <h1 style="display:none;"  onclick="window.location.href='./'" class="headeTitle">
            <!-- <i class="fa-sharp fa-solid fa-building-shield"></i> -->
            <!-- <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> -->
            <i class="fa-sharp fa-solid fa-circle-left  " style="cursor: pointer;" ></i>
             RISK MANAGEMENT</h1>

        </div>
</div>
<div style="margin-bottom: 75px;" class="d-none d-lg-block"></div>
<div style="margin-bottom: 45px;" class=" d-lg-none"></div>
<!-- set header fixed end-->
  <!-- <button class="btn btn-primary btn-circle btn-back" id="btn-back"  onclick="window.location.href='./'"><i class="fa-sharp fa-solid fa-circle-left"></i></button> -->
<div class="container">
    <!-- <h1 class="headeTitle"><i class="fa-sharp fa-solid fa-building-shield"></i> RISK MANAGEMENT</h1> -->
    <div class="row mb-3">
        
        <div class="col-md-12">
        <div class="card text-dark bg-light mt-3 " >
        <div class="card-header" ><b id="risk_title_display">โปรแกรมบริหารความเสี่ยง (RISK MANAGEMENT)</b></div>
        <div class="card-body" style="padding: 0px; ">

            <!-- content here. -->
            <div class="row">
                <div class="col-md-12" >
                    <div class="alert alert-success">
                        <div id="risk_detail_display"></div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" >
                    <div style="padding:5px;">
                    <table class="table">
                        <thead>
                            
                        <th>ช่วงคะแนนความเสี่ยง</th>
                        <th>ระดับความเสี่ยง</th>
                        <th style="text-align:center">พื้นที่สี</th>
                

                        </thead>
                        <tbody id="mitigateRisksDisplayArea">
                            <!--
                            <tr>
                                <td>1 - 8</td>
                                <td>ต่ำ</td>
                                <td style="background-color:white; border: 3px black solid; text-align:center; ">ขาว</td>
                                
                            </tr>
                            <tr>
                                <td>9 - 16</td>
                                <td>ปานกลาง</td>
                                <td style="background-color:yellow; border: 3px black solid; text-align:center;">เหลือง</td>
                                
                            </tr>
                            <tr>
                                <td>17 - 24</td>
                                <td>สูง</td>
                                <td style="background-color:orange;  border: 3px black solid; text-align:center;">ส้ม</td>
                                
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>สูงมาก</td>
                                <td  style="background-color: red;  border: 3px black solid; text-align:center;">แดง</td>
                                
                            </tr>
    -->
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="col-md-6" >
                <div style="background-color: #cccccc; padding: 10px;" >
                <div class="effect_text">ผลกระทบ</div>
                    <table class="" style="background-color: #cccccc; margin-top:30px; width:100%; margin:0px; ">
                    
                    <tr>
                        <td class="graphMainRight" id="risk5T" >5</td>
                        <td class="borderRisk" id="risk51"></td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom borderScopeRiskLeft" id="risk52"></td>
                        <td class="borderRisk riskBgYellow" id="risk53"></td>
                        <td class="borderRisk riskBgOgrange borderScopeRiskBottom borderScopeRiskLeft" id="risk54"></td>
                        <td class="borderRisk riskBgRed borderScopeRiskBottom borderScopeRiskLeft" id="risk55"></td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk4T">4</td>
                        <td class="borderRisk" id="risk41"></td>
                        <td class="borderRisk" id="risk42"></td>
                        <td class="borderRisk riskBgYellow borderScopeRiskLeft" id="risk43"></td>
                        <td class="borderRisk riskBgYellow" id="risk44"></td>
                        <td class="borderRisk riskBgOgrange borderScopeRiskBottom borderScopeRiskLeft" id="risk45"></td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk3T">3</td>
                        <td class="borderRisk" id="risk31"></td>
                        <td class="borderRisk" id="risk32"></td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom borderScopeRiskLeft" id="risk33"></td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom" id="risk34"></td>
                        <td class="borderRisk riskBgYellow" id="risk35"></td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk3T">2</td>
                        <td class="borderRisk" id="risk21"></td>
                        <td class="borderRisk" id="risk22"></td>
                        <td class="borderRisk" id="risk23"></td>
                        <td class="borderRisk" id="risk24"></td>
                        <td class="borderRisk riskBgYellow borderScopeRiskLeft borderScopeRiskBottom" id="risk25"></td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk1T">1</td>
                        <td class="borderRisk" id="risk11"></td>
                        <td class="borderRisk" id="risk12"></td>
                        <td class="borderRisk" id="risk13"></td>
                        <td class="borderRisk" id="risk14"></td>
                        <td class="borderRisk" id="risk15"></td>
                        
                    </tr>
                    <tr>
                        <td  class=""></td>
                        <td class="graphMainTop" id="risk1">1</td>
                        <td class="graphMainTop" id="risk2">2</td>
                        <td class="graphMainTop" id="risk3">3</td>
                        <td class="graphMainTop" id="risk4">4</td>
                        <td class="graphMainTop" id="risk5">5</td>
                    </tr>
                    
                </table>
                <div class="opportunity_occurred_txt">โอกาสที่จะเกิด</div>
                </div>
                </div>
            </div>
            <!-- content here. -->
        </div>
        </div>

        </div>
    </div>



    <div class="card  mb-3" >
        <div class="card-header"> 	<b>รายงานสรุปการบริหารความความเสี่ยง </b></div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table  table-striped" id="tableRiskData">
                <thead>
                    
                       
                        <th>
                            รหัส
                        </th>
                        <th>
                            ความเสี่ยง
                        </th>
                        <th>
                            ระดับ
                        </th>
                        <th>
                            กลยุทธ์
                        </th>
                        <th>
                            จัดการ
                        </th>
                        <th>
                            ผู้รับผิดชอบ
                        </th>
                        <th>
                            ระยะเวลา

                        </th>
                       
                    
                </thead>
                <tbody id="listRiskDataArea">
                    
                   <!--
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                        RP02
ผู้ปฏิบัติงานนำอุปกรณ์คอมพิวเตอร์หรือ สมาร์ทดีไวซ์ (Smart Device)ส่วนตัวมาเชื่อมต่อเข้ากับระบบเครือข่ายของ ทสส.ทอ.
 
                        </td>
                        <td>
                            20
                        </td>
                        <td>
                        จำกัดความเสี่ยง 
                        </td>
                        <td>
                        - ตรวจสอบและลงทะเบียนอุปกรณ์ที่จะขอเชื่อมต่อเข้ามาในระบบสารสนเทศของทสส.ทอ.ว่ามีการป้องกันอย่างเพียงพอ และปราศจากโปรแกรมที่มีความเสี่ยง ก่อนอนุญาตให้เชื่อมต่อ <br>
- ติดตั้งระบบป้องกันโปรแกรมประสงค์ร้ายบนระบบคอมพิวเตอร์และระบบเครือข่ายของหน่วยงาน <br>
- ประชาสัมพันธ์ให้ความรู้กับก าลังพลของ ทสส.ทอ.ให้เกิดความตระหนักรู้เกี่ยวกับภัยคุกคามไซเบอร์ <br>

                        </td>
                        <td>
                        - กทส.สนผ.ฯ
                        </td>
                        <td>
                        - เมื่อมีการขออนุญาตนำอุปกรณ์มาใช้งานในระบบ

                        </td>
                    </tr>

                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                      
                        RT03 เครือข่ายอินเทอร์เน็ตและเครือข่ายภายในทสส.ทอ.ไม่สามารถใช้งานได้

 
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                        จำกัดความเสี่ยง 
                        </td>
                        <td>
                        - ตรวจสอบการตั้งค่าให้สอดคล้องกับ สอ.ทอ.<br>
- ตรวจสอบสภาพความพร้อมใช้งานอยู่เสมอ

                        </td>
                        <td>
                        - กทส.ฯ<br>
- นขต.ทสส.ทอ.

                        </td>
                        <td>
                        - เป็นประจำอย่างต่อเนื่อง


                        </td>
                    </tr>

                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                      
                        RT04 เครื่องแม่ข่าย และเครื่องคอมพิวเตอร์ในเครือข่ายติดมัลแวร์ หรือไวรัสคอมพิวเตอร์โดยสาเหตุทางเทคนิค


 
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                        จำกัดความเสี่ยง 
                        </td>
                        <td>
                        - ตรวจสอบประสิทธิภาพของโปรแกรมป้องกันไวรัสของเครื่องแม่ข่าย <br>
- คอมพิวเตอร์ทุกเครื่องในทสส.ทอ. ลงโปรแกรม AntiVirus ที่มีประสิทธิภาพ
                        </td>
                        <td>
                        - กทส.ฯ (ศคพ.สอ.ทอ.และศซบ.ทอ.)<br>
- นขต.ทสส.ทอ.

                        </td>
                        <td>
                        - เป็นประจำทุกเดือน <br>
- เปิดใช้ตลอดเวลาและ Update สม่ำเสมอ

                        </td>
                    </tr>
                    -->
                </tbody>
            </table>
        </div>
        </div>
    </div>
    

    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;cursor:pointer;" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fa-sharp fa-solid fa-angles-right " style="cursor:pointer;" ></i> Risk Managment Form
        <!-- <i class="fa-sharp fa-solid fa-user-group"></i> ทีมพัฒนา Risk Managment Form -->
        </h5>
        <button type="button" id="OffcanvasClose" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" ></button>
        </div>
        <div class=" container">
            <div class="col-md-121" style="text-align: left; margin-bottom:10px; margin-right:15px">
                <!-- <button style="margin-bottom:10px; float:right; "  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-solid fa-floppy-disk"></i></button> -->
                <!-- <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-success btn-circle "><i class="fa-solid fa-floppy-disk"></i></button> -->
                <!-- <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-warning btn-circle "><i class="fa-solid fa-floppy-disk"></i></button> -->
            
               

                      

<!-- 
                            <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="submitSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button> -->
                            <button  data-bs-toggle="modal" data-bs-target="#exampleModel" type="button" id="getExampleModel" class="btn btn-secondary btn-circle main_cate_rm_btn">
                                <i class="fa-sharp fa-solid fa-bars-progress"></i>
                            </button>

                            <button  type="button" id="submitExcel" class="btn btn-warning btn-circle main_cate_rm_btn">
                            <i class="fa-sharp fa-solid fa-file-excel"></i>
                            </button>

                            

                            <button  type="button" id="submitPrint" class="btn btn-info btn-circle main_cate_rm_btn">
                                <i class="fa-sharp fa-solid fa-print"></i>
                            </button>

                            <button type="button" id="submitPDF" class="btn btn-danger btn-circle main_cate_rm_btn">
                                <i class="fa-sharp fa-solid fa-file-pdf"></i>
                            </button>

                            

                            
                        
                        
            </div>
        </div>
        <div class="row container">
            <div id="btnClearForm"  style="text-align:right; color:white; font-weight:bold; cursor:pointer;padding:5px;">
                เคลียร์ข้อมูล <i class="fa-solid fa-arrows-rotate"></i></a>
            </div>
        </div>

        <div class="offcanvas-body">
        
        <!-- accordian start-->
        <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
        <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingGeneralData">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseGeneralData" aria-expanded="false" aria-controls="flush-collapseOne">
                    ข้อมูลทั่วไป
                </button>
                </h2>
                <div id="flush-collapseGeneralData" class="accordion-collapse collapse" aria-labelledby="flush-headingGeneralData" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="gerneralSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div id="risk_alert_gerneral" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px; margin-top: 15px; display:none;" role="alert">
                            <div id="risk_alert_text_gerneral">
                                <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> หัวข้อความเสี่ยง</div>
                            </div>
                        </div>
                        <div class="alert alert-primary">
                        <div class="col-md-12" style="text-align: left;">
                            <div class="mb-1"> 
                                <label for="risk_title">หัวข้อความเสี่ยง</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea type="text" class="form-control risk_form" id="risk_title" placeholder="หัวข้อความเสี่ยง" ></textarea>
                        </div>

                        <div class="col-md-12" style="text-align: left;">
                            <div class="mb-1"> 
                                <label for="risk_detail">รายละเอียด</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea type="text" class="form-control risk_form" id="risk_detail" placeholder="รายละเอียด"></textarea>
                        </div>


                        </div>
                    </div>
                   

                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ความเสี่ยง
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button  type="button" id="btnRiskSave" class="btn btn-success btn-circle main_cate_rm_btn">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                            <button   type="button" id="btnRiskAdd" class="btn btn-primary btn-circle main_cate_rm_btn"><i class="fa-sharp fa-solid fa-plus"></i></button>
                            <button   type="button" id="btnRiskDel" class="btn btn-danger btn-circle main_cate_rm_btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <!-- form here. -->
                    <div id="riskFormArea">

                    </div>
                    <!--
                    <div  class="alert alert-primary mb-3" role="alert">
                        <input type="radio" name="task_mc" id="XX" class="form-check-input rm_radio">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="xxx"  placeholder="รหัส">
                            
                        </div>
                        <div class="mb-3">
                            <textarea  class="form-control" placeholder="ชื่อความเสี่ยง"></textarea>
                        </div>
                        <div class="mb-3">
                            
                            <textarea  class="form-control" placeholder="ลักษณะ"></textarea>
                        </div>
                        <div class="mb-3">
                            
                            <textarea  class="form-control" placeholder="ปัจจัยเสี่ยง"></textarea>
                        </div>
                        <div class="mb-3">
                        
                            <textarea  class="form-control" placeholder="ผลกระทบ"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="xxx"  placeholder="ผู้รับผิดชอบ">
                            
                        </div>
                        <div class="mb-3">
                        
                            <select  class="form-control">
                                <option>กลยุทธ์การจัดการความเสี่ยง</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="xxx"  placeholder="ระยะเวลาการปฏิบัติ">
                        </div>
                        <div class="mb-3">
                            <select  class="form-control">
                                <option>โอกาส(5คะแนน)</option>
                                <option>โอกาส(4คะแนน)</option>
                                <option>โอกาส(3คะแนน)</option>
                                <option>โอกาส(2คะแนน)</option>
                                <option>โอกาส(5คะแนน)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select  class="form-control">
                                <option>ผลกระทบ(5คะแนน)</option>
                                <option>ผลกระทบ(4คะแนน)</option>
                                <option>ผลกระทบ(3คะแนน)</option>
                                <option>ผลกระทบ(2คะแนน)</option>
                                <option>ผลกระทบ(1คะแนน)</option>
                            </select>
                        </div>
                    </div>
                    -->
                    <!-- form here. -->

                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    ประมาณความเสี่ยง 
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="likelihoodRiskSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                            <!-- <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-sharp fa-solid fa-plus"></i></button>
                            <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-danger btn-circle "><i class="fa-sharp fa-solid fa-trash"></i></button> -->
                        </div>
                    </div>
                <!-- form here. -->
                    <div id="estimatedRiskFormArea">
                        <!--
                        <div  class="alert alert-primary mb-3" role="alert">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="รหัส">
                            </div>
                            <div class="mb-3">
                   
                                <input type="text" class="form-control" id="xxx"  placeholder="โอกาสที่จะเกิด">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="ค่าโอกาส">
                            </div>
                            <div class="mb-3">
                                <textarea  class="form-control" placeholder="คำอธิบาย"></textarea>
                            </div>
                        </div>
                    -->
                    </div>
                    <!-- form here. -->

                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ผลกระทบ
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="impactRiskSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                            <!-- <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-sharp fa-solid fa-plus"></i></button>
                            <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-danger btn-circle "><i class="fa-sharp fa-solid fa-trash"></i></button> -->
                        </div>
                    </div>

                    <!-- form here. -->
                    <div id="effectRiskFormArea">

                        <!-- <div  class="alert alert-primary mb-3" role="alert">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="รหัส">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="ความรุนแรง">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="ค่าผลกระทบ">
                            </div>
                            <div class="mb-3">
                            <textarea  class="form-control" placeholder="คำอธิบาย"></textarea>
                            </div>
                        </div> -->

                    </div>
                    <!-- form here. -->
                </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    ระดับความเสี่ยง
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <!-- form here. -->
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="evaluationRiskSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                          
                        </div>
                    </div>
                    <!-- <form> -->
                    <div id="evaluationRiskFormArea">
                            <!--
                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="re_name"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_start"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_end"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_color" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                         <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="re_name"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_start"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_end"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_color" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="re_name"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_start"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_end"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_color" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="re_name"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_start"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_end"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="re_score_color" placeholder="พื้นที่สี">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- </form> -->
                    <!-- form here. -->
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                บรรเทาความเสี่ยง
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                            <button  type="button" id="mitigateRisksSave" class="btn btn-success btn-circle main_cate_rm_btn">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                           <button   type="button" id="mitigateRisAdd" class="btn btn-primary btn-circle main_cate_rm_btn"><i class="fa-sharp fa-solid fa-plus"></i></button>
                           <button   type="button" id="mitigateRisDel" class="btn btn-danger btn-circle main_cate_rm_btn"><i class="fa-sharp fa-solid fa-trash"></i></button> 
                        </div>
                    </div>

                    <!-- form here. -->
                    <div id="mitigateRisksFormArea">
                        <!-- <div  class="alert alert-primary mb-3" role="alert">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="รหัส">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="กลยุทธ์การจัดการความเสี่ยง">
                            </div>
                            <div class="mb-3">
                            <textarea  class="form-control" placeholder="คำอธิบาย"></textarea>
                            </div>
                        </div> -->
                    </div>
                    <!-- form here. -->
                </div>
                </div>
            </div>


           
        </div>
        <!-- accordian end-->

<!-- ระดับความเสี่ยง  บรรเทาความเสี่ยง -->

        
            <br style="clear:both">
            <br style="clear:both">

        </div>
    </div>



   
    <a style="display: none;"  class="card setting-toggle" href="#offcanvasRight" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
        <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover" >
                <span class="ripple" >
                    <span class="fa-spin position-absolute all-0 d-flex flex-center" style="left:2px; top:15px; ">
                    <i class="fa-sharp fa-solid fa-gear fa-xl"></i>
                        
                    </span>
                </span>
            </div>

        </div>
        <!-- <small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end"></small> -->
        </div>
    </a>

 
    <div class="bottomFooter" style="clear: both; height:100px;"></div>
   
</div>



<!--footer for moblie start-->
<!-- d-block d-sm-none  -->
<div class="footerFixed  " style="display: none;">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class='fontFooter'>
                    <button class="btn btn-primary btn-circle" id="btn-back" onclick="window.location.href='./'" >
                    <i style="line-height: 2;" class="fa-sharp fa-solid fa-circle-left"></i>
                    </button>
                </div>
            </div>
            <div class="col">
            <!-- <span style="float:right; position:relative; top:-25px; color:white; cursor: pointer;" id="btnDevTeam" data-toggle="modal" data-target="#teamModal">@DevTeamByDICT</span> -->
                <div class='fontFooter'>
                    <button id="btnDevTeam" class="btn btn-primary btn-circle btnDevTeam"  data-toggle="modal" data-target="#teamModal" value="YES">
                    <i style="line-height: 2;" class="fa fa-user-circle" aria-hidden="true"></i>
                    </button>
                </div>
             
            </div>
            <div class="col">
              
                <div class='fontFooter'>
                    <button class="btn btn-primary btn-circle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >
                    <i style="line-height: 2;" class="fa-sharp fa-solid fa-gear "></i>
                    </button>
                </div>
             
            </div>
        </div>
    </div>
</div>

<!--footer for moblie end-->
<!-- Modal --> 
<div class="modal fade" id="exampleNewUserModel" tabindex="-1" aria-labelledby="exampleNewUserModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleNewUserModelLabel">ตัวอย่างข้อมูล</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select rce_id_load" id="rce_id_load_new_user" aria-label="ตัวอย่างข้อมูล">
           
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" id="getExampleNewUserSubmit" class="btn btn-primary">โหลดข้อมูล</button>
      </div>
    </div>
  </div>
</div> 
<!--Model -->
<!-- Modal -->
<div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModelLabel">ตัวอย่างข้อมูล</h1>
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
                                <select class="form-select rce_id_load" id="rce_id_load" >
                                    <option>ตัวอย่างข้อมูล 1</option>
                                    <option>ตัวอย่างข้อมูล 2</option>
                                </select>
                            </div>
                            <div>หรือ(JSON file)</div>
                            <div class="mb-3">
                                <!-- <label for="file_import" class="form-label">ไฟล์ JSON</label> -->
                                <input type="file" class="form-control" id="file_import" onchange="processFiles(this.files)">
                                <div id="message"></div>
                                <div id="fileOutput"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-12 " style="padding:5px;">
                    <div class="mb-3">
                        <!-- <label for="exampleFindData" class="form-label">ค้นหา</label> -->
                        <input type="text" class="form-control" id="rce_name_find" placeholder="ค้นหา">
                    </div>
                    <table class="table table-striped" id="exampleDataTable">
                        <thead>
                            <!-- <th>#</th> -->
                            <th>ข้อมูลตัวอย่าง</th>
                            <!-- <th>ประเภท</th> -->
                            <!-- <th style="text-align: center;">จัดการ</th> -->
                        </thead>
                        <tbody id="dataExampleArea">
                            <!-- <tr>
                                <td>1</td>
                                <td>ตัวอย่าง1</td>
                                <td>สาธารณะ</td>
                                <td>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ตัวอย่าง2</td>
                                <td>ส่วนตัว</td>
                                <td>
                                    <button class="btn btn-danger" id="exampleDel-1"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <div id="example_data_alert" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px;" role="alert">
                        <div id="example_data_alert_text">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="rce_name" class="form-label">ชื่อข้อมูลตัวอย่าง</label>
                        <input type="text" class="form-control" id="rce_name" placeholder="ชื่อข้อมูลตัวอย่าง">
                    </div>
                    <div class="mb-3">
                        
                        <label for="rce_type" class="form-label">ประเภทข้อมูล</label>
                        <select class="form-select" id="rce_type" aria-label="">
                    
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
        <input type="hidden" id="rce_id" value="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" style="display:none;" id="btnSaveExample" class="btn btn-primary">บันทึก</button>
        <button type="button" id="btnLoadExample" class="btn btn-primary">โหลดข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--Model -->
<!-- Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true" style="height:100%;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teamModalLabel">ทีมผู้พัฒนา</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         
        </button>

      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4 card_custom">
                <div class="card" >
                    <img class="card-img-top" src="images/dev1.jpg" alt="น.ต.สุธีร์  ตั้งใจ" >
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert" style="padding:10px; " >
                            <h5 class="card-title" style="font-size:16px; font-weight:bold;">น.ต.สุธีร์  ตั้งใจ</h5>
                            <p class="card-text"  style="font-size:16px;">System Analysis</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card_custom">
                <div class="card" >
                    <img class="card-img-top" src="images/dev2.jpg" alt="ร.อ.ณรงศักดิ์  เปรมปรีดา" >
                    <div class="card-body">
                        <div class="alert alert-success" role="alert" style="padding:10px; " >
                            <h5 class="card-title" style="font-size:16px;font-weight:bold;">ร.อ.ณรงศักดิ์  เปรมปรีดา</h5>
                            <p class="card-text"  style="font-size:16px;">Tester</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card_custom">
                <div class="card" >
                    <img class="card-img-top" src="images/dev3.png" alt="ร.ท.โฆษิต อามรมณ์สวะ">
                    <div class="card-body ">
                        <div class="alert alert-info" role="alert" style="padding:10px; ">
                            <h5 class="card-title" style="font-size:16px;font-weight:bold;">ร.ท.โฆษิต อามรมณ์สวะ</h5>
                            <p class="card-text"  style="font-size:16px;">Developer</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <br style="clear: both;">
        </divv>

      </div>
      <div class="modal-footer">
        <button type="button" id="btnDevTeamClose" class="btn btn-secondary btnDevTeamClose" data-dismiss="modal">ปิด</button>
     
      </div>
    </div>
  </div>
</div>
<!--Modal-->
<div id="desktopTest" class="d-none d-lg-block"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->


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
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> -->
    <!-- printing-->
    <script type="text/javascript" src="printThis-master/printThis.js"></script>
   
    


    <script src="Controller/main.js"></script>

    <script src="Controller/rm.js"></script>

   
</body>
</html>