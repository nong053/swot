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
     
   
        <button style="float:left; margin-right:15px; margin-bottom:15px;  padding: 0px;"   type="button" id="btn-mc" class="btn btn-default btn-circle shadow btnMC">
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
       
             <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-sw" class="btn btn-default btn-circle shadow-lg btnSW">
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
       
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
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


    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/AWC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"AWC"</b> บริษัท แอสเสท เวิรด์ คอร์ป จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทประกอบธุรกิจโดยการถือหุ้นในบริษัทอื่น (Holding Company) ที่ประกอบธุรกิจอสังหาริมทรัพย์ชั้นนำที่มุ่งตอบสนองไลฟ์สไตล์แบบครบวงจรในประเทศไทย อันประกอบไปด้วยกลุ่มธุรกิจโรงแรมและการบริการ (Hospitality) และกลุ่มธุรกิจอสังหาริมทรัพย์เพื่อการพาณิชย์ (Retail and Commercial) ซึ่งประกอบด้วยกลุ่มธุรกิจอสังหาริมทรัพย์เพื่อประกอบกิจการการค้า (Retail & Wholesale) และกลุ่มธุรกิจอาคารสำนักงาน (Office)
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="https://www.assetworldcorp-th.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BANPU.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BANPU"</b> บริษัท แอสเสท เวิรด์ คอร์ป จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทพลังงานแบบครบวงจร โดยสร้างการเติบโตครอบคลุม 3 กลุ่มธุรกิจหลัก ได้แก่ กลุ่มธุรกิจแหล่งพลังงาน (ถ่านหินและก๊าซธรรมชาติ รวมถึงงานที่เกี่ยวข้อง อาทิ การตลาด การค้า โลจิสติกส์ และการจัดหาเชื้อเพลิง และสายส่ง) กลุ่มธุรกิจผลิตพลังงาน (โรงไฟฟ้าจากพลังงานเชื้อเพลิงทั่วไป และจากพลังงานหมุนเวียน) และกลุ่มธุรกิจเทคโนโลยีพลังงาน (ระบบผลิตไฟฟ้าจากพลังงานแสงอาทิตย์แบบครบวงจร ระบบจัดเก็บพลังงาน และระบบการจัดการเทคโนโลยีพลังงาน ซึ่งการผสานธุรกิจด้านพลังงานทั้งในรูปแบบดั้งเดิมและรูปแบบใหม่หรือพลังงานหมุนเวียน ไว้ในโครงสร้างขององค์กรอย่างครบถ้วนนี้ ทำให้บ้านปูฯ สามารถผนึกกำลังระหว่างกันในกลุ่มธุรกิจหลักเพื่อบริหารจัดการทรัพยากรได้อย่างมีประสิทธิภาพ สร้างความสมดุลและขยายการเติบโตในกลุ่มธุรกิจพลังงานของบ้านปูฯ ที่ตอบโจทย์ผู้บริโภค ชุมชน สังคม และสิ่งแวดล้อม
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.banpu.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BBL.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BBL"</b> ธนาคารกรุงเทพ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                    ธุรกิจธนาคารพาณิชย์ที่ให้บริการทางการเงินครบวงจรแก่ธุรกิจทั้งขนาดใหญ่ SME ตลอดจนฐานลูกค้าบุคคล โดยมีสาขาในทุกพื้นที่ทั่วประเทศ และมีเครือข่ายในต่างประเทศครอบคลุมเขตเศรษฐกิจสำคัญของโลก
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.bangkokbank.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BDMS.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BDMS"</b> บริษัท กรุงเทพดุสิตเวชการ จำกัด(มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทเป็นผู้ประกอบการธุรกิจโรงพยาบาลเอกชนขนาดใหญ่ของประเทศ โดยมีโรงพยาบาลเครือข่ายในไทยและกัมพูชา ดำเนินการภายใต้ชื่อโรงพยาบาล 6 กลุ่ม คือ กลุ่มโรงพยาบาลกรุงเทพ กลุ่มโรงพยาบาลสมิติเวช โรงพยาบาลบี เอ็น เอช กลุ่มโรงพยาบาลพญาไท กลุ่มโรงพยาบาลเปาโล และกลุ่มโรงพยาบาลรอยัล นอกจากนี้เครือข่ายของบริษัท กรุงเทพดุสิตเวชการ จำกัด (มหาชน) ยังรวมถึงธุรกิจที่ให้การสนับสนุนด้านการแพทย์ ได้แก่ ธุรกิจห้องปฏิบัติการทางการแพทย์ ธุรกิจผลิตยาและธุรกิจผลิตน้ำเกลือ เป็นต้น
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.bangkokhospital.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BEM.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BEM"</b> บริษัท ทางด่วนและรถไฟฟ้ากรุงเทพ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ก่อสร้างและบริหารทางพิเศษและบริหารจัดการโครงการระบบขนส่งมวลชนด้วยรถไฟฟ้า รวมถึงธุรกิจอื่นที่เกี่ยวข้อง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.bemplc.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>


    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BGRIM.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BGRIM"</b> บริษัท บี.กริม เพาเวอร์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจโดยการถือหุ้นในบริษัทอื่น (Holding Company) ที่ประกอบธุรกิจหลักด้านการผลิตและจำหน่ายไฟฟ้า ไอน้ำ และธุรกิจที่เกี่ยวข้องทั้งในประเทศและต่างประเทศ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.bgrimmpower.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BH.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BH"</b> บริษัท โรงพยาบาลบำรุงราษฎร์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธุรกิจโรงพยาบาลเอกชน ภายใต้ชื่อ โรงพยาบาลบำรุงราษฎร์อินเตอร์เนชั่นแนล ในกรุงเทพมหานคร โดยมีการให้บริการทางการแพทย์ครบวงจรทั้งผู้ป่วยนอกและผู้ป่วยใน รวมทั้งศูนย์บริการผู้ป่วยต่างชาติ และลงทุนในธุรกิจการแพทย์และธุรกิจที่เกี่ยวข้องทั้งในและต่างประเทศ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.bumrungrad.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/BTS.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"BTS"</b> บริษัท บีทีเอส กรุ๊ป โฮลดิ้งส์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                กลุ่มบริษัทที่ประกอบธุรกิจในหลากหลายอุตสาหกรรมโดยมุ่งเน้นการใช้ประโยชน์จากการเข้าถึงข้อมูลเครือข่ายระบบขนส่งมวลชนและสื่อโฆษณา รวมทั้งการเป็นพันธมิตรทางธุรกิจกับบริษัทต่าง ๆ เพื่อเพิ่มมูลค่าทางธุรกิจแก่กลุ่มบริษัทและพันธมิตรผ่านการดำเนินธุรกิจใน 3 แพลตฟอร์ม ได้แก่ MOVE MIX และ MATCH
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.btsgroup.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>


    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CBG.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CBG"</b> บริษัท คาราบาวกรุ๊ป จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจโดยการถือหุ้นในบริษัทอื่น (Holding Company) ซึ่งมีการลงทุนหลักในบริษัทย่อยที่ประกอบธุรกิจ ผลิต ทำการตลาด จำหน่าย และบริหารจัดการการจัดจำหน่ายเครื่องดื่มบำรุงกำลังและเครื่องดื่มอื่น ๆ อย่างครบวงจร
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.carabaogroup.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CENTEL.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CENTEL"</b> บริษัท โรงแรมเซ็นทรัลพลาซา จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                แบ่งเป็น 2 ธุรกิจ คือ 1. ธุรกิจโรงแรมในประเทศและต่างประเทศ ภายใต้แบรนด์ของตนเอง เซ็นทาราแกรนด์ เซ็นทารา เซ็นทรา โคซี่ และธุรกิจรับจ้างบริหารโรงแรมภายใต้สัญญาบริหารโรงแรม 2. ธุรกิจอาหารจานด่วนในประเทศไทย ภายใต้แบรนด์ของตนเอง คือ เดอะ เทอเรส อร่อยดี สุกี้เฮ้าส์ ซอฟท์แอร์ เกาลูน และแฟรนไชส์ คือ มิสเตอร์โดนัท เคเอฟซี อานตี้แอนส์ เปปเปอร์ลันช์ โคลด์สโตนครีมเมอรี่ ชาบูตง โยชิโนยะ โอโตยะ เทนยะ และคัตสึยะ มีสาขากระจายอยู่ทั่วประเทศ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.centarahotelsresorts.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/_COM7.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"COM7"</b> บริษัท คอมเซเว่น จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัท คอมเซเว่น จำกัด (มหาชน) (บริษัท) ประกอบธุรกิจจำหน่ายสินค้าไอที ประเภทคอมพิวเตอร์แล็บท็อป คอมพิวเตอร์แบบตั้งโต๊ะ โทรศัพท์เคลื่อนที่ แท็บเล็ต และอุปกรณ์เสริมที่เกี่ยวข้อง ผ่านช่องทางการจำหน่ายหลัก รวมทั้งให้บริการศูนย์ซ่อมสินค้าแบรนด์ Apple.
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.comseven.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CPALL.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CPALL"</b> บริษัท ซีพี ออลล์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ดำเนินธุรกิจร้านสะดวกซื้อภายใต้เครื่องหมายการค้า 7-Eleven และให้สิทธิแก่ผู้ค้าปลีกรายอื่นในการดำเนินธุรกิจในประเทศไทย และลงทุนในธุรกิจสนับสนุนธุรกิจร้านค้าสะดวกซื้อ อาทิ ผลิตและจำหน่ายอาหารสำเร็จรูปและเบเกอรี่ ตัวแทนรับชำระเงินค่าสินค้าและบริการ รวมถึงการลงทุนในธุรกิจศูนย์จำหน่ายสินค้าแบบชำระเงินสดและบริการตนเองภายใต้ชื่อ "แม็คโคร"
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.cpall.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CPF.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CPF"</b> บริษัท เจริญโภคภัณฑ์อาหาร จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทประกอบธุรกิจเกษตรอุตสาหกรรมและอาหารที่จำแนกธุรกิจหลักตามลักษณะของผลิตภัณฑ์ ออกเป็น 3 ประเภท คือ 1) ธุรกิจอาหารสัตว์ (Feed) ได้แก่ การผลิตและจำหน่ายอาหารสัตว์ 2) ธุรกิจเลี้ยงสัตว์-แปรรูป (Farm-Processing) ได้แก่ การเพาะพันธุ์สัตว์ การเลี้ยงสัตว์เพื่อการค้า และการแปรรูปเนื้อสัตว์ขั้นพื้นฐาน 3) ธุรกิจอาหาร (Food) ได้แก่ การผลิตเนื้อสัตว์แปรรูปกึ่งปรุงสุกและปรุงสุก และการผลิตผลิตภัณฑ์อาหารสำเร็จรูปหรืออาหารพร้อมรับประทาน รวมถึงกิจการค้าปลีกอาหารและร้านอาหาร
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.cpfworldwide.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CPN.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CPN"</b> บริษัท เซ็นทรัลพัฒนา จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                พัฒนาและให้เช่าพื้นที่ศูนย์การค้าขนาดใหญ่และประกอบธุรกิจอื่นที่เกี่ยวเนื่องและส่งเสริมธุรกิจ พัฒนาศูนย์การค้า เช่น อาคารสำนักงาน ศูนย์อาหาร โรงแรม และที่พักอาศัยเป็นต้น รวมถึงการลงทุนในกองทุนรวมสิทธิการเช่าอสังหาริมทรัพย์ (CPNCG) และทรัสต์เพื่อการลงทุนในสิทธิการเช่าอสังหาริมทรัพย์ (CPNREIT) และเป็นผ้บู ริหารอสังหาริมทรัพย์ของกองทุนรวมฯ และกองทรัสต์ฯ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.centralpattana.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/CRC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"CRC"</b> บริษัท เซ็นทรัล รีเทล คอร์ปอเรชั่น จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ดำเนินธุรกิจค้าปลีกสินค้าหลากหลายประเภทผ่านรูปแบบและช่องทางที่หลากหลายในประเทศไทย ประเทศอิตาลี และประเทศเวียดนาม และเป็นผู้บุกเบิกธุรกิจค้าปลีกในรูปแบบ Omni-channel ในประเทศไทย ซึ่งช่วยเสริมสร้างเครือข่ายร้านค้าปลีกในการนำเสนอสินค้าและบริการแก่ผู้บริโภค
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="https://www.centralretail.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/DELTA.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"DELTA"</b> บริษัทเดลต้า อีเลคโทรนิคส์ (ประเทศไทย) จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ผลิตและจำหน่ายผลิตภัณฑ์ด้านการจัดการระบบกำลังไฟฟ้า (Power management solutions) รวมถึงชิ้นส่วนอิเล็กทรอนิกส์บางประเภท ได้แก่ พัดลมอิเล็กทรอนิกส์ (DC Fan) อีเอ็มไอ ฟิลเตอร์ (EMI) และโซลินอยด์ มีฐานการผลิตอยู่ในภูมิภาคต่างๆ ทั่วโลก ได้แก่ เอเชีย ยุโรป และอเมริกาใต้
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.deltathailand.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>


    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/EA.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"EA"</b> บริษัท พลังงานบริสุทธิ์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทฯ และบริษัทย่อย ดำเนินธุรกิจหลัก 4 กลุ่ม ได้แก่ 1.) กลุ่มธุรกิจไบโอดีเซล 2.) กลุ่มธุรกิจโรงไฟฟ้าพลังงานหมุนเวียน- โรงไฟฟ้าพลังงานลม - โรงไฟฟ้าพลังงานแสงอาทิตย์ 3.) กลุ่มธุรกิจยานยนต์ไฟฟ้า และระบบกักเก็บพลังงาน- พัฒนา ผลิตและจำหน่ายแบตเตอรี่ -ธุรกิจบริการสถานีอัดประจุไฟฟ้า (สำหรับยานยนต์ไฟฟ้า)- ธุรกิจยานยนต์ไฟฟ้า4.) กลุ่มธุรกิจอื่นๆ - ศูนย์ทดสอบแบตเตอรี่ ยานยนต์ไฟฟ้า และผลิตภัณฑ์อิเล็กทรอนิกส์ - วิจัยและพัฒนา
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.energyabsolute.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/EGCO.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"EGCO"</b> บริษัท ผลิตไฟฟ้า จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจด้านการลงทุนโดยการถือหุ้นในบริษัทต่าง ๆ (Holding company) ที่ประกอบธุรกิจ 1) ผลิตและจำหน่ายไฟฟ้าทั้งในฐานะรายใหญ่ (IPP-Independent Power Producer) และรายเล็ก (SPP-Small Power Producer) 2) ธุรกิจการให้บริการด้านเทคนิคการจัดการแก่โรงไฟฟ้าและโรงงานอุตสาหกรรมต่าง ๆ ทั้งในและต่างประเทศ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.egco.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/GLOBAL.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"GLOBAL"</b> บริษัท สยามโกลบอลเฮ้าส์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                เป็นศูนย์จำหน่ายสินค้าวัสดุก่อสร้าง วัสดุตกแต่ง เครื่องมือ อุปกรณ์ที่ใช้ในงานก่อสร้าง ต่อเติม ตกแต่ง บ้านและสวนแบบควบวงจร (one stop shopping center) โดยใช้ชื่อทางการค้าว่า โกลบอล เฮ้าส์ (Global House) โดยนำระบบ Drive-through มาใช้เพื่อเพิ่มความสะดวกในการรับสินค้าโครงสร้างของลูกค้า
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.globalhouse.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/GPSC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"GPSC"</b> บริษัท โกลบอล เพาเวอร์ ซินเนอร์ยี่ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริิษัทฯ ประกอบธุรกิิจหลัักในการผลิิตและจำหน่ายไฟฟ้า ไอน้ำ และสาธารณูปโภคต่างๆนอกจากนี้้ บริิษััทฯ ดำเนิินธุรกิิจในลัักษณะการเข้าถืือหุ้นในบริิษััทที่่ประกอบธุรกิิจผลิิตและจำหน่ายไฟฟ้า ไอน้ำ สาธารณูปโภคต่างๆ รวมถึึงธุุรกิิจ New S-curve ได้แก่ ธุรกิิจแบตเตอรี่่ ธุรกิิจพลัังงานอััจฉริิยะ และธุรกิิจที่่เกี่่ยวเนื่่องทั้งในและต่างประเทศ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.gpscgroup.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/GULF.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"GULF"</b> บริษัท กัลฟ์ เอ็นเนอร์จี ดีเวลลอปเมนท์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจโดยการถือหุ้นในบริษัทอื่น (Holding Company) ที่ประกอบธุรกิจหลักด้านการผลิตและจำหน่ายไฟฟ้าจากก๊าซธรรมชาติและพลังงานหมุนเวียน รวมถึงการจัดหาและจำหน่ายก๊าซธรรมชาติ การลงทุนในธุรกิจโครงสร้างพื้นฐาน และธุรกิจอื่น ๆ ที่เกี่ยวข้อง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.gulf.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/HMPRO.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"HMPRO"</b> บริษัท โฮม โปรดักส์ เซ็นเตอร์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                จำหน่ายสินค้าและให้บริการที่เกี่ยวข้องกับการก่อสร้าง ตกแต่ง ต่อเติม ซ่อมแซม ปรับปรุง อาคาร บ้าน และที่อยู่อาศัยแบบครบวงจร
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.homepro.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/INTUCH.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"INTUCH"</b> บริษัท อินทัช โฮลดิ้งส์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                อินทัชประกอบธุรกิจด้านการลงทุนในธุรกิจโทรคมนาคม สื่อ เทคโนโลยี และดิจิทัล โดยการถือหุ้นและเข้าไปบริหารงาน (Holding Company)
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.intouchcompany.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/IVL.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"IVL"</b> บริษัท อินโดรามา เวนเจอร์ส จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจด้านการลงทุนโดยการถือหุ้นในบริษัทต่างๆ ทั้งในประเทศและต่างประเทศ ในผลิตภัณฑ์ปิโตรเคมีแบบครบวงจร ซึ่งผลิตและจำหน่าย Ethylene Oxide และ Ethylene Glycol (?EO&EG?) Purified Terephthalic Acid (?PTA?) Polyethylene Terephthalate (?PET?) เส้นใยและเส้นด้าย โพลีเอสเตอร์ (Polyester Fiber and Yarn) และเส้นใยจากขนสัตว์ (Wool)
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.indoramaventures.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/KBANK.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"KBANK"</b> ธนาคารกสิกรไทย จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธนาคารกสิกรไทย จำกัด (มหาชน) ประกอบกิจการธนาคารพาณิชย์ ธุรกิจหลักทรัพย์และธุรกิจที่เกี่ยวเนื่องตามที่ได้รับอนุญาตไว้ในพระราชบัญญัติธุรกิจสถาบันการเงินฯ และพระราชบัญญัติหลักทรัพย์และตลาดหลักทรัพย์ฯ และประกาศที่เกี่ยวข้อง โดย ณ วันที่ 31 ธันวาคม 2565 ธนาคารมีเครือข่ายสาขาจำนวน 824 สาขา และเครื่องอิเล็กทรอนิกส์สำหรับทำธุรกรรมด้วยตนเอง 10,953 เครื่อง ครอบคลุมทุกพื้นที่และเพียงพอต่อความต้องการของลูกค้า นอกจากนี้ ธนาคารมีเครือข่ายการให้บริการในต่างประเทศรวม 16 แห่ง ใน 8 ประเทศ มีศูนย์กลางการดำเนินงานและให้บริการที่สำนักงานใหญ่
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.kasikornbank.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/KTB.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"KTB"</b> ธนาคารกรุงไทย จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธุรกิจธนาคารพาณิชย์เต็มรูปแบบ โดยมีสาขาอยู่ทั่วภูมิภาคในประเทศไทย และในบางภูมิภาคหลักของโลก
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="https://krungthai.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/KTC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"KTC"</b> บริษัท บัตรกรุงไทย จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบธุรกิจหลักด้านบัตรเครดิต ตลอดจนธุรกิจที่เกี่ยวเนื่องกับธุรกิจบัตรเครดิต ธุรกิจร้านค้ารับบัตร การให้บริการรับชำระเงินแทน และธุรกิจสินเชื่อบุคคล ซึ่งครอบคลุมไปถึงสินเชื่อส่วนบุคคลภายใต้การกำกับและสินเชื่อที่มีทะเบียนรถเป็นประกัน นอกจากนี้บริษัทได้จัดตั้งบริษัทย่อยเพื่อเพิ่มผลิตภัณฑ์ทางการเงินที่ครบวงจรซึ่งครอบคลุมธุรกิ สินเชื่อรายย่อยระดับจังหวัด ธุรกิจสินเชื่อรายย่อยสำหรับการประกอบอาชีพ ธุรกิจเงินอิเล็กทรอนิกส์ ธุรกิจเช่าซื้อและธุรกิจลีสซิ่ง รวมถึงธุรกิจโฮลดิ้ง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.ktc.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/LH.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"LH"</b> บริษัทแลนด์แอนด์เฮ้าส์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                พัฒนาโครงการที่พักอาศัยประเภทบ้านเดี่ยว ทาวน์เฮ้าส์ และอาคารชุดพักอาศัยที่มีคุณภาพ เพื่อจำหน่ายให้แก่กลุ่มลูกค้าเป้าหมายตามระดับความต้องการของลูกค้าในแต่ละระดับราคาที่แตกต่างกันไป โดยเน้นการพัฒนาโครงการในเขตกรุงเทพมหานครและปริมณฑล และโครงการตามจังหวัดใหญ่ๆ ได้แก่ เชียงใหม่ เชียงราย นครราชสีมา ขอนแก่น มหาสารคาม อุดรธานี ประจวบคีรีขันธ์ อยุธยา และภูเก็ต
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.lh.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/MINT.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"MINT"</b> บริษัท ไมเนอร์ อินเตอร์เนชั่นแนล จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                เป็นผู้ดำเนินธุรกิจอาหารและเครื่องดื่ม ธุรกิจโรงแรมและธุรกิจอื่น ๆ ที่เกี่ยวข้องกับธุรกิจโรงแรม ซึ่งรวมถึงโครงการพัฒนาที่อยู่อาศัยเพื่อขาย โครงการพักผ่อนแบบปันส่วนเวลา และให้เช่าศูนย์การค้าและอสังหาริมทรัพย์ และธุรกิจบันเทิงและธุรกิจจัดจำหน่าย
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.minor.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/MTC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"MTC"</b> บริษัท เมืองไทย แคปปิตอล จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ให้บริการสินเชื่อทะเบียนรถและสินเชื่อส่วนบุคคล
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.muangthaicap.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/OR.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"OR"</b> บริษัท ปตท. น้ำมันและการค้าปลีก จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทประกอบธุรกิจจัดจำหน่ายผลิตภัณฑ์ปิโตรเลียมและธุรกิจค้าปลีกสินค้าและบริการอื่นๆ (Non-Oil) ทั้งในและต่างประเทศ ซึ่งรวมถึงการจัดจำหน่ายผลิตภัณฑ์ปิโตรเลียมและผลิตภัณฑ์อื่นๆ ในตลาดค้าปลีกและตลาดพาณิชย์ ธุรกิจกาแฟ ร้านอาหารและเครื่องดื่มอื่นๆ ร้านสะดวกซื้อ และการบริหารจัดการพื้นที่
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.pttor.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/OSP.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"OSP"</b> บริษัท โอสถสภา จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธุรกิจผลิต ทำการตลาด และจำหน่ายสินค้าอุปโภคบริโภค โดยมีกลุ่มผลิตภัณฑ์หลักได้แก่ กลุ่มผลิตภัณฑ์เครื่องดื่ม กลุ่มผลิตภัณฑ์ของใช้ส่วนบุคคล และธุรกิจอื่นๆ ซึ่งรวมถึงผลิตภัณฑ์เพื่อสุขภาพและลูกอม และธุรกิจให้บริการผลิตสินค้าและบรรจุภัณฑ์ (OEM)และธุรกิจตู้จำหน่ายสินค้าอัตโนมัติ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.osotspa.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/PTT.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"PTT"</b> บริษัท ปตท. จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ประกอบด้วยกิจการที่ ปตท. ดำเนินการเอง ได้แก่ ธุรกิจก๊าซธรรมชาติ ธุรกิจระบบท่อส่งก๊าซธรรมชาติ ธุรกิจการค้าระหว่างประเทศธุรกิจใหม่และโครงสร้างพื้นฐาน และธุรกิจที่ลงทุนผ่านบริษัทย่อยและ/หรือกิจการที่ควบคุมร่วมกันและบริษัทร่วม (กลุ่มบริษัท) ได้แก่ ธุรกิจสำรวจและผลิตปิโตรเลียม ธุรกิจก๊าซธรรมชาติเหลว ธุรกิจปิโตรเคมีและการกลั่น ธุรกิจน้ำมันและค้าปลีก ธุรกิจไฟฟ้าและสาธารณูปการ ธุรกิจถ่านหิน ธุรกิจให้บริการ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.pttplc.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/PTTEP.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"PTTEP"</b> บริษัท ปตท. สำรวจและผลิตปิโตรเลียม จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                กลุ่มบริษัทประกอบธุรกิจด้านการสำรวจและผลิตปิโตรเลียมทั้งภายในประเทศและต่างประเทศ ธุรกิจขนส่งก๊าซทางท่อในต่างประเทศ และการลงทุนในธุรกิจต่อเนื่อง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.pttep.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/PTTGC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"PTTGC"</b> บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน) (PTT Global Chemical Public Company Limited) เกิดจากการควบบริษัทระหว่าง บริษัท ปตท. เคมิคอล จำกัด (มหาชน) (PTTCH) และ บริษัท ปตท. อะโรเมติกส์และการกลั่น จำกัด (มหาชน) (PTTAR) โดยได้จดทะเบียนจัดตั้งบริษัทขึ้นเมื่อวันที่ 19 ตุลาคม 2554 เพื่อก้าวขึ้นเป็นแกนนำของธุรกิจเคมีภัณฑ์ (Chemical Flagship) ของกลุ่ม ปตท.
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.pttgcgroup.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/RATCH.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"RATCH"</b> บริษัท ราช กรุ๊ป จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทฯ ประกอบธุรกิจในรูปแบบบริษัทโฮลดิ้ง โดยลงทุนถือหุ้นในบริษัทอื่น ซึ่งมีสถานะเป็นบริษัทหลัก บริษัทย่อย และ/หรือ บริษัทร่วมค้าของบริษัทฯ ขึ้นอยู่กับสัดส่วนการถือหุ้นของบริษัทฯ ที่ผ่านมาบริษัทฯ ได้ลงทุนในบริษัทพัฒนาโครงการโรงไฟฟ้าที่ใช้เชื้อเพลิงหลักประเภทต่างๆ โครงการพลังงานทดแทน ตลอดจนธุรกิจเกี่ยวเนื่องกับการผลิตไฟฟ้าและธุรกิจพลังงานด้านอื่นๆ ทั้งในประเทศและต่างประเทศ รายได้หลักของบริษัทฯ มาจากเงินปันผลและส่วนแบ่งกำไร
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.ratch.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/SAWAD.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"SAWAD"</b> บริษัท ศรีสวัสดิ์ คอร์ปอเรชั่น จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                กลุ่มบริษัทประกอบธุรกิจให้บริการสินเชื่อรายย่อย ภายใต้เครื่องหมายบริการ "ศรีสวัสดิ์ เงินสดทันใจ" ซึ่งประกอบด้วย 5 ธุรกิจหลัก ได้แก่ 1) สินเชื่อรายย่อยแบบมีหลักประกันประเภท ทะเบียนรถเก่าทุกประเภท บ้านและโฉนดที่ดิน 2) สินเชื่อรายย่อยแบบไม่มีหลักประกันภายใต้การกำกับ 3) บริหารสินทรัพย์ 4) รับจ้างติดตามหนี้ 5) บริการที่ปรึกษาและให้คำแนะนำเกี่ยวกับการทำธุรกิจสินเชื่อ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.meebaanmeerod.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/SCB.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"SCB"</b> บริษัท เอสซีบี เอกซ์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                SCBX จัดตั้งขึ้นโดยมีวัตถุประสงค์หลักเพื่อเป็นบริษัทใหญ่ของกลุ่มธุรกิจทางการเงิน ดำเนินธุรกิจในลักษณะบริษัทลงทุน (Holding Company) และเข้าถือหุ้นในบริษัทอื่นโดยมีวัตถุประสงค์เพื่อการมีอำนาจควบคุมกิจการในบริษัทอื่น และเป็นผู้กำหนดยุทธศาสตร์รวมของกลุ่ม มองหาโอกาสการลงทุน และจัดสรรเงินลงทุนในธุรกิจที่จะสร้างผลตอบแทนที่ดีและสร้างการเติบโตให้กลุ่มธุรกิจอย่างต่อเนื่อง อีกทั้ง ยังมีบทบาทในการกำหนดนโยบายและกำกับดูแล การดำเนินธุรกิจ การบริหารความเสี่ยง และความบริหารความต่อเนื่องทางธุรกิจของบริษัทต่าง ๆ ในกลุ่มธุรกิจทางการเงิน ทั้งนี้ ขอบเขตการประกอบธุรกิจของ SCBX เป็นไปตามหลักเกณฑ์ที่ธนาคารแห่งประเทศไทยกำหนด
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.scbx.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/SCC.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"SCC"</b> บริษัท ปูนซิเมนต์ไทย จำกัด(มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธุรกิจการลงทุน (Holding company) ใน 3 ธุรกิจหลัก ได้แก่ ธุรกิจซีเมนต์และผลิตภัณฑ์ก่อสร้าง ธุรกิจเคมิคอลส์ และธุรกิจแพคเกจจิ้ง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.scg.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/SCGP.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"SCGP"</b> บริษัท เอสซีจี แพคเกจจิ้ง จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทประกอบธุรกิจโดยการถือหุ้นในบริษัทอื่น (Holding Company) ที่ประกอบธุรกิจหลักในการให้บริการโซลูชันด้านบรรจุภัณฑ์แบบครบวงจร (ซึ่งมีบริษัทย่อยที่ประกอบธุรกิจหลัก คือ บริษัทสยามคราฟท์อุตสาหกรรม จำกัด) ซึ่งแบ่งออกเป็น 3 สายธุรกิจหลัก คือ สายธุรกิจบรรจุภัณฑ์แบบครบวงจร สายธุรกิจเยื่อและกระดาษ และสายธุรกิจรีไซเคิลและส่วนงานอื่น
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.scgpackaging.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TIDLOR.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TIDLOR"</b> บริษัท เงินติดล้อ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ให้บริการสินเชื่อ ให้บริการเช่าซื้อ และให้บริการนายหน้าประกันวินาศภัย นายหน้าประกันชีวิต และบริการที่เกี่ยวเนี่องอื่น ๆ
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.ngerntidlor.com/th/home.html" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TISCO.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TISCO"</b> บริษัท ทิสโก้ไฟแนนเชียลกรุ๊ป จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทประกอบธุรกิจการถือหุ้นในบริษัทอื่น (Holding Company) ของกลุ่มธุรกิจทางการเงินทิสโก้ โดยมีธนาคารทิสโก้เป็นหลัก ซึ่งได้รับอนุมัติให้เป็นธนาคารพาณิชย์เต็มรูปแบบ ปัจจุบันให้บริการทางด้านการเงินอันประกอบด้วย บริการสินเชื่อลูกค้ารายย่อยและสินเชื่อธุรกิจขนาดกลางและขนาดย่อม บริการสินเชื่อพาณิชย์ธนกิจ บริการเงินฝากรายย่อย บริการลูกค้าธนบดีธนกิจ บริการตัวแทนขายประกันผ่านธนาคาร บริการจัดการการเงิน และบริการคัสโตเดียน
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.tisco.co.th" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TLI.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TLI"</b> บริษัท ไทยประกันชีวิต จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ธุรกิจประกันชีวิต
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.thailife.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TOP.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TOP"</b> บริษัท ไทยออยล์ จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ไทยออยล์เป็นผู้ประกอบธุรกิจการกลั่นและจำหน่ายผลิตภัณฑ์ปิโตรเลียมสำเร็จรูปที่ใหญ่ที่สุดในประเทศไทย และเป็นโรงกลั่นที่มีประสิทธิภาพอยู่ในระดับชั้นนำแห่งหนึ่งในภูมิภาคเอเชียแปซิฟิก ซึ่งก่อตั้งขึ้นในปี 2504 โดยมีธุรกิจหลักคือ โรงกลั่นนํ้ามัน ปัจจุบันมีกำลังการกลั่น 275,000 บาร์เรลต่อวันนอกจากนี้ ไทยออยล์ยังมีธุรกิจที่เกี่ยวข้องหลากหลาย เช่น ธุรกิจน้ำมันหล่อลื่นพื้นฐาน ธุรกิจปิโตรเคมีสายอะโรเมติกส์และสายโอเลฟิน ธุรกิจไฟฟ้า ธุรกิจสารทำละลายและเคมีภัณฑ์ ธุรกิจบริการขนส่งผลิตภัณฑ์ปิโตรเลียมสำเร็จรูปทางท่อ ธุรกิจพลังงานทดแทน ธุรกิจผลิตสารตั้งต้นสำหรับการผลิตผลิตภัณฑ์สารทำความสะอาด ธุรกิจให้บริการด้านการสรรหาและคัดเลือกบุคลากรสำหรับกลุ่มไทยออยล์ รวมถึงมีศูนย์บริหารการเงิน เพื่อช่วยเพิ่มขีดความสามารถในการบริหารจัดการทางการเงินของกลุ่มไทยออยล์
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="http://www.thaioilgroup.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TRUE.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TRUE"</b> บริษัท ทรู คอร์ปอเรชั่น จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ผู้ให้บริการด้านการสื่อสารโทรคมนาคม บริการด้านดิจิทัลครบวงจร และดิจิทัลคอนเวอร์เจนซ์ไลฟ์สไตล์ครอบคลุมทั้งโทรศัพท์เคลื่อนที่ บอรดแบนด์อินเทอร์เน็ต WiFi โทรทัศน์ คอนเทนต์ และดิจิทัลมีเดียแพลตฟอร์ม
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="xx" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>
    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/TTB.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"TTB"</b> ธนาคารทหารไทยธนชาต จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                ดำเนินธุรกิจธนาคารพาณิชย์เต็มรูปแบบแก่ลูกค้า 3 กลุ่มหลัก คือ กลุ่มลูกค้าธุรกิจขนาดใหญ่ ลูกค้าเอสเอ็มอี และลูกค้ารายย่อย โดยมีกลุ่ม ไอเอ็นจี สถาบันการเงินของประเทศเนเธอร์แลนด์ เป็นพันธมิตรทางธุรกิจและผู้ถือหุ้นรายใหญ่ร่วมกับกระทรวงการคลัง
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="https://www.ttbbank.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
                <a href="#" id="btn-1" class="btn btn-primary btnSWOT"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SWOT</a>
            </div>
    </li>

    <li class="list-group-item clearfix" >
            <button style="float:left;  margin-right:15px; margin-bottom:15px; padding: 2px;"  type="button" id="btn-rm" class="btn  btn-circle btn-default shadow-lg btnRM">
                <!-- <div>RM</div> -->
                <span id='logo-1'><img src="./images/stocks/WHA.png"></span>
            </button>
      
    
            <div class="data_detail">
                <h3 class="list-group-item-heading">
                <span class='companyIitle' id='title-1'><b>"WHA"</b> บริษัท ดับบลิวเอชเอ คอร์ปอเรชั่น จำกัด (มหาชน)</span>
             
                </h3>
                <p class="list-group-item-text lead">
                <span class='nbsp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class='companyDetail' id='detail-1'>
                บริษัทฯ เป็นผู้นำในการให้บริการแบบครบวงจรที่ครอบคลุมทุกความต้องการของลูกค้าในธุรกิจที่เกี่ยวข้องกับการให้บริการด้านโลจิสติกส์ โดยสามารถจำแนกส่วนธุรกิจได้เป็น 4 กลุ่ม ได้แก่ ธุรกิจพัฒนาและบริหารจัดการอสังหาริมทรัพย์ (Logistics Hub) ธุรกิจพัฒนานิคมอุตสาหกรรม (Industrial Development Hub) ธุรกิจให้บริการสาธารณูปโภคและพลังงาน (Utilities & Power Hub) และธุรกิจให้บริการด้านดิจิทัล (Digital Platform Hub) อีกทั้งบริษัทฯ ยังมีนโยบายในการขายสินทรัพย์เข้ากองทรัสต์ฯ (WHART WHAIR และ WHABT) เพื่อเป็นแหล่งเงินทุนในการพัฒนาโครงการในอนาคตของบริษัทฯ อย่างต่อเนื่อง และได้รับแต่งตั้งเป็นผู้บริหารอสังหาริมทรัพย์ของกองทรัสต์ฯ และกองทุนรวมฯ นอกจากนี้ บริษัทฯ ยังมีนโยบายลงทุนในธุรกิจอสังหาริมทรัพย์ผ่านการลงทุนในกองทรัสต์ฯ และ/หรือกองทุนรวมฯ เพื่อผลตอบแทนในรูปเงินปันผลสม่ำเสมอเป็นประจำทุกปี
                </span>
                </p>
            </div>
            <div class="btn-toolbar " role="toolbar" aria-label="">
                
                <a  href="https://www.wha-group.com" target="_blank" id="btnManualRM1" class="btn btn-default"><i class="fa fa-link" aria-hidden="true"></i> เว็บไซต์</a>
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
