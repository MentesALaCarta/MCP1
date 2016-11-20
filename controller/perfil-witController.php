<?php

  # Leemos la variable del wit
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if(empty($id)){
    header('Location: ?view=index');
  }

  # Incluimos la clase de  wit
  require_once('model/wit.php');
  $wit = new Wit();
  $template = new smarty();

  $datos = $wit -> experiencia($id);
  $template -> assign('experiencia', $datos);

  $datos = $wit -> aptitudes($id);
  $template -> assign('aptitudes', $datos);

  $datos = $wit -> brain($id);
  $template -> assign('brain', $datos);

  $datos = $wit -> contacto($id);
  $template -> assign('contacto', $datos);

  $datos = $wit -> idiomas($id);
  $template -> assign('idiomas', $datos);

  $datos = $wit -> usuario($id);
  $template -> assign('usuario', $datos);


  $template -> display('view/wits/perfil-wit.tpl');

?>
