var dataJsonForImport="";

$( document ).ajaxStart(function() {
	$("body").mLoading();
});
$( document ).ajaxStop(function() {
	$("body").mLoading('hide');
});
$("body").mLoading();

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
												htmlListTaskCate+=" <label for='t_day-"+indexEntryTask['t_code']+"' class='form-label'>วัน</label>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_code']+"\" id=\"t_day-"+indexEntryTask['t_code']+"\" class=\"form-control number_only\" placeholder=\"วัน\" value=\""+indexEntryTask['t_day']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+=" <label for='t_hour-"+indexEntryTask['t_code']+"' class='form-label'>ชั่วโมง</label>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_code']+"\" id=\"t_hour-"+indexEntryTask['t_code']+"\" class=\"form-control number_only\" placeholder=\"ชั่วโมง\" value=\""+indexEntryTask['t_hour']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+=" <label for='t_minute-"+indexEntryTask['t_code']+"' class='form-label'>นาที</label>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_code']+"\" id=\"t_minute-"+indexEntryTask['t_code']+"\" class=\"form-control number_only\" placeholder=\"นาที\" value=\""+indexEntryTask['t_minute']+"\">";
											htmlListTaskCate+="</td>";
											htmlListTaskCate+="<td>";
												htmlListTaskCate+=" <label for='t_quantity-"+indexEntryTask['t_code']+"' class='form-label'>ครั้ง</label>";
												htmlListTaskCate+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_code']+"\" id=\"t_quantity-"+indexEntryTask['t_code']+"\" class=\"form-control number_only\" placeholder=\"ครั้ง\" value=\""+indexEntryTask['t_quantity']+"\">";
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
				// htmlListTaskCate+="<table>";
				// 	htmlListTaskCate+="<tr>";
				// 		htmlListTaskCate+="<td colspan='4' class=\"widthSwotName\">";
				// 		htmlListTaskCate+=" <label for='current_person-"+indexEntryTaskCate['t_code']+"' class='form-label'>กำลังพล(ปัจจุบัน)</label>";
				// 		htmlListTaskCate+="<input type=\"text\" class=\"form-control\" id=\"current_person-"+indexEntryTaskCate['t_code']+"\" placeholder=\"กำลังพล(ปัจจุบัน)\" value="+indexEntryTaskCate['current_person']+">";
				// 		htmlListTaskCate+="</td>";
				// 	htmlListTaskCate+="</tr>";
				// htmlListTaskCate+="</table>";
				
			htmlListTaskCate+="</div>";
			htmlListTaskCate+="</div>";
		htmlListTaskCate+="</div>";
	});

	$("#accordionFlushExample").html(htmlListTaskCate);
}

