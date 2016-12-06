<?php

    session_start();

    if(!isset($_SESSION['id'])){
      header('location: ?view=registrar');
    }

    require_once('model/Usuario.php');

    # Creamos un objeto de smarty
    $template = new smarty();

    $persona = new Usuario();

    $datos = $persona -> fire_step($_SESSION['id']);

    switch ($datos) {
      case '1':

          $datos = $persona -> getExperience($_SESSION['id']);
          $template -> assign('experience', $datos);

          $template -> display('view/wits/index.tpl');
        break;

      case '2':
          $datos = $persona -> getHabilidades($_SESSION['id']);
          $template -> assign('aptitud', $datos);

          $template -> display('view/wits/paso2.tpl');
        break;

      case '3':

          $datos = $persona -> getActividades($_SESSION['id']);
          var_dump($datos);
          $template -> assign('actividad', $datos);

          $template -> display('view/wits/paso3.tpl');
        break;

      case '4':

          $datos = $persona -> getIdiomasList($_SESSION['id']);
          $template -> assign('idiomas', $datos);

          $template -> display('view/wits/paso4.tpl');
        break;

      case '5':
          header('location: ?view=perfil-wit&id='.$_SESSION['id']);
        break;

      default:
          header('Location: ?view=error');
        break;
    }



?>
