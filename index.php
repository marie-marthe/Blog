<?php

// on initialise une session
session_start();

use Blog\model\http\Request;
use Blog\model\http\Response;
use Blog\Model\Router;
use Blog\application\App;
use Blog\helper\VisitCount;
use Symfony\Component\Yaml\Yaml;

require_once("Blog/application/Autoloader.php");
(new VisitCount)->countVisitor();

//on instancie une nouvelle app
$app = new App;

//on instance une nouvelle requête
$request = new Request;

//on instance une nouvelle reponse
$response = new Response;

$router = new Router($request, $response, $app);

//le routeur analyse l'ur et et renvoi le bon controller avec la bonne action
$router->dispatch();

//on affiche la réponse
echo $response;

?>