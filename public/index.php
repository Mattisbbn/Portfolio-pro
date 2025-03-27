<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
require_once "../src/Router/Router.php";

?>


<?php 
    if (isset($_SERVER['VITE_DEV_SERVER'])) {
        echo '<script type="module" src="' . $_SERVER['VITE_DEV_SERVER'] . '/resources/js/main.js"></script>';
    }


?>
