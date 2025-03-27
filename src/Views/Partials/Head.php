<?php 
define('WEBSITE_NAME', $_ENV['WEBSITE_NAME']); 
define('WEBSITE_LOCALE', $_ENV['WEBSITE_LOCALE']); 
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars(WEBSITE_LOCALE) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars(WEBSITE_NAME) ?></title>
</head>
