<?php 
use Helpers\ViewHelper;
use Config\Config;
$router = new AltoRouter();

$router->map("GET","/",function(){
    ViewHelper::view(function(){
        require_once Config::VIEW_DIR . "Landpage/Landpage.php";
    });
});







$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    echo "Page non trouvée";
}
?>