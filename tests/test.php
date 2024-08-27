<?php

include_once '../contracts/controllers.php';
include_once '../contracts/models.php';
include_once '../contracts/storage.php';
include_once '../controllers/home.php';
include_once '../controllers/shop.php';

class MockModel implements Model
{
    public function all(): array
    {
        return [
            ['id' => 1, 'title' => "MockArticle " . mt_rand(1, 10) . " from DB"],
            ['id' => 1, 'title' => "MockArticle " . mt_rand(11, 20) . " from DB"],
            ['id' => 1, 'title' => "MockArticle " . mt_rand(21, 30) . " from DB"],
            ['id' => 1, 'title' => "MockArticle " . mt_rand(31, 40) . " from DB"]
        ];
    }
}

class MockStorage implements Storage
{
    protected array $hash = [];

    public function set(string $name, mixed $value) 
    {
        $this->hash[$name] = $value;
    }

    public function get(string $name): mixed
    {
        return $this->hash[$name] ?? null;
    }

    public function slice(string $name): mixed
    {
        if (isset($this->hash[$name])) {
            $val = $this->hash[$name];
        }
        return $val;
    }
}

$m = new MockModel();
$s = new MockStorage();
$cont1 = new Home($m);
$cont1->run();

$cont2 = new Shop($m, $s);
$cont2->run();