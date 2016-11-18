<?php
  session_start();
  session_destroy();
  
  $template = new smarty();

  $template -> display('view/user/acceder.tpl');


?>