var listTaskCateDisplayFn = function(data){
	var htmlGauageChartArea="";
	var htmlDataTableMCDisplay="";
	var totalAllManpower=0.00;
	var totalAllTime=0;
	var totalAllQuantity=0;
	$("#gaugeChartArea").html("");
	$.each(data['dataTaskCate'],function(index,indexEntryTaskCate){
		var tc_name ="";
		if(indexEntryTaskCate['tc_name'].length>20){
			tc_name = indexEntryTaskCate['tc_name'].substring(1,20)+"...";
		}else{
			tc_name=indexEntryTaskCate['tc_name'];
		}
		
		 
		htmlGauageChartArea="";
		htmlGauageChartArea+="<div class=\"col-md-3\">";
			htmlGauageChartArea+="<div class=\"card text-bg-default  mb-3\">";
				htmlGauageChartArea+="<div class=\"card-header\" style=\"text-align: center;\">"+tc_name+"</div>";
				htmlGauageChartArea+="<div class=\"card-body\" style=\"text-align: center; \">";
				htmlGauageChartArea+="<div id=\"gauge"+indexEntryTaskCate['tc_code']+"\" class=\"graph\" ></div>";
				htmlGauageChartArea+="</div>";
			htmlGauageChartArea+="</div>";
		htmlGauageChartArea+="</div>";






		htmlDataTableMCDisplay+="<div class=\"card  mb-3\" >";
			htmlDataTableMCDisplay+="<div class=\"card-header\">"+indexEntryTaskCate['tc_name']+"</div>";
			htmlDataTableMCDisplay+="<div class=\"card-body\">";
				htmlDataTableMCDisplay+="<table class=\"table  table-striped\">";
					htmlDataTableMCDisplay+="<thead>";
						htmlDataTableMCDisplay+="<th class=\"mc_detail\">";
						htmlDataTableMCDisplay+="รายละเอียดงาน";
						htmlDataTableMCDisplay+="</th>";
						htmlDataTableMCDisplay+=" <th class=\"mc_time_unit\">";
						htmlDataTableMCDisplay+="เวลา:หน่วย";
						htmlDataTableMCDisplay+="</th>";
						htmlDataTableMCDisplay+="<th class=\"mc_workload_year\">";
						htmlDataTableMCDisplay+="ปริมาณงาน:ครั้ง";
						htmlDataTableMCDisplay+=" </th>";
						htmlDataTableMCDisplay+="<th class=\"mc_manpower_year\">";
						htmlDataTableMCDisplay+="อัตรากำลัง:ปี";
						htmlDataTableMCDisplay+="</th>";
					htmlDataTableMCDisplay+="</thead>";
					htmlDataTableMCDisplay+="<tbody>";
					var totalManpowerByCate=0.00;
					$.each(data['dataTask'],function(index,indexEntryTask){
						if(indexEntryTaskCate['tc_code']==indexEntryTask['tc_code']){
							htmlDataTableMCDisplay+="<tr>";
								htmlDataTableMCDisplay+="<td class=\"mc_detail\">";
								htmlDataTableMCDisplay+=indexEntryTask['t_name'];
								htmlDataTableMCDisplay+=" </td>";
								htmlDataTableMCDisplay+="<td class=\"mc_time_unit\">"+commaSeparateNumber(indexEntryTask['t_x_time'])+"</td>";
								htmlDataTableMCDisplay+="<td class=\"mc_workload_year\">"+commaSeparateNumber(indexEntryTask['t_quantity'])+"</td>";
								htmlDataTableMCDisplay+="<td class=\"mc_manpower_year\">"+commaSeparateNumber(indexEntryTask['manpower'])+"</td>";
								totalManpowerByCate+=(+indexEntryTask['manpower']);
								totalAllManpower+=(+indexEntryTask['manpower']);
								totalAllTime+=(+indexEntryTask['t_x_time']);
								totalAllQuantity+=(+indexEntryTask['t_quantity']);
							htmlDataTableMCDisplay+="</tr>";

						}
					});
					htmlDataTableMCDisplay+="<tr style=\"background-color:antiquewhite;\">";
						htmlDataTableMCDisplay+="<td colspan=\"3\">อัตรากำลังพล</td>";
						
						htmlDataTableMCDisplay+="<td class=\"mc_footer_sumary\">"+commaSeparateNumber(parseFloat(totalManpowerByCate).toFixed(2))+"/"+indexEntryTaskCate['current_person']+"</td>";
					htmlDataTableMCDisplay+="</tr>";
								
					htmlDataTableMCDisplay+="</tbody>";
				htmlDataTableMCDisplay+="</table>";
			htmlDataTableMCDisplay+="</div>";
		htmlDataTableMCDisplay+="</div>";
		$("#gaugeChartArea").append(htmlGauageChartArea);
		//alert(totalManpowerByCate+"-"+indexEntryTaskCate['current_person']);
		//alert((totalManpowerByCate/indexEntryTaskCate['current_person'])*100);
		createGauges(indexEntryTaskCate['tc_code'],((totalManpowerByCate/indexEntryTaskCate['current_person']))*100);
	});
	

	


	$("#dataTableMCDisplay").html(htmlDataTableMCDisplay);
	$("#totalTime").html(commaSeparateNumber(totalAllTime));
	$("#totalQuantity").html(commaSeparateNumber(totalAllQuantity));
	$("#totalManPower").html(commaSeparateNumber(parseFloat(totalAllManpower).toFixed(2)));


	
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

var findOneTaskCate=function(uuid,tc_code){
	
    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"tc_code":tc_code,
			"action":"findOneCate",
		},
		success:function(data){
	
			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					$("#cateTaskName").val(data[0]['data'][0]['tc_name']);
					$("#currentPerson").val(data[0]['data'][0]['current_person']);
					$("#idTaskCate").val(data[0]['data'][0]['tc_code']);
					$("#actionTaskCate").val("edit");
				}
			}
		}
	});
	
}


