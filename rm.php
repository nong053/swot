<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Risk Managment</title>
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

       .graphMainRight{
        border-right: red 2px dashed;
       
       }
       .graphMainTop{
        border-top: red 2px dashed;
     
        }
        
    </style>
</head>
  <body>

<div class="container">

    <div class="row mb-3">
        
        <div class="col-md-12">

            <table class="table" style="background-color: #cccccc; margin-top:30px;">
               
                <tr>
                     <td class="graphMainRight">5</td>
                    <td>51</td>
                    <td>52</td>
                    <td>53</td>
                    <td>54</td>
                    <td>55</td>
                    
                </tr>
                <tr>
                    <td  class="graphMainRight">4</td>
                    <td>41</td>
                    <td>42</td>
                    <td>43</td>
                    <td>44</td>
                    <td>45</td>
                    
                </tr>
                <tr>
                    <td  class="graphMainRight">3</td>
                    <td>31</td>
                    <td>32</td>
                    <td>33</td>
                    <td>34</td>
                    <td>35</td>
                    
                </tr>
                <tr>
                    <td  class="graphMainRight">2</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    
                </tr>
                <tr>
                    <td  class="graphMainRight">1</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    
                </tr>
                <tr>
                    <td  class=""></td>
                    <td class="graphMainTop">1</td>
                    <td class="graphMainTop">2</td>
                    <td class="graphMainTop">3</td>
                    <td class="graphMainTop">4</td>
                    <td class="graphMainTop">5</td>
                </tr>
                
            </table>
            
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
    





    






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:blue;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">Risk Managment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

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

            <form>
            
            
               
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
    <script src="Controller/rm.js"></script>
</body>
</html>