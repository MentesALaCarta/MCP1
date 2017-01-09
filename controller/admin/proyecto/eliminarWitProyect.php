<?php

$id = $_POST['id'];
$wit = $_POST['wit'];

require_once('../../../model/Admin.php');

$admin = new admin();

$admin -> desasignarProyect($id, $wit);

?>
