
$( document ).ajaxStart(function() {
	$("body").mLoading();
	console.log('start');
});
$( document ).ajaxStop(function() {
	$("body").mLoading('hide');
	//console.log('stop');
});
$("body").mLoading();

// var saveSubmitFn = function(){
// 	$.ajax({
// 		url:"./Model/action-swot.php",
// 		type:"post",
// 		dataType:"json",
//         async:false,
// 		data:{
// 			"uuid":uuid,
// 			"action":"insert",
// 		},
// 		success:function(data){

// 			if(data[0]!=="" || data[0]!==null){
// 				if(data[0]['status']=="200"){
					
// 					renderSwotToForm(data[0]['data']);
// 				}
// 			}
// 		}
// 	});
// }
var dataJsonForImport="";
var clearDataFn = function(){
	$("#swot_detail").val("");
	$(".dataStrengths").html("");
	$(".dataWeaknesses").html("");
	$(".dataOpportunities").html("");
	$(".dataThreats").html("");
	$("#swot_detail_header").html("");

	//clear form start
	$(".form-control").val("");
}
var calculateSwotFn = function(){
	var s1_name="";
	var s1_weight=0.00;
	var s1_score=0.00;
	
	var s2_name="";
	var s2_weight=0.00;
	var s2_score=0.00;
	var s3_name="";
	var s3_weight=0.00;
	var s3_score=0.00;
	var s4_name="";
	var s4_weight=0.00;
	var s4_score=0.00;
	var s5_name="";
	var s5_weight=0.00;
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
	var w1_weight=0.00;
	var w1_score="";
	var w2_name="";
	var w2_weight=0.00;
	var w2_score="";
	var w3_name="";
	var w3_weight=0.00;
	var w3_score="";
	var w4_name="";
	var w4_weight=0.00;
	var w4_score="";
	var w5_name="";
	var w5_weight=0.00;
	var w5_score="";

	var w1_total_score=0.00;
	var w2_total_score=0.00;
	var w3_total_score=0.00;
	var w4_total_score=0.00;
	var w5_total_score=0.00;
	var w_total_weight=0.00;
	var w_total_score=0.00;
	var w_performance=0.00;


	var o1_name="";
	var o1_weight=0.00;
	var o1_score="";
	var o2_name="";
	var o2_weight=0.00;
	var o2_score="";
	var o3_name="";
	var o3_weight=0.00;
	var o3_score="";
	var o4_name="";
	var o4_weight=0.00;
	var o4_score="";
	var o5_name="";
	var o5_weight=0.00;
	var o5_score="";
	var o1_total_score=0.00;
	var o2_total_score=0.00;
	var o3_total_score=0.00;
	var o4_total_score=0.00;
	var o5_total_score=0.00;
	var o_total_weight=0.00;
	var o_total_score=0.00;
	var o_performance=0.00;


	var t1_name="";
	var t1_weight=0.00;
	var t1_score="";
	var t2_name="";
	var t2_weight=0.00;
	var t2_score="";
	var t3_name="";
	var t3_weight=0.00;
	var t3_score="";
	var t4_name="";
	var t4_weight=0.00;
	var t4_score="";
	var t5_name="";
	var t5_weight=0.00;
	var t5_score="";
	var t1_total_score=0.00;
	var t2_total_score=0.00;
	var t3_total_score=0.00;
	var t4_total_score=0.00;
	var t5_total_score=0.00;
	var t_total_weight=0.00;
	var t_total_score=0.00;
	var t_performance=0.00;

	var swot_total_weight=0.00;
	var swot_total_score=0.00;

//Strang
if($('#s1_name').val()!==""){
	 s1_name=$('#s1_name').val();
	 s1_weight=parseFloat($('#s1_weight').val()).toFixed(2);
	 s1_score=parseFloat($('#s1_score').val()).toFixed(2);
	 s1_total_score =  s1_weight*s1_score;
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
s_total_score=(+s1_total_score)+(+s2_total_score)+(+s3_total_score)+(+s4_total_score)+(+s5_total_score);
s_total_weight=(+s1_weight)+(+s2_weight)+(+s3_weight)+(+s4_weight)+(+s5_weight);
s_performance=(parseFloat(s_total_score).toFixed(2)/parseFloat(s_total_weight).toFixed(2));
//alert("s_performance="+s_performance);



if($('#w1_name').val()!==""){
	w1_name=$('#w1_name').val();
	w1_weight=parseFloat($('#w1_weight').val()).toFixed(2);
	w1_score=parseFloat($('#w1_score').val()).toFixed(2);
	w1_total_score =  w1_weight*w1_score;
}
if($('#w2_name').val()!==""){
	w2_name=$('#w2_name').val();
	w2_weight=parseFloat($('#w2_weight').val()).toFixed(2);
	w2_score=parseFloat($('#w2_score').val()).toFixed(2);
	w2_total_score =  w2_weight*w2_score;
}
if($('#w3_name').val()!==""){
	w3_name=$('#w3_name').val();
	w3_weight=parseFloat($('#w3_weight').val()).toFixed(2);
	w3_score=parseFloat($('#w3_score').val()).toFixed(2);
	w3_total_score =  w3_weight*w3_score;
}
if($('#w4_name').val()!==""){
	w4_name=$('#w4_name').val();
	w4_weight=parseFloat($('#w4_weight').val()).toFixed(2);
	w4_score=parseFloat($('#w4_score').val()).toFixed(2);
	w4_total_score =  w4_weight*w4_score;
}
if($('#w5_name').val()!==""){
	w5_name=$('#w5_name').val();
	w5_weight=parseFloat($('#w5_weight').val()).toFixed(2);
	w5_score=parseFloat($('#w5_score').val()).toFixed(2);
	w5_total_score =  w5_weight*w5_score;
}
w_total_score=(+w1_total_score)+(+w2_total_score)+(+w3_total_score)+(+w4_total_score)+(+w5_total_score);
w_total_weight=(+w1_weight)+(+w2_weight)+(+w3_weight)+(+w4_weight)+(+w5_weight);
w_performance=(parseFloat(w_total_score).toFixed(2)/parseFloat(w_total_weight).toFixed(2));




if($('#o1_name').val()!==""){
	o1_name=$('#o1_name').val();
	o1_weight=parseFloat($('#o1_weight').val()).toFixed(2);
	o1_score=parseFloat($('#o1_score').val()).toFixed(2);
	o1_total_score =  o1_weight*o1_score;
}
if($('#o2_name').val()!==""){
	o2_name=$('#o2_name').val();
	o2_weight=parseFloat($('#o2_weight').val()).toFixed(2);
	o2_score=parseFloat($('#o2_score').val()).toFixed(2);
	o2_total_score =  o2_weight*o2_score;
}
if($('#o3_name').val()!==""){
	o3_name=$('#o3_name').val();
	o3_weight=parseFloat($('#o3_weight').val()).toFixed(2);
	o3_score=parseFloat($('#o3_score').val()).toFixed(2);
	o3_total_score =  o3_weight*o3_score;
}
if($('#o4_name').val()!==""){
	o4_name=$('#o4_name').val();
	o4_weight=parseFloat($('#o4_weight').val()).toFixed(2);
	o4_score=parseFloat($('#o4_score').val()).toFixed(2);
	o4_total_score =  o4_weight*o4_score;
}
if($('#o5_name').val()!==""){
	o5_name=$('#o5_name').val();
	o5_weight=parseFloat($('#o5_weight').val()).toFixed(2);
	o5_score=parseFloat($('#o5_score').val()).toFixed(2);
	o5_total_score =  o5_weight*o5_score;
}
o_total_score=(+o1_total_score)+(+o2_total_score)+(+o3_total_score)+(+o4_total_score)+(+o5_total_score);
o_total_weight=(+o1_weight)+(+o2_weight)+(+o3_weight)+(+o4_weight)+(+o5_weight);
o_performance=(parseFloat(o_total_score).toFixed(2)/parseFloat(o_total_weight).toFixed(2));
//alert("o_performance="+o_performance);

if($('#t1_name').val()!==""){
	t1_name=$('#t1_name').val();
	t1_weight=parseFloat($('#t1_weight').val()).toFixed(2);
	t1_score=parseFloat($('#t1_score').val()).toFixed(2);
	t1_total_score =  t1_weight*t1_score;
}
if($('#t2_name').val()!==""){
	t2_name=$('#t2_name').val();
	t2_weight=parseFloat($('#t2_weight').val()).toFixed(2);
	t2_score=parseFloat($('#t2_score').val()).toFixed(2);
	t2_total_score =  t2_weight*t2_score;
}
if($('#t3_name').val()!==""){
	t3_name=$('#t3_name').val();
	t3_weight=parseFloat($('#t3_weight').val()).toFixed(2);
	t3_score=parseFloat($('#t3_score').val()).toFixed(2);
	t3_total_score =  t3_weight*t3_score;
}
if($('#t4_name').val()!==""){
	t4_name=$('#t4_name').val();
	t4_weight=parseFloat($('#t4_weight').val()).toFixed(2);
	t4_score=parseFloat($('#t4_score').val()).toFixed(2);
	t4_total_score =  t4_weight*t4_score;
}
if($('#t5_name').val()!==""){
	t5_name=$('#t5_name').val();
	t5_weight=parseFloat($('#t5_weight').val()).toFixed(2);
	t5_score=parseFloat($('#t5_score').val()).toFixed(2);
	t5_total_score =  t5_weight*t5_score;
}
t_total_score=(+t1_total_score)+(+t2_total_score)+(+t3_total_score)+(+t4_total_score)+(+t5_total_score);
t_total_weight=(+t1_weight)+(+t2_weight)+(+t3_weight)+(+t4_weight)+(+t5_weight);
t_performance=(parseFloat(t_total_score).toFixed(2)/parseFloat(t_total_weight).toFixed(2));
//alert("t_performance="+t_performance);


var dataArray=[s_performance, w_performance, o_performance, t_performance];
createChart(dataArray);

//get data from form to table start

//get data from form to table end



}

 function createChart(data) {

	$("#chart").kendoChart({
		title: {
			text: "SWOT Analysis",
			visible: false
		},
		chartArea: {
			 //background: "#ffc107",
			 //visible: false
		  },
		legend: {
			position: "bottom",
			visible: false
		},
		seriesDefaults: {
			type: "radarLine"
		},
		series: [{
			name: "SWOT Matrix",
			data: data
		}],
		categoryAxis: {
			categories: ["Strengths", "Weaknesses", "Opportunities", "Threats"]
		},
		valueAxis: {
			labels: {
				format: "{0}"
			}
		},
		tooltip: {
			visible: true,
			format: "{0} คะแนน"
		}
	});
}

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




	$.each(data,function(index,indexEntry){
		var s_score="";
	
		if(index==0){
			 $("#swot_detail").val(indexEntry['swot_detail']);
		}

		if(indexEntry['s_score']=="" || indexEntry['s_score']==0 ){
			s_score="";
		}else{
			s_score=indexEntry['s_score'];
		}
		console.log("s_score="+s_score);
		

		if(indexEntry['form_id']=='s1'){
	
			$("#s1_name").val(indexEntry['s_name']);
			$("#s1_weight").val(indexEntry['s_weight']);
			
			$("#s1_score").val(s_score);
			
		}
		if(indexEntry['form_id']=='s2'){
			$("#s2_name").val(indexEntry['s_name']);
			$("#s2_weight").val(indexEntry['s_weight']);
			$("#s2_score").val(s_score);
		}
		if(indexEntry['form_id']=='s3'){
			$("#s3_name").val(indexEntry['s_name']);
			$("#s3_weight").val(indexEntry['s_weight']);
			$("#s3_score").val(s_score);
		}
		if(indexEntry['form_id']=='s4'){
			$("#s4_name").val(indexEntry['s_name']);
			$("#s4_weight").val(indexEntry['s_weight']);
			$("#s4_score").val(s_score);
		}

		if(indexEntry['form_id']=='s5'){
			$("#s5_name").val(indexEntry['s_name']);
			$("#s5_weight").val(indexEntry['s_weight']);
			$("#s5_score").val(s_score);
		}


		if(indexEntry['form_id']=='w1'){
			$("#w1_name").val(indexEntry['s_name']);
			$("#w1_weight").val(indexEntry['s_weight']);
			$("#w1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w2'){
			$("#w2_name").val(indexEntry['s_name']);
			$("#w2_weight").val(indexEntry['s_weight']);
			$("#w2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w3'){
			$("#w3_name").val(indexEntry['s_name']);
			$("#w3_weight").val(indexEntry['s_weight']);
			$("#w3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w4'){
			$("#w4_name").val(indexEntry['s_name']);
			$("#w4_weight").val(indexEntry['s_weight']);
			$("#w4_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='w5'){
			$("#w5_name").val(indexEntry['s_name']);
			$("#w5_weight").val(indexEntry['s_weight']);
			$("#w5_score").val(indexEntry['s_score']);
		}


		

		if(indexEntry['form_id']=='o1'){
			$("#o1_name").val(indexEntry['s_name']);
			$("#o1_weight").val(indexEntry['s_weight']);
			$("#o1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o2'){
			$("#o2_name").val(indexEntry['s_name']);
			$("#o2_weight").val(indexEntry['s_weight']);
			$("#o2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o3'){
			$("#o3_name").val(indexEntry['s_name']);
			$("#o3_weight").val(indexEntry['s_weight']);
			$("#o3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o4'){
			$("#o4_name").val(indexEntry['s_name']);
			$("#o4_weight").val(indexEntry['s_weight']);
			$("#o4_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='o5'){
			$("#o5_name").val(indexEntry['s_name']);
			$("#o5_weight").val(indexEntry['s_weight']);
			$("#o5_score").val(indexEntry['s_score']);
		}


		if(indexEntry['form_id']=='t1'){
			$("#t1_name").val(indexEntry['s_name']);
			$("#t1_weight").val(indexEntry['s_weight']);
			$("#t1_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t2'){
			$("#t2_name").val(indexEntry['s_name']);
			$("#t2_weight").val(indexEntry['s_weight']);
			$("#t2_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t3'){
			$("#t3_name").val(indexEntry['s_name']);
			$("#t3_weight").val(indexEntry['s_weight']);
			$("#t3_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t4'){
			$("#t4_name").val(indexEntry['s_name']);
			$("#t4_weight").val(indexEntry['s_weight']);
			$("#t4_score").val(indexEntry['s_score']);
		}
		if(indexEntry['form_id']=='t5'){
			$("#t5_name").val(indexEntry['s_name']);
			$("#t5_weight").val(indexEntry['s_weight']);
			$("#t5_score").val(indexEntry['s_score']);
		}
		
	});

}
var renderSwotToDisplay = function(data){
	var dataStrengths="";
	var dataWeaknesses="";
	var dataOpportunities="";
	var dataThreats="";

	var sumStrengths=0;
	var sumWeaknesses=0;
	var sumOpportunities=0;
	var sumThreats=0;

	var countStrengths=0;
	var countWeaknesses=0;
	var countOpportunities=0;
	var countThreats=0;
	

	


		$.each(data,function(index,indexEntry){
			if(index==1){
				$("#swot_detail_header").html(indexEntry['swot_detail']);
				
			}
			
			if(indexEntry['ap_code']=='1' && indexEntry['s_name']!==""){
				countStrengths+=1;
				dataStrengths+="<tr>";
					dataStrengths+="<td  class='swot_seq'>"+indexEntry['form_id']+"</td>";
					dataStrengths+="<td  class='swot_name'>"+indexEntry['s_name']+"</td>";
					dataStrengths+="<td  class='swot_score'>"+indexEntry['s_total_score']+"</td>";
					sumStrengths+=+parseFloat(indexEntry['s_total_score']).toFixed(2);
				dataStrengths+="</tr>";
			}
			if(indexEntry['ap_code']=='2'&& indexEntry['s_name']!==""){
				countWeaknesses+=1;
				dataWeaknesses+="<tr>";
					dataWeaknesses+="<td  class='swot_seq'>"+indexEntry['form_id']+"</td>";
					dataWeaknesses+="<td  class='swot_name'>"+indexEntry['s_name']+"</td>";
					dataWeaknesses+="<td  class='swot_score'>"+indexEntry['s_total_score']+"</td>";
					sumWeaknesses+=+parseFloat(indexEntry['s_total_score']).toFixed(2);
				dataWeaknesses+="</tr>";
			}
			if(indexEntry['ap_code']=='3'&& indexEntry['s_name']!==""){
				countOpportunities+=1;
				dataOpportunities+="<tr>";
					dataOpportunities+="<td  class='swot_seq'>"+indexEntry['form_id']+"</td>";
					dataOpportunities+="<td  class='swot_name'>"+indexEntry['s_name']+"</td>";
					dataOpportunities+="<td  class='swot_score'>"+indexEntry['s_total_score']+"</td>";
					sumOpportunities+=+parseFloat(indexEntry['s_total_score']).toFixed(2);
				dataOpportunities+="</tr>";
			}
			if(indexEntry['ap_code']=='4'&& indexEntry['s_name']!==""){
				countThreats+=1;
				dataThreats+="<tr>";
					dataThreats+="<td  class='swot_seq'>"+indexEntry['form_id']+"</td>";
					dataThreats+="<td  class='swot_name'>"+indexEntry['s_name']+"</td>";
					dataThreats+="<td  class='swot_score'>"+indexEntry['s_total_score']+"</td>";
					sumThreats+=+parseFloat(indexEntry['s_total_score']).toFixed(2);
				dataThreats+="</tr>";
			}
			
			
		});
		
	//alert(dataStrengths);
	/*
		$(".dataStrengths").html(dataStrengths).append("<tr><td colspan=\"3\" class=\"total-swot\">เฉลี่ย="+parseFloat(sumStrengths/countStrengths).toFixed(2)+" </td></tr>");
		$(".dataWeaknesses").html(dataWeaknesses).append("<tr><td colspan=\"3\" class=\"total-swot\">เฉลี่ย="+parseFloat(sumWeaknesses/countWeaknesses).toFixed(2)+" </td></tr>");
		$(".dataOpportunities").html(dataOpportunities).append("<tr><td colspan=\"3\" class=\"total-swot\">เฉลี่ย="+parseFloat(sumOpportunities/countOpportunities).toFixed(2)+" </td></tr>");
		$(".dataThreats").html(dataThreats).append("<tr><td colspan=\"3\" class=\"total-swot\">เฉลี่ย="+parseFloat(sumThreats/countThreats).toFixed(2)+" </td></tr>");
		*/

		$(".dataStrengths").html(dataStrengths).append("<tr><td colspan=\"3\" class=\"total-swot\">คะแนนรวม="+parseFloat(sumStrengths).toFixed(2)+" </td></tr>");
		$(".dataWeaknesses").html(dataWeaknesses).append("<tr><td colspan=\"3\" class=\"total-swot\">คะแนนรวม="+parseFloat(sumWeaknesses).toFixed(2)+" </td></tr>");
		$(".dataOpportunities").html(dataOpportunities).append("<tr><td colspan=\"3\" class=\"total-swot\">คะแนนรวม="+parseFloat(sumOpportunities).toFixed(2)+" </td></tr>");
		$(".dataThreats").html(dataThreats).append("<tr><td colspan=\"3\" class=\"total-swot\">คะแนนรวม="+parseFloat(sumThreats).toFixed(2)+" </td></tr>");

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
	

					clearDataFn();
					

					renderSwotToForm(data[0]['data']);
					renderSwotToDisplay(data[0]['data']);

					calculateSwotFn();
					
					checkValidateFn();
				}
			}
		}
	});
	
}
var insertAndLoadExampleSwot_bk=function(uuid){

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
var loadExampleSwot_bk=function(b_id,swot_detail){


    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":sessionStorage.getItem('uuid'),
			"action":"loadExampleSwot",
			"b_id":b_id,
			"swot_detail":swot_detail
		},
		success:function(data){

			
			if(data[0]['status']=="200"){
	
				//renderSwotToDisplay(data[0]['data']);
				//calculateSwotFn();
			
					location.reload();
				
				
			}
		}
	});
	
}
var saveSwot=function(){

//alert($("#swot_detail").val());

    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":sessionStorage.getItem('uuid'),
			"action":"insert",
			"swot_detail":$("#swot_detail").val(),

			//form strengths start
			"s1_name":$("#s1_name").val(),
			"s1_weight":$("#s1_weight").val(),
			"s1_score":$("#s1_score").val(),
			"s1_total_score":parseFloat($("#s1_weight").val()*$("#s1_score").val()).toFixed(2),

			"s2_name":$("#s2_name").val(),
			"s2_weight":$("#s2_weight").val(),
			"s2_score":$("#s2_score").val(),
			"s2_total_score":parseFloat($("#s2_weight").val()*$("#s2_score").val()).toFixed(2),

			"s3_name":$("#s3_name").val(),
			"s3_weight":$("#s3_weight").val(),
			"s3_score":$("#s3_score").val(),
			"s3_total_score":parseFloat($("#s3_weight").val()*$("#s3_score").val()).toFixed(2),

			"s4_name":$("#s4_name").val(),
			"s4_weight":$("#s4_weight").val(),
			"s4_score":$("#s4_score").val(),
			"s4_total_score":parseFloat($("#s4_weight").val()*$("#s4_score").val()).toFixed(2),

			"s5_name":$("#s5_name").val(),
			"s5_weight":$("#s5_weight").val(),
			"s5_score":$("#s5_score").val(),
			"s5_total_score":parseFloat($("#s5_weight").val()*$("#s5_score").val()).toFixed(2),
			//form strengths end

			//form weakness start
			"w1_name":$("#w1_name").val(),
			"w1_weight":$("#w1_weight").val(),
			"w1_score":$("#w1_score").val(),
			"w1_total_score":parseFloat($("#w1_weight").val()*$("#w1_score").val()).toFixed(2),

			"w2_name":$("#w2_name").val(),
			"w2_weight":$("#w2_weight").val(),
			"w2_score":$("#w2_score").val(),
			"w2_total_score":parseFloat($("#w2_weight").val()*$("#w2_score").val()).toFixed(2),

			"w3_name":$("#w3_name").val(),
			"w3_weight":$("#w3_weight").val(),
			"w3_score":$("#w3_score").val(),
			"w3_total_score":parseFloat($("#w3_weight").val()*$("#w3_score").val()).toFixed(2),

			"w4_name":$("#w4_name").val(),
			"w4_weight":$("#w4_weight").val(),
			"w4_score":$("#w4_score").val(),
			"w4_total_score":parseFloat($("#w4_weight").val()*$("#w4_score").val()).toFixed(2),

			"w5_name":$("#w5_name").val(),
			"w5_weight":$("#w5_weight").val(),
			"w5_score":$("#w5_score").val(),
			"w5_total_score":parseFloat($("#w5_weight").val()*$("#w5_score").val()).toFixed(2),
			//form weakness end

			//form opportunities start
			"o1_name":$("#o1_name").val(),
			"o1_weight":$("#o1_weight").val(),
			"o1_score":$("#o1_score").val(),
			"o1_total_score":parseFloat($("#o1_weight").val()*$("#o1_score").val()).toFixed(2),

			"o2_name":$("#o2_name").val(),
			"o2_weight":$("#o2_weight").val(),
			"o2_score":$("#o2_score").val(),
			"o2_total_score":parseFloat($("#o2_weight").val()*$("#o2_score").val()).toFixed(2),

			"o3_name":$("#o3_name").val(),
			"o3_weight":$("#o3_weight").val(),
			"o3_score":$("#o3_score").val(),
			"o3_total_score":parseFloat($("#o3_weight").val()*$("#o3_score").val()).toFixed(2),

			"o4_name":$("#o4_name").val(),
			"o4_weight":$("#o4_weight").val(),
			"o4_score":$("#o4_score").val(),
			"o4_total_score":parseFloat($("#o4_weight").val()*$("#o4_score").val()).toFixed(2),

			"o5_name":$("#o5_name").val(),
			"o5_weight":$("#o5_weight").val(),
			"o5_score":$("#o5_score").val(),
			"o5_total_score":parseFloat($("#o5_weight").val()*$("#o5_score").val()).toFixed(2),
			//form opportunities end

			//form thrests start
			"t1_name":$("#t1_name").val(),
			"t1_weight":$("#t1_weight").val(),
			"t1_score":$("#t1_score").val(),
			"t1_total_score":parseFloat($("#t1_weight").val()*$("#t1_score").val()).toFixed(2),

			"t2_name":$("#t2_name").val(),
			"t2_weight":$("#t2_weight").val(),
			"t2_score":$("#t2_score").val(),
			"t2_total_score":parseFloat($("#t2_weight").val()*$("#t2_score").val()).toFixed(2),

			"t3_name":$("#t3_name").val(),
			"t3_weight":$("#t3_weight").val(),
			"t3_score":$("#t3_score").val(),
			"t3_total_score":parseFloat($("#t3_weight").val()*$("#t3_score").val()).toFixed(2),

			"t4_name":$("#t4_name").val(),
			"t4_weight":$("#t4_weight").val(),
			"t4_score":$("#t4_score").val(),
			"t4_total_score":parseFloat($("#t4_weight").val()*$("#t4_score").val()).toFixed(2),

			"t5_name":$("#t5_name").val(),
			"t5_weight":$("#t5_weight").val(),
			"t5_score":$("#t5_score").val(),
			"t5_total_score":parseFloat($("#t5_weight").val()*$("#t5_score").val()).toFixed(2),
			//form thrests end


		},
		success:function(data){

		
			if(data[0]['status']=="200"){
				
				renderSwotToDisplay(data[0]['data']);
				calculateSwotFn();
			
				$.alert({
					title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
					content: 'บันทึกข้อมูลเรียบร้อย',
				});
				$("#OffcanvasClose").click();
				
				//location.reload();
			}
		}
	});
	
	
}
var getBusinessType=function(){

    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":sessionStorage.getItem('uuid'),
			"action":"business-type",
		},
		success:function(data){

			
			 var selectBType="";

			 $.each(data,function(inde,indexEntry){
				selectBType+="<option value=\""+indexEntry['id']+"\">"+indexEntry['b_type_name']+"</option>";
			 });
			 $("#dataBusinessType").html(selectBType);
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
				
				loadExampleDataFn(sessionStorage.getItem('uuid'),1);
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


// example management start

var listExampleDataFn = function(data){
	
	var htmlExampleData = "";
	$.each(data,function(index,indexEntry){
		
		htmlExampleData+="<tr>";
			htmlExampleData+="<td>";
			htmlExampleData+="<b>ชื่อข้อมูล</b>:"+indexEntry['b_type_name']+"<br>";
			htmlExampleData+="<b>ประเภทข้อมูล</b>: "+indexEntry['b_release_type_name']+"<br>";
			
			htmlExampleData+="</td>";
			htmlExampleData+="<td>";
				htmlExampleData+="<div style='text-align:right'>";
				htmlExampleData+="<button class=\"btn btn-danger delExampleData\" id=\"delExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-solid fa-trash \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-warning editExampleData\" id=\"editExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-solid fa-pencil \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-primary exportExampleData\" id=\"exportExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-sharp fa-solid fa-download\"></i></button>";
				htmlExampleData+="</div>"
			htmlExampleData+="</td>";

/*

			htmlExampleData+="<td>"+(index+1)+"</td>";
			htmlExampleData+="<td>"+indexEntry['b_type_name']+"</td>";
			htmlExampleData+="<td>"+indexEntry['b_release_type_name']+"</td>";
			htmlExampleData+="<td>";


				htmlExampleData+="<button class=\"btn btn-danger delExampleData\" id=\"delExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-solid fa-trash \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-warning editExampleData\" id=\"editExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-solid fa-pencil \"></i></button>";
				htmlExampleData+="<button class=\"btn btn-primary exportExampleData\" id=\"exportExampleData-"+indexEntry['b_id']+"\"><i class=\"fa-sharp fa-solid fa-download\"></i></button>";

			htmlExampleData+="</td>";
*/

		htmlExampleData+="</tr>";
	});
	$("#dataExampleArea").html(htmlExampleData);
}

var saveExampleDataFn = function(uuid){
    var b_release_type_name = $("#b_release_type_code option:selected").html()

    
	$.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"saveExampleData",
            "b_release_type_code":$("#b_release_type_code").val(),
            "b_release_type_name":b_release_type_name,
			"b_type_name":$("#b_type_name").val(),
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
				
                    $.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'บันทึกข้อมูลตัวอย่างเรียบร้อย',
					});
					listExampleDataFn(data[0]['data']);
				}
			}
		}
	});

}
var clearExampleDataFn = function(){
	$("#actionExample").val("add");
	$("#b_type_name").val("");
	$("#b_release_type_code").prop("selectedIndex", 0);
	$("#message_area").hide();
	$("#message").html("");
	dataJsonForImport="";
	$("#file_import").val("");

	//clear value default
	$("#b_type_name").css({"border":"#ced4da solid 1px"});
	$("#example_data_alert_text").html("");
	$("#example_data_alert").hide();

}

