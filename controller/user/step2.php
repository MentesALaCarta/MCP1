<?php

  $des = $_POST['des'];

  if(empty($des)){
    echo 'error_1';
  }else{
    require_once('../../model/Usuario.php');
    $persona = new Usuario();
    session_start();
    $persona -> step2($des);
  }


?>
