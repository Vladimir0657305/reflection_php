<?php

class CShop
{
    protected MArticles $model;

    public function __construct()
    {
        $this->model = new MArticles();
        Session::set('test', mt_rand(1, 10));
    }

    public function run()
    {
        $articles = $this->model->all();
        echo "<h1>Home page</h1>";

        foreach ($articles as $art) {
            echo "<hr><h2>{$art['title']}</h2>";
        }

        $val = Session::slice('test');
        echo "<div>And other string - $val</div>";
    }
}