var showAllExampleDataUUIDFn = function(uuid){

	$.ajax({
		url:"./Model/action-swot.php",
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

//LOAD DATA START
var showAllExampleLoadDataFn = function(uuid){
	$.ajax({
		url:"./Model/action-swot.php",
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
var loadExampleDataFn = function(uuid,b_id){

    
    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"loadExampleData",
            "b_id":b_id
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){


					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'โหลดข้อมูลเรียบร้อย',
					});

					findOne(sessionStorage.getItem('uuid'));

					//location.reload();

				}
			}
		}
	});
    

}
//LOAD DATA END

var listExampleLoadDataFn = function(data){
	
	var htmlExampleLoadData="";
	$.each(data,function(index,indexEntry){
		htmlExampleLoadData+="<option value="+indexEntry['b_id']+">"+indexEntry['b_type_name']+"</option>";
	});

	$("#b_id_load").html(htmlExampleLoadData);
	
}	



var findOneExampleDataFn = function(uuid,b_id){

	$.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"b_id":b_id,
			"action":"findOneExampleData",
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					
				
					$("#b_release_type_code").val(data[0]['data'][0]['b_release_type_code']);
					$("#b_type_name").val(data[0]['data'][0]['b_type_name']);
                    
				}
			}
		}
	});

}

