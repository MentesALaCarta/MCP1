<?php

  $sector = isset($_POST['sectores']) ? $_POST['sectores'] : null;

  // Conversores en la consulta
  $sectores = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($sector != null){

    foreach ($sector as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $sectores .= 'e.sector = "'.$sm. '" or ';

    } // End foreach

    # Eliminamos el ultimo or
    $sectores = substr($sectores, 0, -3);

    $persona -> consultBySector($sectores);

  }else{
    $persona -> getWitsAprobados();
  }


?>
