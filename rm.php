<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Risk Managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-ocean-blue.min.css" /> -->
    <!-- <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jquery.min.js"></script> -->
    
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/9770e5b059.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" >
   
    <script src="./device-uuid-master/lib/device-uuid.js"></script>


    
    
    <style>

    @import url(fonts/thsarabunnew.css);

    /**{ margin: 0; padding: 0; }*/
    body{
         font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em;
          /* background-color: darkblue; */
         /* set background */
         background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#000039  );
         background-attachment: fixed;
         background-size: cover;
         background-repeat: no-repeat;
         /* set background */
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

       .graphMainRight{
        border-right: red 2px dashed;
        text-align: right;
       
       }
       .graphMainTop{
        border-top: red 2px dashed;
        text-align: right;
     
        }
        .borderRisk{
            border:1px dashed wheat;
            text-align: right;
            padding: 10px;
        }
        .riskBgRed{
            background-color: red;

        }
        .riskBgOgrange{
            background-color:orange;
        }
        .riskBgYellow{
            background-color: yellow;
        }
        .riskBgWhite{
            background-color: white;
        }
        .borderScopeRiskLeft{
            border-left: black 3px solid;
          
        }
        .borderScopeRiskBottom{
        
            border-bottom: black 3px solid;
        }

        
        
    </style>
</head>
  <body>

<div class="container">

    <div class="row mb-3">
        
        <div class="col-md-12">
        <div class="card text-dark bg-light mt-3 " >
        <div class="card-header">Risk Evaluation</div>
        <div class="card-body" style="padding: 0px; ">
            <!-- content here. -->
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            
                        <th>ผลคะแนนความเสี่ยง</th>
                        <th>ค่าระดับความเสี่ยง</th>
                        <th>พื้นที่สี</th>
                

                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">

                    <table class="" style="background-color: #cccccc; margin-top:30px; width:100%; margin:0px; ">
                    
                    <tr>
                            <td class="graphMainRight" id="risk5T" >5</td>
                        <td class="borderRisk" id="risk51">51</td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom borderScopeRiskLeft" id="risk52">52</td>
                        <td class="borderRisk riskBgYellow" id="risk53">53</td>
                        <td class="borderRisk riskBgOgrange borderScopeRiskBottom borderScopeRiskLeft" id="risk54">54</td>
                        <td class="borderRisk riskBgRed borderScopeRiskBottom borderScopeRiskLeft" id="risk55">55</td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk4T">4</td>
                        <td class="borderRisk" id="risk41">41</td>
                        <td class="borderRisk" id="risk42">42</td>
                        <td class="borderRisk riskBgYellow borderScopeRiskLeft" id="risk43">43</td>
                        <td class="borderRisk riskBgYellow" id="risk44">44</td>
                        <td class="borderRisk riskBgOgrange borderScopeRiskBottom borderScopeRiskLeft" id="risk45">45</td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk3T">3</td>
                        <td class="borderRisk" id="risk31">31</td>
                        <td class="borderRisk" id="risk32">32</td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom borderScopeRiskLeft" id="risk33">33</td>
                        <td class="borderRisk riskBgYellow borderScopeRiskBottom" id="risk34">34</td>
                        <td class="borderRisk riskBgYellow" id="risk35">35</td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk3T">2</td>
                        <td class="borderRisk" id="risk21">21</td>
                        <td class="borderRisk" id="risk22">22</td>
                        <td class="borderRisk" id="risk23">23</td>
                        <td class="borderRisk" id="risk24">24</td>
                        <td class="borderRisk riskBgYellow borderScopeRiskLeft borderScopeRiskBottom" id="risk25">25</td>
                        
                    </tr>
                    <tr>
                        <td  class="graphMainRight" id="risk1T">1</td>
                        <td class="borderRisk" id="risk11">11</td>
                        <td class="borderRisk" id="risk12">12</td>
                        <td class="borderRisk" id="risk13">13</td>
                        <td class="borderRisk" id="risk14">14</td>
                        <td class="borderRisk" id="risk15">15</td>
                        
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
            <table class="table  table-striped">
                <thead>
                    
                       
                        <th>
                            ลำดับ
                        </th>
                        <th>
                            ชื่อความเสี่ยง
                        </th>
                        <th>
                            ระดับความเสี่ยง
                        </th>
                        <th>
                            กลยุทธ์
                        </th>
                        <th>
                            จัดการความเสี่ยง
                        </th>
                        <th>
                            ผู้รับผิดชอบ
                        </th>
                        <th>
                            ระยะเวลาปฏิบัติ

                        </th>
                       
                    
                </thead>
                <tbody>
                   
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
                   
                </tbody>
            </table>
            
        </div>
    </div>
    

    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">Risk Managment</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" ></button>
        </div>
        <div class="offcanvas-body">
        <div class="row">
            <div class="col-md-12" style="text-align: left;">
                <button style="margin-bottom:10px; float:right; "  type="button" id="submit" class="btn btn-primary btn-circle "><i class="fa-solid fa-floppy-disk"></i></button>
                <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-success btn-circle "><i class="fa-solid fa-floppy-disk"></i></button>
                <button style="margin-bottom:10px; float:right;"  type="button" id="submit" class="btn btn-warning btn-circle "><i class="fa-solid fa-floppy-disk"></i></button>
            </div>
        </div>
        <!-- accordian start-->
        <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ความเสี่ยง
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <!-- form here. -->
                    <form>
                        <div  class="alert alert-primary mb-3" role="alert">
                           
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

                        
                      
                    </form>
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
                    
                <!-- form here. -->
                    <form>
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
                    </form>
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
                    <!-- form here. -->
                    <form>
                        <div  class="alert alert-primary mb-3" role="alert">
                           
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

                            
                           
                        </div>
                    </form>
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
                    <form>
                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="xxx"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="xxx"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="xxx"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>

                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="xxx"  placeholder="ระดับความเสี่ยง">
                            
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="เริ่ม">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx"  placeholder="ถึง">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" id="xxx" placeholder="พื้นที่สี">
                                </div>
                            </div>
                           
                        </div>
                        
                        
                      
                        
                        
                      
                    </form>
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
                    <!-- form here. -->
                    <form>
                        <div  class="alert alert-primary mb-3" role="alert">
                           
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="รหัส">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="xxx"  placeholder="กลยุทธ์การจัดการความเสี่ยง">
                            </div>
                            <div class="mb-3">
                            <textarea  class="form-control" placeholder="คำอธิบาย"></textarea>
                            </div>

                            
                           
                        </div>
                    </form>
                    <!-- form here. -->
                </div>
                </div>
            </div>


           
        </div>
        <!-- accordian end-->

<!-- ระดับความเสี่ยง  บรรเทาความเสี่ยง -->

           

        </div>
    </div>




    <a class="card setting-toggle" href="#offcanvasRight" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
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
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
    <script src="Controller/rm.js"></script>
</body>
</html>