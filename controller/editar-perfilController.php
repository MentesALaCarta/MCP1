<?php

  session_start();

  if(!isset($_SESSION['id']))
  {
    header('location: ?view=error');
  }

  // Cargamos los datos del usuario
  require_once('model/wit.php');
  require_once('model/Usuario.php');


  $template = new smarty();
  $persona = new Wit();
  $persona2 = new Usuario();

  $datos = $persona -> getNameEmpresas();
  $template -> assign('experiencia', $datos);

  $datos = $persona2 -> getHabilidades($_SESSION['id']);
  $template -> assign('aptitud', $datos);

  $datos = $persona -> misBrains($_SESSION['id']);
  $template -> assign('brains', $datos);

  $template -> display('view/wits/editar_perfil.tpl');

?>
