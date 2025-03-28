<?php
namespace Helpers;
use Config\Config;


class ViewHelper {



    public static function view(callable $callback){
        require_once Config::VIEW_DIR . "Partials/Head.php";
        require_once Config::VIEW_DIR . "Partials/Header.php";
        if(is_callable($callback)){
            $callback();
        }
        require_once Config::VIEW_DIR . "Partials/Footer.php";
    }

    public static function notFound(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        require_once Config::VIEW_DIR . "Partials/Head.php";
        require_once Config::VIEW_DIR . "404/404.php";
        require_once Config::VIEW_DIR . "Partials/Footer.php";
    }
}