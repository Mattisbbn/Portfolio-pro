<?php namespace Helpers;

use Config\Config;

class ViteHelper {
    public static function init(){
        if ($_ENV["ENVIRONNEMENT"] === "DEV") {
            echo '<script type="module" src="' . $_SERVER['VITE_DEV_SERVER'] . '/resources/js/main.js"></script>';
        } else {
            $manifestPath = '.vite/manifest.json';
            if (file_exists($manifestPath)) {
                $manifest = json_decode(file_get_contents($manifestPath), true);
                if (isset($manifest['resources/js/main.js'])) {
                    $filePath = $manifest['resources/js/main.js']['file'];
                    echo '<script type="module" src="/' . $filePath . '"></script>';
                }
        
                if (isset($manifest['resources/js/main.js']['css'])) {
                    foreach ($manifest['resources/js/main.js']['css'] as $cssFile) {
                        echo '<link rel="stylesheet" href="/' . $cssFile . '">';
                    }
                }
            }
        }
    }
}
