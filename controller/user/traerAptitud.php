<?php

    require_once('../../model/Usuario.php');

    $persona = new Usuario();

    $persona -> getAptitudes($_GET['term']); 



?>
