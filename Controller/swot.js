
var insertAndLoadExampleSwot=function(uuid){

    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertAndLoadExampleSwot",
		},
		success:function(data){
			if(data[0]['status']=="200"){
				alert("load data success.");
			}
		}
	});
}
var autoLoginFn=function(uuid){

    $.ajax({
		url:"./Model/login.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
		},
		success:function(data){

		
			if(data[0]['loginType']=="newUser"){
				insertAndLoadExampleSwot(sessionStorage.getItem('uuid'));
				alert("newUser");
			}else{
				loadExampleSwot(sessionStorage.getItem('uuid'));
				alert("oldUser");
			}
            
		}
	});
}


$(document).ready(function(){
	
    var uuid = new DeviceUUID().get();
	sessionStorage.setItem('uuid', uuid);
    autoLoginFn(uuid);
    //alert(uuid);
});