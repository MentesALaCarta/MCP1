<?php

$empresa1 = $_POST['empresa1'];
$sector1 = $_POST['sector1'];
$textarea1 = $_POST['textarea1'];
$empresa2 = $_POST['empresa2'];
$sector2 = $_POST['sector2'];
$textarea2 = $_POST['textarea2'];
$empresa3 = $_POST['empresa3'];
$sector3 = $_POST['sector3'];
$textarea3 = $_POST['textarea3'];
$masivo = $_POST['masivo'];


require_once('../../../model/emails.php');

$email = new emails();

$email -> setDesMasivo($masivo, $empresa1, $sector1, $textarea1, $empresa2, $sector2, $textarea2, $empresa3, $sector3, $textarea3);



?>
