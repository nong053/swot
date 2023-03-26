var dataJsonForImport="";

$( document ).ajaxStart(function() {
	$("body").mLoading();
});
$( document ).ajaxStop(function() {
	$("body").mLoading('hide');
});
$("body").mLoading();


var clearExampleDataFn = function(){
	$("#actionExample").val("add");
	$("#rce_name").val("");
	$("#rce_id").val("");
	$("#rce_type").prop("selectedIndex", 0);
	$("#message").html("");
	dataJsonForImport="";
	$("#file_import").val("");

	//clear example data value default
	$("#rce_name").css({"border":"#ced4da solid 1px"});
	$("#example_data_alert_text").html("");
	$("#example_data_alert").hide();
	

}

var listRiskFormFn = function(data){
    var htmlFormRisk="";
    $.each(data['dataRisk'],function(index,indexEntry){
        
        htmlFormRisk+="<div  class=\"alert alert-primary mb-3 risk_loop\" id=\"risk_loop-"+indexEntry['r_code']+"\" role=\"alert\">";
            htmlFormRisk+="<input type=\"radio\"  id=\"risk_radio-"+indexEntry['r_code']+"\"  class=\"form-check-input risk_radio\">";
			
			htmlFormRisk+="<div id=\"risk_alert-"+indexEntry['r_code']+"\" class=\" alert alert-warning d-flex1 align-items-center\" style=\"display:none; margin-bottom:15px;margin-top:15px;\" role=\"alert\">";
				htmlFormRisk+="<div id=\"risk_alert_text-"+indexEntry['r_code']+"\"></div>";
			htmlFormRisk+="</div>";

            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<input type=\"text\" class=\"form-control\" id=\"r_code_display-"+indexEntry['r_code']+"\"  placeholder=\"รหัสความเสี่ยง\" value="+indexEntry['r_code_display']+">";
            htmlFormRisk+="</div>";
			htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<input type=\"hidden\" class=\"form-control\" id=\"r_code-"+indexEntry['r_code']+"\"  placeholder=\"รหัส\" value="+indexEntry['r_code']+">";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
            htmlFormRisk+="<textarea  class=\"form-control\" id=\"r_name-"+indexEntry['r_code']+"\" placeholder=\"ชื่อความเสี่ยง\">"+indexEntry['r_name']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"r_description-"+indexEntry['r_code']+"\" placeholder=\"ลักษณะ\">"+indexEntry['r_description']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\"> ";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"r_factor-"+indexEntry['r_code']+"\" placeholder=\"ปัจจัยเสี่ยง\">"+indexEntry['r_factor']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"r_effect-"+indexEntry['r_code']+"\" placeholder=\"ผลกระทบ\">"+indexEntry['r_effect']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<input type=\"text\" class=\"form-control\" id=\"responsible_person-"+indexEntry['r_code']+"\"  placeholder=\"ผู้รับผิดชอบ\" value="+indexEntry['responsible_person']+">";  
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<select  class=\"form-control stm_code_select_area\" id=\"stm_code-"+indexEntry['r_code']+"\">";
                $.each(data['dataStm'],function(indexStm,indexEntryStm){
                    //alert(indexEntryStm['stm_name']);
					if(indexEntryStm['stm_code']==indexEntry['stm_code']){
						htmlFormRisk+="<option selected value="+indexEntryStm['stm_code']+">"+indexEntryStm['stm_name']+"</option>";
					}else{
                    	
                    	htmlFormRisk+="<option value="+indexEntryStm['stm_code']+">"+indexEntryStm['stm_name']+"</option>";
					}
                });
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"duration_of_work-"+indexEntry['r_code']+"\" placeholder=\"ระยะเวลาการปฏิบัติ\">"+indexEntry['duration_of_work']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"guidelines_risk-"+indexEntry['r_code']+"\" placeholder=\"จัดการความเสี่ยง\">"+indexEntry['guidelines_risk']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<select  class=\"form-control lh_code_select_area\" id=\"lh_code-"+indexEntry['r_code']+"\">";
                $.each(data['dataLh'],function(indexLm,indexEntryLh){
					if(indexEntryLh['lh_code']==indexEntry['lh_code']){
						htmlFormRisk+="<option selected value="+indexEntryLh['lh_score']+">"+indexEntryLh['lh_name']+"(ระดับ"+indexEntryLh['lh_score']+")</option>";
					}else{
                    	htmlFormRisk+="<option value="+indexEntryLh['lh_score']+">"+indexEntryLh['lh_name']+"(ระดับ"+indexEntryLh['lh_score']+")</option>";
					}
                });
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<select  class=\"form-control im_code_select_area\" id=\"im_code-"+indexEntry['r_code']+"\">";
                $.each(data['dataIm'],function(indexIm,indexEntryIm){
					if(indexEntryIm['im_code']==indexEntry['im_code']){
						htmlFormRisk+="<option selected value="+indexEntryIm['im_score']+">"+indexEntryIm['im_name']+"(ระดับ"+indexEntryIm['im_score']+")</option>";
					}else{
                    	htmlFormRisk+="<option value="+indexEntryIm['im_score']+">"+indexEntryIm['im_name']+"(ระดับ"+indexEntryIm['im_score']+")</option>";
					}
                });
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
        htmlFormRisk+="</div>";
        
    });
    $("#riskFormArea").html(htmlFormRisk);
}
var listRiskDisplayFn = function(data){
    var htmlRiskDisplay="";
	$(".borderRisk").html("");
    $.each(data['dataRisk'],function(index,indexEntry){
        htmlRiskDisplay+="<tr>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=index+1;
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['r_code_display']+""+indexEntry['r_name'];
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['total_score'];
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['stm_name'];
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['guidelines_risk'];
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['responsible_person'];
			htmlRiskDisplay+="</td>";
			htmlRiskDisplay+="<td>";
				htmlRiskDisplay+=indexEntry['duration_of_work'];
			htmlRiskDisplay+="</td>";
		htmlRiskDisplay+="</tr>";
		//alert(indexEntry['im_score']+"-"+indexEntry['lh_score']);
		$("#risk"+indexEntry['im_score']+""+indexEntry['lh_score']).append(indexEntry['r_code']);
    });
	
    $("#listRiskDataArea").html(htmlRiskDisplay);
}

