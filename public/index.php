<?php
use Silex;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/test-param/{name}', function (Silex\Application $app, $name) {
    return "Hello, " . $name;
});

$app->run();
