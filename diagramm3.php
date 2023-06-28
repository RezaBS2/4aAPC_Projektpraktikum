<?php

include 'head.php';
include 'functions.php';

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

/**/
//$cn = $_SESSION['currentcompany'];
$cn = $_SESSION['SearchResults'][$_GET['producktArr_id']][1];
//$cn = "Mediamarkt Pluscity";
$comp_id = return_comp_id($cn); //comp_id

//$pn = $_SESSION['currentproduct'];
$pn = $_SESSION['SearchResults'][$_GET['producktArr_id']][0];
//$pn = "iPhone 13 Pro Max";
$prod_id = return_prod_id($pn);

$prod_comp_id = return_prod_comp_id($prod_id, $comp_id);

/*$dataPoints = array(
    array("y" => 00, "label" => "20.06.2023"),
    array("y" => 10, "label" => "21.06.2023"),
    array("y" => 5, "label" => "22.06.2023"),
    array("y" => 25, "label" => "23.06.2023"),
    array("y" => 5, "label" => "24.06.2023"),
    array("y" => 20, "label" => "25.06.2023"),
    array("y" => 10, "label" => "25.06.2023"),
    array("y" => 20, "label" => "26.06.2023"),
    array("y" => 5, "label" => "27.06.2023")
);*/
$dataPoints = returnValuesDiagrammInArray($prod_comp_id, date("Y-m-d"));
//$dataPoints = returnValuesDiagrammInArray(4517, "2026-06-06");

if ($dataPoints == -1)
{
    $dataPoints = 0;
}

//$max = returnMaxPriceForprod_comp_id(4517);
$max = returnMaxPriceForprod_comp_id($prod_comp_id);

?>
    <!DOCTYPE HTML>
    <html>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>

        var maxPHP = "<?php echo $max; ?>";
        var maxPHPplus = "<?php echo $max + $max/10; ?>";
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
                    maximum: maxPHPplus,  // Anpassen des Maximum-Werts, falls nötig
                    labelFormatter: function(e) {
                        return e.value + "€";
                    }
                },
                axisX: {

                    minimum: 0,
                    maximum: <?php echo count($dataPoints) - 1; ?>,
                    interval: 1
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



    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <br>
    <br>
    <div>
        <a class="nav-link " href="page1.php">
            <i class="btn btn-primary">
            <span>Zurück</span>
            </i>
        </a>
    </div>

</html>
