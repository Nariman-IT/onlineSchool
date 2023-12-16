<?php

// Получение под категорий

function getAllSubCategories($itemId){
        
    global $mysqli;

    $sqlQuery = "SELECT * 
                FROM subcategories
                WHERE parent_id = {$itemId}";

    $result = $mysqli->query($sqlQuery);

    return CreatingAnArrayOfRequestSql($result);
}