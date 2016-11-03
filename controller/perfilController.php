<?php

    session_start([
      'cookie_lifetime' => 86400,
      'read_and_close'  => true
    ]);

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
          $template -> display('view/wits/paso3.tpl');
        break;

      case '4':
          $template -> display('view/wits/paso4.tpl');
        break;

      case '5':
          $template -> display('view/wits/profile.tpl');
        break;

      default:
          echo 'not you are a user';
        break;
    }



?>
