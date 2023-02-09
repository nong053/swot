<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manpower Calculation</title>
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
        font-family: 'THSarabunNew', sans-serif; 
        font-size: 0.95em; line-height: 1.7em; 
        background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#000039  );
    }
        .font-score{
            
        }
        .font-h-score{
            text-align: left;
            font-weight: bold;
        }
        .graph{
            width: 100%;
             height: 300px; 
            /* background-color:bisque; */
        }
        .setting-toggle {
            position: fixed;
            top: 65px;
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
        }
        .widthSwotScore{
            width: 15%;
        }
        .mc_header_detail{

        }
        .mc_time_unit{
            width: 10%;
            text-align: right;
        }
        .mc_workload_year{
            width: 10%;
            text-align: right;
        }
        .mc_manpower_year{
            width: 10%;
            text-align: right;
        }
        .mc_footer_sumary{
            width: 10%;
            text-align: right;
            font-weight: bold;
        }


        
    </style>
</head>
  <body>
  <button class="btn btn-primary btn-circle btn-back" id="btn-back"  href="./"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
<div class="container">

    <div class="row mb-3">
        
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">1. การเตรียมความพร้อม..</div>
                <div class="card-body" style="text-align: center; ">
           
                    <div id="gauge1" class="graph" >graph1</div>
                </div>
            </div>

            <!-- <div class='graph'>อัตรากำลังพลงานที่1/กำลังพลปัจจุบันงานที่1</div> -->
            
        </div>
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;"> 2. การกำกับดูแล/ข้อมูลทางยุทธวิธี.. </div>
                <div class="card-body" style="text-align: center; ">
             
                    <div id="gauge2" class="graph" >graph2</div>
                </div>
            </div>
            <!-- <div class='graph'>อัตรากำลังพลงานที่2/กำลังพลปัจจุบันงานที่2</div> -->
        </div>
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">3.  การกำกับดูแล/(COMSEC)..</div>
                <div class="card-body" style="text-align: center; ">
                
                    <div id="gauge3" class="graph" >graph3</div>
                </div>
            </div>
            <!-- <div class='graph'>อัตรากำลังพลงานที่3/กำลังพลปัจจุบันงานที่3</div> -->
        </div>
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">สรุปประสิทธิภาพกำลังพล</div>
                <div class="card-body" style="text-align: center; ">
   
                    <div id="gauge4" class="graph" >graph4</div>
                </div>
            </div>
            <!-- <div class='graph'>อัตรากำลังพลทั้งหมด/กำลังพลปัจจุบันทั้งหมด</div> -->
        </div>
        
  
    </div>



    <div class="card  mb-3" >
        <div class="card-header"> 	1. การเตรียมความพร้อมระบบบัญชาการและควบคุม ทอ.</div>
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th class="mc_detail">
                            รายละเอียดงาน
                        </th>
                        <th class="mc_time_unit">
                            เวลา:หน่วย
                        </th>
                        <th class="mc_workload_year">
                            ปริมาณงาน:ปี
                        </th>
                        <th class="mc_manpower_year">
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                   
                    <tr>
                        
                        <td class="mc_detail">
                            1.1  สำรวจและรวบรวมสถานภาพของระบบบัญชาการและควบคุม
                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.23</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        1.2  ตรวจสอบความสัมพันธ์ของข้อมูลสถานภาพ ข้อมูล Hardware/Software และบุคลากร จากหน่วยที่เกี่ยวข้อง 


                        </td>
                        <td class="mc_time_unit">720</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.20</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        1.3  วิเคราะห์ และประเมินผล การบูรณาการทุกระบบสารสนเทศเพื่อการยุทธ ทอ.(CIS) ที่เชื่อมต่อกับ ศปก.ทอ.

                        </td>
                        <td class="mc_time_unit">900</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.24</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        1.4  นำข้อมูลที่ได้จากการวิเคราะห์ นำมาเปรียบเทียบกับ ระบบบัญชาการและควบคุม ร่วม/ผสม 

                        </td>
                        <td class="mc_time_unit">1,200</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.33</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        1.5  นำเสนอแนวทาง พัฒนา/แก้ไข ให้ผู้บังคับบัญชา ตัดสินตกลงใจได้ในทุกสภาวการณ์ อย่างมีประสิทธิภาพ

                        </td>
                        <td class="mc_time_unit">720</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.20</td>
                    </tr>

                    <tr>
                        
                        <td class="mc_detail">
                        1.6  มีเอกสารการเตรียมข้อมูลในระบบบัญชาการและควบคุม 

                        </td>
                        <td class="mc_time_unit">720</td>
                        <td class="mc_workload_year">24</td>
                        <td class="mc_manpower_year">0.20</td>
                    </tr>

                    
                    <tr style="background-color:antiquewhite;">
                        <td colspan="3">อัตรากำลังพล</td>
                        <td class="mc_footer_sumary">1.39/1</td>
                    </tr>
                   
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="card  mb-3" >
        <div class="card-header"> 	2. การกำกับดูแล และตรวจสอบการปฏิบัติตาม รปป. ของหน่วยที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลทางยุทธวิธี</div>
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th class="mc_detail">
                            รายละเอียดงาน
                        </th>
                        <th class="mc_time_unit">
                            เวลา:หน่วย
                        </th>
                        <th class="mc_workload_year">
                            ปริมาณงาน:ปี
                        </th>
                        <th class="mc_manpower_year">
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                   
                    <tr>
                        
                        <td class="mc_detail">
                        2.1  รวบรวมเอกสาร รปป.ที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลทางยุทธวิธี

                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.11</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        2.2  ติดตามตรวจสอบการปฏิบัติงานของหน่วยเกี่ยวข้อง

                        </td>
                        <td class="mc_time_unit">1,680</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.23</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        2.3  การเปลี่ยนแปลงความถี่และ Crypto Key,การจัดองค์การรักษาความปลอดภัยข้อมูล/อุปกรณ์ ระบบการติดต่อ สื่อสาร(CIS), การกำกับการตรวจสอบระบบเชื่อมโยงข้อมูลทางยุทธวิธีที่ GES, SAAB 340B/AEW และบน บ.Gripen

                        </td>
                        <td class="mc_time_unit">1,680</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.23</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        2.4  การปรับเปลี่ยนนโยบาย การเปลี่ยนแปลงโครงสร้างของระบบฯ 

                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.11</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        2.5  การแก้ไขเพิ่มเติม รปป.ฯ ทุกหน่วยที่เกี่ยวข้อง ประชุม หารือ สรุปผล แล้วนำเรียนขออนุมัติจากผู้บังคับบัญชา


                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.11</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        2.6  มีเอกสาร รปป.ฯ ทุกหน่วยที่เกี่ยวข้องในระบบเชื่อมโยงข้อมูลทางยุทธวิธี ให้เป็นไปด้วยความเรียบร้อย 


                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">12</td>
                        <td class="mc_manpower_year">0.11</td>
                    </tr>
                    <tr style="background-color:antiquewhite;">
                        <td colspan="3">อัตรากำลังพล</td>
                        <td class="mc_footer_sumary">0.91/1</td>
                    </tr>
                   
                </tbody>
            </table>
            
        </div>
    </div>


    <div class="card  mb-3" >
        <div class="card-header"> 	3. การกำกับดูแล ตรวจสอบระบบเชื่อมโยงข้อมูลทางยุทธวิธี และระบบรักษาความปลอดภัย (COMSEC)</div>
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th class="mc_detail">
                            รายละเอียดงาน
                        </th>
                        <th class="mc_time_unit">
                            เวลา:หน่วย
                        </th>
                        <th class="mc_workload_year">
                            ปริมาณงาน:ปี
                        </th>
                        <th class="mc_manpower_year">
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                   
                    <tr>
                        
                        <td class="mc_detail">
                        3.1   รวบรวมเอกสารที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลทางยุทธวิธี และ ระบบ COMSEC

                        </td>
                        <td class="mc_time_unit">420</td>
                        <td class="mc_workload_year">48</td>
                        <td class="mc_manpower_year">0.23</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        3.2  ติดตามตรวจสอบการปฏิบัติงานของหน่วยเกี่ยวข้อง

                        </td>
                        <td class="mc_time_unit">1,680</td>
                        <td class="mc_workload_year">48</td>
                        <td class="mc_manpower_year">0.91</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        3.3   ติดตาม ตรวจสอบ และกำกับดูแลสถานภาพของอุปกรณ์ที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลการยุทธ

                        </td>
                        <td class="mc_time_unit">1,680</td>
                        <td class="mc_workload_year">48</td>
                        <td class="mc_manpower_year">0.91</td>
                    </tr>
                    <tr>
                        
                        <td class="mc_detail">
                        3.4  จัดทำเอกสารบันทึกสถานภาพอุปกรณ์ เพื่อรายงานผู้บังคับบัญชา 

                        </td>
                        <td class="mc_time_unit">840</td>
                        <td class="mc_workload_year">48</td>
                        <td class="mc_manpower_year">0.46</td>
                    </tr>
                    
                    <tr style="background-color:antiquewhite;">
                        <td colspan="3">อัตรากำลังพล</td>
                        <td class="mc_footer_sumary">2.51/3</td>
                    </tr>
                   
                </tbody>
            </table>
            
        </div>
    </div>



    <div class="card  mb-3" >
        <div class="card-header"> 	สรุป