var updateExampleDataFn = function(uuid,b_id){
	var b_release_type_name = $("#b_release_type_code option:selected").html()
	$.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"updateExampleData",
            "b_release_type_code":$("#b_release_type_code").val(),
			"b_release_type_name":b_release_type_name,
			"b_type_name":$("#b_type_name").val(),
			"b_id":b_id,
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
				
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'แก้ไขข้อมูลเรียบร้อย',
					});
					listExampleDataFn(data[0]['data']);
				}
			}
		}
	});

}

var delExampleDataFn = function(uuid,b_id){

	$.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"delExampleData",
			"b_id":b_id
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

function exportToJsonFile(jsonData) {
    let dataStr = JSON.stringify(jsonData);
    let dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);

    let exportFileDefaultName = 'data.json';

    let linkElement = document.createElement('a');
    linkElement.setAttribute('href', dataUri);
    linkElement.setAttribute('download', exportFileDefaultName);
    linkElement.click();
}

var exportExampleDataFn = function(uuid,b_id){
	$.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"b_id":b_id,
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

var importExampleDataJsonFn = function(uuid,dataJsonForImport){

	var dataJsonForImportObject=eval("("+dataJsonForImport+")");

    $.ajax({
		url:"./Model/action-swot.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"importExampleJsonData",
			"dataAspectMasterEx":dataJsonForImportObject['dataAspectMasterEx'],
			"dataSwotEx":dataJsonForImportObject['dataSwotEx'],
			
	
		},
		success:function(data){

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
					$.alert({
						title: '<i style="font-size:44px; color:green;" class="fa-sharp fa-solid fa-circle-check" aria-hidden="true"></i> Success',
						content: 'โหลดข้อมูลเรียบร้อย',
					});
				}
			}
		}
	});
    
}
function processFiles(files) {
	$("#message_area").show();
	var file = files[0];
	if(file.type=='application/json'){
	
		var message = document.getElementById("message_data_general");
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
		$("#btnLoadExample").prop( "disabled", false );
		$("#data_general_area").show();
		$("#data_not_support_area").hide();
		
	}else{
		$("#btnLoadExample").prop( "disabled", true );
		$("#data_general_area").hide();
		$("#data_not_support_area").show();
		$("#message_not_support").html("<i class=\"fa-sharp fa-solid fa-circle-info\"></i><span> อัปโหลดเป็น JSON ไฟล์เท่านั้น</span>");
		dataJsonForImport="{\"status\":\"200\",\"dataAspectMasterEx\":[],\"dataSwotEx\":[]}";
	}

  }
