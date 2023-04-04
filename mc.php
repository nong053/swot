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
    <link rel="stylesheet" href="css/main.css" >
    <link rel="stylesheet" href="css/mc.css" >
    <script src="./device-uuid-master/lib/device-uuid.js"></script>

    <style>
    /* .headeTitle{
        color:white;
        text-align: center;
        position: absolute;
        top:15px;
    } */
    </style>
    
    
    
</head>
  <body>
<!-- <button class="btn btn-primary btn-circle btn-back" id="btn-back" onclick="window.location.href='./'"><i class="fa-sharp fa-solid fa-circle-left"></i></button> -->

<!-- set header fixed start-->
<div class="headerFixed">
        <button class="btn btn-primary btn-circle btn-back  d-none d-lg-block" id="btn-back"  onclick="window.location.href='./'"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
        <div class=" d-lg-none" style="margin-top: 55px;"></div>
        
        <div class="container">
       
           <span style="float:right; position:relative; top:-25px; color:white; cursor: pointer;" class='btnDevTeam d-none d-sm-block' data-toggle="modal" data-target="#teamModal">@DevTeamByDICT</span>
           <h1 class="headeTitle"><i class="fa fa-users"></i> MANPOWER  </h1>

        </div>
</div>
<div style="margin-bottom: 90px;" class="d-none d-lg-block"></div>
<div style="margin-bottom: 75px;" class=" d-lg-none"></div>
<!-- set header fixed end-->

<div class="container">
    <!-- <h1 class="headeTitle"><i class="fa-sharp fa-solid fa-people-arrows"></i> MANPOWER CALCULATION</h1> -->
    <div class="row mb-31" id="gaugeChartArea">
         
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">การเตรียมความพร้อม..</div>
                <div class="card-body" style="text-align: center; ">
           
                    <div id="gauge1" class="graph" >graph1</div>
                </div>
            </div>
        </div>
       
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">การกำกับดูแล/ข้อมูลทางยุทธวิธี.. </div>
                <div class="card-body" style="text-align: center; ">
             
                    <div id="gauge2" class="graph" >graph2</div>
                </div>
            </div>
           
        </div>
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">การกำกับดูแล/(COMSEC)..</div>
                <div class="card-body" style="text-align: center; ">
                
                    <div id="gauge3" class="graph" >graph3</div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card text-bg-default  mb-3"  >
                <div class="card-header" style="text-align: center;">สรุปประสิทธิภาพกำลังพล</div>
                <div class="card-body" style="text-align: center; ">
   
                    <div id="gauge4" class="graph" >graph4</div>
                </div>
            </div>
        </div>
        
        
  
    </div>

    <div id="dataTableMCDisplay"></div>
<!--
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
-->


    <div class="card  mb-3" >
        <div class="card-header"> 	สรุป
