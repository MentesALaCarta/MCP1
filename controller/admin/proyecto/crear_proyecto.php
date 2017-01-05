<?php

  # Lectura de variables
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];

  if(empty($nombre)){
    echo 'error_1';
  }else{
    # Incluimos la clase admin
    require_once('../../../model/Admin.php');

    # Instanciamos el objeto de la clase admin
    $admin = new admin();

    $admin -> crearProyecto($nombre, $descripcion);
  }


?>
