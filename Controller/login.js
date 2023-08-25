var loaddingFn = function(){
	//alert('loadding');
	$("body").mLoading();
	setTimeout(function(){
		$("body").mLoading('hide');
	},1000);
}
var clearFormRegisterFn = function(){
    $("#register_alert").hide();
    $("#register_alert_text").html("");
    $("#register_email").val("").css({"border":"#ced4da solid 1px"});;
    $("#register_password").val("").css({"border":"#ced4da solid 1px"});
    $("#register_confirm_password").val("").css({"border":"#ced4da solid 1px"});
    $("#password-strength-status").hide();
}
var clearFormLoginFn = function(){
    $("#login_alert").hide();
    $("#login_alert_text").html("");
    $("#login_email").val("").css({"border":"#ced4da solid 1px"});;
    $("#login_password").val("").css({"border":"#ced4da solid 1px"});
 
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function checkPasswordStrength() {
    $("#password-strength-status").show();
    $("#checkPasswordStrength").remove();
    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    if ($('#register_password').val().length < 6) {

        $('#password-strength-status').removeClass();
        $('#password-strength-status').addClass('weak-password');
        $('#password-strength-status').html(" <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>ต้องมากกว่า 6 ตัวอักษร");
        $("#register_password").css({"border":"red solid 1px"});

        $("#register_alert_text").append("<div id=\"checkPasswordStrength\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> ควรตั้งรหัสผ่านให้มีความปลอดภัยสูง (คละ ตัวเลข สัญลักษณ์ ตัวอักษรพิมพ์ใหญ่ ตัวอักษรพิมพ์เล็ก)</div>");
        $("#register_alert").show();
        
        

        return false;
    } else {

        

        if ($('#register_password').val().match(number) && $('#register_password').val().match(alphabets) && $('#register_password').val().match(special_characters)) {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('strong-password');
            $('#password-strength-status').html(" <i class=\"fa fa-check\" aria-hidden=\"true\"></i>ความปลอดภัยสูง");

            $("#register_password").css({"border":"#ced4da solid 1px"});
            $("#checkPasswordStrength").remove();
            if($("#register_alert_text").html()==""){
                $("#register_alert").hide();
            }
           
       

        	return true;
        } else {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('medium-password');
            $('#password-strength-status').html(" <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>ความปลอดภัยระดับกลาง");
            $("#register_password").css({"border":"red solid 1px"});
           

            $("#register_alert_text").append("<div id=\"checkPasswordStrength\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> ควรตั้งรหัสผ่านให้มีความปลอดภัยสูง (คละ ตัวเลข สัญลักษณ์ ตัวอักษรพิมพ์ใหญ่ ตัวอักษรพิมพ์เล็ก)</div>");
            $("#register_alert").show();
        	return false;

        }
        $('#password-strength-status').html("");
        //return true;
    }
}
// function validateMailFn(mail)
// {
//     return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(mail);
// }

var validateRisterFn = function(){
    var check=true;
    $("#register_alert").hide();
    $("#register_alert_text").html("");

    if($("#register_email").val()==""){
        check=false;
        $("#register_alert").show();
        $("#register_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกอีเมล์</div>");
        $("#register_email").css({"border":"red solid 1px"});
        
    }else if(isEmail($("#register_email").val())==false){
        check=false;
        $("#register_alert").show();
        $("#register_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกอีเมล์ให้ถูกต้อง</div>");
        $("#register_email").css({"border":"red solid 1px"});
    }else{
        $("#register_email").css({"border":"#ced4da solid 1px"});
    }
    

    if($("#register_password").val()==""){
        check=false;
        $("#register_alert").show();
        $("#register_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรหัสผ่าน</div>");
        $("#register_password").css({"border":"red solid 1px"});
    }else{
        //$("#register_password").css({"border":"#ced4da solid 1px"});

        if($("#register_password").val()!=$("#register_confirm_password").val()){
            check=false;
            $("#register_alert").show();
            $("#register_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกรหัสผ่านไม่ตรงกัน</div>");
            $("#register_password").css({"border":"red solid 1px"});
            $("#register_confirm_password").css({"border":"red solid 1px"});
        
        }else{
            
     
            $("#register_password").css({"border":"#ced4da solid 1px"});
            $("#register_confirm_password").css({"border":"#ced4da solid 1px"});
        }

    }


   
    return check;
}
var validateLoginFn = function(){
    var check=true;
    $("#login_alert").hide();
    $("#login_alert_text").html("");

    if($("#login_email").val()==""){
        check=false;
        $("#login_alert").show();
        $("#login_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกอีเมล์</div>");
        $("#login_email").css({"border":"red solid 1px"});
    }else{
        $("#login_email").css({"border":"#ced4da solid 1px"});
    }

    if($("#login_password").val()==""){
        check=false;
        $("#login_alert").show();
        $("#login_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรหัสผ่าน</div>");
        $("#login_password").css({"border":"red solid 1px"});
    }else{
        $("#login_password").css({"border":"#ced4da solid 1px"});

    }

    return check;
}

var autoLoginByMoblieFn = function(uuidByMobile){

    $.ajax({
        url:webService+"/Model/oneTimeAutoLogin.php",
        type:"post",
        dataType:"json",
        async:false,
        data:{
            "action":"mobileLogin",
            "uuidByMobile": uuidByMobile
        },
        success:function(data){
            
            if(data[0]!="" || data[0]!=null){
                if(data[0]['status']=="200"){
                    sessionStorage.setItem('token', data[0]['token']);
                    sessionStorage.setItem('uuid', data[0]['data']);
            }
        
        }
    }
        
    });
}


$(document).ready(function(){

    
    $("#Copyright").show();
    
   //auto login by mobile start
   if($.urlParam('uuidByMobile')!="" && $.urlParam('action')=="mobileLogin" ){
        autoLoginByMoblieFn($.urlParam('uuidByMobile'));
        sessionStorage.setItem('uuidByMobile',$.urlParam('uuidByMobile'));
        
        $("#loginArea").hide();
        
   }
    //auto login by mobile end

    $(".btnDevTeam").click(function(){
        loaddingFn();
        $("#teamModal").modal('show');
	});
    $("#btnDevTeamClose").click(function(){
		$("#teamModal").modal('hide');
	});

    $(".btnDevTools").click(function(){
        loaddingFn();
        $("#devToolsModal").modal('show');
	});
    $("#btnDevToolsClose").click(function(){
		$("#devToolsModal").modal('hide');
	});

    //check device start
    

if("mobile"==sessionStorage.getItem('checkDevice')){
    $("#displayView").show();
	$("#formLoginArea").css({"width":"100%"});
    $(".btn-toolbar").css({"text-align":"center"}).show();
    $(".nbsp").remove();
    
    // $(".headeTitle").css({"top":"30px"}).show();
    // $(".headerFixed").css({"top":"-20px","height":"65px"});

   
}else{
    $("#displayView").show();
	$("#formLoginArea").css({"width":"350px"});
    $(".btn-toolbar").css({"float":"right"}).show();
    
    
    // $(".headeTitle").css({"top":"17px"}).show();
    // $(".headerFixed").css({"top":"0px","height":"75px"});

}
//check device end

$(".btnMC").click(function(){
    loaddingFn();
    if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
        $("#loginModal").modal('show');
        $("#actionTo").val("./mc.php");
     
        return false;
    }else{
        window.location.href='./mc.php';

        return true;

    }
    
});

$(".btnSW").click(function(){
    loaddingFn();
    if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
        $("#loginModal").modal('show');
        $("#actionTo").val("./swot.php?from=swot-main&b_id=0");
        return false;
    }else{
        window.location.href='./swot.php?from=swot-main&b_id=0';

        return true;

    }
    
});

$(".btnRM").click(function(){
    loaddingFn();
    if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
        $("#loginModal").modal('show');
        $("#actionTo").val('./rm.php');
        return false;
    }else{
        window.location.href='./rm.php';

        return true;

    }
    
});

