<?php

  # Lectura de variables
  $busqueda = $_POST['busqueda']; //| Texto
  $tipo     = $_POST['tipo'];     //| Tipo de busqueda

  # Requerimos la clase Admin
  require_once('../../model/Admin.php');

  # Creamos un objeto de la clase Admin
  $persona = new Admin();

  # Llamamos al metodo buscarBy
  $persona -> buscarBy($busqueda, $tipo);



?>
