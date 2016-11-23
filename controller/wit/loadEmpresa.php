<?php


  // Leemos el id
  $id = $_POST['id'];

  require_once('../../model/wit.php');
  session_start();

  $persona = new Wit();

  $persona -> loadEmpresa($id); 



?>