var riskFormFn = function(uuid){
	
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"showRisk"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
					 listRiskFormFn(data[0]);
					 listRiskDisplayFn(data[0]);
				}
			}
		}
	});
}

var riskAddFn = function(uuid){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertRisk",
            // "r_code":$("#r_code").val(),
            // "r_name":$("#r_name").val(),
            // "r_description":$("#r_description").val(),
            // "r_factor":$("#r_factor").val(),
            // "r_effect":$("#r_effect").val(),
            // "responsible_person":$("#responsible_person").val(),
            // "stm_code":$("#stm_code").val(),
            // "duration_of_work":$("#duration_of_work").val(),
            // "guidelines_risk":$("#guidelines_risk").val(),
            // "lh_code":$("#lh_code").val(),
            // "im_code":$("#im_code").val(),
			// "total_score":"0"
            
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
					// console.log(data[0]['data']);
					listRiskFormFn(data[0]);
					listRiskDisplayFn(data[0]);
				}
			}
		}
	});
}
var clearFormRiskFn = function(){
	$(".risk_radio").prop("checked",false);
}


var deleteRiskFn=function(uuid,r_code){

    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"deleteRisk",
			"r_code":r_code
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					//alert("ok success");
					listRiskFormFn(data[0]);
					listRiskDisplayFn(data[0]);
					
				}
			}
		}
	});
	
}
var riskSaveFn = function(uuid,r_code){


	var total_score=0.00;
	total_score=$("#lh_code-"+r_code).val()*$("#im_code-"+r_code).val();
	
	var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updatedRisk",
			"r_code":r_code,
			"r_code_display":$("#r_code_display-"+r_code).val(),
            "r_seq":$("#r_seq-"+r_code).val(),
            "r_name":$("#r_name-"+r_code).val(),
            "r_description":$("#r_description-"+r_code).val(),
            "r_factor":$("#r_factor-"+r_code).val(),
            "r_effect":$("#r_effect-"+r_code).val(),
            "responsible_person":$("#responsible_person-"+r_code).val(),
            "guidelines_risk":$("#guidelines_risk-"+r_code).val(),
            "duration_of_work":$("#duration_of_work-"+r_code).val(),
            "lh_code":$("#lh_code-"+r_code).val(),
            "im_code":$("#im_code-"+r_code).val(),
            "stm_code":$("#stm_code-"+r_code).val(),
            "total_score":total_score,
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
var stmSelectDataFn_bk=function(uuid){

    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"stmSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    var htmlOptionSTM="";
                    $.each(data[0]['data'],function(index,indexEntry){
                        htmlOptionSTM+="<option value="+indexEntry['stm_code']+">กลยุทธ์การจัดการความเสี่ยง</option>";
                        
                    });
                    $("#stm_code_select_area").html(htmlSTM);
					
				}
			}
		}
	});
	
}
var lhSelectDataFn_bk=function(uuid){

    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"lhSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    var htmlOptionSTM="";
                    $.each(data[0]['data'],function(index,indexEntry){
                        htmlOptionSTM+="<option value="+indexEntry['lh_code']+">โอกาส(5คะแนน)</option>";
                        
                    });
                    $("#lh_code_select_area").html(htmlSTM);
					
				}
			}
		}
	});
	
}
var imSelectDataFn_bk=function(uuid){

    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"imSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    var htmlOptionSTM="";
                    $.each(data[0]['data'],function(index,indexEntry){
                        htmlOptionSTM+="<option value="+indexEntry['im_code']+">ผลกระทบ(5คะแนน)</option>";
                        
                    });
                    $("#im_code_select_area").html(htmlSTM);
					
				}
			}
		}
	});
	
}
//likelihood master
var listLikelihoodMasterFormFn = function(data){
    //console.log(data);
    var htmlEstimatedRiskForm="";
    $.each(data,function(index,indexEntry){

        htmlEstimatedRiskForm+="<div class=\"alert alert-primary mb-3 lh_loop\" id=\"lh_loop-"+indexEntry['lh_code']+"\" role=\"alert\">";

			htmlEstimatedRiskForm+="<div id=\"lh_alert-"+indexEntry['lh_code']+"\" class=\" alert alert-warning d-flex1 align-items-center\" style=\"display:none; margin-bottom:15px;margin-top:15px;\" role=\"alert\">";
				htmlEstimatedRiskForm+="<div id=\"lh_alert_text-"+indexEntry['lh_code']+"\"></div>";
			htmlEstimatedRiskForm+="</div>";

            htmlEstimatedRiskForm+="<div class=\"mb-3\">";               
                htmlEstimatedRiskForm+="<input type=\"text\" class=\"form-control\" id=\"lh_name-"+indexEntry['lh_code']+"\"  placeholder=\"โอกาสที่จะเกิด\" value="+indexEntry['lh_name']+">";
            htmlEstimatedRiskForm+="</div>";
            htmlEstimatedRiskForm+="<div class=\"mb-3\">";
                htmlEstimatedRiskForm+=" <input type=\"text\" class=\"form-control\" id=\"lh_score-"+indexEntry['lh_code']+"\"  disabled placeholder=\"ค่าโอกาส\" value="+indexEntry['lh_score']+">";
            htmlEstimatedRiskForm+="</div>";
            htmlEstimatedRiskForm+="<div class=\"mb-3\">";
                htmlEstimatedRiskForm+="<textarea  class=\"form-control\" id=\"lh_description-"+indexEntry['lh_code']+"\" placeholder=\"คำอธิบาย\">"+indexEntry['lh_description']+"</textarea>";
            htmlEstimatedRiskForm+="</div>";
        htmlEstimatedRiskForm+="</div>";


    });
    $("#estimatedRiskFormArea").html(htmlEstimatedRiskForm);
}
var likelihoodMasterFormFn = function(uuid){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"lhSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
                    listLikelihoodMasterFormFn(data[0]['data']);
				}
			}
		}
	});
}
var listImpactMasterFormFn = function(data){
     //effectRiskFormArea
 var htmlEffectRiskForm="";
 $.each(data,function(index,indexEntry){
 htmlEffectRiskForm+="<div  class=\"alert alert-primary mb-3 im_loop\" id=\"im_loop-"+indexEntry['im_code']+"\" role=\"alert\">";

	htmlEffectRiskForm+="<div id=\"im_alert-"+indexEntry['im_code']+"\" class=\" alert alert-warning d-flex1 align-items-center\" style=\"display:none; margin-bottom:15px;margin-top:15px;\" role=\"alert\">";
		htmlEffectRiskForm+="<div id=\"im_alert_text-"+indexEntry['im_code']+"\"></div>";
	htmlEffectRiskForm+="</div>";

    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"im_name-"+indexEntry['im_code']+"\"  placeholder=\"ผลกระทบ\" value="+indexEntry['im_name']+">";
    htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"im_score-"+indexEntry['im_code']+"\" disabled  placeholder=\"ค่าผลกระทบ\" value="+indexEntry['im_score']+">";
    htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<textarea  class=\"form-control\" id=\"im_description-"+indexEntry['im_code']+"\" placeholder=\"คำอธิบาย\">"+indexEntry['im_description']+"</textarea>";
    htmlEffectRiskForm+="</div>";
 htmlEffectRiskForm+="</div>";
 });
 $("#effectRiskFormArea").html(htmlEffectRiskForm);

}
var impactMasterFormFn = function(uuid){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"imSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    listImpactMasterFormFn(data[0]['data']);
				}
			}
		}
	});
}

