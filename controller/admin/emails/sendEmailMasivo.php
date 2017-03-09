<?php

$masivo = $_POST['masivo'];

require_once('../../../model/emails.php');

$email = new emails();

$email -> sendEmailMasivo($masivo);

?>
