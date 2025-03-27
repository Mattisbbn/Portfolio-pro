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
}