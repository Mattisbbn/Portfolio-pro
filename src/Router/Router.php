<?php 
use Helpers\ViewHelper;
use Config\Config;
$router = new AltoRouter();

$router->map("GET","/",function(){
    ViewHelper::view(function(){
        require_once Config::VIEW_DIR . "Landpage/Landpage.php";
    });
});

$router->map("GET", "/projet/[*:projet]", function($projet) {
    $projet = htmlspecialchars($projet);
    $projectDir = Config::VIEW_DIR . "Projects/" . $projet . ".php";
    // Vérifiez si le fichier existe
    if (file_exists($projectDir)) {
        ViewHelper::view(function() use ($projectDir) {
            require_once $projectDir;
        });
    } else {
        ViewHelper::notFound();
    }
});

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    ViewHelper::notFound();
}

?>