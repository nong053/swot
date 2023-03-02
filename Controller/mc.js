
var listTaskCateFn = function(data){

	var htmlListTaskCate="";
	$.each(data['dataTaskCate'],function(index,indexEntryTaskCate){
		htmlListTaskCate+="<div class=\"accordion-item\">";
			htmlListTaskCate+="<h2 class=\"accordion-header\" id=\"flush-heading-"+indexEntryTaskCate['tc_code']+"\">";
				htmlListTaskCate+="<div class=\"mc_checkbox_cate_mc\">";
					htmlListTaskCate+="<input type=\"radio\" id=\"cate_mc-"+indexEntryTaskCate['tc_code']+"\" name=\"cate_mc\" class=\"form-check-input cate_mc\">";
				htmlListTaskCate+="</div>";
					htmlListTaskCate+="<div class=\"mc_cate_mc\">   ";
						htmlListTaskCate+="<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse-"+indexEntryTaskCate['tc_code']+"\" aria-expanded=\"false\" aria-controls=\"flush-collapse-"+indexEntryTaskCate['tc_code']+"\">";
						htmlListTaskCate+=indexEntryTaskCate['tc_name'];
						htmlListTaskCate+="</button> ";
					htmlListTaskCate+="</div>";
				htmlListTaskCate+="<br style=\"clear:both\">";	
			htmlListTaskCate+="</h2>";
			htmlListTaskCate+="<div id=\"flush-collapse-"+indexEntryTaskCate['tc_code']+"\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading-"+indexEntryTaskCate['tc_code']+"\" data-bs-parent=\"#accordionFlushExample\">";
				htmlListTaskCate+="<div class=\"accordion-body\">";
	
				htmlListTaskCate+="<div  class=\"mb-3\">";
					htmlListTaskCate+="<div class=\"row\" style=\"padding:5px;\">";
						htmlListTaskCate+="<div class=\"col-md-12\" style=\"text-align: left; \">";
						htmlListTaskCate+="<button type=\"button\" id=\"saveTask-"+indexEntryTaskCate['tc_code']+"\" class=\"btn btn-success btn-circle sub_mc_btn saveTask\" >";
						htmlListTaskCate+="<i class=\"fa-solid fa-floppy-disk\"></i>";
						htmlListTaskCate+="</button>";
						htmlListTaskCate+="<button   type=\"button\" id=\"addTask-"+indexEntryTaskCate['tc_code']+"\" class=\"btn btn-primary btn-circle sub_mc_btn addTask\"><i class=\"fa-sharp fa-solid fa-plus\"></i></button>";
						htmlListTaskCate+="<button  type=\"button\" id=\"delTask-"+indexEntryTaskCate['tc_code']+"\" class=\"btn btn-danger btn-circle sub_mc_btn delTask\" ><i class=\"fa-sharp fa-solid fa-trash\"></i></button>";
						htmlListTaskCate+="</div>";
						htmlListTaskCate+="</div>";
				htmlListTaskCate+="</div>";

				

				htmlListTaskCate+="<table class=\"table table-striped\">";
				htmlListTaskCate+="<tbody id=\"listTaskArea-"+indexEntryTaskCate['tc_code']+"\" >";
				$.each(data['dataTask'],function(index,indexEntryTask){
					
					if(indexEntryTask['tc_code']==indexEntryTaskCate['tc_code']){

						htmlListTaskCate+="<tr id=\"t_code-"+indexEntryTask['t_code']+"-tc_code-"+indexEntryTask['tc_code']+"\" class=\"task_mc_loop\">";
							htmlListTaskCate+="<td class=\"widthSwotName\">";
									htmlListTaskCate+="<input type=\"radio\" name=\"task_mc\" id=\"task_mc-t_code-"+indexEntryTask['t_code']+"-tc_code-"+indexEntryTask['tc_code']+"\" class=\"form-check-input task_mc\">";
									htmlListTaskCate+="<div  class=\"mb-3\" >";
									htmlListTaskCate+="<textarea  class=\"form-control mb-2\" name=\"t_name-"+indexEntryTask['t_code']+"\"  id=\"t_name-"+indexEntryTask['t_code']+"\" placeholder=\"รายละเอียดงาน\">"+indexEntryTask['t_name']+"</textarea>";
									htmlListTaskCate+="<div  class=\"mb-3\">";
									htmlListTaskCate+="<table>";
										htmlListTaskCate+="<tr>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_code']+"\" id=\"t_day-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"วัน\" value=\""+indexEntryTask['t_day']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_code']+"\" id=\"t_hour-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ชั่วโมง\" value=\""+indexEntryTask['t_hour']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_code']+"\" id=\"t_minute-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"นาที\" value=\""+indexEntryTask['t_minute']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_code']+"\" id=\"t_quantity-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ครั้ง\" value=\""+indexEntryTask['t_quantity']+"\">";
											htmlListTaskCate+="</td>";
										htmlListTaskCate+="</tr>";
									htmlListTaskCate+="</table>";
									htmlListTaskCate+="</div>";
								htmlListTaskCate+="</div>";
							htmlListTaskCate+="</td>";
						htmlListTaskCate+="</tr>";
				}
					
				});
				htmlListTaskCate+="</tbody>";
				htmlListTaskCate+="</table>";
				
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

var findOneTaskCate=function(uuid,tc_id){
	
    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"tc_id":tc_id,
			"action":"findOneCate",
		},
		success:function(data){
	
			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					$("#cateTaskName").val(data[0]['data'][0]['tc_name']);
					$("#idTaskCate").val(data[0]['data'][0]['tc_id']);
					$("#actionTaskCate").val("edit");
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
					listTaskCateFn(data[0]);
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
					listTaskCateFn(data[0]);
				}
			}
		}
	});
	
}
var deleteTaskFn=function(uuid,t_code,tc_code){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"deleteTask",
			"t_code":t_code,
			"tc_code":tc_code
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listTaskFn(data[0]['data'],tc_code);
				}
			}
		}
	});
	
}
var clearFormTaskCateFn = function(){

	$("#cateTaskName").val("");
	$("#idTaskCate").val("");
	$("#actionTaskCate").val("add");
	$(".cate_mc").prop("checked",false);

}
var clearFormTaskFn = function(){

	$(".task_mc").prop("checked",false);

}


