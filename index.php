<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="main.css" >
<style>
body{
    background: radial-gradient(farthest-side ellipse at 10% 0,#191970   20%,#000039  );
}
.btn-circle {
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 25px;
}
</style>



<div class="row">
    <div class="col-md-12"  style="text-align: center; margin-top: 30px;">
        <button  type="button" id="btn-sw" class="btn btn-primary btn-circle "><i class="fa-sharp fa-solid fa-users"></i> SW</button>
        <button  type="button" id="btn-bs" class="btn btn-success btn-circle "><i class="fa-sharp fa-solid fa-gauge"></i> BS</button>
        <button  type="button" id="btn-rm" class="btn btn-warning btn-circle "><i class="fa-sharp fa-solid fa-code-compare"></i> RM</button>
        <button  type="button" id="btn-mc" class="btn btn-warning btn-circle "><i class="fa-sharp fa-solid fa-sliders"></i> MC</button>
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