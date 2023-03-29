var clearFormRegisterFn = function(){
    $("#register_alert").hide();
    $("#register_alert_text").html("");
    $("#register_email").val("").css({"border":"#ced4da solid 1px"});;
    $("#register_password").val("").css({"border":"#ced4da solid 1px"});
    $("#register_confirm_password").val("").css({"border":"#ced4da solid 1px"});;
}
var validateRisterFn = function(){
    var check=true;
    $("#register_alert").hide();
    $("#register_alert_text").html("");

    if($("#register_email").val()==""){
        check=false;
        $("#register_alert").show();
        $("#register_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกอีเมล์</div>");
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
$(document).ready(function(){

   $("#loginModal").modal('show');
    var navigator_info = window.navigator;
    var screen_info = window.screen;
    var uid = navigator_info.mimeTypes.length;
    uid += navigator_info.userAgent.replace(/\D+/g, '');
    uid += navigator_info.plugins.length;
    uid += screen_info.height || '';
    uid += screen_info.width || '';
    uid += screen_info.pixelDepth || '';
    console.log(uid);


    $("#register_email").val();
    $("#register_password").val();
    $("#register_confirm_password").val();

    $("#login-tab").click(function(){
        $("#actionLR").val("login");
        clearFormRegisterFn();
    });

    $("#register-tab").click(function(){
        clearFormRegisterFn();
        $("#actionLR").val("register");
    });
    

    $("#btnSubmitLR").click(function(){
        if($("#actionLR").val()=="register"){
                if(validateRisterFn()==true){
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
            
                        if(data[0]!=="" || data[0]!==null){
                            if(data[0]['status']!="200"){
                            
                            }
                        }
                    
                    }
                    
                });
            }
            }else{
                alert("login");
        }
    });
});