<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave_new = $_POST['clave_new'];
$clave_actual = $_POST['clave_actual'];

if(empty($clave_actual)){
  echo 'error_1';
}else{

  if(empty($nombre) || empty($apellido) || empty($email)){
    echo 'error_3';
  }else{
    # Incluimos la clase wit
    require_once('../../model/wit.php');

    $wit = new wit();
    $wit -> actulizarData($nombre, $apellido, $email, $clave_new, $clave_actual);

  }

}

?>
