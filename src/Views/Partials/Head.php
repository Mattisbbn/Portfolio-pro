<!DOCTYPE html>
<html lang="<?php echo $_ENV["WEBSITE_LOCALE"] ?>">
<head>
    <title>Portfolio Mattis Babin | Développeur web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Portfolio Mattis Babin | Développeur web" />
    <meta name="description" content="Porfolio de Mattis Babin. Développeur Web PHP/JS en alternance chez Akoufen." />
    <link rel="icon" href="/img/global/logo.webp">


    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mattisbabin.fr/" />
    <meta property="og:title" content="Portfolio Mattis Babin | Développeur web" />
    <meta property="og:description" content="Porfolio de Mattis Babin. Développeur Web PHP/JS en alternance chez Akoufen." />
    <meta property="og:image" content="/img/global/screenshot.png" />

    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="https://mattisbabin.fr/" />
    <meta property="twitter:title" content="Portfolio Mattis Babin | Développeur web" />
    <meta property="twitter:description" content="Porfolio de Mattis Babin. Développeur Web PHP/JS en alternance chez Akoufen."/>
    <meta property="twitter:image" content="/img/global/screenshot.png" />


    
    <title><?php echo $_ENV["WEBSITE_NAME"] ?></title>

    <?php if ($_ENV["ENVIRONNEMENT"] === "DEV") {
    // Mode développement
    echo '<script type="module" src="' . $_SERVER['VITE_DEV_SERVER'] . '/resources/js/main.js"></script>';
} else {
    // Mode production : charger les fichiers buildés
    $manifestPath = '.vite/manifest.json';
    if (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);
        if (isset($manifest['resources/js/main.js'])) {
            $filePath = $manifest['resources/js/main.js']['file'];
            echo '<script type="module" src="' . $filePath . '"></script>';
        }

        if (isset($manifest['resources/js/main.js']['css'])) {
            foreach ($manifest['resources/js/main.js']['css'] as $cssFile) {
                echo '<link rel="stylesheet" href="' . $cssFile . '">';
            }
        }
    }
} ?>
</head>