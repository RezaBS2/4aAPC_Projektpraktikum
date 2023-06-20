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

// user_id erhalten
function return_user_id($username)//, $executeArray = NULL)
{
    global $con;
    $user_id = "";

    $query = 'SELECT user_id FROM skimp.user WHERE username = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$username]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        foreach ($row as $r)
        {
            $user_id = $r[0];
        }
    }

    return $user_id;
}



// SELECT  prod_id FROM prod
function return_prod_id($product)//, $executeArray = NULL)
{
    global $con;
    $prod_id = "";

    $query = 'SELECT prod_id from prod WHERE product = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$product]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        $prod_id = $row[0];
    }
    return $prod_id;
}


// SELECT  comp_id FROM prod
function return_comp_id($company)//, $executeArray = NULL)
{
    global $con;
    $comp_id = "";

    $query = 'SELECT comp_id from comp WHERE company = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$company]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        $comp_id = $row[0];
    }
    return $comp_id;
}




// prod_comp_id erhalten
function return_prod_comp_id($prod_id, $comp_id)//, $executeArray = NULL)
{
    global $con;
    $prod_comp_id = "";

    $query = 'SELECT prod_comp_id FROM prod_comp WHERE prod_id = ? AND comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$prod_id, $comp_id]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        foreach ($row as $r)
        {
            $prod_comp_id = $r[0];
        }
    }

    return $prod_comp_id;
}





// Bewertung
// Bewertung hinzufügen
function saveRating($bewertung, $user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;

    $query = 'UPDATE user_prod_comp
    SET bewertung = ?
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$bewertung, $user_id, $prod_comp_id]);
}



// Favoriten
// Favorit hinzufügen
function saveAsFavourite($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;

    $query = 'UPDATE user_prod_comp
    SET remember = 1
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$user_id, $prod_comp_id]);
}


// Favorit entfernen
function deleteFromFavourite($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $query = 'UPDATE user_prod_comp
    SET remember = 0
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$user_id, $prod_comp_id]);
}


//Insert in user_prod_comp ausführen falls kein Eintrag vorhanden ist
function insertInto_user_prod_comp($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $stmt = 'INSERT INTO user_prod_comp(user_prod_comp_id , prod_comp_id, user_id, bewertung, remember) 
				VALUES (DEFAULT, ? , ?, NULL, NULL)';
    $sql = $con->prepare($stmt);

    $sql->execute([$prod_comp_id, $user_id]);
}


//Select von user_prod_comp ausführen um zu prüfen ob Einträge vorhanden sind
function getRowCountFrom_user_prod_comp($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $stmt = 'SELECT user_prod_comp_id FROM user_prod_comp WHERE user_id = ? AND prod_comp_id = ?';
    $sql = $con->prepare($stmt);
    $sql->execute([$user_id, $prod_comp_id]);

    $rowCount = $sql->rowCount();

    return $rowCount;
}





function makeTableWithGivenArray($query, $executeArray = NULL)
{
    global $con;
    try {
        $stmt = $con->prepare($query);
        $stmt->execute($executeArray);
        /* Tabelle mit "dynamischer" Spaltenbezeichnung mittels meta-Daten */
        $meta = array();
        echo  '<table class="table">
            <tr>';
        $colCount = $stmt->columnCount();
        $rowCount = $stmt->rowCount();
        if($rowCount > 0) {
            for ($i = 0; $i < $colCount; $i++) {
                $meta[] = $stmt->getColumnMeta($i);
                echo '<th>'.$meta[$i]['name'].'</th>';
            }
            echo '</tr>';
            while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                echo '<tr>';
                foreach ($row as $r) {
                    echo '<td>'.$r.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<br><h5>Keine Ergebnisse vorhanden</h5><br>';
        }
    } catch (Exception $e) {
        echo $e->getCode().': '.$e->getMessage().'<br>;';
    }
}

?>