var checkNanFN=function(value){
	var datarereturn=0;
	if(isNaN(value)) {
		datarereturn = 0;
		return datarereturn;
	}else{
		return value;
	}

}
var checkAllDataSwotFn = function(swot_name){
	//Strengths validate start
	var swot_flag=true;

	var s_score_flag=true;
	var w_score_flag=true;
	var o_score_flag=true;
	var t_score_flag=true;

	$("#"+swot_name+"_alert_text").html("");
	$("#"+swot_name+"_alert").hide();


	var swot_1_weight= checkNanFN(parseFloat($("#"+swot_name+"1_weight").val()).toFixed(2));
	var swot_2_weight= checkNanFN(parseFloat($("#"+swot_name+"2_weight").val()).toFixed(2));
	var swot_3_weight= checkNanFN(parseFloat($("#"+swot_name+"3_weight").val()).toFixed(2));
	var swot_4_weight= checkNanFN(parseFloat($("#"+swot_name+"4_weight").val()).toFixed(2));
	var swot_5_weight= checkNanFN(parseFloat($("#"+swot_name+"5_weight").val()).toFixed(2));
	var sumWeight=(+swot_1_weight)+(+swot_2_weight)+(+swot_3_weight)+(+swot_4_weight)+(+swot_5_weight);
	
	var swot_name_text="";
		if(swot_name=="s"){
			swot_name_text="กรุณากรอกปัจจัยภายใน จุดแข็ง";
		}else if(swot_name=="w"){
			swot_name_text="กรุณากรอกปัจจัยภายใน จุดอ่อน";
		}else if(swot_name=="o"){
			swot_name_text="กรุณากรอกปัจจัยภายนอก โอกาส";
		}else if(swot_name=="t"){
			swot_name_text="ปัจจัยภายนอก อุปสรรค";
		}

	//swot_name
	if($("#"+swot_name+"1_name").val()=="" && $("#"+swot_name+"1_weight").val()!="" ){
		$("#"+swot_name+"1_name").css({"border":"red solid 1px"});
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> "+swot_name_text+" ช่องที่1</div></div>");
		$("#"+swot_name+"_alert").show();

		swot_flag=false;
	}else{
		$("#"+swot_name+"1_name").css({"border":"#ced4da solid 1px"});
		$("#"+swot_name+"_alert").hide();
	}

	if($("#"+swot_name+"2_name").val()=="" && $("#"+swot_name+"2_weight").val()==""){
		$("#"+swot_name+"2_name").css({"border":"red solid 1px"});
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> "+swot_name_text+" ช่องที่2</div>");
		$("#"+swot_name+"_alert").show();
		swot_flag=false;
	}else{
		$("#"+swot_name+"2_name").css({"border":"#ced4da solid 1px"});
		
		
	}

	if($("#"+swot_name+"3_name").val()=="" && $("#"+swot_name+"3_weight").val()=="" ){
		$("#"+swot_name+"3_name").css({"border":"red solid 1px"});
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> "+swot_name_text+" ช่องที่3</div>");
		$("#"+swot_name+"_alert").show();
		swot_flag=false;
	}else{
		$("#"+swot_name+"3_name").css({"border":"#ced4da solid 1px"});
		
	}

	if($("#"+swot_name+"4_name").val()=="" && $("#"+swot_name+"4_weight").val()==""){
		$("#"+swot_name+"4_name").css({"border":"red solid 1px"});
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> "+swot_name_text+" ช่องที่4</div>");
		$("#"+swot_name+"_alert").show();
		swot_flag=false;
	}else{
		$("#"+swot_name+"4_name").css({"border":"#ced4da solid 1px"});
		
		
	}

	if($("#"+swot_name+"5_name").val()=="" && ($("#"+swot_name+"5_weight").val()!="" && $("#"+swot_name+"5_weight").val()!=0)){
		$("#"+swot_name+"5_name").css({"border":"red solid 1px"});
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> "+swot_name_text+" ช่องที่5</div>");
		$("#"+swot_name+"_alert").show();
		swot_flag=false;
	}else{
		$("#"+swot_name+"5_name").css({"border":"#ced4da solid 1px"});
	}


	//weight

	if(sumWeight!=1){
		if($("#"+swot_name+"1_name").val()!=""){
			$("#"+swot_name+"1_weight ").css({"border":"red solid 1px"});
		}
		if($("#"+swot_name+"2_name").val()!=""){
			$("#"+swot_name+"2_weight ").css({"border":"red solid 1px"});
		}
		if($("#"+swot_name+"3_name").val()!=""){
			$("#"+swot_name+"3_weight ").css({"border":"red solid 1px"});
		}
		if($("#"+swot_name+"4_name").val()!=""){
			$("#"+swot_name+"4_weight ").css({"border":"red solid 1px"});
		}
		if($("#"+swot_name+"5_name").val()!=""){
			$("#"+swot_name+"5_weight ").css({"border":"red solid 1px"});
		}

		
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกน้ำหนักรวมกันแล้วต้องเท่ากับ 1 </div>");
		$("#"+swot_name+"_alert").show();
	 	swot_flag=false;

	}else{
		$("."+swot_name+"_weight").css({"border":"#ced4da solid 1px"});
		//$("#"+swot_name+"_alert").hide();
		//$("#"+swot_name+"_alert_text").html("");
	}

 	//score
	$("."+swot_name+"_score").css({"border":"#ced4da solid 1px"});

	if($("#"+swot_name+"1_score").val()>5){
		$("#"+swot_name+"1_score").css({"border":"red solid 1px"});
		s_score_flag=false;
		swot_flag=false;
	}
	if($("#"+swot_name+"2_score").val()>5){
		$("#"+swot_name+"2_score").css({"border":"red solid 1px"});
		s_score_flag=false;
		swot_flag=false;
	}
	if($("#"+swot_name+"3_score").val()>5){
		$("#"+swot_name+"3_score").css({"border":"red solid 1px"});
		s_score_flag=false;
		swot_flag=false;
	}
	if($("#"+swot_name+"4_score").val()>5){
		$("#"+swot_name+"4_score").css({"border":"red solid 1px"});
		s_score_flag=false;
		swot_flag=false;
	}
	if($("#"+swot_name+"5_score").val()>5){
		$("#"+swot_name+"5_score").css({"border":"red solid 1px"});
		s_score_flag=false;
		swot_flag=false;
	}






	if(s_score_flag==false){
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกคะแนนได้ 1-5 คะแนน</div>");
		$("#"+swot_name+"_alert").show();
	}
	
	if(w_score_flag==false){
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกคะแนนได้ 1-5 คะแนน</div>");
		$("#"+swot_name+"_alert").show();
	}
	
	if(o_score_flag==false){
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกคะแนนได้ 1-5 คะแนน</div>");
		$("#"+swot_name+"_alert").show();
	}
	
	if(t_score_flag==false){
		$("#"+swot_name+"_alert_text").append("<div><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรอกคะแนนได้ 1-5 คะแนน</div>");
		$("#"+swot_name+"_alert").show();
	}






	return swot_flag;
	
}

