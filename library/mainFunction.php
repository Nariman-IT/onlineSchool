<?php

// ФУНКЦИИ РОБОТА С ШАБЛОНАМИ


// Загрузка страницы
function loadPage($twig, $controllerName, $actionName){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($twig);
}


//Создание массива SQl запроса
function CreatingAnArrayOfRequestSql($result){
    if(!$result) return false;

    $resultsArray = array();
    while($row = $result->fetch_assoc()) {
        $resultsArray[] = $row;
    }

    return $resultsArray;
}
