<?php 

    # Creamos un objeto de smarty
    $template = new smarty();

    # Cargamos la vista index
    $template -> display('view/list-mentes.tpl');

?>