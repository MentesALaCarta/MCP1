<?php

  $aptitud = $_POST['aptitud'];

  require_once('../../model/Usuario.php');
  $persona = new Usuario();
  session_start();
  $persona -> setAptitud($aptitud);


?>
