<?php

  $aptitud = isset($_POST['aptitud']) ? $_POST['aptitud'] : null;

  // Conversores en la consulta
  $aptitudes = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($aptitud != null){

    foreach ($aptitud as $sm) {
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $aptitudes .= 'h.descripcion = "'.$sm. '" or ';
    } // End foreach

    # Identificamos la consulta
    $aptitudes = substr($aptitudes, 0, -3);

    $persona -> consultByAptitudes($aptitudes);

  }else{
    $persona -> getWitsAprobados();
  }


?>
