
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
	console.log("renderSwotToForm");
	console.log(data);


	$.each(data,function(data,indexEntry){
		// alert(indexEntry['s_name']);
		// alert(indexEntry['s_score']);
	

		

		if(indexEntry['form_id']=='s1'){
	
			$("#s1_name").val(indexEntry['s_name']);
			$("#s1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s2'){
			$("#s2_name").val(indexEntry['s_name']);
			$("#s2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s3'){
			$("#s3_name").val(indexEntry['s_name']);
			$("#s3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s4'){
			$("#s4_name").val(indexEntry['s_name']);
			$("#s4_score").val(indexEntry['s_score']);
		}


		if(indexEntry['form_id']=='w1'){
			$("#w1_name").val(indexEntry['s_name']);
			$("#w1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w2'){
			$("#w2_name").val(indexEntry['s_name']);
			$("#w2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w3'){
			$("#w3_name").val(indexEntry['s_name']);
			$("#w3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w4'){
			$("#w4_name").val(indexEntry['s_name']);
			$("#w4_score").val(indexEntry['s_score']);
		}


		

		if(indexEntry['form_id']=='o1'){
			$("#o1_name").val(indexEntry['s_name']);
			$("#o1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o2'){
			$("#o2_name").val(indexEntry['s_name']);
			$("#o2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o3'){
			$("#o3_name").val(indexEntry['s_name']);
			$("#o3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o4'){
			$("#o4_name").val(indexEntry['s_name']);
			$("#o4_score").val(indexEntry['s_score']);
		}


		if(indexEntry['form_id']=='t1'){
			$("#t1_name").val(indexEntry['s_name']);
			$("#t1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t2'){
			$("#t2_name").val(indexEntry['s_name']);
			$("#t2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t3'){
			$("#t3_name").val(indexEntry['s_name']);
			$("#t3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t4'){
			$("#t4_name").val(indexEntry['s_name']);
			$("#t4_score").val(indexEntry['s_score']);
		}
		
	});

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