<?php

  session_start();

  if(!isset($_SESSION['id']))
  {
    header('location: ?view=error');
  }

  // Cargamos los datos del usuario
  




  $template = new smarty();

  $template -> display('view/wits/editar_perfil.tpl');

?>