var showTaskCate=function(uuid,showDisplayOnly){

    $.ajax({
		url:webService+"/Model/action-mc.php",
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
					if(showDisplayOnly==true){
						listTaskCateDisplayFn(data[0]);
					}else{
						listTaskCateFn(data[0]);
						listTaskCateDisplayFn(data[0]);
					}
				}
			}
		}
	});
	
}
var updateTaskCateFn=function(uuid){

    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updatedCate",
			"tc_name":$("#cateTaskName").val(),
			"current_person":$("#currentPerson").val(),
			"tc_code":$("#idTaskCate").val(),
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					//location.reload();
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'แก้ไขข้อมูลเรียบร้อย',
					});
					listTaskCateFn(data[0]);
					listTaskCateDisplayFn(data[0]);
					clearFormTaskCateFn();

				}
			}
		}
	});
	
}
var deleteTaskCate=function(uuid,tc_code){

    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"deleteCate",
			"tc_code":tc_code
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listTaskCateFn(data[0]);
					listTaskCateDisplayFn(data[0]);
				}
			}
		}
	});
	
}
var deleteTaskFn=function(uuid,t_code,tc_code){

    $.ajax({
		url:webService+"/Model/action-mc.php",
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
	$("#currentPerson").val("");
	$("#idTaskCate").val("");
	$("#actionTaskCate").val("add");
	$(".cate_mc").prop("checked",false);


	//clear example data value default
	$("#cateTaskName").css({"border":"#ced4da solid 1px"});
	$("#currentPerson").css({"border":"#ced4da solid 1px"});
	$("#cate_task_alert_text").html("");
	$("#cate_task_alert").hide();
	

}
var clearFormTaskFn = function(){

	$(".task_mc").prop("checked",false);

}


var insertTaskCateFn=function(uuid){

    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertTaskCate",
			"tc_name":$("#cateTaskName").val(),
			"current_person":$("#currentPerson").val(),
			
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'บันทึกข้อมูลเรียบร้อย',
					});
					clearFormTaskCateFn();
					listTaskCateFn(data[0]);
					listTaskCateDisplayFn(data[0]);
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
						htmlListTask+="<textarea  class=\"form-control mb-2 \" name=\"t_name-"+indexEntryTask['t_code']+"\"  id=\"t_name-"+indexEntryTask['t_code']+"\" placeholder=\"รายละเอียดงาน\">"+indexEntryTask['t_name']+"</textarea>";
						htmlListTask+="<div  class=\"mb-3\">";
						htmlListTask+="<table>";
							htmlListTask+="<tr>";
								htmlListTask+="<td>";
									htmlListTask+=" <label for='t_day-"+indexEntryTask['t_code']+"' class='form-label'>วัน</label>";
									htmlListTask+="<input type=\"text\" name=\"t_day-"+indexEntryTask['t_code']+"\" id=\"t_day-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"วัน\" value="+indexEntryTask['t_day']+">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+=" <label for='t_hour-"+indexEntryTask['t_code']+"' class='form-label'>ชั่วโมง</label>";
									htmlListTask+="<input type=\"text\" name=\"t_hour-"+indexEntryTask['t_code']+"\" id=\"t_hour-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ชั่วโมง\" value="+indexEntryTask['t_hour']+">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+=" <label for='t_minute-"+indexEntryTask['t_code']+"' class='form-label'>นาที</label>";
									htmlListTask+="<input type=\"text\" name=\"t_minute-"+indexEntryTask['t_code']+"\" id=\"t_minute-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"นาที\" value="+indexEntryTask['t_minute']+">";
								htmlListTask+="</td>";
								htmlListTask+="<td>";
									htmlListTask+=" <label for='t_quantity-"+indexEntryTask['t_code']+"' class='form-label'>ครั้ง</label>";
									htmlListTask+="<input type=\"text\" name=\"t_quantity-"+indexEntryTask['t_code']+"\" id=\"t_quantity-"+indexEntryTask['t_code']+"\" class=\"form-control\" placeholder=\"ครั้ง\" value="+indexEntryTask['t_quantity']+">";
								htmlListTask+="</td>";
							htmlListTask+="</tr>";
							// htmlListTask+="<tr>";
							// 	htmlListTask+="<td colspan='4' class=\"widthSwotName\">";
							// 	htmlListTask+=" <label for='current_person-"+indexEntryTask['t_code']+"' class='form-label'>กำลังพล(ปัจจุบัน)</label>";
							// 		htmlListTask+="<input type=\"text\" class=\"form-control\" id=\"current_person-"+indexEntryTask['t_code']+"\" placeholder=\"กำลังพล(ปัจจุบัน)\">";
							// 	htmlListTask+="</td>";
							// htmlListTask+="</tr>";
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
		url:webService+"/Model/action-mc.php",
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
	var t_x_time=0.00;
	var manpower=0.00;
	var t_day=parseInt($("#t_day-"+t_code).val());
	var t_hour=parseInt($("#t_hour-"+t_code).val());
	var t_minute=parseInt($("#t_minute-"+t_code).val());
	var t_quantity=parseInt($("#t_quantity-"+t_code).val());


	if(t_day=="" || t_day==undefined){
		t_day=0;
	}

	if( t_hour=="" || t_hour==undefined){
		t_hour=0;
	}

	if( t_minute=="" || t_minute==undefined){
		t_minute=0;
	}

	if(t_quantity=="" || t_quantity==undefined){
		t_quantity=0;
	}

	t_x_time=((t_day*7)+(t_hour)+(t_minute/60))*t_quantity;

	


	//t_x_time=(t_day*t_hour*t_minute*t_minute*t_quantity);
	manpower=parseFloat(t_x_time/88200).toFixed(2);
	// alert(manpower);
	
	var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updateTask",
			"t_name":$("#t_name-"+t_code).val(),
			"t_day":t_day,
			"t_hour":t_hour,
			"t_minute":t_minute,
			"t_quantity":t_quantity,
			"t_x_time":t_x_time,
			"manpower":manpower,
			"current_person":$("#current_person-"+t_code).val(),
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



// example management start
var saveExampleDataFn = function(uuid){
    var mc_release_type_name = $("#mc_release_type_code option:selected").html()

    
	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"saveExampleData",
            "mc_release_type_code":$("#mc_release_type_code").val(),
            "mc_release_type_name":mc_release_type_name,
			"mc_name":$("#mc_name").val(),
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
			
				

				if(data[0]['status']=="200"){
			
					//alert("OK");
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'บันทึกข้อมูลเรียบร้อย',
					});
					listExampleDataFn(data[0]['data']);
					clearExampleDataFn();
					
				}else if(data[0]['status']=="403"){
					$.alert({
						title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
						content: ' ชื่อตัวอย่างข้อมูลนี้มีการใช้งานแล้ว กรุณาใช้ชื่ออื่่น',
					});
				}

				//alert("OK");
				//listExampleDataFn(data[0]['data']);
				
			}
		}
	});

}