</div>
        <div class="card-body">
        <table class="table  table-striped">
                <thead>
                    
                       
                        <th style="width: 70%;">
                       
                        </th>
                        <th class="mc_time_unit">
                            เวลา:หน่วย
                        </th>
                        <th class="mc_workload_year">
                            ปริมาณงาน:ปี
                        </th>
                        <th class="mc_manpower_year">
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                    <tr style="background-color:antiquewhite;">
                        <td></td>
                        <td class="mc_time_unit">16,440</td>
                        <td class="mc_workload_year">408</td>
                        <td class="mc_manpower_year">4.82/4</td>
                    </tr>
                </tbody>
        </table>
        </div>
    </div>

    






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">Manpower Calculation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

        <div class="row">
                <div class="col-md-12" style="text-align: left;">
                    <button style="margin-bottom:10px; float:right; "  type="button" id="submit" class="btn btn-success btn-circle "><i class="fa-solid fa-floppy-disk"></i></button>
                     <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-sharp fa-solid fa-plus"></i></button>
                    <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-danger btn-circle "><i class="fa-sharp fa-solid fa-trash"></i></button>
                </div>
            </div>

        <!-- accordian start-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                งานที่#1
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div  class="mb-3">
                    <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                    
                            <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-sharp fa-solid fa-plus"></i></button>
                            <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-danger btn-circle "><i class="fa-sharp fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <table>
                            <tr>
                                <td colspan="3">
                                <div  class="mb-3">
                                    <!-- <input type="text" class="form-control" id="s1_name" placeholder="1. ชื่องาน"> -->
                                    <textarea  class="form-control" id="s1_name" placeholder="1. ชื่องาน"></textarea>
                                </div>
                                </td>
                            </tr>
                            <tr >
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.รายละเอียดงาน"> -->
                                <div  class="mb-3">
                                    <textarea  class="form-control" id="s1_name" placeholder="1.1 รายละเอียดงาน"></textarea>
                                    <div  class="mb-3">
                                        <table>
                                            <tr>
                                            
                                                <td>
                                                    <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="วัน">
                                                </td>
                                                <td>
                                                    <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ชั่วโมง">
                                                </td>
                                                <td>
                                                    <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="นาที">
                                                </td>
                                                <td>
                                                    <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ครั้ง">
                                                </td>
                                            
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr >
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.2 รายละเอียดงาน"> -->
                                <textarea  class="form-control" id="s1_name" placeholder="1.2 รายละเอียดงาน"></textarea>
                                <div  class="mb-3">
                                    <table>
                                        <tr>
                                            
                                            
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="วัน">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ชั่วโมง">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="นาที">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ครั้ง">
                                            </td>
                                           
                                        </tr>
                                    </table>
                                </div>   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.3 รายละเอียดงาน"> -->
                                <textarea  class="form-control" id="s1_name" placeholder="1.3 รายละเอียดงาน"></textarea>
                                <div  class="mb-3">
                                    <table>
                                        <tr>
                                            
                                           
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="วัน">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ชั่วโมง">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="นาที">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ครั้ง">
                                            </td>
                                           
                                        </tr>
                                    </table>
                                </div>
                                    
                                </td>
                            </tr>
                            <tr >
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.4 รายละเอียดงาน"> -->
                                <textarea  class="form-control" id="s1_name" placeholder="1.4 รายละเอียดงาน"></textarea>
                                <div  class="mb-3">
                                    <table>
                                        <tr>
                                            
                                            
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="วัน">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ชั่วโมง">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="นาที">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ครั้ง">
                                            </td>
                                           
                                        </tr>
                                    </table>
                                    
                                </div>
                                </td>
                            </tr>
                            <tr >
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.5 รายละเอียดงาน"> -->
                                <textarea  class="form-control" id="s1_name" placeholder="1.5 รายละเอียดงาน"></textarea>
                                <div class="mb-3">
                                    <table>
                                        <tr>
                                            
                                          
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="วัน">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ชั่วโมง">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="นาที">
                                            </td>
                                            <td>
                                                <input type="text" name="t5_score" id="t5_score" class="form-control" placeholder="ครั้ง">
                                            </td>
                                           
                                        </tr>
                                    </table>
                                </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                <input type="text" class="form-control" id="s1_name" placeholder="กำลังพล(ปัจจุบัน)">
                               
                                    
                                </td>
                            </tr>
                            
                    </table>
                </div>

                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                งานที่#2
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <!-- Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content. -->
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                งานที่#3
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <!-- Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application. -->
                </div>
                </div>
            </div>
        </div>
        <!-- accordian end-->



            <form>
            <!--box-->
            <!-- <div class="card text-bg-primary mb-3" >
                <div class="card-header">
                    <div class="row">
                        งานที่#1
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                     
                        <table>
                            <tr>
                                <td colspan="3">
                                    <input type="text" class="form-control" id="s1_name" placeholder="ภารกิจ...">
                                </td>
                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                    <input type="text" class="form-control" id="s1_name" placeholder="รายละเอียดงาน...">
                                </td>
                                <td class="widthSwotWeight">
                                    <input type="text" name="s1_weight" id="s1_weight" class="form-control" placeholder="">
                                </td>
                                <td class="widthSwotScore">
                                    <input type="text" name="s1_score" id="s1_score" class="form-control" placeholder="">
                                </td>

                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                    <input type="text" class="form-control" id="s2_name" placeholder="รายละเอียดงาน...">
                                </td>
                                <td class="widthSwotWeight">
                                    <input type="text" name="s2_weight" id="s2_weight" class="form-control" placeholder="">
                                </td>
                                <td class="widthSwotScore">
                                    <input type="text" name="s2_score" id="s2_score" class="form-control" placeholder="">
                                </td>

                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                    <input type="text" class="form-control" id="s3_name" placeholder="รายละเอียดงาน...">
                                </td>
                                <td class="widthSwotWeight">
                                    <input type="text" name="s3_weight" id="s3_weight" class="form-control" placeholder="">
                                </td>
                                <td class="widthSwotScore">
                                    <input type="text" name="s3_score" id="s3_score" class="form-control" placeholder="">
                                </td>

                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                    <input type="text" class="form-control" id="s4_name" placeholder="รายละเอียดงาน...">
                                </td>
                                <td class="widthSwotWeight">
                                    <input type="text" name="s4_weight" id="s4_weight" class="form-control" placeholder="">
                                </td>
                                <td class="widthSwotScore">
                                    <input type="text" name="s4_score" id="s4_score" class="form-control" placeholder="">
                                </td>

                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                    <input type="text" class="form-control" id="s5_name" placeholder="รายละเอียดงาน...">
                                </td>
                                <td class="widthSwotWeight">
                                    <input type="text" name="s5_weight" id="s5_weight" class="form-control" placeholder="">
                                </td>
                                <td class="widthSwotScore">
                                    <input type="text" name="s5_score" id="s5_score" class="form-control" placeholder="">
                                </td>

                            </tr>
                            
                        </table>

                    
                    </div>
                    
                        
                </div>
            </div> -->
            <!--box-->
            
               
                <!-- <button type="button" id="submit" class="btn btn-primary ">บันทึกข้อมูล</button> -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    <script src="Controller/cm.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn-back").click(function(){
                window.location.href = './';
            });
        
        });
    </script>
</body>
</html>