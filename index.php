<?php

include_once ('controllers/home.php');
include_once ('controllers/shop.php');
include_once ('models/articles.php');
include_once ('utils/session.php');

$mArticles = new MArticles();
$controller = new CHome($mArticles);
$controller->run();

// $controller = new CShop();
// $controller->run();

