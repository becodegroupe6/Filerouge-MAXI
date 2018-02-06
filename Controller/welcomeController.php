<?php
  class welcomeController {
  public function __construct(){
    
  }
  public function run(){
    include View . 'header.php';
    include View . 'welcome.php';
    include View . 'footer.php';
  }
 }
?>
