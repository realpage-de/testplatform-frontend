<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $builder->connect('/so-funktioniert-es', ['controller' => 'Pages', 'action' => 'howItWorks']);
    $builder->connect('/produkttests', ['controller' => 'Pages', 'action' => 'producttests']);
    $builder->connect('/kontakt', ['controller' => 'Pages', 'action' => 'contact']);
    $builder->connect('/faq', ['controller' => 'Pages', 'action' => 'faq']);
    $builder->connect('/über-uns', ['controller' => 'Pages', 'action' => 'aboutUs']);
    $builder->connect('/impressum', ['controller' => 'Pages', 'action' => 'imprint']);

    $builder->connect('/login', ['controller' => 'Pages', 'action' => 'login']);
    $builder->connect('/registration', ['controller' => 'Pages', 'action' => 'register']);

    $builder->fallbacks();
});