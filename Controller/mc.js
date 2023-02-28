
var listTaskCate = function(data){

	var htmlListTaskCate="";
	$.each(data,function(index,indexEntry){
		htmlListTaskCate+="<div class=\"accordion-item\">";
			htmlListTaskCate+="<h2 class=\"accordion-header\" id=\"flush-heading-"+indexEntry['tc_id']+"\">";
				htmlListTaskCate+="<div class=\"mc_checkbox_cate_mc\">";
					htmlListTaskCate+="<input type=\"radio\" id=\"cate_mc-"+indexEntry['tc_id']+"\" name=\"cate_mc\" class=\"form-check-input cate_mc\">";
				htmlListTaskCate+="</div>";
					htmlListTaskCate+="<div class=\"mc_cate_mc\">   ";
						htmlListTaskCate+="<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse-"+indexEntry['tc_id']+"\" aria-expanded=\"false\" aria-controls=\"flush-collapse-"+indexEntry['tc_id']+"\">";
						htmlListTaskCate+=indexEntry['tc_name'];
						htmlListTaskCate+="</button> ";
					htmlListTaskCate+="</div>";
				htmlListTaskCate+="<br style=\"clear:both\">";	
			htmlListTaskCate+="</h2>";
			htmlListTaskCate+="<div id=\"flush-collapse-"+indexEntry['tc_id']+"\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading-"+indexEntry['tc_id']+"\" data-bs-parent=\"#accordionFlushExample\">";
				htmlListTaskCate+="<div class=\"accordion-body\">";
				htmlListTaskCate+="XXX";
				htmlListTaskCate+="</div>";
			htmlListTaskCate+="</div>";
		htmlListTaskCate+="</div>";
	});
	$("#accordionFlushExample").html(htmlListTaskCate);
}

function createGauges(id,value_param) {
	var value = $("#gauge-value").val();


	$("#gauge"+id).kendoRadialGauge({

		pointer: {
			value: value_param
		},

		scale: {
			minorUnit: 5,
			startAngle: -30,
			endAngle: 210,
			max: 180,
			labels: {
				position: "inside",
				// color:"#ffffff"
			},
			ranges: [
				{
					from: 50,
					to: 80,
					color: "#ffc700"
				}, {
					from: 81,
					to: 100,
					color: "green"
				}, {
					from: 101,
					to: 180,
					color: "#c20000"
				}
			]
		}
	});
}

var findOneTaskCate=function(uuid){
	
    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":showCate,
			"tc_id":"2",
			"action":"findOneCate",
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					alert('ok');
				}
			}
		}
	});
	
}


var showTaskCate=function(uuid){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"showCate",
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					listTaskCate(data[0]['data']);
				}
			}
		}
	});
	
}
var updateTaskCate=function(uuid){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updatedCate",
			"tc_name":"9999",
			"tc_id":"2"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					alert("ok success");
				}
			}
		}
	});
	
}
var deleteTaskCate=function(uuid,tc_id){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"deleteCate",
			"tc_id":tc_id
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listTaskCate(data[0]['data']);
				}
			}
		}
	});
	
}

var insertTaskCate=function(uuid){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertTaskCate",
			"tc_name":$("#cateTaskName").val(),
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listTaskCate(data[0]['data']);
				}
			}
		}
	});
	
}

$(document).ready(function(){
	
   //test

   //findOneTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   showTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //updateTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //deleteTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //insertTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

	createGauges(1,139);
	createGauges(2,91);
	createGauges(3,83.66);
	createGauges(4,120.5);


	/*
	submitSaveTask
	submitAddTask
	submitDeleteTask
	*/
	$("#submitSaveTask").click(function(){
		alert("submitSaveTask");
	});

	 $("#addTaskModal").click(function(){
	
	
	 });

	 $("#cateTaskSubmit").click(function(){
		//alert("cateTaskSubmit");
		insertTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
	});

	$("#submitDeleteTask").click(function(){
		
		var tc_id =$(".cate_mc:checked").attr("id");
		tc_id=tc_id.split("-");
		tc_id=tc_id[1];

		deleteTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6',tc_id);
	});


});