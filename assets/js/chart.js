function renderChart(chartId) {
    var dps = []; // dataPoints
    var chart = new CanvasJS.Chart(chartId, {
        title: {
            text: "Temperature"
        },
        axisY: {
            title: "nhiệt độ",
            includeZero: false
        },
        axisX: {
            title: "thời gian",
            intervalType: "second",
            valueFormatString: "hh:mm:ss"
        },
        data: [{
            type: "line",
            dataPoints: dps
        }]
    });

    var yVal = 100;
    var updateInterval = 1000;
    var dataLength = 20; // number of dataPoints visible at any point

    var updateChart = function (count, yVal) {
        count = count || 1;
        for (var j = 0; j < count; j++) {
            dps.push({
                x: new Date(),
                y: yVal
            });
            xVal = new Date();
        }

        if (dps.length > dataLength) {
            dps.shift();
        }

        chart.render();
    };
    var getTempData = function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				var cel = parseInt(myObj.temp);
				updateChart(dataLength,cel);
			}
		};
		xmlhttp.open("GET", "temprecive.json", true);
		xmlhttp.send();
	}
    //updateChart(dataLength);
    setInterval(function () { getTempData() }, updateInterval);
}