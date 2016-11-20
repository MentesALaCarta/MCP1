<?php


  require_once('../../model/Usuario.php');
  $persona = new Usuario();

  $brain = $_POST['services'];
  session_start();
  $datos = '';

  $contador = 0 ;
  for($i = 0 ; $i < count($brain); $i++){
    if(!empty($brain[$i])){
      $datos .= "('".$brain[$i]."', '".$_SESSION['id']."'),";
    }else{
      $contador++;
    }

  }

  if($contador == 5){
    echo 'error_1';
  }else{
    $datos = substr($datos, 0, -1);

    $persona -> setBrain($datos);
  }

?>
