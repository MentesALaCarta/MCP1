<?php

  require_once('../../model/Usuario.php');

  $persona = new Usuario();

  session_start();

  $persona -> previous_step(1);

?>
