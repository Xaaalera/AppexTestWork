<?php
require_once './vendor/autoload.php';

use Silex\Application as Silex;
use Silex\Provider\TwigServiceProvider as Twig;

$app = new Silex();


$app->register(new Twig(), array(
    'twig.path' => __DIR__ . '/template',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('hello.twig', []);
});
$app->run();