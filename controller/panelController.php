<?php


  // if(!isset($_SESSION['id'])){
  //   header('location: ?view=index');
  // }

  # Incluimos la clase wit
  require_once('model/wit.php');

  # Objeto de la clase wit
  $wit = new Wit();
  $template = new smarty();


  $datos = $wit -> getWitsAprobados();
  $template -> assign('wits', $datos);

  $template -> display('view/admin/panel.tpl');


?>
