<?php
  define('View', 'View/');
  define('Controller', 'Controller/');
  define('Model', 'Model/');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Maxi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./View/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./View/css/style.css">
  </head>

  <body>
    <?php include Controller . 'routerController.php' ?>
  </body>
</html>
