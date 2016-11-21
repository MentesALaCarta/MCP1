<?php
    require_once('../../core/upload/class.upload.php');

    # Validamos que todos los campos lleguen bien
    $imagen = $_FILES['imagen-upload'];
    $ciudad = $_POST['ciudad'];
    $tel = $_POST['tel'];
    $des = $_POST['area'];
    $pais = $_POST['pais'];
    $tweets = $_POST['tweets'];

    session_start();

    if(!empty($_FILES["imagen-upload"]["name"])){ // No selecciono imagen

    $tipo = $_FILES["imagen-upload"]["type"];

    if($tipo == "image/x-png" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/gif" || $tipo == "image/pjpeg" || $tipo == "image/jpeg"){

      $imagen = new upload($_FILES['imagen-upload']);

      if(file_exists('../../images/perfiles/perfil'.$_SESSION['id'].'.png')){
        unlink('../../images/perfiles/perfil'.$_SESSION['id'].'.png');
      }

      # Cambiamos el nombre
      $imagen ->  file_new_name_body = 'perfil'.$_SESSION['id'];
      $imagen ->  image_convert = 'png';

      # Indica si queremos redimencionar la imagen
      $imagen -> image_resize = true;
      $imagen -> image_x      = 256;
      $imagen -> image_y      = 256;
      $imagen -> Process('../../images/perfiles');

      clearstatcache();
      $imagen->clean();

      # Actualizamos la imagen de perfil en la base de datos
      require_once('../../model/Usuario.php');
      $usuario = new Usuario();

      $usuario -> step4('perfiles/perfil'.$_SESSION['id'].'.png', $ciudad, $tel, $des, $tweets, $pais);


    }else{
      // No es una imagen
      echo 'error_2';
    }

  }else{

    # Actualizamos la imagen de perfil en la base de datos
    require_once('../../model/Usuario.php');
    $usuario = new Usuario();

    $usuario -> step4('perfiles/perfil.png', $ciudad, $tel, $des, $tweets, $pais);
  }




?>
