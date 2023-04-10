<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" >
<style>
@import url(fonts/thsarabunnew.css);
body{ 
        font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em; ; 
        /* background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#191970  ); */
        background: radial-gradient(farthest-side ellipse at 10% 0,#000039   20%,#191970  );
    }
.btn-circle {
    width: 3em;
    height: 3em;
    text-align: center;
    padding: 0;
    margin: 5px;
    font-size:3em;
    line-height: 1.428571429;
    border-radius: 3em;
}
.title1{
    color:white;
}
.title2{
    color:white;
}
.titleArea{
    padding:15px;
    margin: 15px;
}


.medium-password{
		color:orange;
}
			
.strong-password{
    color:springgreen;
}

.weak-password{
    color:red;
}
.text_form{
    color:white;
}
/* test start */
.list-group {box-shadow: 0px 11px 23px 5px rgba(0,0,0,0.34);}

.list-group-item {
    background-color: rgba(255,255,255,0.7); border:0;
    border-bottom: #ddd 1px solid;
}

.btn-toolbar {
    margin-top:10px;
    float: right;
}

img {
  float:left; 
  margin-right:15px;
  height: 128px;
  width: 128px;
}


/* ==== SOME BOOTSTRAP MODS/STYLING ==== */
.btn-default {background-color: rgba(255,255,255,0.3); border-color:rgba(0,0,0,0.2);}
.img-rounded, .btn, .label {border-radius: 6px;}
.btn {padding: 6px 18px;}
.dropdown-menu>li>a {color:#777;}
.dropdown-menu {
  background-color:rgba(0,0,0,0.8);
}
.divider {background-color: #555;}
.data_detail{
    padding: 5px;
}
.lead {
    font-size: 1.1rem;
    font-weight: 300;
}
/* test end */

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="headerFixed">
       
        <!-- <div class=" d-lg-none" style="margin-top: 55px;"></div> -->
        
        <div class="container">
       
           <span style="float:right; position:relative; top:-30px; color:white; " class=" " ></span>
            <h1 style="top:25px; display:none;" class="headeTitle" >
            <i class="fa fa-suitcase" aria-hidden="true"></i>
               <b> MAPT</b>
            </h1> 
            <div class="container-xl " style="text-align: right; color:white; height:40px; ">
                <div style="padding-top: 28px; padding-bottom:0px; cursor:pointer;  display:none;" id="btnOpenLogin">
                <i class="fa fa-sign-in" aria-hidden="true"></i> <b>เข้าสู่ระบบ</b> 
                </div>
                <div style="padding-top: 28px; padding-bottom:0px; cursor:pointer; display:none;" id="btnLogout">
                <i class="fa fa-sign-out" aria-hidden="true"></i> <b>ออกจากระบบ</b> 
                </div>
            </div>

        </div>
</div>



<div class="titleArea" style="text-align: center; padding:15px; margin-top:100px;">
    <h1 class="title1">เครื่องมือวิเคราะห์และวางแผนสำหรับผู้บริหาร</h1>
    <h2 class="title2">(Management analysis and planning tools)</h2>
   
</div>

<div class="container-xl">
    
  <ul class="list-group">
    <li class="list-group-item clearfix" id="btnMC" style="cursor:pointer;">
     
   
        <button style="float:left; margin-right:15px; margin-bottom:15px;"   type="button" id="btn-mc" class="btn btn-success btn-circle shadow "><i class="fa fa-users" aria-hidden="true"></i>
            <div>MC</div>
        </button>
      

       <div class="data_detail">
                <h3 class="list-group-item-heading">
                    ด้านแผนกรอบกำลังพล
               
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>การวางแผนกำลังคน คือ การเตรียมการล่วงหน้า เพื่อใช้กำลังคนให้สอดคล้อง เหมาะสมกับงาน 
ทำให้เกิดประสิทธิภาพ และมีความคุ้มค่า โดยการเตรียมกำลังคนทั้งด้านปริมาณ และด้านคุณภาพ 
สำหรับการรองรับการเปลี่ยนแปลงที่จะเกิดขึ้นในอนาคต และใช้เป็นเครื่องมือช่วยตัดสินใจ 
ในการบริหารทรัพยากรบุคคล

                </p>
       
   
       </div>
    
    </li>

    <li class="list-group-item clearfix" id="btnSW" style="cursor:pointer;">
      <div >
       
            <button style="float:left;  margin-right:15px; margin-bottom:15px;"  type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg"><i class="fa fa-line-chart" aria-hidden="true"></i>
                <div>SW</div>
            </button>
      
     
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                ด้านแผนปฏิบัติราชการ (SWOT)
           
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>SWOT (การวิเคราะห์สวอต) คือการวิเคราะห์สภาพแวดล้อมและศักยภาพสำหรับการประเมินธุรกิจประกอบด้วย จุดแข็ง จุดอ่อน จากสภาพแวดล้อมภายนอก และ โอกาส อุปสรรค จากสภาพแวดล้อมภายใน
                </p>
            </div>
       
      </div>
    
    </li>
    <li class="list-group-item clearfix" id="btnRM" style="cursor:pointer;">
    <!-- onclick="window.location.href='./rm.php' -->
       
            <button style="float:left;  margin-right:15px; margin-bottom:15px;"  type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <div>RM</div>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                ด้านบริหารความเสี่ยง
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Risk managment คือ การจัดการความเสี่ยง ทั้งในกระบวนการในการระบุ วิเคราะห์(Risk analysis) ประเมิน (Risk assessment) ดูแล ตรวจสอบ และควบคุมความเสี่ยงที่สัมพันธ์กับ กิจกรรม หน้าที่และกระบวนการทำงาน เพื่อให้องค์กรลดความเสียหายจากความเสี่ยงมากที่สุด
                </p>
            </div>
    
    </li>



   
   
    
  </ul>
  <br style="clear: both;">
</div>




<!--
<div class="container">
<div class="container " style="text-align: right; color:white;">
    <div style="padding: 15px; cursor:pointer; display:none;" id="btnLogout">
       <i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ 
    </div>
</div>

<div class="row ">
    
    <div class="col-md-6"  >
    
        <div class="titleArea" style="text-align: center; margin-top: 30px;">
            <h1 class="title1">เครื่องมือวิเคราะห์และวางแผนสำหรับผู้บริหาร</h1>
            <h2 class="title2">(Management analysis and planning tools)</h2>
            <ul class="list-group">
                <li class="list-group-item list-group-item-primary">ด้านแผนกรอบกำลังพล </li>
                <li class="list-group-item list-group-item-secondary">ด้านแผนปฏิบัติราชการ </li>
                <li class="list-group-item list-group-item-success">ด้านบริหารความเสี่ยง</li>

            </ul>
        </div>
        <div id='btnArea' style="text-align: center; margin: 60px; display:none;">
            <div class="container">
                <div class="row ">
                    <div class="col-xs-4 col-md-4">
                        <button onclick="window.location.href='./mc.php'"  type="button" id="btn-mc" class="btn btn-success btn-circle shadow "><i class="fa fa-users" aria-hidden="true"></i>
                            <div>MC</div>
                        </button>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <button onclick="window.location.href='./swot.php'" type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg"><i class="fa fa-line-chart" aria-hidden="true"></i>
                            <div>SW</div>
                        </button>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <button onclick="window.location.href='./rm.php'" type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            <div>RM</div>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 ">
        <div id='formLoginArea' style="margin:auto; display:none;">

            <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">เข้าสู่ระบบ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">ลงทะเบียน</button>
                </li>
                
            </ul>
                <div class="tab-content" id="myTabContent" style="padding-top: 15px;">
                    <div  class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">

                        <div id="login_alert" class="row alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                            <div id="login_alert_text"></div>
                    
                            
                        </div>

                        <div class="mb-3">
                            <label for="login_email" class="form-label text_form">อีเมล์</label>
                            <input type="email" class="form-control" id="login_email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="login_password" class="form-label text_form">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="login_password" placeholder="รหัสผ่าน">
                        </div>

                    </div>
                    <div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                        
                        <div id="register_alert" class="row alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                            <div id="register_alert_text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="register_email" class="form-label text_form">อีเมล์</label>
                            <input type="email" class="form-control" id="register_email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="register_password" class="form-label text_form text_form">รหัสผ่าน</label> <span id='password-strength-status'></span>
                            <input type="password" class="form-control" id="register_password" placeholder="รหัสผ่าน">
                        </div>
                        <div class="mb-3">
                            <label for="register_confirm_password" class="form-label text_form text_form">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" id="register_confirm_password" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                    </div>
                    <input type="hidden" value="login" id="actionLR">
                    <button type="button" id="btnSubmitLR" style="width:100%;" class="btn btn-primary">ตกลง</button>

                </div>
           
            </div>
        </div>
    
    </div>
</div>
</div>
-->

<!-- <center>
<a class="btn btn-success btn-circle" href="./swot.php">SWOT</a>
<a class="btn btn-warning btn-circle" href="./bsc.php">BSC</a>
<a class="btn btn-warning btn-circle" href="./rm.php">Rist Management</a>
<a class="btn btn-warning btn-circle" href="./mc.php">Manpower Calculation</a>
</center> -->




<!-- Modal -->
 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><b><i class="fa fa-lock" aria-hidden="true"></i> ลงชื่อเข้าใช้งาน</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">เข้าสู่ระบบ</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">ลงทะเบียน</button>
        </li>
        
       </ul>
        <div class="tab-content" id="myTabContent">
        <div style="padding:15px;" class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">

            <div id="login_alert" class="row alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                <div id="login_alert_text"></div>
           
                
            </div>

            <div class="mb-3">
                <label for="login_email" class="form-label">อีเมล์</label>
                <input type="email" class="form-control" id="login_email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="login_password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="login_password" placeholder="รหัสผ่าน">
            </div>

        </div>
        <div style="padding:15px;" class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
            
            <div id="register_alert" class="row alert alert-warning d-flex1 align-items-center" style="display:none; margin-bottom:15px;" role="alert">
                <div id="register_alert_text"></div>
            </div>

            <div class="mb-3">
                <label for="register_email" class="form-label">อีเมล์</label>
                <input type="email" class="form-control" id="register_email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="register_password" class="form-label">รหัสผ่าน</label> <span id='password-strength-status'></span>
                <input type="password" class="form-control" id="register_password" placeholder="รหัสผ่าน">
            </div>
            <div class="mb-3">
                <label for="register_confirm_password" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" id="register_confirm_password" placeholder="ยืนยันรหัสผ่าน">
            </div>
        </div>
       
        </div>


      </div>
      <div class="modal-footer">
        <input type="hidden" value="" id="actionTo">
        <input type="hidden" value="login" id="actionLR">
        <button type="button" id="btnSubmitLR" class="btn btn-primary">ตกลง</button>
      </div>
    </div>
  </div>
</div> 

<div id="desktopTest" class="d-none d-lg-block"></div>


<script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>

<!-- jquery confirm start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- jquery confirm end-->

<script src="./Controller/main.js"></script>
<script src="./Controller/login.js" ></script>
