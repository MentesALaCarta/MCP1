<?php

  $sectores_empresas = isset($_POST['sectores_empresas']) ? $_POST['sectores_empresas'] : null;
  $sector = 0;
  $empresa = 0;

  // Conversores en la consulta
  $sectores = '';
  $empresas = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($sectores_empresas != null){

    foreach ($sectores_empresas as $sm) {

      $tipo = strpos($sm, 'sector');
      $temporal = '';
      // Existe sector
      if($tipo === false){
        $temporal = str_replace('empresa', '', $sm);
        $empresas .= 'e.name_business = "'.$temporal. '" or ';
        $empresa++;
      // Existe empresa
      }else{
        $temporal = str_replace('sector', '', $sm);
        $sectores .= 'e.sector = "' . $temporal . '" or ';
        $sector++;
      }

    } // End foreach

    # Identificamos la consulta
    $sectores = substr($sectores, 0, -3);
    $empresas = substr($empresas, 0, -3);

    // Contienene sectores y empresas
    if($sector > 0 and $empresa > 0 ){

      $persona -> consultBySectorAndEmpresa($sectores, $empresas);

    }else if($sector > 0 and $empresa == 0){ // Contiene solo sector
      $persona -> consultBySector($sectores);
    }else if($empresa > 0 and $sector == 0){ // Contiene solo empresas
      $persona -> consultByEmpresa($empresas);
    }



  }else{
    $persona -> getWitsAprobados();
  }



?>
