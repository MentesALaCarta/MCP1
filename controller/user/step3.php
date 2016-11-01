<?php


  require_once('../../model/Usuario.php');
  $persona = new Usuario();

  $brain = $_POST['services'];
  session_start();
  $datos = '';
  for($i = 0 ; $i < count($brain); $i++){
    if(!empty($brain[$i])){
      $datos .= "('".$brain[$i]."', '".$_SESSION['id']."'),";
    }
  }

  $datos = substr($datos, 0, -1);

  $persona -> setBrain($datos);

?>
