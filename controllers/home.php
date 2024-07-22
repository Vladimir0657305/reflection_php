<?php

class CHome
{
    protected MArticles $model;

    public function __construct(MArticles $model)
    {
        $this->model = $model;
    }

    public function run()
    {
        $articles = $this->model->all();
        echo "<h1>Home page</h1>";

        foreach ($articles as $art) {
            echo "<hr><h2>{$art['title']}</h2>";
        }

    }

}
