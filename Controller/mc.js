
var listTaskCate = function(data){

	var htmlListTaskCate="";
	$.each(data['dataTaskCate'],function(index,indexEntryTaskCate){
		htmlListTaskCate+="<div class=\"accordion-item\">";
			htmlListTaskCate+="<h2 class=\"accordion-header\" id=\"flush-heading-"+indexEntryTaskCate['tc_id']+"\">";
				htmlListTaskCate+="<div class=\"mc_checkbox_cate_mc\">";
					htmlListTaskCate+="<input type=\"radio\" id=\"cate_mc-"+indexEntryTaskCate['tc_id']+"\" name=\"cate_mc\" class=\"form-check-input cate_mc\">";
				htmlListTaskCate+="</div>";
					htmlListTaskCate+="<div class=\"mc_cate_mc\">   ";
						htmlListTaskCate+="<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse-"+indexEntryTaskCate['tc_id']+"\" aria-expanded=\"false\" aria-controls=\"flush-collapse-"+indexEntryTaskCate['tc_id']+"\">";
						htmlListTaskCate+=indexEntryTaskCate['tc_name'];
						htmlListTaskCate+="</button> ";
					htmlListTaskCate+="</div>";
				htmlListTaskCate+="<br style=\"clear:both\">";	
			htmlListTaskCate+="</h2>";
			htmlListTaskCate+="<div id=\"flush-collapse-"+indexEntryTaskCate['tc_id']+"\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading-"+indexEntryTaskCate['tc_id']+"\" data-bs-parent=\"#accordionFlushExample\">";
				htmlListTaskCate+="<div class=\"accordion-body\">";
	
				htmlListTaskCate+="<div  class=\"mb-3\">";
					htmlListTaskCate+="<div class=\"row\" style=\"padding:5px;\">";
						htmlListTaskCate+="<div class=\"col-md-12\" style=\"text-align: left; \">";
						htmlListTaskCate+="<button type=\"button\" id=\"saveTask-"+indexEntryTaskCate['tc_id']+"\" class=\"btn btn-success btn-circle sub_mc_btn saveTask\" >";
						htmlListTaskCate+="<i class=\"fa-solid fa-floppy-disk\"></i>";
						htmlListTaskCate+="</button>";
						htmlListTaskCate+="<button   type=\"button\" id=\"addTask-"+indexEntryTaskCate['tc_id']+"\" class=\"btn btn-primary btn-circle sub_mc_btn addTask\"><i class=\"fa-sharp fa-solid fa-plus\"></i></button>";
						htmlListTaskCate+="<button  type=\"button\" id=\"delTask-"+indexEntryTaskCate['tc_id']+"\" class=\"btn btn-danger btn-circle sub_mc_btn delTask\" ><i class=\"fa-sharp fa-solid fa-trash\"></i></button>";
						htmlListTaskCate+="</div>";
						htmlListTaskCate+="</div>";
				htmlListTaskCate+="</div>";

				

				htmlListTaskCate+="<table class=\"table table-striped\">";
				htmlListTaskCate+="<tbody id=\"listTaskArea-"+indexEntryTaskCate['tc_id']+"\" >";
				$.each(data['dataTask'],function(index,indexEntryTask){
					
					if(indexEntryTask['tc_code']==indexEntryTaskCate['tc_code']){

						htmlListTaskCate+="<tr>";
							htmlListTaskCate+="<td class=\"widthSwotName\">";
									htmlListTaskCate+="<input type=\"radio\" name=\"task_mc\" id=\"task_mc-"+indexEntryTask['t_id']+"\" class=\"form-check-input task_mc\">";
									htmlListTaskCate+="<div  class=\"mb-3\" >";
									htmlListTaskCate+="<textarea  class=\"form-control mb-2\" name=\"s_name-"+indexEntryTask['t_id']+"\"  id=\"s_name-"+indexEntryTask['t_id']+"\" placeholder=\"รายละเอียดงาน\"></textarea>";
									htmlListTaskCate+="<div  class=\"mb-3\">";
									htmlListTaskCate+="<table>";
										htmlListTaskCate+="<tr>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_id']+"\" id=\"t_day-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"วัน\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_id']+"\" id=\"t_hour-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"ชั่วโมง\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_id']+"\" id=\"t_minute-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"นาที\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_id']+"\" id=\"t_quantity-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"ครั้ง\">";
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
					listTaskCate(data[0]);
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
var clearFormTaskCate = function(){

	$("#cateTaskName").val("");
	$("#idTaskCate").val("");
	$("#actionTaskCate").val("add");
	$(".cate_mc").prop("checked",false);

}
var clearFormTask = function(){

	$(".task_mc").prop("checked",false);

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
var listTaskFn = function(data,tc_id){

var htmlListTask="";
	$.each(data['dataTask'],function(index,indexEntryTask){
		htmlListTask+="<tr>";
				htmlListTask+="<td class=\"widthSwotName\">";
						htmlListTask+="<input type=\"radio\" name=\"task_mc\" id=\"task_mc-"+indexEntryTask['t_id']+"\" class=\"form-check-input task_mc\">";
						htmlListTask+="<div  class=\"mb-3\" >";
						htmlListTask+="<textarea  class=\"form-control mb-2\" name=\"s_name-"+indexEntryTask['t_id']+"\"  id=\"s_name-"+indexEntryTask['t_id']+"\" placeholder=\"รายละเอียดงาน\"></textarea>";
						htmlListTask+="<div  class=\"mb-3\">";
						htmlListTask+="<table>";
							htmlListTask+="<tr>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_id']+"\" id=\"t_day-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"วัน\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_id']+"\" id=\"t_hour-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"ชั่วโมง\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_id']+"\" id=\"t_minute-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"นาที\">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_id']+"\" id=\"t_quantity-"+indexEntryTask['t_id']+"\" class=\"form-control\" placeholder=\"ครั้ง\">";
								htmlListTask+="</td>";
							htmlListTask+="</tr>";
						htmlListTask+="</table>";
						htmlListTask+="</div>";
					htmlListTask+="</div>";
				htmlListTask+="</td>";
			htmlListTask+="</tr>";
	});

	$("#listTaskArea-"+tc_id).html(htmlListTask);

}
var addTaskFn = function(){


	$.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertTask",
			"tc_code":"tc_code1",
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listTask(data[0]['data'],'tc_code1');
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


	
	

/* Cate Task Start*/


	$("#addTaskModal").click(function(){
		clearFormTaskCate();
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
			insertTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
		}else{
			updateTaskCate('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
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
$(".saveTask").click(function(){
	
	var id =$(this).attr("id");
	id=id.split("-");
	id=id[1];
	alert(id);
});

 $(".addTask").click(function(){
	clearFormTask();
	var id =$(this).attr("id");
	id=id.split("-");
	id=id[1];
	alert(id);
	addTaskFn();
	
	
 });

 $(".delTask").click(function(){
	var id =$(this).attr("id");
	id=id.split("-");
	id=id[1];
	alert(id);
 });
/*  Task End*/

});