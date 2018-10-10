<?php  
  require_once('includes/config.inc.php');
  
  $title = "Servicios";
  $tabActive = 'services';
  
  require_once(VIEW_PATH.'header-blue-services.view.php');
  require_once(VIEW_PATH.'services.view.php');
  require_once(VIEW_PATH.'footer.view.php');
?>