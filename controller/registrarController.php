<?php

  if(isset($_SESSION['id'])){
    header('Location: ?view=perfil');
  }

  $template = new smarty();

  $template -> display('view/user/register.tpl');

?>
