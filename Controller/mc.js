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

var findOne=function(uuid){

    $.ajax({
		url:"./Model/action-mc.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
			"action":"addCateTask",
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

$(document).ready(function(){
	
   

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

	 $("#submitAddTask").click(function(){
	// 	alert("submitAddTask");
	//$("#exampleModal").modal();

	// 	var htmlAddTask="";
	// 	htmlAddTask+="<div class='accordion-item'>";
	// 		htmlAddTask+="<h2 class='accordion-header' id='flush-headingThree'>";
	// 		htmlAddTask+="<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseThree' aria-expanded='false' aria-controls='flush-collapseThree'>";
	// 		htmlAddTask+="งานที่#3";
	// 		htmlAddTask+="</button>";
	// 		htmlAddTask+="</h2>";
	// 		htmlAddTask+="<div id='flush-collapseThree' class='accordion-collapse collapse' aria-labelledby='flush-headingThree' data-bs-parent='#accordionFlushExample'>";
	// 			htmlAddTask+="<div class='accordion-body'>";
							
	// 			htmlAddTask+="</div>";
	// 		htmlAddTask+="</div>";
	// 	htmlAddTask+="</div>";
	 });

	$("#submitDeleteTask").click(function(){
		alert("submitDeleteTask");
	});


});