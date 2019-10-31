<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Expenses for the past 7 days"
	},
	axisY: {
		title: "Expneses"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Past 7 days History TOTAL:SGD50.35",
		dataPoints: [      
			{ y: 12.90, label: "Monday" },
			{ y: 13.95,  label: "Tuesday" },
			{ y: 10.32,  label: "Wednesday" },
			{ y: 0,  label: "Thursday" },
			{ y: 13.18,  label: "Friday" },
			{ y: 0, label: "Saturday" },
			{ y: 0,  label: "Sunday" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>