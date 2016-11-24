<?php

  header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0 ", false);
  header("Pragma: no-cache");

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

  $datos = $persona2 -> getIdiomasList($_SESSION['id']);
  $template -> assign('idiomas', $datos);

  $datos = $persona -> infoContacto($_SESSION['id']);
  $template -> assign('contacto', $datos);

  $template -> display('view/wits/editar_perfil.tpl');

?>
