<?php

  # Lectura de variables
  $nombres    = $_POST['nombres'];
  $apellidos  = $_POST['apellidos'];
  $email      = $_POST['email'];
  $clave      = $_POST['clave'];

  # Validamos que no vengan vacias las variables
  if(empty($nombres) || empty($apellidos) || empty($email) || empty($clave))
  {
    echo 'error_1';
  }else{

    # Incluimos la clase usuario
    require_once('../../model/Usuario.php');

    # Creamos un objeto de la clase usuario
    $persona = new Usuario();

    $persona -> registrar($nombres, $apellidos, $email, $clave);

  }


?>
