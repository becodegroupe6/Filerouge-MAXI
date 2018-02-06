<?php
  $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
  switch ($page) {
    case 'welcome':
      include(Controller . 'welcomeController.php');
      $controller = new welcomeController();
      break;
    case 'host':
      include(Controller . 'hostController.php');
      $controller = new hostController();
      break;
    case 'immigrant':
      include(Controller . 'refugeeController.php');
      $controller = new refugeeController();
      break;
    default:
      include(Controller . 'welcomeController.php');
      $controller = new welcomeController();
      break;
  }
  $controller->run();
?>
