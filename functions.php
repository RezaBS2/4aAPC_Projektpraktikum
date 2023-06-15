<?php
include "config.php";
function makeStatement($query, $executeArray = NULL)
{
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute($executeArray);
    return $stmt;
}
function makeSelectFromSelect($query1, $name)//, $executeArray = NULL)
{
    global $con;
    //$query1 = 'select orpl_id, plz_nr as "PLZ", ort_name as "ort" from ort_plz natural join (ort, plz) order by ORT';
    $stmt = $con->prepare($query1);
    $stmt->execute();
    echo '<br><select name="'.$name.'">';
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo '<option value="' . $row[0] . '">' . $row[1];
    }
    echo '</select>';

}



?>
