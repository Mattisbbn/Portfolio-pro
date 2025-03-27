<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
require_once "../src/Router/Router.php";

if ($_ENV["ENVIRONNEMENT"] === "dev") {
    // Mode développement
    echo '<script type="module" src="' . $_SERVER['VITE_DEV_SERVER'] . '/resources/js/main.js"></script>';
} else {
    // Mode production : charger les fichiers buildés
    $manifestPath = __DIR__ . '/.vite/manifest.json';
    if (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);
        if (isset($manifest['resources/js/main.js'])) {
            $filePath = "/build/" . $manifest['resources/js/main.js']['file'];
            echo '<script type="module" src="' . $filePath . '"></script>';
        }
    }
}
?>
