<?php

  $id = $_POST['id'];

  require_once('../../model/Usuario.php');

  $persona = new Usuario();
  # Aunque no se necesita para eliminar si para actualizar la lista 
  session_start();
  $persona -> deleteIdioma($id);

?>
