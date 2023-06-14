<?php

function makeStatement($query, $executeArray = NULL)
{
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute($executeArray);
    return $stmt;
}
