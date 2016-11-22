<?php  
    /*
        # Si existe una variable por get llamada view se asigna a la variable $view de lo contrario se le asignara a get el valor de index
    */

    # Leemos la variable o asignamos un valor por defecto
    $view = isset($_GET['view']) ? $_GET['view'] : 'index';

    # Incluimos el motor de plantilas Smarty 3.1.30
    require_once('core/smarty/Smarty.class.php');

    # Preguntamos si existe el archivo que se envia por url
    if(file_exists('controller/'.$view.'Controller.php'))
    {
        //Cargar página
        include('controller/'.$view.'Controller.php');
    }else{
        //Página de error
        include('controller/errorController.php');
    }
    
?>
   
