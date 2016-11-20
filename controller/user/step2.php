<?php

    require_once('../../model/Usuario.php');
    $persona = new Usuario();
    session_start();
    $persona -> new_step(3);


?>
