<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://rawgit.com/nnnick/Chart.js/v1.0.2/Chart.min.js"></script>
    <script type="text/javascript">
        window.onload=function(){/*from  w w w.  j  av  a2s.  c  o  m*/
            function getActualData() {
                var actualData = []
                for (var m = 0; m < 20; m++)
                    actualData.push(45 + parseInt(Math.random() * 35))
                return actualData;
            }
            var ANIMATIONSTEPS = 200;
            var myLineChart;
            var labels;
            var animationStep;
            setInterval(function () {
                if (myLineChart === undefined) {
                    var actualData = getActualData();
                    var interpolationSteps = Math.ceil(ANIMATIONSTEPS / actualData.length);
                    labels = []
                    var data = []
                    var blankData = []
                    for (var i = 0; i < (actualData.length - 1); i++) {
                        labels.push('')
                        data.push(actualData[i])
                        blankData.push(null)
                        var difference = actualData[i + 1] - actualData[i];
                        var interpolationStep = 1 / interpolationSteps;
                        for (var j = 1; j < interpolationSteps; j++) {
                            labels.push('')
                            data.push(actualData[i] + difference * Chart.helpers.easingEffects["linear"](j * interpolationStep));
                            blankData.push(null)
                        }
                    }
                    labels.push('')
                    data.push(actualData[i])
                    blankData.push(null)
                    var data = {
                        labels: labels,
                        datasets: [
                            {
                                strokeColor: "rgba(243, 118, 27, 1)",
                                data: blankData
                            },
                            {
                                strokeColor: "transparent",
                                data: data
                            }
                        ]
                    };
                    var ctx = document.getElementById("myChart").getContext("2d");
                    myLineChart = new Chart(ctx).Line(data, {
                        animation: false,
                        datasetFill: false,
                        pointDot: false,
                        datasetStrokeWidth: 5,
                        showTooltips: false,
                        scaleOverride: true,
                        scaleSteps: 12,
                        scaleStepWidth: 5,
                        scaleStartValue: 30,
                        scaleShowVerticalLines: false,
                        scaleShowLabels: false,
                    });
                    animationStep = 0;
                }
                myLineChart.datasets[0].points[animationStep].value = myLineChart.datasets[1].points[animationStep].value
                myLineChart.update();
                animationStep++;
                if (animationStep >= labels.length) {
                    myLineChart.destroy();
                    myLineChart = undefined;
                }
            }, 10)
        }

    </script>
</head>
<body>
<canvas id="myChart" height="450" width="600"></canvas>
</body>
</html>