</div>
        <div class="card-body">
        <table class="table  table-striped">
                <thead>
                    
                       
                        <th style="width: 70%;">
                       
                        </th>
                        <th class="mc_time_unit">
                            <!-- เวลา:หน่วย -->
                            นาที
                        </th>
                        <th class="mc_workload_year">
                            <!-- ปริมาณงาน:ปี -->
                            ครั้ง
                        </th>
                        <th class="mc_manpower_year">
                            <!-- อัตรากำลัง:ปี -->
                            อัตรา
                        </th>
                       
                    
                </thead>
                <tbody>
                    <tr style="background-color:antiquewhite;">
                        <td></td>
                        <td class="mc_time_unit" id="totalTime">0</td>
                        <td class="mc_workload_year" id="totalQuantity">0</td>
                        <td class="mc_manpower_year" id="totalManPower">0.00/0</td>
                    </tr>
                </tbody>
        </table>
        </div>
    </div>

    






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;"><i data-bs-dismiss="offcanvas" aria-label="Close" class="fa-sharp fa-solid fa-angles-right"></i> MANPOWER FORM</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

        <div class="row">
                
              
                <!-- <div class="col-md-12" style="text-align: left; padding-bottom: 5px;">
                    <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="submitPDF" class="btn btn-danger btn-circle ">
                                <i class="fa-sharp fa-solid fa-file-pdf"></i>
                            </button>
                    <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="submitPrint" class="btn btn-info btn-circle ">
                        <i class="fa-sharp fa-solid fa-print"></i>
                    </button>

                    <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="submitExcel" class="btn btn-warning btn-circle ">
                            <i class="fa-sharp fa-solid fa-file-excel"></i>
                            </button>
                </div>
                <hr> -->
                <div class="col-md-12" style="text-align: left; padding-bottom: 5px;">
                    
                    <button style="margin-bottom:10px; margin:1px; float:right; "  data-bs-toggle="modal" data-bs-target="#exampleModel" type="button" id="getExampleModel" class="btn btn-secondary btn-circle ">
                        <i class="fa-sharp fa-solid fa-bars-progress"></i>
                    </button>
                    <button  type="button" id="addTaskModal" class="btn btn-primary btn-circle main_cate_mc_btn" data-bs-toggle="modal" data-bs-target="#cateTaskModel"><i class="fa-sharp fa-solid fa-plus"></i></button>
                    <button  type="button" id="deleteTaskCate" class="btn btn-danger btn-circle main_cate_mc_btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
                    <button  type="button" id="editTaskCateModal" class="btn btn-warning btn-circle main_cate_mc_btn" data-bs-toggle="modal" data-bs-target="#cateTaskModel"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button>
                    <button style="margin-bottom:10px; margin:1px; float:right; " type="button" id="submitPrint" class="btn btn-info btn-circle ">
                        <i class="fa-sharp fa-solid fa-print"></i>
                    </button>
                    <button type="button" id="submitPDF" class="btn btn-danger btn-circle main_cate_mc_btn" >
                                <i class="fa-sharp fa-solid fa-file-pdf"></i>
                            </button>
                </div>
            </div>

        <!-- accordian start-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <div class="mc_checkbox_cate_mc">
                        <input type="checkbox" class="form-check-input">
                    </div>
                    <div class="mc_cate_mc">   
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            งานที่#1
                        </button> 
                    </div>
                    <br style="clear:both">
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="padding: 2px;">
                <div  class="mb-3">
                    <div class="row" style="padding:5px;">
                        <div class="col-md-12" style="text-align: left; ">
                    
                            
                            <button type="button" id="submitSaveTask" class="btn btn-success btn-circle sub_mc_btn" >
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                            <button   type="button" id="submit" class="btn btn-primary btn-circle sub_mc_btn"><i class="fa-sharp fa-solid fa-plus"></i></button>
                            <button  type="button" id="submit" class="btn btn-danger btn-circle sub_mc_btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                   
                    <table class="table table-striped">
                            <tr >
                                <td class="widthSwotName">
                                    <input type="checkbox"  class="form-check-input">
                                    <div  class="mb-3"  class="form-check-input">
                                        <textarea  class="form-control mb-2" id="s1_name" placeholder="1.1 รายละเอียดงาน"></textarea>
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
                                <input type="checkbox"  class="form-check-input">
                                <textarea  class="form-control mb-2" id="s1_name" placeholder="1.2 รายละเอียดงาน"></textarea>
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
                                <input type="checkbox"  class="form-check-input">
                                <textarea  class="form-control mb-2" id="s1_name" placeholder="1.3 รายละเอียดงาน"></textarea>
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
                                <input type="checkbox"  class="form-check-input">
                                <textarea  class="form-control mb-2" id="s1_name" placeholder="1.4 รายละเอียดงาน"></textarea>
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
                                <input type="checkbox"  class="form-check-input">
                                <textarea  class="form-control mb-2" id="s1_name" placeholder="1.5 รายละเอียดงาน"></textarea>
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
                                <input type="text" class="form-control" id="current_persion5" placeholder="กำลังพล(ปัจจุบัน)">
                               
                                    
                                </td>
                            </tr>
                            
                    </table>
                </div>

                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">

                    <div class="mc_checkbox_cate_mc">
                        <input type="checkbox" class="form-check-input">
                    </div>
                    <div class="mc_cate_mc">   
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            งานที่#2
                        </button> 
                    </div>
                    <br style="clear:both">

                    <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    งานที่#2
                    </button> -->
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    xx
                    <!-- Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content. -->
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">


                    <div class="mc_checkbox_cate_mc">
                        <input type="checkbox" class="form-check-input">
                    </div>
                    <div class="mc_cate_mc">   
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            งานที่#3
                        </button> 
                    </div>
                    <br style="clear:both">

                <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                งานที่#3
                </button> -->
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    
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



<!--footer for moblie start-->
<div class="footerFixed  d-block d-sm-none " >
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class='fontFooter'>
                    <button class="btn btn-primary btn-circle" id="btn-back" onclick="window.location.href='./'" >
                    <i class="fa-sharp fa-solid fa-circle-left"></i>
                    </button>
                </div>
            </div>
            <div class="col">
            <!-- <span style="float:right; position:relative; top:-25px; color:white; cursor: pointer;" id="btnDevTeam" data-toggle="modal" data-target="#teamModal">@DevTeamByDICT</span> -->
                <div class='fontFooter'>
                    <button class="btn btn-primary btn-circle btnDevTeam" id="btn-back" data-toggle="modal" data-target="#teamModal" >
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </button>
                </div>
             
            </div>
            <div class="col">
              
                <div class='fontFooter'>
                    <button class="btn btn-primary btn-circle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >
                    <i class="fa-sharp fa-solid fa-gear "></i>
                    </button>
                </div>
             
            </div>
        </div>
    </div>