var listStrategyTypeMasterFn = function(data){
    //mitigateRisksFormArea
    var htmlMitigateRisksForm="";
    $.each(data,function(index,indexEntry){
        htmlMitigateRisksForm+="<div  class=\"alert alert-primary mb-3 stm_loop\" id=\"stm_loop-"+indexEntry['stm_code']+"\" role=\"alert\">";
          

			htmlMitigateRisksForm+="<div id=\"stm_alert-"+indexEntry['stm_code']+"\" class=\" alert alert-warning d-flex1 align-items-center\" style=\"display:none; margin-bottom:15px;margin-top:15px;\" role=\"alert\">";
				htmlMitigateRisksForm+="<div id=\"stm_alert_text-"+indexEntry['stm_code']+"\"></div>";
			htmlMitigateRisksForm+="</div>";
			
			htmlMitigateRisksForm+="<input type=\"radio\"  name=\"stm_radio\" id=\"stm_radio-"+indexEntry['stm_code']+"\" class=\"form-check-input stm_radio\">";
    		

            htmlMitigateRisksForm+="<div class=\"mb-3\">";
                htmlMitigateRisksForm+="<input type=\"text\" class=\"form-control\" id=\"stm_name-"+indexEntry['stm_code']+"\"   placeholder=\"กลยุทธ์การจัดการความเสี่ยง\" value="+indexEntry['stm_name']+">";
            htmlMitigateRisksForm+="</div>";
            htmlMitigateRisksForm+="<div class=\"mb-3\">";
                htmlMitigateRisksForm+="<textarea  class=\"form-control\" id=\"stm_description-"+indexEntry['stm_code']+"\" placeholder=\"คำอธิบาย\">"+indexEntry['stm_description']+"</textarea>";
            htmlMitigateRisksForm+="</div>";
        htmlMitigateRisksForm+="</div>";
    });

    $("#mitigateRisksFormArea").html(htmlMitigateRisksForm);
}

