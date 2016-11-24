<?php

$ciudad = $_POST['ciudad'];
$tel = $_POST['tel'];
$pais = $_POST['pais'];
$tweets = $_POST['tweets'];
$area = $_POST['area'];


require_once('../../model/wit.php');

$persona = new Wit();

$persona -> actualizarDatos($ciudad, $tel, $pais, $tweets, $area);

?>