var listExampleDataFn = function(data){
	
	var htmlExampleData = "";
	$.each(data,function(index,indexEntry){
		
		htmlExampleData+="<tr>";
			htmlExampleData+="<td>"+(index+1)+"</td>";
			htmlExampleData+="<td>"+indexEntry['mc_name']+"</td>";
			htmlExampleData+="<td>"+indexEntry['mc_release_type_name']+"</td>";
			htmlExampleData+="<td>";
			// if(indexEntry['rce_type_code']!=1){
				htmlExampleData+="<button class=\"btn btn-danger delExampleData\" id=\"delExampleData-"+indexEntry['mc_id']+"\"><i class=\"fa-solid fa-trash \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-warning editExampleData\" id=\"editExampleData-"+indexEntry['mc_id']+"\"><i class=\"fa-solid fa-pencil \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-primary exportExampleData\" id=\"exportExampleData-"+indexEntry['mc_id']+"\"><i class=\"fa-sharp fa-solid fa-download\"></i></button>";
				// }
				htmlExampleData+="</td>";
		htmlExampleData+="</tr>";
	});
	$("#dataExampleArea").html(htmlExampleData);
}

var listExampleLoadDataFn = function(data){
	
	var htmlExampleLoadData="";
	$.each(data,function(index,indexEntry){
		htmlExampleLoadData+="<option value="+indexEntry['mc_id']+">"+indexEntry['mc_name']+"</option>";
	});

	$("#mc_id_load").html(htmlExampleLoadData);
	
}	

var showAllExampleDataUUIDFn = function(uuid){

	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"showAllExampleDataByUuid",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
				
                   
					listExampleDataFn(data[0]['data']);
				}
			}
		}
	});

}

