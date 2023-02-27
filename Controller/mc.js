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

$(document).ready(function(){
	
   

	createGauges(1,139);
	createGauges(2,91);
	createGauges(3,83.66);
	createGauges(4,120.5);

});