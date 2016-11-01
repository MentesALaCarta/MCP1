<?php

  $company_name = $_POST['company'];
  $sector = $_POST['sector'];
  $position = $_POST['position'];
  $country = $_POST['country'];

    session_start();
    require_once('../../model/Usuario.php');
    $persona = new Usuario();

    $datos = '';
    $persona -> conectardb();
    $link = $persona -> getConexion();

    for($i = 0 ; $i < count($company_name); $i++){
      $company_name[$i] = mysqli_real_escape_string($link, $company_name[$i]);
      $sector[$i] = mysqli_real_escape_string($link, $sector[$i]);
      $position[$i] = mysqli_real_escape_string($link, $sector[$i]);
      $country[$i] = mysqli_real_escape_string($link, $country[$i]);

      $datos .= '("'.$company_name[$i].'", "'.$sector[$i].'", "'.$position[$i].'", "'.$country[$i].'", "'.$_SESSION['id'].'"),';
    }
    $persona -> cerrardb();

    $datos = substr($datos, 0, -1);


    $persona -> setExperiencia($datos);
  

?>
