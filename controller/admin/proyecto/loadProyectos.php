<?php

  # Incluimos la clase admin
  require_once('../../../model/Admin.php');

  # Creamos un objeto
  $admin = new admin();

  $admin -> loadProyectosNuevos();


?>
