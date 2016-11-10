<?php

  $actividad = isset($_POST['actividad']) ? $_POST['actividad'] : null;

  // Conversores en la consulta
  $actividades = '';

  require_once('../../../model/Admin.php');
  $persona = new Admin();

  if($actividad != null){

    foreach ($actividad as $sm) {
      $actividades .= 'b.descripcion = "'.$sm. '" or ';
    } // End foreach

    # Identificamos la consulta
    $actividades = substr($actividades, 0, -3);

    $persona -> consultByActividad($actividades);

  }else{
    $persona -> getWitsAprobados();
  }


?>
