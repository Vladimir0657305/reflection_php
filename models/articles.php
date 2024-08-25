<?php

class Articles
{
    public function all()
    {
        return [
            ['id' => 1, 'title' => "Article " . mt_rand(1, 10) . " from DB"],
            ['id' => 2, 'title' => "Article " . mt_rand(11, 20) . " from DB"],
            ['id' => 3, 'title' => "Article " . mt_rand(21, 30) . " from DB"],
            ['id' => 4, 'title' => "Article " . mt_rand(31, 40) . " from DB"],
        ];
    }
}