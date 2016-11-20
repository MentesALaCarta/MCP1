<?php

  # Verificamos que exista una sesion iniciada
  // if(isset($_SESSION['id'])){
  //     echo 'sesion iniciada';
  // }else{
  //     echo 'sesion no iniciada';
  // }

  # Incluimos la clase admin
  require_once('model/Admin.php');

  $template = new smarty();

  $admin = new Admin();

  $datos = $admin -> listarWitsNoAprovados();
  $template -> assign('wit', $datos);

  $template -> display('view/admin/wits-pendientes.tpl');


 ?>
