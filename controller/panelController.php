<?php

  session_start();

  if(!isset($_SESSION['id']) || isset($_SESSION['cargo']) && $_SESSION['cargo'] != 1){
    header('location: ?view=acceder');
  }

  # Incluimos la clase wit
  require_once('model/wit.php');

  if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  # Incluimos la clase wit
  require_once('model/Admin.php');

  # Objeto de la clase wit
  $wit = new Wit();
  $template = new smarty();
  $admin = new Admin();

  # Sectores
  $datos = $admin -> getSectores();
  $template -> assign('sectores', $datos);

  # Empresas
  $datos = $admin -> getEmpresas();
  $template -> assign('empresas', $datos);

  # Ciudad
  $datos = $admin -> getCiudades();
  $template -> assign('ciudad', $datos);

  # Ciudad
  $datos = $admin -> getCargos();
  $template -> assign('cargos', $datos);

  # Brains
  $datos = $admin -> getBrains();
  $template -> assign('brains', $datos);

  # Paises
  $datos = $admin -> getPaises();
  $template -> assign('paises', $datos);

  # Idiomas
  $datos = $admin -> getIdiomas();
  $template -> assign('idiomas', $datos);

  # Habilidades
  $datos = $admin -> getHabilidades();
  $template -> assign('habilidades', $datos);

  # total wits 
  $datos = $admin -> totalAdmintidos();
  $template -> assign('totalAdmintidos', $datos);

  # Lista de wits
  $datos = $wit -> getWitsAprobados($page);
  $template -> assign('wits', $datos);

  # Página
  $template -> assign('page', $page);

  $template -> display('view/admin/panel.tpl');


?>
