
<?php
include_once 'contracts/itrack.php';

class Track implements Itrack
{
    protected Model $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function go()
    {
        $articles = $this->model->all();

        echo "<h2>Title second controller</h2>";

        foreach($articles as $article)
        {
            echo "<hr><h4>{$article['title']}</h4>";
        }
    }
}