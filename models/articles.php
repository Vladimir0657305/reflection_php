<?php
include_once 'contracts/model.php';

class MArticles implements Model
{
    protected Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function all(): array
    {
        $this->logger->write('someone get all');
        return [
            ['id' => 1, 'title' => 'Article from db'],
            ['id' => 2, 'title' => 'Second article from db'],
            ['id' => 3, 'title' => 'Third article from db']
        ];
    }
}



