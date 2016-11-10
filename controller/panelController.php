<?php


  // if(!isset($_SESSION['id'])){
  //   header('location: ?view=index');
  // }

  # Incluimos la clase wit
  require_once('model/wit.php');

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

  # Lista de wits
  $datos = $wit -> getWitsAprobados();
  $template -> assign('wits', $datos);

  $template -> display('view/admin/panel.tpl');


?>
