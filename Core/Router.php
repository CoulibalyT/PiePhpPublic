<?php
namespace Core;
class Router
{
    private static $routes;
    public static function connect($url, $route)
    {
        self::$routes[$url] = $route;
    }

    public static function get($url)
    {
        // var_dump($url);
        //   var_dump(self::$routes);
        $tab = [];

        foreach (self::$routes as $key => $value) {
            $params = '/{id}';

            if (strpos($key, $params)) {
                $keyExplode = explode('/', $key);
                $UrlExplode = explode('/', $url);

                $lastKey = count($keyExplode) - 1;
                $lastUrl = count($UrlExplode) - 1;
                //   var_dump($lastKey);
                $id = $UrlExplode[$lastUrl];

                $tab['params'] = $id;

                $keyExplode[$lastKey] = $UrlExplode[$lastUrl];

                $key = implode('/', $keyExplode);

                //  var_dump($keyImplode);
            }
            $tab[$key] = $value;

            //   echo '<pre>';
            //   var_dump($tab);
            //   echo '<pre>';

            // print_r($value);

            //   var_dump($key);
            //   echo '<pre>';
        }

        if (isset($tab[$url])) {
            return $tab[$url];
        }
        // - retourne un tableau associatif contenant
        // - le controller a instancier
        // - la methode du controller a appeler
    }
}
?>
