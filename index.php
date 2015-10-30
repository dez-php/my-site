<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once 'vendor/autoload.php';

$app    = new Dez\Mvc\Application();

$app->config->merge(Dez\Config\Config::fatory('app/config/app.php'));

Dez\ORM\Connection::init( $app->config, 'dev' );

$app->loader->registerNamespaces( $app->config['application']['autoload']->toArray() )->register();

$app->url->setBasePath( $app->config['application']['basePath'] );
$app->url->setStaticPath( $app->config['application']['staticPath'] );

$app->view
    ->setViewDirectory( $app->config['application']['viewDirectory'] )
    ->registerEngine( '.php', new Dez\View\Engine\Php( $app->view ) );

$app->getDi()->set( 'auth', new Dez\Auth\Auth( new Dez\Auth\Adapter\Session( $app->getDi() ) ) );

$app->view->set( 'auth', $app->auth );

///////// app
$app->setErrorHandler(function(\Exception $exception, Dez\Mvc\Application $app){
    $app->view->set( 'message', $exception->getMessage() );
});

$app->setPage404Handler(function(Dez\Mvc\Application $app){
    $app->view->set( 'message', $app->router->getTargetUri() );
});

$response   = $app->run();
$response->send();