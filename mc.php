<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manpower Calculation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-ocean-blue.min.css" /> -->
    <!-- <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jquery.min.js"></script> -->
    

    <script src="./device-uuid-master/lib/device-uuid.js"></script>


    
    
    <style>

    @import url(fonts/thsarabunnew.css);

    /**{ margin: 0; padding: 0; }*/
    body{ font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em; background-color: darkblue; }
        .font-score{
            
        }
        .font-h-score{
            text-align: left;
            font-weight: bold;
        }
        .graph{
            width: 100%;
             height: 300px; 
            background-color:bisque;
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
        
    </style>
</head>
  <body>

<div class="container">

    <div class="row mb-3">
        
        <div class="col-md-3">
            <div class='graph'>อัตรากำลังพลงานที่1/กำลังพลปัจจุบันงานที่1</div>
            
        </div>
        <div class="col-md-3">
            <div class='graph'>อัตรากำลังพลงานที่2/กำลังพลปัจจุบันงานที่2</div>
        </div>
        <div class="col-md-3">
            <div class='graph'>อัตรากำลังพลงานที่3/กำลังพลปัจจุบันงานที่3</div>
        </div>
        <div class="col-md-3">
            <div class='graph'>อัตรากำลังพลทั้งหมด/กำลังพลปัจจุบันทั้งหมด</div>
        </div>
        
  
    </div>



    <div class="card  mb-3" >
        <div class="card-header"> 	1. การเตรียมความพร้อมระบบบัญชาการและควบคุม ทอ.</div>
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th>
                            รายละเอียดงาน
                        </th>
                        <th>
                            เวลา:หน่วย
                        </th>
                        <th>
                            ปริมาณงาน:ปี
                        </th>
                        <th>
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                   
                    <tr>
                        
                        <td>
                            1.1  สำรวจและรวบรวมสถานภาพของระบบบัญชาการและควบคุม
                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        1.2  ตรวจสอบความสัมพันธ์ของข้อมูลสถานภาพ ข้อมูล Hardware/Software และบุคลากร จากหน่วยที่เกี่ยวข้อง 


                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        1.3  วิเคราะห์ และประเมินผล การบูรณาการทุกระบบสารสนเทศเพื่อการยุทธ ทอ.(CIS) ที่เชื่อมต่อกับ ศปก.ทอ.

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        1.4  นำข้อมูลที่ได้จากการวิเคราะห์ นำมาเปรียบเทียบกับ ระบบบัญชาการและควบคุม ร่วม/ผสม 

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        1.5  นำเสนอแนวทาง พัฒนา/แก้ไข ให้ผู้บังคับบัญชา ตัดสินตกลงใจได้ในทุกสภาวการณ์ อย่างมีประสิทธิภาพ

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr style="background-color:antiquewhite;">
                        <td colspan="3">อัตรากำลังพล</td>
                        <td>1.39</td>
                    </tr>
                   
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="card  mb-3" >
        <div class="card-header"> 	2. การกำกับดูแล และตรวจสอบการปฏิบัติตาม รปป. ของหน่วยที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลทางยุทธวิธี
</div>
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th>
                            รายละเอียดงาน
                        </th>
                        <th>
                            เวลา:หน่วย
                        </th>
                        <th>
                            ปริมาณงาน:ปี
                        </th>
                        <th>
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                   
                    <tr>
                        
                        <td>
                        2.1  รวบรวมเอกสาร รปป.ที่เกี่ยวข้องกับระบบเชื่อมโยงข้อมูลทางยุทธวิธี

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        2.2  ติดตามตรวจสอบการปฏิบัติงานของหน่วยเกี่ยวข้อง

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        2.3  การเปลี่ยนแปลงความถี่และ Crypto Key,การจัดองค์การรักษาความปลอดภัยข้อมูล/อุปกรณ์ ระบบการติดต่อ สื่อสาร(CIS), การกำกับการตรวจสอบระบบเชื่อมโยงข้อมูลทางยุทธวิธีที่ GES, SAAB 340B/AEW และบน บ.Gripen

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        2.4  การปรับเปลี่ยนนโยบาย การเปลี่ยนแปลงโครงสร้างของระบบฯ 

                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        
                        <td>
                        2.5  การแก้ไขเพิ่มเติม รปป.ฯ ทุกหน่วยที่เกี่ยวข้อง ประชุม หารือ สรุปผล แล้วนำเรียนขออนุมัติจากผู้บังคับบัญชา


                        </td>
                        <td>840</td>
                        <td>24</td>
                        <td>0.23</td>
                    </tr>
                    <tr style="background-color:antiquewhite;">
                        <td colspan="3">อัตรากำลังพล</td>
                        <td>1.39</td>
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
                        <th>
                            เวลา:หน่วย
                        </th>
                        <th>
                            ปริมาณงาน:ปี
                        </th>
                        <th>
                            อัตรากำลัง:ปี
                        </th>
                       
                    
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>999</td>
                        <td>99</td>
                        <td>9</td>
                    </tr>
                </tbody>
        </table>
        </div>
    </div>

    






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:blue;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">Manpower Calculation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

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
                    <table>
                            <tr>
                                <td colspan="3">
                                    <input type="text" class="form-control" id="s1_name" placeholder="1. ชื่องาน">
                                </td>
                            </tr>
                            <tr>
                                <td class="widthSwotName">
                                <!-- <input type="text" class="form-control" id="s1_name" placeholder="1.รายละเอียดงาน"> -->
                                <textarea  class="form-control" id="s1_name" placeholder="1.1 รายละเอียดงาน"></textarea>
                                <div class="alert alert-success" role="alert">
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
                                <input type="text" class="form-control" id="s1_name" placeholder="1.2 รายละเอียดงาน">
                                <div class="alert alert-success" role="alert">
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
                                <input type="text" class="form-control" id="s1_name" placeholder="1.3 รายละเอียดงาน">
                                <div class="alert alert-success" role="alert">
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
                                <input type="text" class="form-control" id="s1_name" placeholder="1.4 รายละเอียดงาน">
                                <div class="alert alert-success" role="alert">
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
                                <input type="text" class="form-control" id="s1_name" placeholder="1.5 รายละเอียดงาน">
                                <div class="alert alert-success" role="alert">
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
            <div class="card text-bg-primary mb-3" >
                <div class="card-header">
                    <div class="row">
                        งานที่#1
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <!-- <div class="col-1">1</div> -->
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
            </div>
            <!--box-->
            
               
                <button type="button" id="submit" class="btn btn-primary ">บันทึกข้อมูล</button>
            </form>


        </div>
    </div>




    <a class="card setting-toggle" href="#offcanvasRight" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
        <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover">
                <span class="ripple">
                    <span class="fa-spin position-absolute all-0 d-flex flex-center">
                        <i class="fa-regular fa-gear"></i>
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
</body>
</html>