var findOneExampleDataFn = function(uuid,mc_id){

	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"mc_id":mc_id,
			"action":"findOneExampleData",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
				
					$("#mc_release_type_code").val(data[0]['data'][0]['mc_release_type_code']);
					$("#mc_name").val(data[0]['data'][0]['mc_name']);
                    
				}
			}
		}
	});

}

var updateExampleDataFn = function(uuid,mc_id){
	var mc_release_type_name = $("#mc_release_type_code option:selected").html()
	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updateExampleData",
            "mc_release_type_code":$("#mc_release_type_code").val(),
			"mc_release_type_name":mc_release_type_name,
			"mc_name":$("#mc_name").val(),
			"mc_id":mc_id,
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
				
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'แก้ไขข้อมูลเรียบร้อย',
					});
					listExampleDataFn(data[0]['data']);
					clearExampleDataFn();
				}
			}
		}
	});

}

var delExampleDataFn = function(uuid,mc_id){

	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"delExampleData",
			"mc_id":mc_id
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
				
                    
					listExampleDataFn(data[0]['data']);
				}
			}
		}
	});

}
//LOAD DATA START
var showAllExampleLoadDataFn = function(uuid){
	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"showAllExampleLoadData",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					listExampleLoadDataFn(data[0]['data']);
				}
			}
		}
	});

}
//LOAD DATA END
var loadExampleDataFn = function(uuid,mc_id){

    
    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"loadExampleData",
            "mc_id":mc_id
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){

					//alert("ok");
					showTaskCate(sessionStorage.getItem('uuid'));
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'โหลดข้อมูลตัวอย่างเรียบร้อย',
					});
				}
			}
		}
	});
    

}



function getFile (elm) {
	new Response(elm.files[0]).json().then(json => {
	  console.log(json)
	}, err => {
	  // not json
	})
  }

  function processFiles(files) {
	var file = files[0];

	var message = document.getElementById("message");
	message.innerHTML = "File Name：" + file.name + "<br>";
	message.innerHTML += "File Size：" + file.size + "<br>";
	message.innerHTML += "File Type：" + file.type + "<br>";

	var reader = new FileReader();
	reader.onload = function (e) {

		dataJsonForImport=e.target.result;
		/*
	  var output = document.getElementById("fileOutput");  
	  output.textContent = JSON.parse(e.target.result);
	  console.log(e.target.result);
	  */


	};
	reader.readAsText(file);
  }

var importExampleDataJsonFn = function(uuid,dataJsonForImport){


	var dataJsonForImportObject=eval("("+dataJsonForImport+")");
	

    
    $.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"importExampleJsonData",
			"dataTaskCate":dataJsonForImportObject['dataTaskCate'],
			"dataTask":dataJsonForImportObject['dataTask'],
			
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					alert("ok");
				}
			}
		}
	});
    

}


function exportToJsonFile(jsonData) {
    let dataStr = JSON.stringify(jsonData);
    let dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);

    let exportFileDefaultName = 'data.json';

    let linkElement = document.createElement('a');
    linkElement.setAttribute('href', dataUri);
    linkElement.setAttribute('download', exportFileDefaultName);
    linkElement.click();
}

var exportExampleDataFn = function(uuid,mc_id){
	$.ajax({
		url:webService+"/Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"mc_id":mc_id,
			"action":"exportExampleData",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
				console.log(data[0]);
				exportToJsonFile(data[0]);
					
                    
				}
			}
		}
	});
}
var clearExampleDataFn = function(){
	$("#actionExample").val("add");
	$("#mc_id").val("");
	$("#mc_name").val("");
	$("#mc_release_type_code").prop("selectedIndex", 0);
	$("#message").html("");
	dataJsonForImport="";
	$("#file_import").val("");

	//clear example data value default
	$("#mc_name").css({"border":"#ced4da solid 1px"});
	$("#example_data_alert_text").html("");
	$("#example_data_alert").hide();

}

//example management end

