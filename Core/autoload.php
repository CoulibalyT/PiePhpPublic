<?php
spl_autoload_register(static function ($class) {
    $class = str_replace('\\', '/', $class);
    if (file_exists('src/' . $class . '.php')) {
        require_once 'src/' . $class . '.php';
    } elseif (file_exists('Core/' . $class . '.php')) {
        require_once 'Core/' . $class . '.php';
    } elseif (file_exists($class . '.php')) {
        require_once $class . '.php';
    } else {
        var_dump('Error : ' . $class . '.php');
    }
})
;

//-------------------------------------

// $myClass = new $className;
// // $myClass = new Tene();

// namespace Core;

// spl_autoload_register(function($className) {
//     // var_dump(__NAMESPACE__);
//     $class = str_replace(__NAMESPACE__.'\\','',$className);
//     // var_dump(__NAMESPACE__);
//     $class1 = str_replace('\\','/',$class);
// 	$file = __DIR__ . '/' . $class1 . '.php';
//     $exp   = explode('/',__DIR__);
//     echo $exp[3].'/'.$exp[2];

//     // var_dump($file);
// 	if (file_exists($file)) {
// 		include $file;
// 	}

// spl_autoload_register(function($className) {
// var_dump(__NAMESPACE__);
// var_dump($className);
// $path = [
//     "Core" => "Core"
// ];
// $class = str_replace(__NAMESPACE__.'\\','',$className);
// $file = __DIR__ . '\\' . $class . '.php';
// $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
// var_dump($file);
// if (file_exists($file)) {
// 	include $file;
// }
