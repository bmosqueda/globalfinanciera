<?php  
  require_once('includes/config.inc.php');
  
  $title = "Ingresar";
  $tabActive = 'access';
  
  require_once(VIEW_PATH.'header-blue.view.php');
  require_once(VIEW_PATH.'access.view.php');
  require_once(VIEW_PATH.'footer.view.php');
  echo '<script src="/public/js/access.js"></script>';
?>