<?php
namespace Controller; //
use Core\ORM;
use Core\Controller;
use Model\MovieModel;
class AppController extends Controller
{
    public function indexAction()
    {
        $orm = new ORM();
        $result = $orm->readAll('movie');
        //$movie = $_POST['search'];
        // var_dump($movie);
        // $concat = "%".$movie."%";
        // var_dump($concat);
        // $result_Movie = $orm->find('movie',array('where' => "title like $concat"));
        // var_dump($_REQUEST);
        // var_dump("title like $concat");

        // $movie = new MovieModel;
        // $nb_movie = $movie->Nb_Movie();

        $css = 'Accueil.css';

        $this->render('index', [
            'css' => $css,
            'result' => $result,
            'result_Movie' => $result,
        ]);
    }

    function log()
    {
        // echo 'Tene';
    }
}
