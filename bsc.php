<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSC Balanced Scorecard</title>
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
        .headerPer{
            color: white;
            font-size: 18px;
            margin-top: 15px;
            font-weight: bold;
        }
        
    </style>
</head>
  <body>

<div class="container">

    <div class=" mb-3">
        
        <div class="row">
            <div class="col-md-3">
                <div class="headerPer">มุมมองของลูกค้า</div>
                <div id="gauge1" class="graph" >graph1</div>
            </div>
            <div class="col-md-3">
                <div class="headerPer">มุมมองภายใน</div>
                <div id="gauge2" class="graph" >graph2</div>
            </div>
            <div class="col-md-3">
                <div class="headerPer">มุมมองด้านนวัฒกรรมและการเรียนรู้</div>
                <div id="gauge3" class="graph" >graph3</div>
            </div>
            <div class="col-md-3">
                <div class="headerPer">มุมมองทางการเงิน</div>
                <div id="gauge4" class="graph" >graph4</div>
            </div>
        </div>
        
        
  
    </div>



    <div class="card text-bg-primary mb-3" >
        <div class="card-header">Customer perspective (มุมมองของลูกค้า) </div>
        <div class="card-body">
            <table class="table  table-striped">
                <tbody>
                    <tr>
                        <td scope="row">มุมมองของลูกค้า1 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองของลูกค้า2 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองของลูกค้า3 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองของลูกค้า4 </td>
                        <td>5</td>
                    </tr>
               
                </tbody>
            </table>
           
        </div>
    </div>

    <div class="card text-bg-secondary  mb-3" >
        <div class="card-header">Internal perspective (มุมมองภายใน)</div>
        <div class="card-body">
        <table class="table  table-striped">
                <tbody>
                    <tr>
                        <td scope="row">มุมมองภายใน 1 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองภายใน 2 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองภายใน 3 </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td scope="row">มุมมองภายใน 4 </td>
                        <td>5</td>
                    </tr>
               
                </tbody>
            </table>
        </div>
    </div>

    <div class="card text-bg-success  mb-3" >
        <div class="card-header">Innovation and learning perspective (มุมมองด้านนวัฒกรรมและการเรียนรู้)</div>
        <div class="card-body">
            <table class="table  table-striped">
                    <tbody>
                        <tr>
                            <td scope="row">มุมมองด้านนวัฒกรรมและการเรียนรู้ 1</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองด้านนวัฒกรรมและการเรียนรู้ 2</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองด้านนวัฒกรรมและการเรียนรู้ 3</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองด้านนวัฒกรรมและการเรียนรู้ 4</td>
                            <td>5</td>
                        </tr>
                
                    </tbody>
            </table>
        </div>
    </div>

    <div class="card text-bg-danger  mb-3" >
        <div class="card-header">Financial perspective (มุมมองทางการเงิน)</div>
        <div class="card-body">
        <table class="table  table-striped">
                    <tbody>
                        <tr>
                            <td scope="row">มุมมองทางการเงิน 1</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองทางการเงิน 2</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองทางการเงิน 3</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td scope="row">มุมมองทางการเงิน 4</td>
                            <td>5</td>
                        </tr>
                
                    </tbody>
            </table>
        </div>
    </div>






    
    
    <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:blue;">
        <div class="offcanvas-header" style=" text-align:center;">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-weight:bold;">BSC : Balanced Scorecard</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

            <form>
            <!--box-->
            <div class="card text-bg-primary mb-3" >
                <div class="card-header">

                    <!-- <div class="row ">
                        <div class="col-1"><b>#</b></div>
                        <div class="col-8"><b>ปัจจัยภายใน จุดแข็ง</b></div>
                        
                        <div class="col-3 font-h-score">คะแนน</div>
                    </div> -->
                    <table>
                            <thead>

                                <th class="widthSwotName">
                                มุมมองของลูกค้า
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
            <div class="card text-bg-secondary mb-3" >
                <div class="card-header">

                   

                    <table>
                            <thead>

                                <th class="widthSwotName">
                                มุมมองภายใน
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
            <div class="card text-bg-success  mb-3" >
                <div class="card-header">

                   
                    <table>
                            <thead>

                                <th class="widthSwotName">
                                มุมมองด้านนวัฒกรรมและการเรียนรู้
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
            <div class="card text-bg-danger  mb-3" >
                <div class="card-header">

                  

                    <table>
                            <thead>

                                <th class="widthSwotName">
                                มุมมองทางการเงิน
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
               
                <button type="button" id="submit" class="btn btn-primary">บันทึกข้อมูล</button>
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
    <script src="Controller/bsc.js"></script>
</body>
</html>