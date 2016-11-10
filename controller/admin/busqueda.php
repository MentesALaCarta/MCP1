<?php

  $busqueda = $_POST['busqueda'];

  require_once('../../model/Admin.php');

  $admin = new Admin();

  $admin -> busqueda($busqueda);

?>
