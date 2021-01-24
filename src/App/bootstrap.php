<?php 

    require_once __DIR__ . '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $app = new Silex\Application();

    $app['debug'] = $_ENV['APP_ENV'] === 'dev' ? true : false;

    require_once __DIR__ . '/../app/routes.php';

    $app->run();