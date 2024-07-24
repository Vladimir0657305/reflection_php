<?php

include_once 'contracts/controller.php ';
include_once 'contracts/model.php ';
include_once 'contracts/storage.php ';
include_once 'controllers/home.php';
include_once 'controllers/shop.php';
include_once 'models/articles.php';
include_once 'utils/session.php';
include_once 'utils/logger.php';

class Container
{
    protected array $binds = [];
    public function resolveClass($classname)
    {
        $ref = new ReflectionClass($classname);
        $constr = $ref->getConstructor();

        $deps = [];

        if ($constr !== null) {
            $attrs = $constr->getParameters();
            foreach ($attrs as $attr) {
                $name = $attr->getType()->getName();
                $deps[] = $this->resolveClass($name);
            }
        }

        return new $classname(...$deps);
    }
}


$container = new Container();
$controller = $container->resolveClass(CShop::class);
$controller->run();

// $mArticles = new MArticles();
// $session = new Session();

// $controller = new CHome($mArticles);
// $controller->run();

// $controller = new CShop($mArticles, $session);
// $controller->run();