$("#btnOpenLogin").click(function(){
    loaddingFn();
    $("#loginModal").modal('show');
});
    
 
    if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
       // $("#loginModal").modal('show');
        $("#btnLogout").hide();
        $("#btnOpenLogin").show();
        // $("#btnArea").hide();
        // $("#formLoginArea").show();
    }else{
    
        //$("#loginModal").modal('hide');
        $("#btnLogout").show();
        $("#btnOpenLogin").hide();
        // $("#btnArea").show();
        // $("#formLoginArea").hide();
    }


    $("#btnLogout").click(function(){
        loaddingFn();
        sessionStorage.setItem('token',"");
        sessionStorage.setItem('uuid',"");
        $("#btnLogout").hide();
        $("#btnOpenLogin").show();
       // $("#loginModal").modal('show');
    //    $("#btnArea").hide();
    //    $("#formLoginArea").show();
    });

    $("#register_password").keyup(function(){	
        checkPasswordStrength();
    });
    
   /*
    var navigator_info = window.navigator;
    var screen_info = window.screen;
    var uid = navigator_info.mimeTypes.length;
    uid += navigator_info.userAgent.replace(/\D+/g, '');
    uid += navigator_info.plugins.length;
    uid += screen_info.height || '';
    uid += screen_info.width || '';
    uid += screen_info.pixelDepth || '';
    console.log(uid);
*/

    $("#register_email").val();
    $("#register_password").val();
    $("#register_confirm_password").val();

    $("#login-tab").click(function(){
        loaddingFn();
        $("#actionLR").val("login");
        clearFormRegisterFn();
        clearFormLoginFn();
     
    });

    $("#register-tab").click(function(){
        loaddingFn();
        clearFormRegisterFn();
        clearFormLoginFn();
        $("#actionLR").val("register");
    });
    
   

    $("#btnSubmitLR").click(function(){
        loaddingFn();
        if($("#actionLR").val()=="register"){

                if(validateRisterFn()==true && checkPasswordStrength()==true){
                $.ajax({
                    url:webService+"/Model/oneTimeLogin.php",
                    type:"post",
                    dataType:"json",
                    async:false,
                    data:{
                        "action":"register",
                        "email": $("#register_email").val(),
                        "password":$("#register_password").val(),
                    
                    },
                    success:function(data){
                        
                        if(data[0]!="" || data[0]!=null){
                            if(data[0]['status']=="200"){
                                clearFormRegisterFn();
                                //alert("success and redirect to app");
                                sessionStorage.setItem('token', data[0]['token']);
                                sessionStorage.setItem('uuid', data[0]['data']);

                                // $.alert({
                                //     title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
                                //     content: 'ลงทะเบียนเรียบร้อย',
                                // });
                                $("#loginModal").modal('hide');
                                $("#btnLogout").show();

                                window.location.href=""+$("#actionTo").val()+"";

                                // $("#btnArea").show();
                                // $("#formLoginArea").hide();

                            }else if(data[0]['status']==403){
                         
                                $("#register_alert").show();
                                $("#register_alert_text").html("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> อีเมลล์นี้มีการใช้งานแล้ว กรุณากรอกอีเมลล์อื่น</div>");
                            }
                        }
                    
                    }
                    
                });
            }
            }else{
                if(validateLoginFn()==true){
                    $.ajax({
                        url:webService+"/Model/oneTimeLogin.php",
                        type:"post",
                        dataType:"json",
                        async:false,
                        data:{
                            "action":"login",
                            "email": $("#login_email").val(),
                            "password":$("#login_password").val(),
                        
                        },
                        success:function(data){
                            console.log(data[0]['status']);
                            if(data[0]!="" || data[0]!=null){
                                if(data[0]['status']=="200"){
                                clearFormLoginFn();
                                sessionStorage.setItem('token', data[0]['token']);
                                sessionStorage.setItem('uuid', data[0]['data']);

                                $("#loginModal").modal('hide');
                                $("#btnOpenLogin").hide();
                                $("#btnLogout").show();
                                // $("#btnArea").show();
                                // $("#formLoginArea").hide();
                           
                                //  $.alert({
                                //     title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
                                //     content: 'บันทึกข้อมูลเรียบร้อย',
                                // });
                                window.location.href=""+$("#actionTo").val()+"";

                                }else if(data[0]['status']=="401"){
                                    $("#login_alert").show();
                                    $("#login_alert_text").html("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> รหัสผ่านไม่ถูกต้อง</div>");
                                }
                            }
                        
                        }
                        
                    });
                }
        }
    });
});