<?php
require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
$app = new Silex\Application();
/* daftarkan doctrine dbal*/
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
	'dbs.options' => array(
		'mysql_read' => array(
			'driver' => 'pdo_msyql',
			'host' => 'localhost',
			'dbname' => 'belajarsilex',
			'user' => 'root',
			'password' => '123123',
			'charset' => 'utf8'
			)
		)
	));
/* daftarkan doctrine dbal*/
/* daftarkan twig */
$app->register(new Silex\Provider\TwigServiceProvider(),array(
	'twig.path' =>__DIR__.'views',));
/* daftarkan twig */

$app['debug'] = true;
/*list route */
$app->get('/', function (Request $request) use ($app) {
    return 'Hello Acep';
});
$app->get('/users', function(Request $request) use ($app) {

});
$app->get('/user/new', function(Request $request) use ($app) {
	
});
$app->get('/user/{id}', function(Request $request,$id) use ($app) {
	
});
$app->put('/user/{id}', function(Request $request,$id) use ($app) {
	
});
$app->delete('/user/{id}', function(Request $request,$id) use ($app) {
	
});
/*list route */

$app->run();