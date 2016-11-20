<?php

  // Leemos las variables
  $email = $_POST['email'];
  $pass  = $_POST['pass'];

  if(empty($email) || empty($pass)){
    echo 'error_1'; // Campos vacios
  }else{

    # Incluimos la clase firewall
    require_once('../../model/firewall.php');

    $fire = new Firewall();

    $fire -> iniciarSesion($email, $pass);
  }

?>
