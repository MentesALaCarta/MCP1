<?php

  $id = $_POST['id'];

  require_once('../../model/Usuario.php');

  $persona = new Usuario();
  session_start();
  $persona -> deleteHabilidad($id);
?>
