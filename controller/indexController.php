<?php
    session_start();
    session_destroy();

    # Creamos un objeto de smarty
    $template = new smarty();

    # Cargamos la vista index
    $template -> display('view/index.tpl');
?>
