<?php

    # Verificamos si existe una páginacion
    if(isset($_GET['page']) && !empty($_GET['page']))
    {
      $pagina = $_GET['page'];
    }else {
      $pagina = 1;
    }

    # Creamos un objeto de smarty
    $template = new smarty();

    require_once('model/Usuario.php');

    $persona = new Usuario();

    $datos = $persona -> nuestrasMentes($pagina);
    $template -> assign('mentes', $datos);

    $template -> assign('page', $pagina);

    # Cargamos la vista index
    $template -> display('view/list-mentes.tpl');

?>
