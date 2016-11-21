<?php

    require_once('../../model/Usuario.php');

    $persona = new Usuario();

    $persona -> getIdiomas($_GET['term']);

?>
