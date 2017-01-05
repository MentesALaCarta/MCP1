<?php

  session_start();

  $template = new smarty();

  if(!isset($_SESSION['id']) || isset($_SESSION['cargo']) && $_SESSION['cargo'] != 1){
    header('location: ?view=acceder');
  }

  if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  $template -> display('view/admin/newProyect.tpl');


?>
