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
      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $company_name[$i] = str_replace($buscar, $reemplazar, $company_name[$i]);
      $sector[$i] = str_replace($buscar, $reemplazar, $sector[$i]);
      $position[$i] = str_replace($buscar, $reemplazar, $position[$i]);
      $country[$i] = str_replace($buscar, $reemplazar, $country[$i]);

      # Convertimos los datos en minusculas
      $company_name[$i] = strtolower($company_name[$i]);
      $sector[$i] = strtolower($sector[$i]);
      $position[$i] = strtolower($position[$i]);
      $country[$i] = strtolower($country[$i]);

      # Evitamos inyecciones sql
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
