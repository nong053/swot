<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="main.css" >
<style>
@import url(fonts/thsarabunnew.css);
body{ 
        font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em; ; 
        background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#191970  );
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

</style>


<div class="container " style="text-align: right; color:white;">
    <div style="padding: 15px; cursor:pointer; display:none;" id="btnLogout">
       <i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ 
    </div>
</div>
<div class="row">
    
    <div class="col-md-12"  style="text-align: center; margin-top: 30px;">
    
    <div class="titleArea">
        <h1 class="title1">เครื่องมือวิเคราะห์และวางแผนเพื่อผู้บริหาร</h1>
        <h3 class="title2">(ด้านแผนกรอบกำลังพล, ด้านแผนปฏิบัติราชการและด้านบริหารความเสี่ยง)</h3>
    </div>
    <button onclick="window.location.href='./mc.php'"  type="button" id="btn-mc" class="btn btn-success btn-circle shadow "><i class="fa fa-users" aria-hidden="true"></i>
        <div>MC</div>
    </button>
    <button onclick="window.location.href='./swot.php'" type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg"><i class="fa fa-line-chart" aria-hidden="true"></i>
        <div>SW</div>
    </button>
    <!-- <button  type="button" id="btn-bs" class="btn btn-success btn-circle "><i class="fa-sharp fa-solid fa-gauge"></i> 
        <div>BS</div>
    </button>
    <button  type="button" id="btn-kpi" class="btn btn-success btn-circle "><i class="fa-sharp fa-solid fa-gauge"></i> 
        <div>KPI</div>
    </button> -->
    <button onclick="window.location.href='./rm.php'" type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <div>RM</div>
    </button>
    
    <!-- <button  type="button" id="btn-mc" class="btn btn-warning btn-circle "><i class="fa-sharp fa-solid fa-sliders"></i> 
        <div>MC2</div>
    </button> -->
    </div>
</div>

<!-- <center>
<a class="btn btn-success btn-circle" href="./swot.php">SWOT</a>
<a class="btn btn-warning btn-circle" href="./bsc.php">BSC</a>
<a class="btn btn-warning btn-circle" href="./rm.php">Rist Management</a>
<a class="btn btn-warning btn-circle" href="./mc.php">Manpower Calculation</a>
</center> -->


<!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><b><i class="fa fa-lock" aria-hidden="true"></i> ลงชื่อเข้าใช้งาน</b></h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
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
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button> -->
        <input type="hidden" value="login" id="actionLR">
        <button type="button" id="btnSubmitLR" class="btn btn-primary">
            <!-- <i class="fa fa-unlock-alt" aria-hidden="true"></i> -->
            <!-- <i class="fa fa-key" aria-hidden="true"></i> -->
         ตกลง</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- jquery confirm start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- jquery confirm end-->

<script src="Controller/main.js"></script>
<script src="./Controller/login.js" ></script>
