<?php

  $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : null;

  // Conversores en la consulta
  $ciudades = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($ciudad != null){

    foreach ($ciudad as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $ciudades .= 'c.ciudad = "'.$sm. '" or ';

    } // End foreach

    # Identificamos la consulta
    $ciudades = substr($ciudades, 0, -3);


    $persona -> consultByCiudad($ciudades);

  }else{
    $persona -> getWitsAprobados();
  }


?>
