<?php

// Leemos las variables

$id = $_POST['identificador'];
$empresa = $_POST['empresa'];
$sector = $_POST['sector'];
$cargo = $_POST['cargo'];
$pais = $_POST['pais'];

if(empty($id) && empty($empresa) && empty($sector) && empty($cargo) && empty($pais)){
  echo 'error_3';
}else{
  session_start();

  // Incluimos la clase wit
  require_once('../../model/wit.php');
  $persona = new Wit();

  if($persona -> esMiId($id) == false){
    echo 'error_1';
  }else{
    $persona->setExperiencia($id, $empresa, $sector, $cargo, $pais);
  }
}



?>
