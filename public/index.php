<?php 

require_once __DIR__.'/../app/silex.phar'; 

$app = new Silex\Application(); 
$app['debug'] = true;
$app->get('/', function() use($app) { 
    return '<h1>Twilio, so hot right now...</h1>'; 
}); 

$app->run(); 