var checkValidateFn = function(){
	$("#swot_detail_alert").hide();
	var validate=true;


	if($("#swot_detail").val()==""){
		validate=false;
		$("#swot_detail").css({"border":"red solid 1px"});
		$("#swot_detail_alert_text").html("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกรายละเอียด SWOT");
		$("#swot_detail_alert").show();

	}else{
		$("#swot_detail").css({"border":"#ced4da solid 1px"});
		$("#swot_detail_alert_text").html("");
		$("#swot_detail_alert").hide();
	}

	//validate=checkAllDataSwotFn("s");
	if(checkAllDataSwotFn("s")==false){
		validate=false;
	}
	if(checkAllDataSwotFn("w")==false){
		validate=false;
	}
	if(checkAllDataSwotFn("o")==false){
		validate=false;
	}
	if(checkAllDataSwotFn("t")==false){
		validate=false;
	}
	
	return validate;
}
var checkValidateExampleFn  = function(){
	validate=true;
	if($("#b_type_name").val()==""){
		validate=false;
		$("#b_type_name").css({"border":"red solid 1px"});
		$("#example_data_alert_text").html("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> กรุณากรอกชื่อข้อมูลตัวอย่าง");
		$("#example_data_alert").show();

	}else{
		$("#b_type_name").css({"border":"#ced4da solid 1px"});
		$("#example_data_alert_text").html("");
		$("#example_data_alert").hide();
	}
	return validate;
	

}
$(document).ready(function(){



	$(".setting-toggle").click(function(){
		checkValidateFn();
	});

	$('.number_only').keypress(function(e) {
		if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
	  })
	  .on("cut copy paste",function(e){
		e.preventDefault();
	  });

	//4b7e2fd0-776a-420d-bd09-79a58da47ff6 //mobile nong personal
	//pc work room rtaf
	//d520c7a8-421b-4563-b955-f5abc56b97ec 
	//pc work room home = ADMIN
	//58cfe63bbed667625e7e5831b2d35597
	
	
	
	
	//bdc289a2-3e0d-44d2-b34c-173a69736388 //mobile nuy
	//09144604-59cd-48de-b55a-3438b132cbf0 //tablet

	
    //var uuid2 = new DeviceUUID().get();
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

	// $("#getExampleModel").click(function(){
	// 	getBusinessType();
	// });
	$("#getExampleSubmit").click(function(){
		
		loadExampleSwot($("#dataBusinessType").val(),$("#dataBusinessType option:selected").text());
	});



	$("#submitSave").click(function(){
		//checkValidateFn();
		
		if(checkValidateFn()==false){
			$.alert({
				title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error',
				content: ' เกิดข้อผิดพลาดโปรดตรวจสอบความถูกต้อง',
			});
		}else{
			saveSwot();
		}
		

	});
	calculateSwotFn();
	//createChart([1,2,3,4]);
    //alert(uuid);

	//dowload pdf,excel,print
	$("#submitExcel").click(function(){

		$("#forExportExcel").table2excel({
			exclude: ".excludeThisClass",
			name: "SWOT ANALYSIS",
			filename: "SWOT_Analysis.xls", // do include extension
			preserveColors: false // set to true if you want background colors and font colors preserved
		});
	});
	/*
	$("#submitPDF").click(function(){
		$("#pdfModel").modal('show');
		$("#forExportPDF").show();

		$("#submitDownloadPDF").click(function(){
			//location.href = "./swot-pdf.php";
			
			html2canvas($('#forExportPDF')[0], {
				onrendered: function (canvas) {
					var data = canvas.toDataURL();
					var docDefinition = {
						content: [{
							image: data,
							width: 500,
							// height:1000
						}]
					};
					
					pdfMake.createPdf(docDefinition).download("swot-analysis.pdf");
					$("#forExportPDF").hide();
					
				}
			});
			
			$("#pdfModel").modal('hide');
		});
	});
*/

	$("#submitPDF").click(function(){
		
		$("#forExportPDF").show();
				
			html2canvas($('#forExportPDF')[0], {
				onrendered: function (canvas) {
					var data = canvas.toDataURL();
					var docDefinition = {
						content: [{
							image: data,
							width: 500,
							// height:1000
						}]
					};
					
					pdfMake.createPdf(docDefinition).download("swot-analysis.pdf");
					$("#forExportPDF").hide();
					
				}
			});

	});


	$("#submitPrint").click(function(){
		
		$("#tableRmDataAllArea").printThis();
	});

	//tap start

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

	//tab end


	//action save,update start
	$("#btnSaveExample").click(function(){
		if($("#actionExample").val()=='add'){
			if(checkValidateExampleFn()==true){
			saveExampleDataFn(sessionStorage.getItem('uuid'));
			}
		}else{
			if(checkValidateExampleFn()==true){
			updateExampleDataFn(sessionStorage.getItem('uuid'),$("#b_id").val());
			}
		}
	});
	//action save,update end

	//action show modal  start
	$("#getExampleModel").click(function(){
		//table show display on list example
		showAllExampleDataUUIDFn(sessionStorage.getItem('uuid'));
		//select on tab load example
		showAllExampleLoadDataFn(sessionStorage.getItem('uuid'));
		clearExampleDataFn();
	});
	//action show modal  end


	$(document).on("click",".delExampleData",function(){

		var b_id = this.id;
		b_id=b_id.split("-");
		b_id=b_id[1];

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: '',
			buttons: {
				confirm: {
					text: 'ยืนยัน', 
					action: function () {
						delExampleDataFn(sessionStorage.getItem('uuid'),b_id);
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
		var b_id = this.id;
		b_id=b_id.split("-");
		b_id=b_id[1];
		//alert(b_id);
		$("#actionExample").val("edit");
		$("#b_id").val(b_id);
		findOneExampleDataFn(sessionStorage.getItem('uuid'),b_id);
	
	 });
	 $(document).on("click",".exportExampleData",function(){
		var b_id = this.id;
		b_id=b_id.split("-");
		b_id=b_id[1];
	
		exportExampleDataFn(sessionStorage.getItem('uuid'),b_id);
	
	 });

	 $("#b_name_find").keyup(function(){
		console.log("search");
		var value = $(this).val().toLowerCase();
		$("#exampleDataTable tbody tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});


	/*load data start here.*/
	$("#btnLoadExample").click(function(){

		$.confirm({
			title: '<i style="font-size:44px; color:red;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> ยืนยันการลบข้อมูล!',
			content: 'คำเตือน!! ข้อมูลเก่าจะถูกลบโดยทันที',
			buttons: {
				confirm: {
					text: 'ยืนยันการโหลดข้อมูล', 
					
					action: function () {

						if($("#file_import").val()==""){
			
							loadExampleDataFn(sessionStorage.getItem('uuid'),$("#b_id_load").val());
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

		
		
	 });
	 /*load data end here.*/

});