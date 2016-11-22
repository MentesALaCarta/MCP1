<?php

$empresa_nom = $_POST['empresa_nom'];
$empresa_nit = $_POST['empresa_nit'];
$empresa_sector = $_POST['empresa_sector'];
$empresa_ciudad = $_POST['empresa_ciudad'];
$empresa_web = $_POST['empresa_web'];
$user_name = $_POST['user_name'];
$user_cargo = $_POST['user_cargo'];
$user_telefono = $_POST['user_telefono'];
$user_email = $_POST['user_email'];

if(empty($empresa_nom) ||
   empty($empresa_nit) ||
   empty($empresa_sector) ||
   empty($empresa_ciudad) ||
   empty($user_name) ||
   empty($user_cargo) ||
   empty($user_email) ){
    echo 'error_1';
}else{
  require_once('../../model/usuario.php');

  $usuario = new Usuario();

  $usuario -> registrar($empresa_nom,
  $empresa_nit,
  $empresa_sector,
  $empresa_ciudad,
  $empresa_web,
  $user_name,
  $user_cargo,
  $user_telefono,
  $user_email);
}

?>
