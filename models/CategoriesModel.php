<?php 

// Получение главной категории 

function getAllMainCategories(){
    
    global $mysqli;

    $sqlQuery = "SELECT * 
                FROM categories";

    $result = $mysqli->query($sqlQuery);

    return CreatingAnArrayOfRequestSql($result);
}