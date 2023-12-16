<?php

// ГЛАВНАЯ СТРАНИЦА САЙТА


//Подключение модели
include_once '../models/CategoriesModel.php';


// Загрузка главной страницы
function homePageAction($twig){

    $resultCategories = getAllMainCategories();
    
    $twig->addGlobal('resultCategories', $resultCategories);

    echo $twig->render("header.twig");
    echo $twig->render("main.twig");
    echo $twig->render("footer.twig");

}