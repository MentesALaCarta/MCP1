<?php

  session_start();
  session_destroy();

  $template = new smarty();

  $template -> display('view/supernova/condiciones2.tpl');

?>
