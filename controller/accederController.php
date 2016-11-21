<?php

  session_start();

  if(isset($_SESSION['id']) && isset($_SESSION['cargo'])  && $_SESSION['cargo'] == 1){
    header('location: ?view=panel');
  }else if(isset($_SESSION['id']) && isset($_SESSION['cargo'])  && $_SESSION['cargo'] == 2){
    header('location: ?view=perfil-wit&id='.$_SESSION['id']);
  }

  $template = new smarty();

  $template -> display('view/user/acceder.tpl');


?>
