<?php

  # Incluimos la clase de  wit
  require_once('model/wit.php');
  $wit = new Wit();
  $template = new smarty();

  # Leemos la variable del wit
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if(empty($id)){
    header('Location: ?view=index');
  }

  if($wit -> validarPerfil($id) == false)
  {
    // header('location: ?view=error');
    echo 'no validado';
  }

  session_start();
  
  $datos = $wit -> estado($id);
  $template -> assign('estado', $datos);

  $datos = $wit -> experiencia($id);
  $template -> assign('experiencia', $datos);

  $datos = $wit -> aptitudes($id);
  $template -> assign('aptitudes', $datos);

  $datos = $wit -> brain($id);
  $template -> assign('brain', $datos);

  $datos = $wit -> contacto($id);
  $template -> assign('contacto', $datos);

  $datos = $wit -> consultarEstado($id);
  $template -> assign('estado', $datos);

  # Lista de proyectos
  $template -> assign('proyectos', $wit -> getProyects());

  $datos = $wit -> idiomas($id);
  $template -> assign('idiomas', $datos);

  $datos = $wit -> usuario($id);
  $template -> assign('usuario', $datos);


  $template -> display('view/wits/perfil-wit.tpl');

?>
