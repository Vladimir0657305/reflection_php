<?php

include_once 'contracts/controller.php ';
include_once 'contracts/model.php ';
include_once 'contracts/storage.php ';
include_once 'controllers/home.php';
include_once 'controllers/shop.php';
include_once 'models/articles.php';
include_once 'utils/session.php';

$mArticles = new MArticles();
$session = new Session();



// $controller = new CHome($mArticles);
// $controller->run();

// $controller = new CShop($mArticles, $session);
// $controller->run();

