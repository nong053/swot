<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" >
<link href="images/favicon_io/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
    font-size: 18px;
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
    padding: 15px;
}

.btn-toolbar {
    margin-top:0px;
    display:none;
    /* float: right; */
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
.btn-toolbar>.btn, .btn-toolbar>.btn-group, .btn-toolbar>.input-group {
    margin-left: 5px;
}
/* test end */

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<div id='displayView' style="display:none;">
<div class="headerFixed" style="display: none;">
       
        <!-- <div class=" d-lg-none" style="margin-top: 55px;"></div> -->
        
        <div class="container">
       
           <span style="float:right; position:relative; top:-30px; color:white; " class=" " ></span>
           
           
            <h1 style="top:30px; display:none;" class="headeTitle" >
            <!-- <i class="fa fa-suitcase" aria-hidden="true"></i> -->
            <b style="font-size: 24px;left:5px; position: relative;top: 10px;"> วิเคราะห์ SWOT หุ้นไทย</b>
            <img src="images/icon60x54.png" class="d-none d-sm-block" style="width:60px; height:54px; top: -11px; position:relative; margin-right: 5px;">
            <img src="images/icon45x40.png" class="d-block d-sm-none" style="width:45px; height:40px; top: -11px; position:relative; margin-right: 5px;">
              
            </h1> 

             <div id="loginArea" class="" style="text-align: right; color:white; float:right;  display:none;">
                <div style=" padding-bottom:0px; cursor:pointer;  display:none;" id="btnOpenLogin">
                <i class="fa fa-sign-in" aria-hidden="true"></i> <b>เข้าสู่ระบบ</b> 
                </div>
                <div style="padding-bottom:0px; cursor:pointer; display:none;  " id="btnLogout">
                <i class="fa fa-sign-out" aria-hidden="true"></i> <b>ออกจากระบบ</b> 
                </div>
            </div>


           <!--  <div id="loginArea" class="" style="text-align: right; color:white; height:40px; ">
                <div style="padding-top: 28px; padding-bottom:0px; cursor:pointer;  display:none;" id="btnOpenLogin">
                <i class="fa fa-sign-in" aria-hidden="true"></i> <b>เข้าสู่ระบบ</b> 
                </div>
                <div style="padding-bottom:0px; cursor:pointer; display:none;  float:right;" id="btnLogout">
                <i class="fa fa-sign-out" aria-hidden="true"></i> <b>ออกจากระบบ</b> 
                </div>
            </div>
 -->
        </div>
</div>



<div class="titleArea" style="text-align: center; padding:15px; display:none; ">
    
    <!-- <h1 class="title1">วิเคราะห์ SWOT หุ้นไทย</h1> -->
    <div class="title2">
    การวิเคราะห์ SWOT ของหุ้นเป็นกระบวนการที่วิเคราะห์ความแข็งแกร่ง (Strengths), จุดอ่อน (Weaknesses), โอกาส (Opportunities), และอุปสรรค (Threats) ของการลงทุนในหุ้นในตลาดทุน
    </div>
   
</div>

<div class="container-xl">
    
  <ul class="list-group">
    <li class="list-group-item clearfix" >
     
   
        <button style="float:left; margin-right:15px; margin-bottom:15px;  padding: 0px;"   type="button" id="btn-mc" class="btn btn-success btn-circle shadow btnMC">
        <span id='logo-3'><img src="./images/stocks/TU.png"></span>
        </button> 
        
      

       <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-3'>
                    <b>"TU"</b> บริษัท ไทยยูเนี่ยน กรุ๊ป จำกัด (มหาชน)
                </span>
               
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-3'>
                    ผลิตและส่งออกอาหารสำเร็จรูปแช่แข็งและบรรจุกระป๋อง และขยายธุรกิจให้ครบวงจรด้วยธุรกิจอาหารสำเร็จรูปและอาหารว่าง โดยเน้นอาหารทะเล ธุรกิจบรรจุภัณฑ์และสิ่งพิมพ์ ธุรกิจการตลาดภายในประเทศ ธุรกิจอาหารสัตว์ และธุรกิจพัฒนาสายพันธุ์กุ้งเพื่อจำหน่าย
                </span>
                </p>
       
   
       </div>
       <div class="btn-toolbar " role="toolbar" aria-label="">
                
        <a href="#" target="_blank" id="btnManualMC1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
        <a href="#" id="btn-3" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
    </div>
    
    </li>

    <li class="list-group-item clearfix" >
      <div >
       
             <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 0px;"  type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg btnSW">
             <span id='logo-2'><img src="./images/stocks/ADVANC.png"></span>
            </button> 
            
     
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                    <span class='companyIitle' id='title-2'>
                        <b>"ADVANC"</b> บริษัท แอดวานซ์ อินโฟร์ เซอร์วิส จำกัด (มหาชน)
                    </span>
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-2'>
                    ให้บริการสื่อสารโทรคมนาคม โดยรวมถึงธุรกิจให้บริการโทรศัพท์เคลื่อนที่ ธุรกิจอินเทอร์เน็ตความเร็วสูง และธุรกิจดิจิทัล เซอร์วิส
                </span>
                </p>
            </div>
       
      </div>
      <div class="btn-toolbar " role="toolbar" aria-label="">
                
        <a  href="#" target="_blank" id="btnManualSW1" class="btn btn-default"><i class=" fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
        <a href="#" id="btn-2" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
    </div>
    
    </li>
    <li class="list-group-item clearfix" >
    <!-- onclick="window.location.href='./rm.php' -->
       
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 0px;"  type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/AOT.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"AOT"</b> บริษัท ท่าอากาศยานไทย จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>ทอท.ประกอบธุรกิจท่าอากาศยานของประเทศไทย โดยธุรกิจหลักประกอบด้วย การจัดการ การดำเนินงาน และการพัฒนาท่าอากาศยาน โดยมีท่าอากาศยานในความรับผิดชอบ 6 แห่ง คือ ท่าอากาศยานสุวรรณภูมิ ท่าอากาศยานดอนเมือง ท่าอากาศยานเชียงใหม่ ท่าอากาศยานแม่ฟ้าหลวง เชียงราย ท่าอากาศยานภูเก็ต และท่าอากาศยานหาดใหญ่ ซึ่งท่าอากาศยานทั้ง 6 แห่งนี้ ให้บริการเที่ยวบินภายในประเทศและระหว่างประเทศ โดยมีท่าอากาศยานสุวรรณภูมิเป็นท่าอากาศยานหลักของประเทศ
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="#" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>



   
   
    
  </ul>
  <br style="clear: both;">
</div>


<footer class="footer mt-auto py-3 bg-body-tertiary">
  <div class="container">
  <!-- <span style="float:left;  color:white; cursor: pointer;" class='btnDevTools' data-toggle="modal" data-target="#devToolsModal">Tools for Development</span> -->
  <!-- <span style="float:right;  color:white; cursor: pointer; " class='btnDevTeam' id="Copyright" data-toggle="modal" data-target="#teamModal">@DevTeamByDICT</span> -->
  <span style="float:right;  color:white; cursor: pointer; "  id="Copyright" >Copyright@Kosit Tel:0809926565</span>
  <br style="clear: both;">
  </div>
 
</footer>

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
<!--modal -->
<!-- Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true" >
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
                    <img class="card-img-top" src="images/dev1.jpg" alt="น.ต.สุธีร์  ตั้งใจ"  style="height:auto;">
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
                    <img class="card-img-top" src="images/dev2.jpg" alt="ร.อ.ณรงศักดิ์  เปรมปรีดา"  style="height:auto;">
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
                    <img class="card-img-top" src="images/dev3.png" alt="ร.ท.โฆษิต อามรมณ์สวะ"  style="height:auto;">
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
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" id="btnDevTeamClose" class="btn btn-secondary btnDevTeamClose" data-dismiss="modal">ปิด</button>
     
      </div>
    </div>
  </div>
</div>
<!--Modal-->
<!-- Modal -->
<div class="modal fade" id="devToolsModal" tabindex="-1" role="dialog" aria-labelledby="devToolsModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="devToolsModalLabel">เครื่องมือในการการพัฒนาระบบ</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         
        </button>

      </div>
      <div class="modal-body">
        
      <div class="list-group">
        <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.2.34/xampp-windows-x64-7.2.34-2-VC15-installer.exe/download" class="list-group-item list-group-item-action " aria-current="true">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">xampp-windows-x64-7.2.34</h5>
           
            </div>
            <p class="mb-1">
            XAMPP  คือโปรแกรมจำลอง web server ทำให้เราสามารถทดสอบเว็บไซต์ได้โดยที่ไม่ต้องเชื่อมต่ออินเตอร์เน็ต และไม่มีค่าใช่จ่ายใดๆ
            XAMPP ประภอบด้วย Apache, PHP, MySQL, PHP MyAdmin, Perl
                <!-- <a href='https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.2.34/xampp-windows-x64-7.2.34-2-VC15-installer.exe/download'>Download</a> -->
            </p>
           
        </a>
        <a href="https://jquery.com/" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">javascript jquery</h5>
            <!-- <small class="text-body-secondary">3 days ago</small> -->
            </div>
            <p class="mb-1">jQuery คือ JavaScript Library ยอดนิยมตัวหนึ่งที่โปรแกรมเมอร์นำมาใช้พัฒนาเว็บไซต์ สามารถรองรับการทำงานทุกเบราเซอร์ โดยไลบารี่นี้มีวัตถุประสงค์ที่จะเอามาแก้ปัญหาการใช้งาน JavaScript ที่มีความยุ่งยากในการใช้งานให้สามารถใช้งานได้ง่ายขึ้น</p>
           
        </a>
        <a href="https://code.visualstudio.com/" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">VS CODE</h5>
            <!-- <small class="text-body-secondary">3 days ago</small> -->
            </div>
            <p class="mb-1">เครื่องมือในการเขียนโปรแกรม</p>
           
        </a>
        <a href="https://github.com/" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">GitHub</h5>
            <!-- <small class="text-body-secondary">3 days ago</small> -->
            </div>
            <p class="mb-1">version control repository </p>
           
        </a>
        <!-- <a href="https://www.chartjs.org/" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Chart.js</h5>
           
            </div>
            <p class="mb-1">Simple yet flexible JavaScript charting library for the modern web </p>
           
        </a> -->
        <a href="https://github.com/telerik/kendo-ui-core" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Kendo UI Core</h5>
            <!-- <small class="text-body-secondary">3 days ago</small> -->
            </div>
            <p class="mb-1">Kendo UI Core is a free and open-source subset of Kendo UI. The following table details the widgets and features available in Kendo UI Core, as well as the additional features available via a commercial Kendo UI license. </p>
           
        </a>
        <!-- <a href="https://www.zingchart.com/" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">ZingChart</h5>
          
            </div>
            <p class="mb-1">Create animated & interactive charts with hundreds of thousands of data records using the ZingChart JavaScript charting library.</p>
           
        </a> -->
        <a href="https://developers.google.com/chart?hl=th" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Google Chart</h5>
           
            </div>
            <p class="mb-1">เครื่องมือแผนภูมิของ Google มีประสิทธิภาพ ใช้งานง่าย และไม่เสียค่าใช้จ่าย </p>
           
        </a>
        <a href="https://jwt.io/" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">JWT(PHP)</h5>
           
            </div>
            <p class="mb-1">JWT คือ JSON Web Token เป็นรูปแบบหนึ่งที่ใช้ในการสร้างรหัส token จากข้อมูล JSON Data แล้วทำการเข้ารหัสด้วย Base64Url และถือว่าเป็นมาตรฐานเปิด(RFC 7519) ที่เข้ามาแก้ปัญหาการส่งข้อมูลอย่างปลอดภัยระหว่างกัน โดยถูกออกแบบไว้ว่า จะต้องมีขนาดที่กะทัดรัด (Compact) และเก็บข้อมูลภายในตัว(Self-contained) </p>
           
        </a>
        <a href="https://getbootstrap.com/" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"> Bootstrap 5.3</h5>
           
            </div>
            <p class="mb-1">
                Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.
            </p>
           
        </a>
        
       
        

        
     </div>


      <br style="clear:both" > 
      </div>
      <div class="modal-footer">
        <button type="button" id="btnDevToolsClose" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
     
      </div>
    </div>
  </div>
</div>
<!--Modal-->
<!-- Modal -->
<div class="modal fade" id="swotModal" tabindex="-1" role="dialog" aria-labelledby="devToolsModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header" style="background-color: #191970; color:white;">
        <h5 class="modal-title" id="swotCompanyModalLabel">
           
        <div id="companyTitle">SWOT Analisys</div>
        <div id="companyDeatail"></div>
        </h5>
       <span style="color: white;">
            <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
            </button>
       </span>

      </div>
      <div class="modal-body" style="padding:0px;" id="dataSwotArea">
        
      <!-- conntent -->
      
      <ul class="list-group" style="box-shadow:none; background-color:#b7b7ce; ">
        <li class="list-group-item clearfix" >
     
   
        <button style="float:left; margin-right:30px; margin-bottom:15px;"   type="button" id="btn-mc" class="btn btn-success btn-circle shadow btnMC">
        <i class="fa fa-flag" aria-hidden="true"></i>   
            <div>S</div>
        </button> 
        
      

       <div class="data_detail">
                <h3 class="list-group-item-heading">
                <b>ความแข็งแกร่ง</b> (Strengths)
               
                </h3>
                <p class="list-group-item-text lead" id="dataStrengthsArea">

                

                </p>
       
   
       </div>
       
    
    </li>

    <li class="list-group-item clearfix" >
      <div >
       
             <button style="float:left;  margin-right:30px; margin-bottom:15px;"  type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg btnSW">
             <i class="fa fa-low-vision" aria-hidden="true"></i>   
                <div>W</div> 
            </button> 
            
     
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <b>จุดอ่อน</b> (Weaknesses)
           
                </h3>
                <p class="list-group-item-text lead" id="dataWeaknessesArea">
               
                </p>
                
            </div>
       
      </div>
      
    
    </li>
    <li class="list-group-item clearfix" >
    <!-- onclick="window.location.href='./rm.php' -->
       
            <button style="float:left;  margin-right:30px; margin-bottom:15px;"  type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg btnRM">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>   
            <div>O</div> 
                
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <b>โอกาส </b> (Opportunities)
             
                </h3>
                <p class="list-group-item-text lead" id="dataOpportunitiesArea">
                
                </p>
            </div>
            
    </li>
    <li class="list-group-item clearfix" >
    <!-- onclick="window.location.href='./rm.php' -->
       
            <button style="float:left;  margin-right:30px; margin-bottom:15px;"  type="button" id="btn-rm" class="btn  btn-circle btn-danger shadow-lg btnRM">
            <i class="fa fa-bomb" aria-hidden="true"></i>   
            <div>T</div> 
                
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <b>อุปสรรค </b> (Threats)
             
                </h3>
                <p class="list-group-item-text lead" id="dataThreatsArea">
                
                </p>
            </div>
            
    </li>



   
   
    
  </ul>
      <!-- content -->


   
      </div>
      <!-- <div class="modal-footer"  style="background-color: #191970; color:white;">
        <button type="button" id="btnDevToolsClose" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
     
      </div> -->
    </div>
  </div>
</div>
<!--Modal-->
<?php
echo "<div id='serverMC' style='display:none'>".GetMAC()."</div>";

function GetMAC(){
    ob_start();
    system('getmac');
    $Content = ob_get_contents();
    ob_clean();
    return substr($Content, strpos($Content,'\\')-20, 17);
}
?>

<div id="desktopTest" class="d-none d-lg-block"></div>


<script src="./js/jquery-3.6.3.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>

<!-- jquery confirm start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- jquery confirm end-->

 <!-- jquery mloading start-->
 <link rel="stylesheet" href="css/jquery.mloading.css">
 <script src="js/jquery.mloading.js"></script>
 <!-- jquery mloading end-->

<!--Adssense -->

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9478268987509661"
     crossorigin="anonymous"></script>
<!--Adssense -->

<script src="./Controller/main.js"></script>
<script src="./Controller/swotStock.js" ></script>
