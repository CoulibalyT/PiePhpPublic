<?php
namespace Core;

class Core
{
    public function run()
    {
        // $this->dynamique();
        $this->statique();
    }

    // function dynamique(){

    //     $url = $_SERVER['REQUEST_URI'];           // Paramètre dans l'url sur le navigateur
    //     $url = str_replace(BASE_URI, '', $url);
    //     $url = explode('/', $url);

    //     if($url == NULL){                         // gestion des erreurs pour url
    //         echo "Error: 404";
    //         return;
    //     }

    //     $method = $url[2];
    //     $controller = ucfirst($url[1]);
    //     $Maj = 'Controller';
    //     $Route = $Maj.'\\'.$controller.$Maj;

    //     $class = new $Route();
    //     $class->$method();

    // }

    function statique()
    {
        require 'src/routes.php'; // Chargement du fichier Routes.php
        $r = new Router(); // J'instancie la classe Router dnas le run du  fichierc Core
        $url = $_SERVER['REQUEST_URI']; // Paramètre dans l'url sur le navigateur
        $url = str_replace(BASE_URI, '', $url); // Supprimer la base_uri pour récuperer que les parametre
        $var = $r::get($url); // Renvoie la route qui match avec l'url
        if ($var == null) {
            // gestion des erreurs pour url
            echo " <img src='./webroot/assets/1_hFwwQAW45673VGKrMPE2qQ.png'/>";
            return;
        }
        // var_dump($url);
        //////////////////////BRICOLAGE///////////////////::
        $Maj = array_keys($var); // Recupere les clé
        $Maj1 = ucfirst($Maj[0]); //Premier caractere en majuscule

        //  = explode('/',$url);

        // var_dump($url);

        $Maj2 = ucfirst($Maj[1]); //Premier caractere en majuscule;
        $method = $var['action'];
        $controller = ucfirst($var['controller']);

        $Route = $Maj1 . '\\' . $controller . $Maj1;

        $idExplode = explode('/', $url);
        $idCount = count($idExplode) - 1;

        $id = $idExplode[$idCount];

        // var_dump($class);
        $class = new $Route();
        $class->$method($id);
    }

    // var_dump($class->$val1.$Maj2());

    // $Route =

    // echo $url.'<br/>';
    // var_dump($var);
}
?>
