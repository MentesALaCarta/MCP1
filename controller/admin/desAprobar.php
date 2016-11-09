<?php

  $id = $_POST['id'];

  require_once('../../model/admin.php');

  $admin = new Admin();

  $admin -> desAprobarWit($id);

?>
