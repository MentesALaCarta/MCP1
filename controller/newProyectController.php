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

  require_once('model/Admin.php');
  $admin = new admin();
  $template -> assign('proyectos', $admin->loadProyectos());

  $template -> display('view/admin/newProyect.tpl');


?>
