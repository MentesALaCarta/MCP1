<?php

  session_start();

  # Verificamos que exista una sesion iniciada
  if(!isset($_SESSION['id']) || isset($_SESSION['cargo']) && $_SESSION['cargo'] != 1){
    header('location: ?view=acceder');
  }

  # Incluimos la clase admin
  require_once('model/Admin.php');

  $template = new smarty();

  $admin = new Admin();

  $datos = $admin -> listarWitsNoAprovados();
  $template -> assign('wit', $datos);

  $template -> display('view/admin/wits-pendientes.tpl');


 ?>
