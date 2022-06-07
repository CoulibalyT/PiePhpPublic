<?php

namespace Controller;
use Core\Controller;
use Core\ORM;

class MovieController extends Controller
{
    public function search()
    {
        $orm = new ORM();
        $movie = $_POST['search'];
        // var_dump($movie);
        $concat = '%' . $movie . '%';
        $result_Movie = $orm->find('movie', [
            'where' => "title like '$concat'",
        ]);

        $css = 'search.css';
        $this->render('search', [
            'css' => $css,
            'result_Movie' => $result_Movie,
        ]);
    }
    // var_dump($concat);
}

?>
