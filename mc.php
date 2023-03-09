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
    <link rel="stylesheet" href="css/mc.css" >
    <script src="./device-uuid-master/lib/device-uuid.js"></script>

    <style>
    .headeTitle{
        color:white;
        text-align: center;
        position: absolute;
        top:15px;
    }
    </style>
    
    
    
</head>
  <body>
  <button class="btn btn-primary btn-circle btn-back" id="btn-back"  href="./"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
<div class="container">
    <h1 class="headeTitle"><i class="fa-sharp fa-solid fa-people-arrows"></i> MANPOWER CALCULATION</h1>
    <div class="row mb-3" id="gaugeChartArea">
         
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
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;"><i class="fa-sharp fa-solid fa-angles-left"></i> MANPOWER FORM</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

        <div class="row">
                <div class="col-md-12" style="text-align: left; padding-bottom: 5px;">
                    <!-- <button style="margin-bottom:10px; float:right;" type="button" id="submitSaveTask" class="btn btn-success btn-circle" >
                        <i class="fa-solid fa-floppy-disk"></i>
                    </button> -->
                    <button style="margin-bottom:10px; margin:1px; float:right; "  data-bs-toggle="modal" data-bs-target="#exampleModel" type="button" id="getExampleModel" class="btn btn-secondary btn-circle ">
                        <i class="fa-sharp fa-solid fa-bars-progress"></i>
                    </button>
                    <button  type="button" id="addTaskModal" class="btn btn-primary btn-circle main_cate_mc_btn" data-bs-toggle="modal" data-bs-target="#cateTaskModel"><i class="fa-sharp fa-solid fa-plus"></i></button>
                    <button  type="button" id="deleteTaskCate" class="btn btn-danger btn-circle main_cate_mc_btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
                    <button  type="button" id="editTaskCateModal" class="btn btn-warning btn-circle main_cate_mc_btn" data-bs-toggle="modal" data-bs-target="#cateTaskModel"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button>
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

<!-- Modal -->
<div class="modal fade" id="cateTaskModel" tabindex="-1" aria-labelledby="cateTaskModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModelLabel">ภารกิจ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="cateTaskName" class="form-label">ภารกิจ</label>
        <input type="text" class="form-control" id="cateTaskName" placeholder="ภารกิจ" >
      </div>
      <div class="mb-3">
        <label for="currentPerson" class="form-label">กำลังพลปัจจุบัน</label>
        <input type="text" class="form-control" id="currentPerson" placeholder="กำลังพลปัจจุบัน" >
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
<div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
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
</div>
<!--Model -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    <script src="Controller/main.js"></script>
    <script src="Controller/mc.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn-back").click(function(){
                window.location.href = './';
            });
        
        });
    </script>
</body>
</html>