<?php

  $pais_idioma = isset($_POST['pais_idioma']) ? $_POST['pais_idioma'] : null;
  $sector = 0;
  $empresa = 0;

  // Conversores en la consulta
  $sectores = '';
  $empresas = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($pais_idioma != null){

    foreach ($pais_idioma as $sm) {

      $tipo = strpos($sm, 'pais');
      $temporal = '';
      // Existe sector

      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $sm = str_replace($buscar, $reemplazar, $sm);

      if($tipo === false){

        $temporal = str_replace('idioma', '', $sm);
        $empresas .= 'i.des = "'.$temporal. '" or ';
        $empresa++;
      // Existe empresa
      }else{
        $temporal = str_replace('pais', '', $sm);
        $sectores .= 'c.pais = "' . $temporal . '" or ';
        $sector++;
      }

    } // End foreach

    # Identificamos la consulta
    $sectores = substr($sectores, 0, -3);
    $empresas = substr($empresas, 0, -3);

    // Contienene pais y idioma
    if($sector > 0 and $empresa > 0 ){
      $persona -> consultByPaisAndIdioma($sectores, $empresas);
    }else if($sector > 0 and $empresa == 0){ // Contiene solo pais
      $persona -> consultByPais($sectores);
    }else if($empresa > 0 and $sector == 0){ // Contiene solo idioma
      $persona -> consultByIdioma($empresas);
    }



  }else{
    $persona -> getWitsAprobados();
  }



?>
