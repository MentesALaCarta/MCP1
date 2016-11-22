<?php
    session_start();

    if(!isset($_SESSION['id'])){
      header('location: ?view=index');
    }
    
    # Cremos un objeto de Smarty
    $template = new smarty();

    # Cargamos la vista correspondiente
    $template -> display('view/supernova/index.tpl');

?>
