<?php
    session_start();
    session_destroy();

    # Cremos un objeto de Smarty
    $template = new smarty();

    # Cargamos la vista correspondiente
    $template -> display('view/supernova/condiciones.tpl');

?>
