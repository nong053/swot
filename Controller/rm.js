var dataJsonForImport="";

var listRiskFormFn = function(data){
    var htmlFormRisk="";
    $.each(data['dataRisk'],function(index,indexEntry){
        
        htmlFormRisk+="<div  class=\"alert alert-primary mb-3 risk_loop\" id=\"risk_loop-"+indexEntry['r_code']+"\" role=\"alert\">";
            htmlFormRisk+="<input type=\"radio\"  id=\"risk_radio-"+indexEntry['r_code']+"\"  class=\"form-check-input risk_radio\">";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<input type=\"text\" class=\"form-control\" id=\"r_code-"+indexEntry['r_code']+"\"  placeholder=\"รหัส\" value="+indexEntry['r_code']+">";
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
				htmlRiskDisplay+=indexEntry['r_code']+""+indexEntry['r_name'];
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"insertRisk",
            "r_code":$("#r_code").val(),
            "r_name":$("#r_name").val(),
            "r_description":$("#r_description").val(),
            "r_factor":$("#r_factor").val(),
            "r_effect":$("#r_effect").val(),
            "responsible_person":$("#responsible_person").val(),
            "stm_code":$("#stm_code").val(),
            "duration_of_work":$("#duration_of_work").val(),
            "guidelines_risk":$("#guidelines_risk").val(),
            "lh_code":$("#lh_code").val(),
            "im_code":$("#im_code").val(),
			"total_score":"5"
            
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updatedRisk",
			"r_code":r_code,
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
                // htmlEstimatedRiskForm+="<input type=\"radio\"  id=\"lh_radio="+indexEntry['lh_code']+"\" class=\"form-check-input lh_radio\">";
            // htmlEstimatedRiskForm+="<div class=\"mb-3\">";
            //     htmlEstimatedRiskForm+="<input type=\"text\" class=\"form-control\" id=\"lh_code\"  placeholder=\"รหัส\">";
            // htmlEstimatedRiskForm+="</div>";
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
		url:"./Model/action-rm.php",
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
//  htmlEffectRiskForm+="<input type=\"radio\"  id=\"XX\" class=\"form-check-input rm_radio\">";
    // htmlEffectRiskForm+="<div class=\"mb-3\">";
    //     htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"รหัส\">";
    // htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"im_name-"+indexEntry['im_code']+"\"  placeholder=\"ความรุนแรง\" value="+indexEntry['im_name']+">";
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
		url:"./Model/action-rm.php",
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
            // htmlMitigateRisksForm+="<div class=\"mb-3\">";
            //     htmlMitigateRisksForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"รหัส\">";
            // htmlMitigateRisksForm+="</div>";
			
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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


var saveExampleDataFn = function(uuid){
    var rce_type_name = $("#rce_type option:selected").html()

    
	$.ajax({
		url:"./Model/action-rm.php",
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
				
                    alert("OK");
					//listTaskFn(data[0]['data'],tc_code);
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
				
              
					listExampleDataFn(data[0]['data']);
				}
			}
		}
	});

}
var delExampleDataFn = function(uuid,rce_id){

	$.ajax({
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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
var loadExampleDataFn = function(uuid){

    
    $.ajax({
		url:"./Model/action-rm.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"loadExampleData",
            "rce_id":$("#rce_id_load").val()
	
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
		url:"./Model/action-rm.php",
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
		url:"./Model/action-rm.php",
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

$(document).ready(function(){


riskFormFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
impactMasterFormFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
likelihoodMasterFormFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
strategyTypeMasterFormFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
evaluationRiskFormFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

// stmSelectDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
// lhSelectDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
// imSelectDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

/*risk management start*/
$(document).on("click","#btnRiskSave",function(){
    //alert("btnRiskSave");
    var flagCheck=true;
	$(".risk_loop").each(function(index,indexEntry){
		
		var r_code="";
		var data_code =$(this).attr('id');
		data_code=data_code.split("-");
		r_code=data_code[1];

		
		if(riskSaveFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',r_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
	}

});

$(document).on("click","#btnRiskAdd",function(){

    riskAddFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

	
 });

 $(document).on("click","#btnRiskDel",function(){
    var risk_code =$(".risk_radio:checked").attr("id");
    risk_code=risk_code.split("-");
    risk_code=risk_code[1];
    //alert(risk_code);
    deleteRiskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',risk_code);
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

		
		if(likelihoodRiskSaveFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',lh_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
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

		
		if(impactRiskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',im_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
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

		
		if(strategyTypeRiskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',stm_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
	}
});
$(document).on("click","#mitigateRisAdd",function(){

    strategyTypeRiskAddFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');

	
 });

 $(document).on("click","#mitigateRisDel",function(){
    var stm_code  =$(".stm_radio:checked").attr("id");
    stm_code =stm_code .split("-");
    stm_code =stm_code [1];
    strategyTypeRiskDelFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',stm_code);
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

		
		if(evaluationRiskFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',re_code)==false){
			flagCheck=false;
		}

	});
	if(flagCheck==true){
		alert("ok");
	}
});
/*risk  evaluation master start*/

/*load data start here.*/
var clearExampleDataFn = function(){
	$("#actionExample").val("add");
	$("#rce_name").val("");
	$("#rce_id").val("");
	$("#rce_type").prop("selectedIndex", 0);
	$("#message").html("");
	dataJsonForImport="";
	$("#file_import").val("");

}
$("#btnSaveExample").click(function(){
	if($("#actionExample").val()=='add'){
		saveExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
	}else{
		updateExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',$("#rce_id").val());
	}
});

$("#getExampleModel").click(function(){
    //table show display on list example
	showAllExampleDataUUIDFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
    //select on tab load example
    showAllExampleLoadDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
	clearExampleDataFn();
});
$(document).on("click",".delExampleData",function(){

	var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];

	delExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',rce_id);

 });
 $(document).on("click",".editExampleData",function(){
    var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];
	//alert(rce_id);
	$("#actionExample").val("edit");
	$("#rce_id").val(rce_id);
	findOneExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',rce_id);

 });
 $(document).on("click",".exportExampleData",function(){
    var rce_id = this.id;
	rce_id=rce_id.split("-");
	rce_id=rce_id[1];

	exportExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',rce_id);

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
	if($("#file_import").val()==""){
		alert('loadExampleDataFn');
		//loadExampleDataFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
	}else{
		alert('importExampleDataJsonFn');
		importExampleDataJsonFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6',dataJsonForImport);
	}
	
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






});