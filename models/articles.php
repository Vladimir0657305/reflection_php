<?php
include_once 'contracts/model.php';

class MArticles implements Model
{
    public function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Article from db'],
            ['id' => 2, 'title' => 'Second article from db'],
            ['id' => 3, 'title' => 'Third article from db']
        ];
    }
}



