<?php

  $idioma = isset($_POST['idioma']) ? $_POST['idioma'] : null;

  // Conversores en la consulta
  $idiomas = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($idioma != null){

    foreach ($idioma as $sm) {

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      $idiomas .= 'i.des = "'.$sm. '" or ';

    } // End foreach

    # Eliminamos el ultimo or
    $idiomas = substr($idiomas, 0, -3);

    $persona -> consultByIdioma($idiomas);

  }else{
    $persona -> getWitsAprobados();
  }


?>
