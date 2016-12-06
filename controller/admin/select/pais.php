<?php

  $pais = isset($_POST['pais']) ? $_POST['pais'] : null;

  // Conversores en la consulta
  $paises = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($pais != null){

    foreach ($pais as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $paises .= 'c.pais = "'.$sm. '" or ';

    } // End foreach

    # Eliminamos el ultimo or
    $paises = substr($paises, 0, -3);

    $persona -> consultByPais($paises);

  }else{
    $persona -> getWitsAprobados();
  }


?>
