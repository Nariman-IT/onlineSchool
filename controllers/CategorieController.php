<?php

// Контроллер товаров

//Подключение модели
include_once '../models/UnderCategoriesModel.php';


// Загрузка страницы c товарами
function categoriesPageAction($twig){

    $itemId = $_GET['id'];

    $resultSubCategories = getAllSubCategories($itemId);
    
    $twig->addGlobal('resultSubCategories', $resultSubCategories);

    echo $twig->render("header.twig");
    echo $twig->render("category.twig");
    echo $twig->render("footer.twig");
}