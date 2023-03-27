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

</style>



<div class="row">
    <div class="col-md-12"  style="text-align: center; margin-top: 30px;">
    <div class="titleArea">
        <h1 class="title1">เครื่องมือวิเคราะห์และวางแผนเพื่อผู้บริหาร</h1>
        <h3 class="title2">(ด้านแผนกรอบกำลังพล, ด้านแผนปฏิบัติราชการและด้านบริหารความเสี่ยง)</h3>
    </div>
    <button  type="button" id="btn-mc" class="btn btn-success btn-circle shadow "><i class="fa fa-users" aria-hidden="true"></i>
        <div>MC</div>
    </button>
    <button  type="button" id="btn-sw" class="btn btn-primary btn-circle shadow-lg"><i class="fa fa-line-chart" aria-hidden="true"></i>
        <div>SW</div>
    </button>
    <!-- <button  type="button" id="btn-bs" class="btn btn-success btn-circle "><i class="fa-sharp fa-solid fa-gauge"></i> 
        <div>BS</div>
    </button>
    <button  type="button" id="btn-kpi" class="btn btn-success btn-circle "><i class="fa-sharp fa-solid fa-gauge"></i> 
        <div>KPI</div>
    </button> -->
    <button  type="button" id="btn-rm" class="btn  btn-circle btn-warning shadow-lg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
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

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#btn-sw").click(function(){
            window.location.href = './swot.php';
        });
        $("#btn-bs").click(function(){
            window.location.href = './bsc.php';
        });

        $("#btn-rm").click(function(){
            window.location.href = './rm.php';
        });
        $("#btn-mc").click(function(){
            window.location.href = './mc.php';
        });
    });
</script>