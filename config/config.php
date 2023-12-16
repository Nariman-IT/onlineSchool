<?php


//Подключение шаблонизатор Twig
require_once '../library/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../views/templates');
$twig = new \Twig\Environment($loader);


//Путь к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');




// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Slim\Factory\AppFactory;

// require __DIR__ . '/../library/vendor/autoload.php';

// $app = AppFactory::create();

// $app->get('/', function (Request $request, Response $response, $args) {
//     $response->getBody()->write("Hello world!");
//     return $response;
// });

// $app->run();
