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

        $user_id = $row[0];

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

            $prod_comp_id = $row[0];

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
    SET remember = \'t\'
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$user_id, $prod_comp_id]);
}


// Favorit entfernen
function deleteFromFavourite($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $query = 'UPDATE user_prod_comp
    SET remember = NULL
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$user_id, $prod_comp_id]);
}

// check Favoutite status
function returnFavouriteStatus($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $remember = 0;


    $query = 'SELECT remember 
    FROM user_prod_comp
    WHERE user_id = ? AND prod_comp_id = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$user_id, $prod_comp_id]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        $remember = $row[0];
    }
    return $remember;

}



//Insert in user_prod_comp ausführen falls kein Eintrag vorhanden ist
function insertInto_user_prod_comp($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $stmt = 'INSERT INTO user_prod_comp(prod_comp_id, user_id, bewertung, remember) 
				VALUES (? , ?, NULL, NULL)';
    $sql = $con->prepare($stmt);

    $sql->execute([$prod_comp_id, $user_id]);
}


//Select von user_prod_comp ausführen um zu prüfen ob Einträge vorhanden sind
function getRowCountFrom_user_prod_comp($user_id, $prod_comp_id)//, $executeArray = NULL)
{
    global $con;

    $rCount = 0;

    $stmt = 'SELECT user_prod_comp_id FROM user_prod_comp WHERE user_id = ? AND prod_comp_id = ?';
    $sql = $con->prepare($stmt);
    $sql->execute([$user_id, $prod_comp_id]);


    $rCount = $sql->rowCount();


    return $rCount;
}


//Merkliste
function getRememberedItemsForUserToList($user_id, $imageSource = NULL)//, $executeArray = NULL)
{
    global $con;

    //$remPr = "";

    //$stmtML = 'SELECT user_id FROM skimp.USER WHERE user_id = ?';

    $stmtML =     'SELECT pro.product, p.price, u.username, c.company, p.date FROM price p
                INNER JOIN prod_comp pc ON pc.prod_comp_id=p.prod_comp_id
                INNER JOIN comp c ON c.comp_id=pc.comp_id
                INNER JOIN prod pro ON pro.prod_id=pc.prod_id
                INNER JOIN user_prod_comp upc ON upc.prod_comp_id=pc.prod_comp_id
                INNER JOIN USER u ON u.user_id=upc.user_id
                WHERE date = (
                SELECT MAX(date) FROM price
                WHERE	prod_comp_id=p.prod_comp_id)
                AND upc.remember = "t"
                AND u.user_id = ?';
    $sqlML = $con->prepare($stmtML);
    $sqlML->execute([$user_id]);

    //echo '<script>alert("Statement: '.$stmtML.'")</script>';
    //echo '<script>alert("Row Count: '.$sqlML->rowCount().'")</script>';
    //echo '"Statement: '.$stmtML.'"';
    //echo '<script>alert("User_id: '.$user_id.'")</script>';
    //echo '"User_id: '.$user_id.'"';

/*while ($rowML = $sqlML->fetch(PDO::FETCH_NUM))
{
    echo '<script>alert("Schleife")</script>';
    $remPr = $rowML[0];
}
return 1;*/


    while ($rowML = $sqlML->fetch(PDO::FETCH_NUM))
    {
        $remPr = $rowML[0];
        try
        {
            echo '<hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="'.$imageSource.'">
                  <b> '.$remPr.'</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                    </b>
                  </div>
                </li>
                </hr>';



        } catch (Exception $e)
        {
            echo $e->getCode() . ': ' . $e->getMessage() . '<br>;';
        }

    }

    //return $remPr;

}




function returnAVGnoDecimals($prod_comp_id)//, $executeArray = NULL)
{
    //SELECT CAST(AVG(bewertung) AS DECIMAL(10,0)) FROM skimp.user_prod_comp WHERE prod_comp_id = 4517
    global $con;
    $avg = 0;

    $stmt = 'SELECT CAST(AVG(bewertung) AS DECIMAL(10,0)) FROM skimp.user_prod_comp WHERE prod_comp_id = ?';
    $sql = $con->prepare($stmt);
    $sql->execute([$prod_comp_id]);

    while ($row = $sql->fetch(PDO::FETCH_NUM))
    {
        $avg = $row[0];
    }
    return $avg;
}

function returnAVGoneDecimal($prod_comp_id)//, $executeArray = NULL)
{
    global $con;
    $avg = 0;

    $stmt = 'SELECT CAST(AVG(bewertung) AS DECIMAL(10,1)) FROM skimp.user_prod_comp WHERE prod_comp_id = ?';
    $sql = $con->prepare($stmt);
    $sql->execute([$prod_comp_id]);

    while ($row = $sql->fetch(PDO::FETCH_NUM))
    {
        $avg = $row[0];
    }
    return $avg;
}


