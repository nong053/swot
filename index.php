<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    </style>
</head>
  <body>

<div class="container">

    <div class="graph mb-3">
        Graph
    </div>



    <div class="card text-bg-primary mb-3" >
        <div class="card-header">SO (จุดแข็งและโอกาส)</div>
        <div class="card-body">
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบจุดแข็ง</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบโอกาส</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card text-bg-secondary  mb-3" >
        <div class="card-header">ST (จุดแข็งและภัยคุกคาม)</div>
        <div class="card-body">
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบจุดแข็ง</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบโอกาส</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card text-bg-success  mb-3" >
        <div class="card-header">WO (จุดอ่อนและโอกาส)</div>
        <div class="card-body">
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบจุดแข็ง</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบโอกาส</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card text-bg-danger  mb-3" >
        <div class="card-header">WT (จุดอ่อนและภัยคุกคาม)</div>
        <div class="card-body">
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบจุดแข็ง</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
            <table class="table  table-striped">
                <tbody>
                <tr>
                    <th scope="row">ทดสอบระบบโอกาส</th>
                    <td>5</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">รวม=5 เฉลี่ย=INF</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>






    
    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color:blue;">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white;">SWOT Analysis Program</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
        </div>
        <div class="offcanvas-body">

            <form>
            <!--box-->
            <div class="card text-bg-primary mb-3" >
                <div class="card-header">

                    <div class="row ">
                        <div class="col-1"><b>#</b></div>
                        <div class="col-8"><b>ปัจจัยภายใน จุดแข็ง</b></div>
                        <div class="col-3 font-h-score">คะแนน</div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <!-- <div class="col-1">1</div> -->
                        <div class="col-9">
                          <input type="text" class="form-control" id="s1_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select font-score" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="s1_score" id="s1_score" class="form-control">
                              
                        </div>
                    
                    </div>
                    <div class="row mb-3">
                        <!-- <div class="col-1">2</div> -->
                        <div class="col-9">
                          <input type="text" class="form-control" id="s2_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="s2_score" id="s2_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <!-- <div class="col-1">3</div> -->
                        <div class="col-9">
                          <input type="text" class="form-control" id="s3_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="s3_score" id="s3_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <!-- <div class="col-1">4</div> -->
                        <div class="col-9">
                          <input type="text" class="form-control" id="s4_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="s4_score" id="s4_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <!-- <div class="col-1">5</div> -->
                        <div class="col-9">
                          <input type="text" class="form-control" id="s5_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="s5_score" id="s5_score" class="form-control">
                        </div>
                    </div>
                        
                </div>
            </div>
            <!--box-->
            <!--box-->
            <div class="card text-bg-secondary mb-3" >
                <div class="card-header">

                    <div class="row ">
                        <div class="col-1"><b>#</b></div>
                        <div class="col-8"><b>ปัจจัยภายใน จุดอ่อน</b></div>
                        <div class="col-3 font-h-score"><b>คะแนน</b></div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-1">1</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="w1_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="w5_score" id="w1_score" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1">2</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="w2_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="w5_score" id="w2_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">3</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="w3_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="w5_score" id="w3_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">4</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="w4_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="w4_score" id="w4_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">5</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="w5_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="w5_score" id="w5_score" class="form-control">
                        </div>
                    </div>
                        
                </div>
            </div>
            <!--box-->
            <!--box-->
            <div class="card text-bg-success  mb-3" >
                <div class="card-header">

                    <div class="row ">
                        <div class="col-1"><b>#</b></div>
                        <div class="col-8"><b>ปัจจัยภายนอก โอกาส</b></div>
                        <div class="col-3 font-h-score"><b>คะแนน</b></div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-1">1</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="o1_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="o1_score" id="o1_score" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1">2</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="o2_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="o2_score" id="o2_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">3</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="o3_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="o3_score" id="o3_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">4</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="o4_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="o4_score" id="o4_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">5</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="o5_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="o5_score" id="o5_score" class="form-control">
                        </div>
                    </div>
                        
                </div>
            </div>
            <!--box-->
            <!--box-->
            <div class="card text-bg-danger  mb-3" >
                <div class="card-header">

                    <div class="row ">
                        <div class="col-1"><b>#</b></div>
                        <div class="col-8"><b>ปัจจัยภายนอก อุปสรรค</b></div>
                        <div class="col-3 font-h-score"><b>คะแนน</b></div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-1">1</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="t1_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="t1_score" id="t1_score" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1">2</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="t2_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="t2_score" id="t2_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">3</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="t3_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="t3_score" id="t3_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">4</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="t4_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="t4_score" id="t4_score" class="form-control">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-1">5</div>
                        <div class="col-8">
                          <input type="text" class="form-control" id="t5_name" aria-describedby="xxx">
                        </div>
                        <div class="col-3">
                            <!-- <select class="form-select" aria-label="Default select example">
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select> -->
                              <input type="text" name="t5_score" id="t5_score" class="form-control">
                        </div>
                    </div>
                        
                </div>
            </div>
            <!--box-->

            

            
              

                

                
                
               
                <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="Controller/swot.js"></script>
</body>
</html>