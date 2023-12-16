<?php

//Подключение конфигурации
include_once '../config/config.php';

//Подключение баз данных
include_once '../config/dataBase.php';

//Подключение TWIG
include_once '../library/mainFunction.php';



//Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Main';
//Определяем с какой функции будем работать
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'homePage';



loadPage($twig, $controllerName, $actionName);