<?php

  $empresa = isset($_POST['empresas']) ? $_POST['empresas'] : null;

  // Conversores en la consulta
  $empresas = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($empresa != null){

    foreach ($empresa as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $empresas .= 'e.name_business = "'.$sm. '" or ';

    } // End foreach

    # Eliminamos el ultimo or
    $empresas = substr($empresas, 0, -3);

    $persona -> consultByEmpresa($empresas);

  }else{
    $persona -> getWitsAprobados();
  }


?>
