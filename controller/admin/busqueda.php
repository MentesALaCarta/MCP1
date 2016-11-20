<?php

  $busqueda = $_POST['busqueda'];
  require_once('../../model/Admin.php');

  $admin = new Admin();

  if(empty($busqueda)){

    $admin -> getWitsAprobados();

  }else{

    $buscar = array('á','Á','é','É','í','Í','ó','Ó','ú','Ú','ñ','Ñ');
    $reemplazar = array('&aacute','&Aacute','&eacute','&Eacute','&iacute','&Iacute','&oacute','&Oacute','&uacute','&Uacute', '&ntilde', '&Ntilde');

    $busqueda= str_replace($buscar, $reemplazar, $busqueda);

    $busqueda = strtolower($busqueda);

    // Eliminamos el ultimo espacio
    $busqueda = trim($busqueda);

    // $admin -> buscarWit($busqueda);

    $busqueda = explode(' ', $busqueda);

    if(count($busqueda) > 1){
      $admin -> buscarByNombre($busqueda);
    }else{
      $admin -> buscarWit($busqueda[0]);
    }



  }


?>
