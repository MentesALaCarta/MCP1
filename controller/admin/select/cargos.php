<?php

  $cargo = isset($_POST['cargos']) ? $_POST['cargos'] : null;

  // Conversores en la consulta
  $cargos = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($cargo != null){

    foreach ($cargo as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $cargos .= 'e.position = "'.$sm. '" or ';

    } // End foreach

    # Identificamos la consulta
    $cargos = substr($cargos, 0, -3);


    $persona -> consultByCargo($cargos);

  }else{
    $persona -> getWitsAprobados();
  }


?>
