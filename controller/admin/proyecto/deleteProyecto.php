<?php

$id = $_POST['id'];

require_once('../../../model/Admin.php');

$admin = new admin();

$admin -> deleteProyecto($id);

?>
