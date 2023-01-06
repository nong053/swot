
var renderSwotToForm = function(data){

/*
ap_id
ap_name
s_id
s_name
s_score
s_total_score
s_weight
uuid
*/
	alert(data['']);
	
}
var findOne=function(uuid){
	alert(uuid);
	alert("findOne");
    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"findOne",
		},
		success:function(data){
			//alert(1);
			console.log(data);
			alert(data);
			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					renderSwotToForm(data[0]['data']);
				}
			}
		}
	});
	
}
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
var loadExampleSwot=function(uuid){
	alert("start load");
	
    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"loadExampleSwot",
		},
		success:function(data){
			console.log(data);
			alert("load data ok");
		}
	});
	
	
}

var autoLoginFn=function(){
    if(sessionStorage.getItem('uuid')=="" || sessionStorage.getItem('uuid')==null) {
		alert("Can't login");
		return false;
	}
    $.ajax({
		url:"./Model/login.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":sessionStorage.getItem('uuid'),
		},
		success:function(data){

		
			if(data[0]['loginType']=="newUser"){
				//insertAndLoadExampleSwot(sessionStorage.getItem('uuid'));
				alert("newUser");
			}else{
				//loadExampleSwot(sessionStorage.getItem('uuid'));
				alert("oldUser");
				findOne(sessionStorage.getItem('uuid'));
			}
            
		}
	});
}


$(document).ready(function(){
	
    var uuid = new DeviceUUID().get();
	sessionStorage.setItem('uuid', uuid);
    autoLoginFn();
    //alert(uuid);
});