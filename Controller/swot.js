
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
			$("#s1_weight").val(indexEntry['s_weight']);
			$("#s1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s2'){
			$("#s2_name").val(indexEntry['s_name']);
			$("#s2_weight").val(indexEntry['s_weight']);
			$("#s2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s3'){
			$("#s3_name").val(indexEntry['s_name']);
			$("#s3_weight").val(indexEntry['s_weight']);
			$("#s3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='s4'){
			$("#s4_name").val(indexEntry['s_name']);
			$("#s4_weight").val(indexEntry['s_weight']);
			$("#s4_score").val(indexEntry['s_score']);
		}


		if(indexEntry['form_id']=='w1'){
			$("#w1_name").val(indexEntry['s_name']);
			//$("#s1_weight").val(indexEntry['s_weight']);
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
	// alert(uuid);
	// alert("findOne");
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
				//alert("newUser");
			}else{
				//loadExampleSwot(sessionStorage.getItem('uuid'));
				//alert("oldUser");
				findOne(sessionStorage.getItem('uuid'));
			}
            
		}
	});
}

var calculateSwotFn = function(){
		var s1_name="";
		var s1_weight=0.00;
        var s1_score=0.00;
		
        var s2_name="";
		var s2_weight=0.00;
        var s2_score=0.00;
        var s3_name="";
		var s3_weight="";
        var s3_score=0.00;
        var s4_name="";
		var s4_weight="";
        var s4_score=0.00;
        var s5_name="";
		var s5_weight="";
        var s5_score=0.00;

        var s1_total_score=0.00;
        var s2_total_score=0.00;
        var s3_total_score=0.00;
        var s4_total_score=0.00;
        var s5_total_score=0.00;
		var s_total_weight=0.00;
        var s_total_score=0.00;
		var s_performance=0.00;


        var w1_name="";
        var w1_score="";
        var w2_name="";
        var w2_score="";
        var w3_name="";
        var w3_score="";
        var w4_name="";
        var w4_score="";
        var w5_name="";
        var w5_score="";

        var o1_name="";
        var o1_score="";
        var o2_name="";
        var o2_score="";
        var o3_name="";
        var o3_score="";
        var o4_name="";
        var o4_score="";
        var o5_name="";
        var o5_score="";

        var t1_name="";
        var t1_score="";
        var t2_name="";
        var t2_score="";
        var t3_name="";
        var t3_score="";
        var t4_name="";
        var t4_score="";
        var t5_name="";
        var t5_score="";

		var swot_total_weight=0.00;
		var swot_total_score=0.00;

	//Strang
	if($('#s1_name').val()!==""){
		 s1_name=$('#s1_name').val();
		 s1_weight=parseFloat($('#s1_weight').val()).toFixed(2);
		 s1_score=parseFloat($('#s1_score').val()).toFixed(2);
		 s1_total_score =  s1_weight*s1_score;
		//  alert(s1_weight);
		//  alert(s1_score);
		//  alert(s1_total_score);
	}
	if($('#s2_name').val()!==""){
		 s2_name=$('#s2_name').val();
		 s2_weight=parseFloat($('#s2_weight').val()).toFixed(2);
		 s2_score=parseFloat($('#s2_score').val()).toFixed(2);
		 s2_total_score =  s2_weight*s2_score;
	}
	if($('#s3_name').val()!==""){
		 s3_name=$('#s3_name').val();
		 s3_weight=parseFloat($('#s3_weight').val()).toFixed(2);
		 s3_score=parseFloat($('#s3_score').val()).toFixed(2);
		 s3_total_score =  s3_weight*s3_score;
	}
	if($('#s4_name').val()!==""){
		 s4_name=$('#s4_name').val();
		 s4_weight=parseFloat($('#s4_weight').val()).toFixed(2);
		 s4_score=parseFloat($('#s4_score').val()).toFixed(2);
		 s4_total_score =  s4_weight*s4_score;
	}
	if($('#s5_name').val()!==""){
		 s5_name=$('#s5_name').val();
		 s5_weight=parseFloat($('#s5_weight').val()).toFixed(2);
		 s5_score=parseFloat($('#s5_score').val()).toFixed(2);
		 s5_total_score =  s5_weight*s5_score;
	}

	alert(s1_weight);
	alert(s2_weight);
	s_total_weight=parseFloat(10).toFixed(2)+10;
	alert((+s1_weight)+(+s1_weight));
	
	// alert(s1_weight);
	// alert(s2_weight);
	// alert(s3_weight);
	// alert(s4_weight);
	// alert(s5_weight);


	s_total_score=s1_total_score+s2_total_score+s3_total_score+s4_total_score+s5_total_score;

	// alert(s_total_weight);
	// alert(s_total_score);

	s_performance=(s_total_score/s_total_weight);

	// alert("s_total_weight="+s_total_weight);
	// alert("s_total_score="+s_total_score);
	// alert("s_performance="+s_performance);




	
		

}


$(document).ready(function(){
	
    var uuid = new DeviceUUID().get();
	sessionStorage.setItem('uuid', uuid);
    autoLoginFn();

	$("#submit").click(function(){
		calculateSwotFn();
	});
    //alert(uuid);
});