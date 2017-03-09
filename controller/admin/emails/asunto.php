<?php

  $asunto = $_POST['asunto'];

  require_once('../../../model/emails.php');

  $email = new emails();

  $email -> setAsunto($asunto);

?>
