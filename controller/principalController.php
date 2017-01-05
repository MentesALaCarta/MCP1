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

  $template -> assign('total_wits', $admin -> totalAdmintidos());
  $template -> assign('total_no_wits', $admin -> totalNoAdmintidos()); 
  $template -> assign('proyectos', $admin->loadProyectos());

  $template -> display('view/admin/principal.tpl');


?>
