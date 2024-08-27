<?php

include_once 'contracts/model.php';

class Articles implements Model
{
    protected Logger $logger;

    public function __construct(Logger $logger) 
    {
        $this->logger = $logger;
    }
    public function all() : array
    {
        $this->logger->write("I am take all");

        return [
            ['id' => 1, 'title' => "Article " . mt_rand(1, 10) . " from DB"],
            ['id' => 2, 'title' => "Article " . mt_rand(11, 20) . " from DB"],
            ['id' => 3, 'title' => "Article " . mt_rand(21, 30) . " from DB"],
            ['id' => 4, 'title' => "Article " . mt_rand(31, 40) . " from DB"],
        ];
    }
}