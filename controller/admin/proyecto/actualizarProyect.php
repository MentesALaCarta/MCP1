<?php

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

require_once('../../../model/Admin.php');

$admin = new admin();

$admin -> actualizarProyecto($id, $nombre, $descripcion);

?>