var displayEvaluationRiskFn = function(data){
    //mitigateRisksFormArea
    var htmlMitigateRisksDisplay="";
    $.each(data,function(index,indexEntry){
        htmlMitigateRisksDisplay+="<tr>";
			htmlMitigateRisksDisplay+="<td>"+indexEntry['re_score_start']+" - "+indexEntry['re_score_end']+"</td>";
			htmlMitigateRisksDisplay+="<td>"+indexEntry['re_name']+"</td>";
			htmlMitigateRisksDisplay+="<td style=\"background-color:"+indexEntry['re_score_color']+"; border: 3px black solid; text-align:center; \"></td>";
		htmlMitigateRisksDisplay+="</tr>";;
    });

    $("#mitigateRisksDisplayArea").html(htmlMitigateRisksDisplay);
}


var listEvaluationRiskFn = function(data){
    //listEvaluationRisk
    var htmlEvaluationRiskForm="";
    $.each(data,function(index,indexEntry){
        htmlEvaluationRiskForm+="<div  class=\"alert alert-primary mb-3 re_loop\" id=\"re_loop-"+indexEntry['re_code']+"\" role=\"alert\">";    
		
		htmlEvaluationRiskForm+="<div id=\"re_alert-"+indexEntry['re_code']+"\" class=\" alert alert-warning d-flex1 align-items-center\" style=\"display:none; margin-bottom:15px;margin-top:15px;\" role=\"alert\">";
			htmlEvaluationRiskForm+="<div id=\"re_alert_text-"+indexEntry['re_code']+"\"></div>";
		htmlEvaluationRiskForm+="</div>";

            htmlEvaluationRiskForm+="<div class=\"mb-3\">";
             htmlEvaluationRiskForm+="<input type=\"text\" class=\"form-control\" id=\"re_name-"+indexEntry['re_code']+"\"  placeholder=\"ระดับความเสี่ยง\" value="+indexEntry['re_name']+">";
            htmlEvaluationRiskForm+="</div>";
            htmlEvaluationRiskForm+="<div class=\"row\">";
                htmlEvaluationRiskForm+="<div class=\"col-md-4\">";
                    htmlEvaluationRiskForm+="<input type=\"text\" class=\"form-control\" id=\"re_score_start-"+indexEntry['re_code']+"\"  placeholder=\"เริ่ม\" value="+indexEntry['re_score_start']+">";
                htmlEvaluationRiskForm+="</div>";
                htmlEvaluationRiskForm+="<div class=\"col-md-4\">";
                    htmlEvaluationRiskForm+="<input type=\"text\" class=\"form-control\" id=\"re_score_end-"+indexEntry['re_code']+"\"  placeholder=\"ถึง\" value="+indexEntry['re_score_end']+">";
                htmlEvaluationRiskForm+="</div>";
                htmlEvaluationRiskForm+="<div class=\"col-md-4\">";
                    htmlEvaluationRiskForm+="<input type=\"text\" class=\"form-control\" id=\"re_score_color-"+indexEntry['re_code']+"\" placeholder=\"พื้นที่สี\" value="+indexEntry['re_score_color']+">";
                htmlEvaluationRiskForm+="</div>";
            htmlEvaluationRiskForm+="</div>";
        htmlEvaluationRiskForm+="</div>";
    });

    $("#evaluationRiskFormArea").html(htmlEvaluationRiskForm);
}


var evaluationRiskFormFn = function(uuid){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"reSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    listEvaluationRiskFn(data[0]['data']);
					displayEvaluationRiskFn(data[0]['data']);
				}
			}
		}
	});
}

var strategyTypeMasterFormFn = function(uuid){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"stmSelectData"
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                    listStrategyTypeMasterFn(data[0]['data']);
				}
			}
		}
	});
}

var likelihoodRiskSaveFn = function(uuid,lh_code){
    var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"likelihoodUpdate",
			"lh_code":lh_code,
            "lh_name":$("#lh_name-"+lh_code).val(),
            "lh_score":$("#lh_score-"+lh_code).val(),
            "lh_description":$("#lh_description-"+lh_code).val(),
          
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

var impactRiskFn = function(uuid,im_code){
    var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"impactRiskUpdate",
			"im_code":im_code,
            "im_name":$("#im_name-"+im_code).val(),
            "im_score":$("#im_score-"+im_code).val(),
            "im_description":$("#im_description-"+im_code).val(),
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
var strategyTypeRiskFn = function(uuid,stm_code){
    var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"strategyTypeRiskUpdate",
			"stm_code":stm_code,
            "stm_name":$("#stm_name-"+stm_code).val(),
            "stm_score":$("#stm_score-"+stm_code).val(),
            "stm_description":$("#stm_description-"+stm_code).val(),
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




var strategyTypeRiskAddFn = function(uuid,stm_code){
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertStrategyTypeRisk",
          
			
            
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
					listStrategyTypeMasterFn(data[0]['data']);
					//listRiskFormFn(data[0]);
			
				}
			}
		}
	});
}
var clearFormStrategyTypeRiskFn = function(){
	$(".stm_radio").prop("checked",false);
}


var strategyTypeRiskDelFn=function(uuid,stm_code){

    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"deleteStrategyTypeRisk",
			"stm_code":stm_code
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					listStrategyTypeMasterFn(data[0]['data']);
				}
			}
		}
	});
	
}



