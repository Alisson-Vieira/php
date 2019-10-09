<?php 
require_once 'vendor/autoload.php';

require_once 'App/Core/Core.php';
require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/CadastroController.php';
require_once 'App/Controller/ErrorController.php';
require_once 'App/Controller/WorkshopsController.php';
require_once 'App/Model/Database.php';


$app = new \Slim\Slim();

$app->get('/', function(){
	$template = new Core();
	$template->start($_GET);
});



$app->run();	