var insertTaskCateFn=function(uuid){

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
					
					console.log(data[0]['data']);
					listTaskCateFn(data[0]);
				}
			}
		}
	});
	
}
var listTaskFn = function(data,tc_code){

var htmlListTask="";
	$.each(data,function(index,indexEntryTask){
		htmlListTask+="<tr id=\"t_code-"+indexEntryTask['t_code']+"-tc_code-"+indexEntryTask['tc_code']+"\" class=\"task_mc_loop\">";
				htmlListTask+="<td class=\"widthSwotName\">";
						htmlListTask+="<input type=\"radio\" name=\"task_mc\" id=\"task_mc-t_code-"+indexEntryTask['t_code']+"-tc_code-"+indexEntryTask['tc_code']+"\" class=\"form-check-input task_mc\">";
						htmlListTask+="<div  class=\"mb-3\" >";
						htmlListTask+="<textarea  class=\"form-control mb-2 \" name=\"t_name-"+indexEntryTask['t_code']+"\"  id=\"t_name-"+indexEntryTask['t_code']+"\" placeholder=\"รายละเอียดงาน\"></textarea>";
						htmlListTask+="<div  class=\"mb-3\">";
						htmlListTask+="<table>";
							htmlListTask+="<tr>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_code']+"\" id=\"t_day-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"วัน\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_code']+"\" id=\"t_hour-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ชั่วโมง\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_code']+"\" id=\"t_minute-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"นาที\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_code']+"\" id=\"t_quantity-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ครั้ง\">";
								htmlListTask+="</td>";
							htmlListTask+="</tr>";
						htmlListTask+="</table>";
						htmlListTask+="</div>";
					htmlListTask+="</div>";
				htmlListTask+="</td>";
			htmlListTask+="</tr>";
	});
	
	
	$("#listTaskArea-"+tc_code).html(htmlListTask);

}
var addTaskFn = function(uuid,tc_code){


	$.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertTask",
			"tc_code":tc_code,
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
					listTaskFn(data[0]['data'],tc_code);
				}
			}
		}
	});
}

var updateTaskFn = function(uuid,t_code){
	var dataReturn=true;
	$.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updateTask",
			"t_name":$("#t_name-"+t_code).val(),
			"t_day":$("#t_day-"+t_code).val(),
			"t_hour":$("#t_hour-"+t_code).val(),
			"t_minute":$("#t_minute-"+t_code).val(),
			"t_quantity":$("#t_quantity-"+t_code).val(),
			"t_code":t_code,
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']!="200"){
					dataReturn=false;
					//listTaskFn(data[0]['data'],tc_code);
				}
			}
			return dataReturn;
		}
		
	});
}

$(document).ready(function(){
	
	var uuid = new DeviceUUID().get();
	sessionStorage.setItem('uuid', uuid);


   //findOneTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   showTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //updateTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //deleteTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
   //insertTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

	createGauges(1,139);
	createGauges(2,91);
	createGauges(3,83.66);
	createGauges(4,120.5);


	
	

/* Cate Task Start*/


	$("#addTaskModal").click(function(){
		clearFormTaskCateFn();
	});


	 $("#editTaskCateModal").click(function(){
		var tc_id =$(".cate_mc:checked").attr("id");
		tc_id=tc_id.split("-");
		tc_id=tc_id[1];
		
			findOneTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6',tc_id);
	 });


	 $("#cateTaskSubmit").click(function(){
		//alert("cateTaskSubmit");
		if($("#actionTaskCate").val()=="add"){
			insertTaskCateFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
		}else{
			updateTaskCateFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
		}
		
	});

	$("#deleteTaskCate").click(function(){
		
		var tc_id =$(".cate_mc:checked").attr("id");
		tc_id=tc_id.split("-");
		tc_id=tc_id[1];

		deleteTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6',tc_id);
	});
/* Cate Task End*/

/*  Task Start*/

$(document).on("click",".saveTask",function(){
	
	var save_tc_code =$(this).attr("id");
	save_tc_code=save_tc_code.split("-");
	save_tc_code=save_tc_code[1];
	//alert("hello jquery");
	var flagCheck=true;
	$(".task_mc_loop").each(function(index,indexEntry){
		
		var t_code="";
		var tc_code="";
	
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		t_code=data_code[1];
		tc_code=data_code[3];
		
		if(updateTaskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',t_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
	}

});

// $(document).on("click",".addTask",function(){
// 	alert("hello jquery");
// });
$(document).on("click",".addTask",function(){

	clearFormTaskFn();
	var tc_code =$(this).attr("id");
	tc_code=tc_code.split("-");
	tc_code=tc_code[1];

	addTaskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',tc_code);
 });

 $(document).on("click",".delTask",function(){

	var t_code="";
	var tc_code="";

	var data_code =$(".task_mc:checked").attr("id");
	data_code=data_code.split("-");
	t_code=data_code[2];
	tc_code=data_code[4];
	
	deleteTaskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',t_code,tc_code);
 });
/*  Task End*/

});