var autoLoginFn=function(){
	
    if(sessionStorage.getItem('uuid')=="" || sessionStorage.getItem('uuid')==null) {
		console.log("Can't login");
		return false;
	}
    $.ajax({
		url:webService+"/Model/login-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":sessionStorage.getItem('uuid'),
		},
		success:function(data){

		
			if(data[0]['loginType']=="newUser"){
				
				$.confirm({
					title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> โหลดข้อมูลตัวอย่างหรือไม่?',
					content: '',
					buttons: {
						confirm: {
							text: 'ยืนยันการโหลดข้อมูล', 
							action: function () {
								loadExampleDataFn(sessionStorage.getItem('uuid'),11);
							}
						},
						cancel:  {
							text: 'ยกเลิก'
							
						}
					}
				});

				
				
			}else{
				
				showTaskCate(sessionStorage.getItem('uuid'));
				
				

			}
            
		}
	});
}
var checkValidateExampleFn  = function(){
	validate=true;
	if($("#mc_name").val()==""){
		validate=false;
		$("#mc_name").css({"border":"red solid 1px"});
		$("#example_data_alert_text").html("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกชื่อข้อมูลตัวอย่าง");
		$("#example_data_alert").show();

	}else{
		$("#mc_name").css({"border":"#ced4da solid 1px"});
		$("#example_data_alert_text").html("");
		$("#example_data_alert").hide();
	}
	return validate;
}
var checkValidateCateTaskFn  = function(){
	validate=true;
	$("#cate_task_alert_text").html("");
	$("#example_data_alert").hide();

	if($("#cateTaskName").val()==""){
		validate=false;
		$("#cateTaskName").css({"border":"red solid 1px"});
		$("#cate_task_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกชื่อภารกิจ</div>");
		$("#cate_task_alert").show();

	}else{
		$("#cateTaskName").css({"border":"#ced4da solid 1px"});
	
	}

	if($("#currentPerson").val()==""){
		validate=false;
		$("#currentPerson").css({"border":"red solid 1px"});
		$("#cate_task_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกกำลังพล</div>");
		$("#cate_task_alert").show();

	}else{
		$("#currentPerson").css({"border":"#ced4da solid 1px"});
		
	}

	
	return validate;
	

}