var evaluationRiskFn = function(uuid,re_code){
    var dataReturn=true;
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"evaluationRiskUpdate",
			"re_code":re_code,
            "re_name":$("#re_name-"+re_code).val(),
            "re_score_start":$("#re_score_start-"+re_code).val(),
            "re_score_end":$("#re_score_end-"+re_code).val(),
            "re_score_color":$("#re_score_color-"+re_code).val(),
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
    var rce_type_name = $("#rce_type option:selected").html()

    
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"saveExampleData",
            "rce_type_code":$("#rce_type").val(),
            "rce_type_name":rce_type_name,
			"rce_name":$("#rce_name").val(),
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
					
				}else if(data[0]['status']=="201"){
					$.alert({
						title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
						content: ' ชื่อตัวอย่างข้อมูลนี้มีการใช้งานแล้ว กรุณาใช้ชื่ออื่่น',
					});
				}
			}
		}
	});

}

var listExampleDataFn = function(data){
	
	var htmlExampleData = "";
	$.each(data,function(index,indexEntry){
		
		htmlExampleData+="<tr>";
			htmlExampleData+="<td>"+(index+1)+"</td>";
			htmlExampleData+="<td>"+indexEntry['rce_name']+"</td>";
			htmlExampleData+="<td>"+indexEntry['rce_type_name']+"</td>";
			htmlExampleData+="<td>";
			// if(indexEntry['rce_type_code']!=1){
				htmlExampleData+="<button class=\"btn btn-danger delExampleData\" id=\"delExampleData-"+indexEntry['rce_id']+"\"><i class=\"fa-solid fa-trash \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-warning editExampleData\" id=\"editExampleData-"+indexEntry['rce_id']+"\"><i class=\"fa-solid fa-pencil \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-primary exportExampleData\" id=\"exportExampleData-"+indexEntry['rce_id']+"\"><i class=\"fa-sharp fa-solid fa-download\"></i></button>";
				// }
				htmlExampleData+="</td>";
		htmlExampleData+="</tr>";
	});
	$("#dataExampleArea").html(htmlExampleData);
}

var listExampleLoadDataFn = function(data){
	
	var htmlExampleLoadData="";
	$.each(data,function(index,indexEntry){
		htmlExampleLoadData+="<option value="+indexEntry['rce_id']+">"+indexEntry['rce_name']+"</option>";
	});

	$("#rce_id_load").html(htmlExampleLoadData);
	
}	

var showAllExampleDataUUIDFn = function(uuid){

	$.ajax({
		url:webService+"/Model/action-rm.php",
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
var findOneExampleDataFn = function(uuid,rce_id){

	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"rce_id":rce_id,
			"action":"findOneExampleData",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
				
					$("#rce_type").val(data[0]['data'][0]['rce_type_code']);
					$("#rce_name").val(data[0]['data'][0]['rce_name']);
                    
				}
			}
		}
	});

}

