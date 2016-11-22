<?php

  session_start();

  if(!isset($_SESSION['id']))
  {
    header('location: ?view=error');
  }

  // Cargamos los datos del usuario
  require_once('model/wit.php');

  $template = new smarty();
  $persona = new Wit();

  $datos = $persona -> getNameEmpresas();
  $template -> assign('experiencia', $datos);

  $template -> display('view/wits/editar_perfil.tpl');

?>