function returnRatings($avgnodec, $avgonedec)
{
    //global $con;
    $i = 0;

    /*$avgnodec = returnAVGnoDecimals($prod_comp_id);
    $avgonedec = returnAVGoneDecimal($prod_comp_id);*/

    if($avgnodec >= 1)
    {
        for ($x = 1; $x <= $avgnodec; $x++) {
            echo '<i class="bi bi-star-fill star1"></i>';
            $i++;
        }
        if ($avgnodec < $avgonedec)
        {
            echo '<i class="bi bi-star-half star1"></i>';
            $i++;
        }
        if($i < 5){
            for ($i; $i < 5; $i++) {
                echo '<i class="bi bi-star star1"></i>';
            }
        }
    }
    else if ($avgonedec > 0){
        echo '<i class="bi bi-star-half star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
    }
    else {
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
        echo '<i class="bi bi-star star1"></i>';
    }

}



function returnValuesDiagramm($prod_comp_id, $date)
{
    try{
        //include 'config.php';
        global $con;
        $val = 0.0;


        $stmt =     'SELECT price
                            FROM 
                                skimp.price p 
                                    NATURAL JOIN 
                                prod_comp pc 
                            WHERE 
                            prod_comp_id = ?
                                AND
                            date  = (
                                SELECT MAX(date) FROM price
                                WHERE   
                                    date <= ?)';
        $sql = $con->prepare($stmt);
        $sql->execute([$prod_comp_id, $date]);



        while ($row = $sql->fetch(PDO::FETCH_NUM))
        {
            $val = $row[0];
        }
        return $val;
    }
    catch (Exception $e)
    {
        echo $e->getCode() . ': ' . $e->getMessage() . '<br>;';
        return -1;
    }

}





function returnValuesDiagrammArray($prod_comp_id, $date)
{
    try{
       // include 'config.php';
        global $con;
        $val = [];
        $c = 0;


        $stmt =     'SELECT price, date
            FROM 
                skimp.price p 
                    NATURAL JOIN 
                prod_comp pc 
            WHERE 
            prod_comp_id = ?
                AND
            date  <= ?
            ORDER BY DATE DESC';
        $sql = $con->prepare($stmt);
        $sql->execute([$prod_comp_id, $date]);



        while ($row = $sql->fetch(PDO::FETCH_NUM))
        {
            //$val = $row[0];
            $val = array_fill($c, 1, $row[0]);
            $c++;
        }
        return $val;
    }
    catch (Exception $e)
    {
        echo $e->getCode() . ': ' . $e->getMessage() . '<br>;';
        return -1;
    }

}


function returnValuesDiagrammInArray( $prod_comp_id, $date)
{
    try{
        // include 'config.php';
        global $con;
        $val = [];

        $dataPoints = [];
        $query = 'SELECT price, date
            FROM 
                skimp.price p 
                    NATURAL JOIN 
                prod_comp pc 
            WHERE 
            prod_comp_id = ?
                AND
            date  <= ?
            ORDER BY DATE ASC';
        $sql = $con->prepare($query);
        $sql->execute([$prod_comp_id, $date]);



        while ($row = $sql->fetch(PDO::FETCH_NUM))
        {
             //= array(

             //   array("y" => $row[0], "label" => $row[1]));

            array_push($dataPoints, array("y" => $row[0], "label" => $row[1]));
        }
        return $dataPoints;
    }
    catch (Exception $e)
    {
        echo $e->getCode() . ': ' . $e->getMessage() . '<br>;';
        return -1;
    }

}

function returnMaxPriceForprod_comp_id($executeArray = NULL)
{
    global $con;
    try {
        $query = 'SELECT MAX(price)
        FROM 
            skimp.price p 
            WHERE prod_comp_id = ?
            ORDER BY price DESC';
        $sql = $con->prepare($query);
        $sql->execute([$executeArray]);

        while ($row = $sql->fetch(PDO::FETCH_NUM))
        {
            return $row[0];
        }

    } catch (Exception $e)
    {
        echo $e->getCode().': '.$e->getMessage().'<br>;';
        return -1;
    }
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
            return 1;
        } else {
            echo '</table><br><h5>Keine Ergebnisse vorhanden</h5><br>';
            return 0;
        }
    } catch (Exception $e) {
        echo '</td></tr></table>';
        echo $e->getCode().': '.$e->getMessage().'<br>;';
        return -1;
    }

}

?>
