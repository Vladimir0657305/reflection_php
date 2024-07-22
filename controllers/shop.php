<?php

class CShop
{
    protected MArticles $model;
    protected Session $session;

    public function __construct(MArticles $model, Session $session)
    {
        $this->model = $model;
        $this->session = $session;
        $this->session->set('test', mt_rand(1, 10));
    }

    public function run()
    {
        $articles = $this->model->all();
        echo "<h1>Home page</h1>";

        foreach ($articles as $art) {
            echo "<hr><h2>{$art['title']}</h2>";
        }

        $val = $this->session->get('test');
        echo "<div>And other string - $val</div>";
    }
}