<?php

  $idioma = $_POST['idioma'];

  require_once('../../model/Usuario.php');
  $persona = new Usuario();
  session_start();
  $persona -> setIdioma($idioma);


?>
