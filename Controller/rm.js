var listRiskFn = function(data){
    var htmlFormRisk="";
    $.each(data,function(index,indexEntry){
        
        htmlFormRisk+="<div  class=\"alert alert-primary mb-3\" role=\"alert\">";
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
                htmlFormRisk+="<option>กลยุทธ์การจัดการความเสี่ยง</option>";
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"duration_of_work-"+indexEntry['r_code']+"\" placeholder=\"ระยะเวลาการปฏิบัติ\">"+indexEntry['duration_of_work']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<textarea  class=\"form-control\" id=\"guideline_risk-"+indexEntry['r_code']+"\" placeholder=\"จัดการความเสี่ยง\">"+indexEntry['guidelines_risk']+"</textarea>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<select  class=\"form-control lh_code_select_area\" id=\"lh_code-"+indexEntry['r_code']+"\">";
                    htmlFormRisk+="<option>โอกาส(5คะแนน)</option>";
                    htmlFormRisk+="<option>โอกาส(4คะแนน)</option>";
                    htmlFormRisk+="<option>โอกาส(3คะแนน)</option>";
                    htmlFormRisk+="<option>โอกาส(2คะแนน)</option>";
                    htmlFormRisk+="<option>โอกาส(1คะแนน)</option>";
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
            htmlFormRisk+="<div class=\"mb-3\">";
                htmlFormRisk+="<select  class=\"form-control im_code_select_area\" id=\"im_code-"+indexEntry['r_code']+"\">";
                    htmlFormRisk+="<option>ผลกระทบ(5คะแนน)</option>";
                    htmlFormRisk+="<option>ผลกระทบ(4คะแนน)</option>";
                    htmlFormRisk+="<option>ผลกระทบ(3คะแนน)</option>";
                    htmlFormRisk+="<option>ผลกระทบ(2คะแนน)</option>";
                    htmlFormRisk+="<option>ผลกระทบ(1คะแนน)</option>";
                htmlFormRisk+="</select>";
            htmlFormRisk+="</div>";
        htmlFormRisk+="</div>";
        
    });
    $("#riskFormArea").html(htmlFormRisk);
}
var riskAllFn = function(uuid){
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
					
					 listRiskFn(data[0]['dataRisk']);
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
            "guideline_risk":$("#guideline_risk").val(),
            "lh_code":$("#lh_code").val(),
            "im_code":$("#im_code").val(),
			"total_score":"5"
            
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
					// console.log(data[0]['data']);
					listRiskFn(data[0]['dataRisk']);
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
					listRiskFn(data[0]['dataRisk']);
					
				}
			}
		}
	});
	
}
var stmSelectDataFn=function(uuid){

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
var lhSelectDataFn=function(uuid){

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
var imSelectDataFn=function(uuid){

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


$(document).ready(function(){

//estimatedRiskFormArea
var htmlEstimatedRiskForm="";
 htmlEstimatedRiskForm+="<div class=\"alert alert-primary mb-3\" role=\"alert\">";
    htmlEstimatedRiskForm+="<input type=\"radio\"  id=\"XX\" class=\"form-check-input rm_radio\">";
    htmlEstimatedRiskForm+="<div class=\"mb-3\">";
    htmlEstimatedRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"รหัส\">";
    htmlEstimatedRiskForm+="</div>";
    htmlEstimatedRiskForm+="<div class=\"mb-3\">";               
    htmlEstimatedRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"โอกาสที่จะเกิด\">";
    htmlEstimatedRiskForm+="</div>";
    htmlEstimatedRiskForm+="<div class=\"mb-3\">";
    htmlEstimatedRiskForm+=" <input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"ค่าโอกาส\">";
    htmlEstimatedRiskForm+="</div>";
    htmlEstimatedRiskForm+="<div class=\"mb-3\">";
    htmlEstimatedRiskForm+="<textarea  class=\"form-control\" placeholder=\"คำอธิบาย\"></textarea>";
    htmlEstimatedRiskForm+="</div>";
 htmlEstimatedRiskForm+="</div>";
 $("#estimatedRiskFormArea").html(htmlEstimatedRiskForm);

 //effectRiskFormArea
 var htmlEffectRiskForm="";
 htmlEffectRiskForm+="<div  class=\"alert alert-primary mb-3\" role=\"alert\">";
 htmlEffectRiskForm+="<input type=\"radio\"  id=\"XX\" class=\"form-check-input rm_radio\">";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\รหัส\">";
    htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"ความรุนแรง\">";
    htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"ค่าผลกระทบ\">";
    htmlEffectRiskForm+="</div>";
    htmlEffectRiskForm+="<div class=\"mb-3\">";
        htmlEffectRiskForm+="<textarea  class=\"form-control\" placeholder=\"คำอธิบาย\"></textarea>";
    htmlEffectRiskForm+="</div>";
 htmlEffectRiskForm+="</div>";
 $("#effectRiskFormArea").html(htmlEffectRiskForm);

//mitigateRisksFormArea
var htmlMitigateRisksForm="";
htmlMitigateRisksForm+="<div  class=\"alert alert-primary mb-3\" role=\"alert\">";
htmlMitigateRisksForm+="<input type=\"radio\"  id=\"XX\" class=\"form-check-input rm_radio\">";
    htmlMitigateRisksForm+="<div class=\"mb-3\">";
        htmlMitigateRisksForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"รหัส\">";
    htmlMitigateRisksForm+="</div>";
    htmlMitigateRisksForm+="<div class=\"mb-3\">";
        htmlMitigateRisksForm+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"กลยุทธ์การจัดการความเสี่ยง\">";
    htmlMitigateRisksForm+="</div>";
    htmlMitigateRisksForm+="<div class=\"mb-3\">";
        htmlMitigateRisksForm+="<textarea  class=\"form-control\" placeholder=\"คำอธิบาย\"></textarea>";
    htmlMitigateRisksForm+="</div>";
htmlMitigateRisksForm+="</div>";
$("#mitigateRisksFormArea").html(htmlMitigateRisksForm);


riskAllFn('4b7e2fd0-776a-420d-bd09-79a58da47ff6');
/*risk management start*/
$(document).on("click","#btnRiskSave",function(){
    alert("btnRiskSave");
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
/*risk management start*/


});