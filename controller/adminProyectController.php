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

  # Incluimos el model de admin
  include('model/Admin.php');
  $admin = new admin();

  if(!isset($_GET['proyect']) || $admin->loadproyecto($_GET['proyect']) == false){
    header('location: ?view=principal');
  }

  $template -> assign('proyectos', $admin->loadproyecto($_GET['proyect']));

  $template -> display('view/admin/adminProyect.tpl');


?>