</div>

<!--footer for moblie end-->


<!-- Modal -->
<div class="modal fade" id="cateTaskModel" tabindex="-1" aria-labelledby="cateTaskModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModelLabel">ภารกิจ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div id="cate_task_alert" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px; display:none;" role="alert">
        <div id="cate_task_alert_text">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
        </div>
      </div>

      <div class="mb-3">
        <label for="cateTaskName" class="form-label">ภารกิจ</label>
        <input type="text" class="form-control" id="cateTaskName" placeholder="ภารกิจ" >
      </div>
      <div class="mb-3">
        <label for="currentPerson" class="form-label">กำลังพลปัจจุบัน</label>
        <input type="text" class="form-control number_only" id="currentPerson" placeholder="กำลังพลปัจจุบัน" >
      </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" id="actionTaskCate" value="add">
        <input type="hidden" id="idTaskCate" value="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="button" id="cateTaskSubmit" class="btn btn-primary">บันทึกข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--Model -->
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
           <option>ตัวอย่างข้อมูล 1</option>
           <option>ตัวอย่างข้อมูล 2</option>
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
                                <select class="form-select" id="mc_id_load" >
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
                        <input type="text" class="form-control" id="mc_name_find" placeholder="ค้นหา">
                    </div>
                    <table class="table" id="exampleDataTable">
                        <thead>
                            <th>#</th>
                            <th>ข้อมูลตัวอย่าง</th>
                            <th>ประเภท</th>
                            <th style="text-align: center;">จัดการ</th>
                        </thead>
                        <tbody id="dataExampleArea">
                       
                        </tbody>
                    </table>
                    <div id="example_data_alert" class=" alert alert-warning d-flex1 align-items-center" style="margin-bottom: 15px; display:none;" role="alert">
                        <div id="example_data_alert_text">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mc_release_type_name" class="form-label">ชื่อข้อมูลตัวอย่าง</label>
                        <input type="text" class="form-control" id="mc_name" placeholder="ชื่อข้อมูลตัวอย่าง">
                    </div>
                    <div class="mb-3">
                     
                        <label for="mc_release_type_code" class="form-label">ประเภทข้อมูล</label>
                        <select class="form-select" id="mc_release_type_code" aria-label="">
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
        <input type="hidden" id="mc_id" value="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" style="display:none;" id="btnSaveExample" class="btn btn-primary">บันทึก</button>
        <button type="button" id="btnLoadExample" class="btn btn-primary">โหลดข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--Model -->

<!-- Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true" style="height:90%;">
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
                    <img class="card-img-top" src="https://img2.thuthuatphanmem.vn/uploads/2019/01/05/hinh-avatar-doi-2_042811150.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert" style="padding:10px; ">
                            <h5 class="card-title" style="font-size:16px; font-weight:bold;">น.ต.สุธีร์  ตั้งใจ</h5>
                            <p class="card-text"  style="font-size:16px;">System Analysis</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card_custom">
                <div class="card" >
                    <img class="card-img-top" src="https://img2.thuthuatphanmem.vn/uploads/2019/01/05/hinh-avatar-doi-2_042811150.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="alert alert-success" role="alert" style="padding:10px; ">
                            <h5 class="card-title" style="font-size:16px;font-weight:bold;">ร.อ.ณรงศักดิ์  เปรมปรีดา</h5>
                            <p class="card-text"  style="font-size:16px;">Tester</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card_custom">
                <div class="card" >
                    <img class="card-img-top" src="https://img2.thuthuatphanmem.vn/uploads/2019/01/05/hinh-avatar-doi-2_042811150.jpg" alt="ร.ท.โฆษิต อามรมณ์สวะ">
                    <div class="card-body ">
                        <div class="alert alert-info" role="alert" style="padding:10px; ">
                            <h5 class="card-title" style="font-size:16px;font-weight:bold;">ร.ท.โฆษิต อามรมณ์สวะ</h5>
                            <p class="card-text"  style="font-size:16px;">Developer</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </divv>

      </div>
      <div class="modal-footer">
        <button type="button" id="btnDevTeamClose" class="btn btn-secondary btnDevTeamClose" data-dismiss="modal">ปิด</button>
     
      </div>
    </div>
  </div>
</div>
<!--Modal-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    -->
    <script src="http://kpi.dashboardweb.com/js/jquery-2.1.1.js"></script>
    <script src="http://kpi.dashboardweb.com/kendoCommercial/js/kendo.all.min.js"></script>

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


    <script src="Controller/main.js"></script>
    <script src="Controller/mc.js"></script>
    
</body>
</html>