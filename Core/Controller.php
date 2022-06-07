<?php

namespace Core;

class Controller
{
    protected $request;
    public function __construct()
    {
        $this->request = new Request(); //INITIALISE LA CLASSE REQUEST DANS UNE VARIABLE PROTEGER POUR LES ENFANTS SEULEMENT
    }

    protected static $_render;

    protected function render($view, $scope = [])
    {
        extract($scope);
        $className = str_replace('Controller', '', basename(get_class($this)));
        $className = str_replace('\\', '', $className);
        // var_dump($className);
        $f =
            implode(DIRECTORY_SEPARATOR, [
                dirname(__DIR__),
                'src',
                'View',
                $className,
                $view,
            ]) . '.php';
        // var_dump($f, "fffff");
        // var_dump($className, "className");
        if (file_exists($f)) {
            ob_start(); //Recuperer toutes les donnée de l'include(f);
            include $f;
            $view = ob_get_clean(); //Envoie les donnée recuperer par le ob_start() dans la view et met fin à la fonction;
            ob_start(); //Recuperer toutes les donnée de l'include du bas;
            include implode(DIRECTORY_SEPARATOR, [
                dirname(__DIR__),
                'src',
                'View',
                'index',
            ]) . '.php'; //
            self::$_render = ob_get_clean(); //Envoie les donnée recuperer par le ob_start() dans le render et met fin à la fonction;
        }
    }
    public function __destruct()
    {
        echo self::$_render;
    }
}
