<?php

//$cn = $_SESSION['currentcompany'];
$cn = "Mediamarkt Pluscity";
$comp_id = return_comp_id($cn); //comp_id

//$pn = $_SESSION['currentproduct'];
$pn = "iPhone 13 Pro Max";
$prod_id = return_prod_id($pn);

$prod_comp_id = return_prod_comp_id($prod_id, $comp_id);

/*$dataPoints = array(
    array("y" => 0, "label" => "20.06.2023"),
    array("y" => 10, "label" => "21.06.2023"),
    array("y" => 20, "label" => "22.06.2023"),
    array("y" => 30, "label" => "23.06.2023"),
    array("y" => 0, "label" => "24.06.2023"),
    array("y" => 20, "label" => "25.06.2023"),
    array("y" => 20, "label" => "26.06.2023"),
    array("y" => 0, "label" => "27.06.2023")
);*/
$dataPoints = returnValuesDiagrammInArray(4505, "2024-06-06");;
if ($dataPoints == -1)
{
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

                    text: "Preis Verlauf der letzten Tage"

                },

                axisY: {

                    title: "",

                    interval: maxPHP/10,

                    stripLines: [

                        {

                            value: 0,

                            showOnTop: true,

                            lineDashType: "dash",

                            color: "gray"

                        }

                    ],
                    minimum: 0,
                    maximum: maxPHP,
                    labelFormatter: function(e) {
                        return e.value + "€";
                    }

                },

                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>

                }],
                toolTip: {
                    content: "Preis: {y}€"
                }

            });

            chart.render();
            chart.options.data[0].click = function(e) {

                alert(e.dataPoint.label + ": " + e.dataPoint.y + "€");
            };

        }

    </script>
</head>

<body>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

</body>

</html>