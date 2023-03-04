$(document).ready(function(){
var htmlFormRist="";
htmlFormRist+="<div  class=\"alert alert-primary mb-3\" role=\"alert\">";
    htmlFormRist+="<input type=\"radio\"  id=\"XX\" class=\"form-check-input rm_radio\">";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"รหัส\">";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
     htmlFormRist+="<textarea  class=\"form-control\" placeholder=\"ชื่อความเสี่ยง\"></textarea>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<textarea  class=\"form-control\" placeholder=\"ลักษณะ\"></textarea>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\"> ";
        htmlFormRist+="<textarea  class=\"form-control\" placeholder=\"ปัจจัยเสี่ยง\"></textarea>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<textarea  class=\"form-control\" placeholder=\"ผลกระทบ\"></textarea>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"ผู้รับผิดชอบ\">";  
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<select  class=\"form-control\">";
        htmlFormRist+="<option>กลยุทธ์การจัดการความเสี่ยง</option>";
        htmlFormRist+="</select>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<input type=\"text\" class=\"form-control\" id=\"xxx\"  placeholder=\"ระยะเวลาการปฏิบัติ\">";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<select  class=\"form-control\">";
            htmlFormRist+="<option>โอกาส(5คะแนน)</option>";
            htmlFormRist+="<option>โอกาส(4คะแนน)</option>";
            htmlFormRist+="<option>โอกาส(3คะแนน)</option>";
            htmlFormRist+="<option>โอกาส(2คะแนน)</option>";
            htmlFormRist+="<option>โอกาส(5คะแนน)</option>";
        htmlFormRist+="</select>";
    htmlFormRist+="</div>";
    htmlFormRist+="<div class=\"mb-3\">";
        htmlFormRist+="<select  class=\"form-control\">";
            htmlFormRist+="<option>ผลกระทบ(5คะแนน)</option>";
            htmlFormRist+="<option>ผลกระทบ(4คะแนน)</option>";
            htmlFormRist+="<option>ผลกระทบ(3คะแนน)</option>";
            htmlFormRist+="<option>ผลกระทบ(2คะแนน)</option>";
            htmlFormRist+="<option>ผลกระทบ(1คะแนน)</option>";
        htmlFormRist+="</select>";
    htmlFormRist+="</div>";
htmlFormRist+="</div>";



$("#riskFormArea").html(htmlFormRist);
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

});