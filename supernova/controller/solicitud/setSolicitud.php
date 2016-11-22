<?php

  $email = $_POST['email'];

  if(empty($email)){
    echo 'error_1';
  }else{

    require_once('../../model/usuario.php');

    $usuario = new Usuario();

    $usuario -> setSolicitud($email);
  }
?>
