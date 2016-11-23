<?php

  // Leemos el id
  $id = $_POST['id'];

  if(empty($id)){
    echo 'error';
  }else{
    require_once('../../model/wit.php');

    $persona = new Wit();
    session_start();
    $persona -> deleteExperiencia($id);
  }

?>
