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
             height: 700px; 
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



        
    </style>
</head>
  <body>
  <button class="btn btn-primary btn-circle btn-back" id="btn-back"  href="./"><i class="fa-sharp fa-solid fa-circle-left"></i></button>
<div class="container">

    <div class="  mb-3">
        
        
        

        <div class="card text-bg-defualt  mb-3 " style="">
            <div class="card-header">SWOT Analysis (ระบบป้องกันภัยทางอากาศ  รุ่น “PECHORA-2D” SAM S-125-2D) </div>
            <div class="card-body">
                <div id="chart" class="graph" ></div>
            </div>
        </div>
  
    </div>


    
        <div class="card text-bg-default mb-3" >
                <div class="card-header">กลยุทธ์เชิงรุก SO (จุดแข็งและโอกาส) </div>
                <div class="card-body">
        <div class="row">
        <div class="col-md-6">
        
                <table class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>จุดแข็ง (Strengths)</th>
                                <th>คะแนน</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <td colspan="3" class="total-swot">เฉลี่ย=1 <!--เฉลี่ย=INF--></td>
                            </tr>
                        </tbody>
                    </table>
                   
                


        </div>
        <div class="col-md-6">
                <!--content here-->
                

                    <table class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>โอกาส (Opportunities)</th>
                                <th>คะแนน</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
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
                            <td colspan="3" class="total-swot">เฉลี่ย=3 <!--เฉลี่ย=INF--></td>
                        </tr>
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


                <table class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>จุดแข็ง (Strengths)</th>
                                <th>คะแนน</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <td colspan="3" class="total-swot">เฉลี่ย=1 <!--เฉลี่ย=INF--></td>
                            </tr>
                        </tbody>
                </table>
            </div>
        
            <div class="col-md-6">
                <table class="table  table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ภัยคุกคาม (Threats)</th>
                            <th>คะแนน</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>    
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
                            <td colspan="3" class="total-swot">เฉลี่ย=4 <!--เฉลี่ย=INF--></td>
                        </tr>
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

            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>จุดอ่อน (Weaknesses)</th>
                        <th>คะแนน</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
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
                    <td colspan="3" class="total-swot">เฉลี่ย=2 <!--เฉลี่ย=INF--></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-6">

            
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>โอกาส (Opportunities)</th>
                        <th>คะแนน</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
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
                    <td colspan="3" class="total-swot">เฉลี่ย=3 <!--เฉลี่ย=INF--></td>
                </tr>
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

            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>จุดอ่อน (Weaknesses)</th>
                        <th>คะแนน</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
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
                    <td colspan="3"  class="total-swot">เฉลี่ย=2 <!--เฉลี่ย=INF--></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-6">
            <table class="table  table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ภัยคุกคาม (Threats)</th>
                            <th>คะแนน</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>    
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
                            <td colspan="3" class="total-swot">เฉลี่ย=4 <!--เฉลี่ย=INF--></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:#191970;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">SWOT Analysis </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

            <form>
            <div class="row">
                        <div class="col-md-12" style="text-align: left; margin-bottom:10px;">

                      


                            <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitSave" class="btn btn-success btn-circle ">
                                <i class="fa-solid fa-floppy-disk"></i>
                            </button>

                            <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitExcel" class="btn btn-warning btn-circle ">
                            <i class="fa-sharp fa-solid fa-file-excel"></i>
                            </button>

                            <button style="margin-bottom:10px; margin:1px; float:right; "  data-bs-toggle="modal" data-bs-target="#exampleModel" type="button" id="getExampleModel" class="btn btn-secondary btn-circle ">
                                <i class="fa-sharp fa-solid fa-bars-progress"></i>
                            </button>

                            <button style="margin-bottom:10px; margin:1px; float:right; "  type="button" id="submitPrint" class="btn btn-info btn-circle ">
                                <i class="fa-sharp fa-solid fa-print"></i>
                            </button>

                            
                        
                        </div>
                    </div>
            <!--box-->
            <div class="card text-bg-default mb-3" >
                            <div class="card-header">

                                รายละเอียด SWOT

                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                
                                <textarea class="form-control" id="swot_detail"></textarea>
                                
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
                                <div class="row mb-3">
                                    <!-- <div class="col-1">1</div> -->
                                    <table>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s1_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s1_weight" id="s1_weight" class="form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s1_score" id="s1_score" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s2_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s2_weight" id="s2_weight" class="form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s2_score" id="s2_score" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s3_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s3_weight" id="s3_weight" class="form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s3_score" id="s3_score" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s4_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s4_weight" id="s4_weight" class="form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s4_score" id="s4_score" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="widthSwotName">
                                                <input type="text" class="form-control" id="s5_name" aria-describedby="xxx">
                                            </td>
                                            <td class="widthSwotWeight">
                                                <input type="text" name="s5_weight" id="s5_weight" class="form-control">
                                            </td>
                                            <td class="widthSwotScore">
                                                <input type="text" name="s5_score" id="s5_score" class="form-control">
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
                                <div class="row mb-3">

                                    <table>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w1_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w1_weight" id="w1_weight" class="form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w1_score" id="w1_score" class="form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w2_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w2_weight" id="w2_weight" class="form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w2_score" id="w2_score" class="form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w3_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w3_weight" id="w3_weight" class="form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w3_score" id="w3_score" class="form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w4_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w4_weight" id="w4_weight" class="form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w4_score" id="w4_score" class="form-control">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="widthSwotName">
                                                    <input type="text" class="form-control" id="w5_name" aria-describedby="xxx">
                                                </td>
                                                <td class="widthSwotWeight">
                                                    <input type="text" name="w5_weight" id="w5_weight" class="form-control">
                                                </td>
                                                <td class="widthSwotScore">
                                                    <input type="text" name="w5_score" id="w5_score" class="form-control">
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
                                <div class="row mb-3">
                                <table>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o1_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o1_weight" id="o1_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o1_score" id="o1_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o2_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o2_weight" id="o2_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o2_score" id="o2_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o3_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o3_weight" id="o3_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o3_score" id="o3_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o4_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o4_weight" id="o4_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o4_score" id="o4_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="o5_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="o5_weight" id="o5_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="o5_score" id="o5_score" class="form-control">
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
                            <div class="row mb-3">
                                <table>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t1_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t1_weight" id="t1_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t1_score" id="t1_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t2_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t2_weight" id="t2_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t2_score" id="t2_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t3_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t3_weight" id="t3_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t3_score" id="t3_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t4_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t4_weight" id="t4_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t4_score" id="t4_score" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="widthSwotName">
                                            <input type="text" class="form-control" id="t5_name" aria-describedby="xxx">
                                        </td>
                                        <td class="widthSwotWeight">
                                            <input type="text" name="t5_weight" id="t5_weight" class="form-control">
                                        </td>
                                        <td class="widthSwotScore">
                                            <input type="text" name="t5_score" id="t5_score" class="form-control">
                                        </td>

                                    </tr>
                                    
                                </table>
                            </div>
                            </div>
                        </div>
                        <!--box-->
                        <!--button-->
                        <div class="row">
                            <div class="col-md-12" style="text-align: left;">
                                <button style="margin-bottom:10px; float:right; "  type="button" id="submit" class="btn btn-success btn-circle ">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </button>
                            </div>
                        </div>
                        <!--button-->
               
             
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
<div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
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
</div>
<!--Model -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
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