$(document).ready(function(){
	/*
	var uuid = new DeviceUUID().get();
	sessionStorage.setItem('uuid', uuid);
	*/
/*Login Management Start */
/*
var du = new DeviceUUID().parse();
var dua = [
	du.language,
	du.platform,
	du.os,
	du.cpuCores,
	du.isAuthoritative,
	du.silkAccelerated,
	du.isKindleFire,
	du.isDesktop,
	du.isMobile,
	du.isTablet,
	du.isWindows,
	du.isLinux,
	du.isLinux64,
	du.isMac,
	du.isiPad,
	du.isiPhone,
	du.isiPod,
	du.isSmartTV,
	du.pixelDepth,
	du.isTouchScreen
];
var uuid = du.hashMD5(dua.join(':'));
sessionStorage.setItem('uuid', uuid);
*/

autoLoginFn();

/*Login Management End */


   showTaskCate(sessionStorage.getItem('uuid'));


	



/* Cate Task Start*/


	$("#addTaskModal").click(function(){
		clearFormTaskCateFn();
	});


	 $("#editTaskCateModal").click(function(){
		var tc_code =$(".cate_mc:checked").attr("id");
		tc_code=tc_code.split("-");
		tc_code=tc_code[1];
		
			findOneTaskCate(sessionStorage.getItem('uuid'),tc_code);
	 });


	 $("#cateTaskSubmit").click(function(){
		
		if(checkValidateCateTaskFn()==true){
			if($("#actionTaskCate").val()=="add"){
				insertTaskCateFn(sessionStorage.getItem('uuid'));
			}else{
				updateTaskCateFn(sessionStorage.getItem('uuid'));
			}
		}
		
	});

	$("#deleteTaskCate").click(function(){
		
		var tc_code =$(".cate_mc:checked").attr("id");
		


		if(tc_code==undefined){
	
			$.alert({
				title: '<i style="font-size:44px; color:yellow;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning',
				content: ' กรุณาเลือกความเสี่ยงที่ต้องการลบ',
			});
	
		}else{

			tc_code=tc_code.split("-");
			tc_code=tc_code[1];
	
			$.confirm({
				title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
				content: '',
				buttons: {
					confirm: {
						text: 'ยืนยัน', 
						action: function () {
							deleteTaskCate(sessionStorage.getItem('uuid'),tc_code);
						}
						
					},
					cancel:  {
						text: 'ยกเลิก'
					}
				}
			});
		}

		
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
		
		if(updateTaskFn(sessionStorage.getItem('uuid'),t_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		//alert("ok");
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
		showTaskCate(sessionStorage.getItem('uuid'),showDisplayOnly=true);
		
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

	addTaskFn(sessionStorage.getItem('uuid'),tc_code);
	
	
 });

 $(document).on("click",".delTask",function(){

	var t_code="";
	var tc_code="";

	var data_code =$(".task_mc:checked").attr("id");
	

	if(data_code==undefined){
	
		$.alert({
			title: '<i style="font-size:44px; color:yellow;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning',
			content: ' กรุณาเลือกงานที่ต้องการลบ',
		});

	}else{

	data_code=data_code.split("-");
	t_code=data_code[2];
	tc_code=data_code[4];

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: '',
			buttons: {
				confirm: {
					text: 'ยืนยัน', 
					action: function () {
						deleteTaskFn(sessionStorage.getItem('uuid'),t_code,tc_code);
						
					}

				
					
				},
				cancel:  {
					text: 'ยกเลิก'
					//$("#exampleModel").modal('hide');
				}
			}
		});
	}

	
	
 });
/*  Task End*/


$("#submitPrint").click(function(){
		
	$("#dataTableMCDisplay").printThis();
});
$("#submitPDF").click(function(){
	location.href = webService+"/Model/mpdf/mc-pdf.php?uuid="+sessionStorage.getItem('uuid')+"";
});


//action example management start
$("#getExampleModel").click(function(){
    //table show display on list example
	showAllExampleDataUUIDFn(sessionStorage.getItem('uuid'));
    //select on tab load example
    showAllExampleLoadDataFn(sessionStorage.getItem('uuid'));
	clearExampleDataFn();
});

$(document).on("click",".delExampleData",function(){

	var mc_id = this.id;
	mc_id=mc_id.split("-");
	mc_id=mc_id[1];
	$.confirm({
		title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
		content: '',
		buttons: {
			confirm: {
				text: 'ยืนยัน', 
				action: function () {
					delExampleDataFn(sessionStorage.getItem('uuid'),mc_id);
				}

			
				
			},
			cancel:  {
				text: 'ยกเลิก'
				//$("#exampleModel").modal('hide');
			}
		}
	});


	

 });
 $(document).on("click",".editExampleData",function(){
    var mc_id = this.id;
	mc_id=mc_id.split("-");
	mc_id=mc_id[1];
	//alert(mc_id);
	$("#actionExample").val("edit");
	$("#mc_id").val(mc_id);
	findOneExampleDataFn(sessionStorage.getItem('uuid'),mc_id);

 });
 $(document).on("click",".exportExampleData",function(){
    var mc_id = this.id;
	mc_id=mc_id.split("-");
	mc_id=mc_id[1];

	exportExampleDataFn(sessionStorage.getItem('uuid'),mc_id);

 });

 






 $("#home-tab").click(function(){
	//alert("TAB1");
	clearExampleDataFn();
	$("#btnLoadExample").show();
	$("#btnSaveExample").hide();

	
 });
 $("#profile-tab").click(function(){
	//alert("TAB2");
	clearExampleDataFn();
	$("#btnLoadExample").hide();
	$("#btnSaveExample").show();
	
 });
/*load data start here.*/
 $("#btnLoadExample").click(function(){
	if($("#file_import").val()==""){
		alert('loadExampleDataFn');
		loadExampleDataFn(sessionStorage.getItem('uuid'),$("#mc_id_load").val());
	}else{
		alert('importExampleDataJsonFn');
		importExampleDataJsonFn(sessionStorage.getItem('uuid'),dataJsonForImport);
	}
	
 });
 /*load data end here.*/

//action save,update start
$("#btnSaveExample").click(function(){
	if(checkValidateExampleFn()==true){
		if($("#actionExample").val()=='add'){
			saveExampleDataFn(sessionStorage.getItem('uuid'));
		}else{
			updateExampleDataFn(sessionStorage.getItem('uuid'),$("#mc_id").val());
		}
	}
});
//action save,update end

/*
search risk from store for edit,del,export
*/
$("#mc_name_find").keyup(function(){
	console.log("search");
	var value = $(this).val().toLowerCase();
    $("#exampleDataTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

});