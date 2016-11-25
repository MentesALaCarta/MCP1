<?php

  $id = $_POST['id'];

  require_once('../../model/Admin.php');

  $admin = new Admin();

  $admin -> desAprobarWit($id);

?>
