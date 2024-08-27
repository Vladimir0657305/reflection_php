<?php

include_once 'contracts/controller.php';
include_once 'contracts/model.php';
include_once 'contracts/storage.php';
include_once 'controllers/home.php';
include_once 'controllers/shop.php';
include_once 'models/articles.php';
include_once 'utils/session.php';
// include_once 'utils/logger.php';

class Container
{
    protected array $binds = [];

    public function bind(string $type, string $subtype)
    {
        $this->binds[$type] = $subtype;
    }
    public function resolveClass($classname)
    {
        $ref = new ReflectionClass($classname);
        $constr = $ref->getConstructor();

        $deps = [];

        if ($constr !== null) {
            $attrs = $constr->getParameters();
            foreach ($attrs as $attr) {
                $name = $attr->getType()->getName();
                if (isset($this->binds[$name])) {
                    $name = $this->binds[$name];
                }
                $deps[] = $this->resolveClass($name);
            }
        }

        return new $classname(...$deps);
    }
}


$container = new Container();
$container->bind(Model::class, Articles::class);
$container->bind(Storage::class, Session::class);

$controller = $container->resolveClass(Shop::class);
$controller->run();

// $mArticles = new MArticles();
// $session = new Session();

// $controller = new CHome($mArticles);
// $controller->run();

// $controller = new CShop($mArticles, $session);
// $controller->run();

