<?php

include 'functions.php';


echo '<p>Test</p>';




/*$dataPoints = array(

    array("y" => 0, "label" => "20.06.2023"),
    array("y" => 50, "label" => "21.06.2023"),
    array("y" => 20, "label" => "22.06.2023"),
    array("y" => 30, "label" => "23.06.2023"),
    array("y" => 0, "label" => "24.06.2023"),
    array("y" => 20, "label" => "25.06.2023"),
    array("y" => 20, "label" => "26.06.2023"),
    array("y" => 0, "label" => "27.06.2023")

);*/
$dataPoints = 0;
if ($dataPoints!= -1)
{
    $dataPoints = returnValuesDiagrammInArray(4505, "2024-06-06");
}
else {
    $dataPoints = 0;
}

$max = returnMaxPriceForprod_comp_id(4505);


?>




<!DOCTYPE HTML>

<html>

<head>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        var maxPHP = "<?php echo $max; ?>";
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {

                title: {

                    text: "Preisdiagramm"

                },

                axisY: {

                    title: "€",

                    interval: maxPHP/10,

                    minimum: 0,

                    maximum: maxPHP

                },

                data: [{

                    type: "line",

                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>

                }]

            });

            chart.render();

        }

    </script>

</head>

<body>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

</body>

</html>