var updateExampleDataFn = function(uuid,rce_id){

	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updateExampleData",
            "rce_type":$("#rce_type").val(),
			"rce_name":$("#rce_name").val(),
			"rce_id":rce_id,
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
var delExampleDataFn = function(uuid,rce_id){

	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"delExampleData",
			"rce_id":rce_id
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
		url:webService+"/Model/action-rm.php",
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
var loadExampleDataFn = function(uuid,rce_id){

    
    $.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"loadExampleData",
            "rce_id":rce_id
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){

					riskFormFn(sessionStorage.getItem('uuid'));
					
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
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"importExampleJsonData",
			"dataRisk":dataJsonForImportObject['dataRisk'],
			"dataStm":dataJsonForImportObject['dataStm'],
			"dataLh":dataJsonForImportObject['dataLh'],
			"dataIm":dataJsonForImportObject['dataIm'],
			"dataRe":dataJsonForImportObject['dataRe']
	
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

var exportExampleDataFn = function(uuid,rce_id){
	$.ajax({
		url:webService+"/Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"rce_id":rce_id,
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
//example management end


var autoLoginFn=function(){
	
    if(sessionStorage.getItem('uuid')=="" || sessionStorage.getItem('uuid')==null) {
		console.log("Can't login");
		return false;
	}
    $.ajax({
		url:webService+"/Model/login-rm.php",
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
								loadExampleDataFn(sessionStorage.getItem('uuid'),1);
							}
						},
						cancel:  {
							text: 'ยกเลิก'
							
						}
					}
				});

				
				
			}else{
				riskFormFn(sessionStorage.getItem('uuid'));
				
				

			}
            
		}
	});
}
var validateRiskFn = function(r_code){
	var validate_flag=true;

	$("#risk_alert-"+r_code).hide();
	$("#risk_alert_text-"+r_code).html("");
	
	if($("#r_code_display-"+r_code).val()=="" || $("#r_code_display-"+r_code).val()==null || $("#r_code_display-"+r_code).val()=='null'){
		validate_flag=false;
		$("#r_code_display-"+r_code).css({"border":"red solid 1px"});
		$("#risk_alert-"+r_code).show();

		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรหัสความเสี่ยง</div>");
		


	}else{

		$("#r_code_display-"+r_code).css({"border":"#ced4da solid 1px"});
		
		
	}


	if($("#r_name-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกชื่อความเสี่ยง</div>");
		$("#r_name-"+r_code).css({"border":"red solid 1px"});

	}else{
	
		$("#r_name-"+r_code).css({"border":"#ced4da solid 1px"});
		
	}

	if($("#r_description-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรายละเอียดความเสี่ยง</div>");
		$("#r_description-"+r_code).css({"border":"red solid 1px"});
	}else{

		$("#r_description-"+r_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#r_factor-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกปัจจัยความเสี่ยง</div>");
		$("#r_factor-"+r_code).css({"border":"red solid 1px"});
	}else{
		
		$("#r_factor-"+r_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#r_effect-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรผลกระทบความเสี่ยง</div>");
		$("#r_effect-"+r_code).css({"border":"red solid 1px"});
	}else{
	
		$("#r_effect-"+r_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#responsible_person-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรหัสความเสี่ยง</div>");
		$("#responsible_person-"+r_code).css({"border":"red solid 1px"});
	}else{
		
		$("#responsible_person-"+r_code).css({"border":"#ced4da solid 1px"});
	}

	

	if($("#duration_of_work-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกระยะเวลาการปฏิบัติ</div>");
		$("#duration_of_work-"+r_code).css({"border":"red solid 1px"});
	}else{

		$("#duration_of_work-"+r_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#guidelines_risk-"+r_code).val()==""){
		validate_flag=false;
		$("#risk_alert-"+r_code).show();
		$("#risk_alert_text-"+r_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรหัสความเสี่ยง</div>");
		$("#guidelines_risk-"+r_code).css({"border":"red solid 1px"});
	}else{

		$("#guidelines_risk-"+r_code).css({"border":"#ced4da solid 1px"});
	}
	
	return validate_flag;
}
var validateLhFn = function(lh_code){
	var validate_flag=true;

	$("#lh_alert-"+lh_code).hide();
	$("#lh_alert_text-"+lh_code).html("");
	
	if($("#lh_name-"+lh_code).val()=="" || $("#lh_name-"+lh_code).val()==null || $("#lh_name-"+lh_code).val()=='null'){
		validate_flag=false;
		$("#lh_name-"+lh_code).css({"border":"red solid 1px"});
		$("#lh_alert-"+lh_code).show();
		$("#lh_alert_text-"+lh_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกโอกาสเกิดความเสี่ยง</div>");
		
	}else{
		$("#lh_name-"+lh_code).css({"border":"#ced4da solid 1px"});
	}
	return validate_flag;
	

}
var validateImFn = function(im_code){
	var validate_flag=true;

	$("#im_alert-"+im_code).hide();
	$("#im_alert_text-"+im_code).html("");
	
	if($("#im_name-"+im_code).val()=="" || $("#im_name-"+im_code).val()==null || $("#im_name-"+im_code).val()=='null'){
		validate_flag=false;
		$("#im_name-"+im_code).css({"border":"red solid 1px"});
		$("#im_alert-"+im_code).show();
		$("#im_alert_text-"+im_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกผลกระทบ</div>");
		
	}else{
		$("#im_name-"+im_code).css({"border":"#ced4da solid 1px"});
	}
	return validate_flag;
}



var validateReFn = function(re_code){
	var validate_flag=true;

	$("#re_alert-"+re_code).hide();
	$("#re_alert_text-"+re_code).html("");
	
	if($("#re_name-"+re_code).val()=="" || $("#re_name-"+re_code).val()==null || $("#re_name-"+re_code).val()=='null'){
		validate_flag=false;
		$("#re_name-"+re_code).css({"border":"red solid 1px"});
		$("#re_alert-"+re_code).show();
		$("#re_alert_text-"+re_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกขื่อระดับความเสี่ยง</div>");
		
	}else{
		$("#re_name-"+re_code).css({"border":"#ced4da solid 1px"});
	}


	if($("#re_score_start-"+re_code).val()=="" || $("#re_score_start-"+re_code).val()==null || $("#re_score_start-"+re_code).val()=='null'){
		validate_flag=false;
		$("#re_score_start-"+re_code).css({"border":"red solid 1px"});
		$("#re_alert-"+re_code).show();
		$("#re_alert_text-"+re_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกค่าความเสี่ยง(เริ่ม)</div>");
		
	}else{
		$("#re_score_start-"+re_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#re_score_end-"+re_code).val()=="" || $("#re_score_end-"+re_code).val()==null || $("#re_score_end-"+re_code).val()=='null'){
		validate_flag=false;
		$("#re_score_end-"+re_code).css({"border":"red solid 1px"});
		$("#re_alert-"+re_code).show();
		$("#re_alert_text-"+re_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกค่าความเสี่ยง(ถึง)</div>");
		
	}else{
		$("#re_score_end-"+re_code).css({"border":"#ced4da solid 1px"});
	}

	if($("#re_score_color-"+re_code).val()=="" || $("#re_score_color-"+re_code).val()==null || $("#re_score_color-"+re_code).val()=='null'){
		validate_flag=false;
		$("#re_score_color-"+re_code).css({"border":"red solid 1px"});
		$("#re_alert-"+re_code).show();
		$("#re_alert_text-"+re_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกสีความเสี่ยง</div>");
		
	}else{
		$("#re_score_color-"+re_code).css({"border":"#ced4da solid 1px"});
	}

	return validate_flag;
}
var validateStmFn = function(stm_code){
	var validate_flag=true;

	$("#stm_alert-"+stm_code).hide();
	$("#stm_alert_text-"+stm_code).html("");
	
	if($("#stm_name-"+stm_code).val()=="" || $("#stm_name-"+stm_code).val()==null || $("#stm_name-"+stm_code).val()=='null'){
		validate_flag=false;
		$("#stm_name-"+stm_code).css({"border":"red solid 1px"});
		$("#re_alert-"+stm_code).show();
		$("#re_alert_text-"+stm_code).append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกกลยุทธ์การ</div>");
		
	}else{
		$("#stm_name-"+stm_code).css({"border":"#ced4da solid 1px"});
	}



	

	return validate_flag;

}

var checkValidateExampleFn  = function(){
	validate=true;
	if($("#rce_name").val()==""){
		validate=false;
		$("#rce_name").css({"border":"red solid 1px"});
		$("#example_data_alert_text").html("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกชื่อข้อมูลตัวอย่าง");
		$("#example_data_alert").show();

	}else{
		$("#rce_name").css({"border":"#ced4da solid 1px"});
		$("#example_data_alert_text").html("");
		$("#example_data_alert").hide();
	}
	return validate;
	

}

$(document).ready(function(){


/*Login Management Start */
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
	
	autoLoginFn();

/*Login Management End */

riskFormFn(sessionStorage.getItem('uuid'));
impactMasterFormFn(sessionStorage.getItem('uuid'));
likelihoodMasterFormFn(sessionStorage.getItem('uuid'));
strategyTypeMasterFormFn(sessionStorage.getItem('uuid'));
evaluationRiskFormFn(sessionStorage.getItem('uuid'));

// stmSelectDataFn(sessionStorage.getItem('uuid'));
// lhSelectDataFn(sessionStorage.getItem('uuid'));
// imSelectDataFn(sessionStorage.getItem('uuid'));

/*risk management start*/
$(document).on("click","#btnRiskSave",function(){
    //alert("btnRiskSave");
    var flagCheck=true;

	$(".risk_loop").each(function(index,indexEntry){
		
		var r_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		r_code=data_code[1];
		
		if(validateRiskFn(r_code)==false){
			flagCheck=false;
		}else if(riskSaveFn(sessionStorage.getItem('uuid'),r_code)==false){
			flagCheck=false;
		}

	});
	
	if(flagCheck==false){

		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
		});
		
	}else if(flagCheck==true){
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
		riskFormFn(sessionStorage.getItem('uuid'));
		$("#OffcanvasClose").click();
	}

});

$(document).on("click","#btnRiskAdd",function(){

    riskAddFn(sessionStorage.getItem('uuid'));

	
 });

 $(document).on("click","#btnRiskDel",function(){
    var risk_code =$(".risk_radio:checked").attr("id");
	
	if(risk_code==undefined){
	
		$.alert({
			title: '<i style="font-size:44px; color:yellow;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning',
			content: ' กรุณาเลือกความเสี่ยงที่ต้องการลบ',
		});

	}else{
		risk_code=risk_code.split("-");
		risk_code=risk_code[1];

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: '',
			buttons: {
				confirm: {
					text: 'ยืนยัน', 
					action: function () {
						deleteRiskFn(sessionStorage.getItem('uuid'),risk_code);
					}
					
				},
				cancel:  {
					text: 'ยกเลิก'
				}
			}
		});
	}
    
 });
/*risk management end*/

/*risk estimate start*/
$("#likelihoodRiskSave").click(function(){
    var flagCheck=true;
	$(".lh_loop").each(function(index,indexEntry){
		
		var lh_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		lh_code=data_code[1];
		
		if(validateLhFn(lh_code)==false){
			flagCheck=false;
		}else if(likelihoodRiskSaveFn(sessionStorage.getItem('uuid'),lh_code)==false){
			flagCheck=false;
		}

	});

	if(flagCheck==true){
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
	}else{
		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
		});
	}
    

});
/*risk estimate end*/


/*risk effectRisk start*/
$("#impactRiskSave").click(function(){
    
    var flagCheck=true;
	$(".im_loop").each(function(index,indexEntry){
		
		var im_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		im_code=data_code[1];

		

		// if(flagCheck==true){
		// 	$.alert({
		// 		title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
		// 		content: 'บันทึกข้อมูลเรียบร้อย',
		// 	});
		// }else if(impactRiskFn(sessionStorage.getItem('uuid'),im_code)==false){
		// 	flagCheck=false;
		// }

		if(validateImFn(im_code)==false){
			flagCheck=false;
		}else if(impactRiskFn(sessionStorage.getItem('uuid'),im_code)==false){
			flagCheck=false;
		}


	});
	
	if(flagCheck==true){
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
	}else{
		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
		});
	}

});
/*risk effectRisk end*/



/*risk mitigate start*/
$("#mitigateRisksSave").click(function(){
     
    var flagCheck=true;
	$(".stm_loop").each(function(index,indexEntry){
		
		var stm_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		stm_code=data_code[1];

		
		// if(strategyTypeRiskFn(sessionStorage.getItem('uuid'),stm_code)==false){
		// 	flagCheck=false;
		// }
		if(validateStmFn(stm_code)==false){
			flagCheck=false;
		}else if(strategyTypeRiskFn(sessionStorage.getItem('uuid'),stm_code)==false){
			flagCheck=false;
		}

	});
	// if(flagCheck==true){
	// 	$.alert({
	// 		title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
	// 		content: 'บันทึกข้อมูลเรียบร้อย',
	// 	});
	// }

	if(flagCheck==true){
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
	}else{
		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
		});
	}

});
$(document).on("click","#mitigateRisAdd",function(){

    strategyTypeRiskAddFn(sessionStorage.getItem('uuid'));

	
 });

 $(document).on("click","#mitigateRisDel",function(){
    var stm_code  =$(".stm_radio:checked").attr("id");

	if(stm_code==undefined){
	
   
	
		$.alert({
			title: '<i style="font-size:44px; color:yellow;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning',
			content: ' กรุณาเลือกกลยุทธ์การที่ต้องการลบ',
		});

	}else{

    stm_code =stm_code .split("-");
    stm_code =stm_code [1];

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: '',
			buttons: {
				confirm: {
					text: 'ยืนยัน', 
					action: function () {
						strategyTypeRiskDelFn(sessionStorage.getItem('uuid'),stm_code);
						
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

/*risk mitigate end*/

/*risk evaluation master start*/
$("#evaluationRiskSave").click(function(){
     
    var flagCheck=true;
	$(".re_loop").each(function(index,indexEntry){
		
		var re_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		re_code=data_code[1];

		
		// if(evaluationRiskFn(sessionStorage.getItem('uuid'),re_code)==false){
		// 	flagCheck=false;
		// }
		if(validateReFn(re_code)==false){
			flagCheck=false;
		}else if(evaluationRiskFn(sessionStorage.getItem('uuid'),re_code)==false){
			flagCheck=false;
		}


	});

	// if(flagCheck==true){
	// 	$.alert({
	// 		title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
	// 		content: 'บันทึกข้อมูลเรียบร้อย',
	// 	});
	// }

	if(flagCheck==true){
		$.alert({
			title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
			content: 'บันทึกข้อมูลเรียบร้อย',
		});
	}else{
		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
		});
	}

});
/*risk  evaluation master start*/

/*load data start here.*/

$("#btnSaveExample").click(function(){
	if(checkValidateExampleFn()==true){

		if($("#actionExample").val()=='add'){
			saveExampleDataFn(sessionStorage.getItem('uuid'));
		}else{
			updateExampleDataFn(sessionStorage.getItem('uuid'),$("#rce_id").val());
		}

	}
});

$("#getExampleModel").click(function(){
    //table show display on list example
	showAllExampleDataUUIDFn(sessionStorage.getItem('uuid'));
    //select on tab load example
    showAllExampleLoadDataFn(sessionStorage.getItem('uuid'));
	clearExampleDataFn();
});
$(document).on("click",".delExampleData",function(){

	var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];

	$.confirm({
		title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
		content: '',
		buttons: {
			confirm: {
				text: 'ยืนยัน', 
				action: function () {
					delExampleDataFn(sessionStorage.getItem('uuid'),rce_id);
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
    var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];
	//alert(rce_id);
	$("#actionExample").val("edit");
	$("#rce_id").val(rce_id);
	findOneExampleDataFn(sessionStorage.getItem('uuid'),rce_id);

 });
 $(document).on("click",".exportExampleData",function(){
    var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];

	exportExampleDataFn(sessionStorage.getItem('uuid'),rce_id);

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

 
 $("#btnLoadExample").click(function(){




	if($("#rce_id_load").val()==undefined || $("#rce_id_load").val()==""){
		$.alert({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
			content: ' ไม่มีข้อมูลตัวอย่าง',
		});
		return false;
	}else{

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: 'คำเตือน!! ควรสำรองข้อมูลก่อน! เนื่องจากข้อมูลเก่าจะถูกลบโดยทันที',
			buttons: {
				confirm: {
					text: 'ยืนยันการโหลดข้อมูล', 
					
					action: function () {

						if($("#file_import").val()==""){
			
							loadExampleDataFn(sessionStorage.getItem('uuid'),$("#rce_id_load").val());
						}else{
						
							importExampleDataJsonFn(sessionStorage.getItem('uuid'),dataJsonForImport);
						}
					}

				},
				cancel:  {
					text: 'ยกเลิก'
				}
			}
		});
	}
	/*
	if($("#file_import").val()==""){
		alert('loadExampleDataFn');
		loadExampleDataFn(sessionStorage.getItem('uuid'),$("#rce_id_load").val());
	}else{
		alert('importExampleDataJsonFn');
		importExampleDataJsonFn(sessionStorage.getItem('uuid'),dataJsonForImport);
	}
	*/
	
 });
 
/*load data end here.*/


/*
search risk from store for edit,del,export
*/
$("#rce_name_find").keyup(function(){
	console.log("search");
	var value = $(this).val().toLowerCase();
    $("#exampleDataTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});


//dowload pdf,excel,print
$("#submitExcel").click(function(){

	$("#tableRiskData").table2excel({
		exclude: ".excludeThisClass",
		name: "Risk Managmente",
		filename: "Risk_Managment.xls", // do include extension
		preserveColors: false // set to true if you want background colors and font colors preserved
	});
});
$("#submitPDF").click(function(){
	location.href = webService+"/Model/mpdf/rm-pdf.php?uuid="+sessionStorage.getItem('uuid')+"";

	// html2canvas($('#tableRiskData')[0], {
	// 	onrendered: function (canvas) {
	// 		var data = canvas.toDataURL();
	// 		var docDefinition = {
	// 			content: [{
	// 				image: data,
	// 				width: 500
	// 			}]
	// 		};
	// 		pdfMake.createPdf(docDefinition).download("risk-management.pdf");
	// 	}
	// });
});
$("#submitPrint").click(function(){
	
	$("#tableRiskData").printThis();
});








});