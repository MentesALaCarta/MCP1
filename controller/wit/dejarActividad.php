<?php

  $actividad = $_POST['id'];

  require_once('../../model/wit.php');

  $persona = new Wit();

  session_start();
  $persona -> dejarActividad($actividad);

?>
