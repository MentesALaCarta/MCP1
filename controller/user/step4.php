<?php
    require_once('../../core/upload/class.upload.php');

    # Validamos que todos los campos lleguen bien
    $imagen = isset($_FILES['imagen-upload']) ? $_FILES['imagen-upload']: null;
    $ciudad = $_POST['ciudad'];
    $tel = $_POST['tel'];
    $idiomas = $_POST['idiomas'];
    $des = $_POST['area'];

    if(empty($imagen) || empty($ciudad) || empty($tel) || empty($idiomas) || empty($des) ){
      echo 'error_1';
    }else{
      $imagen = new upload($_FILES['imagen-upload']);

      $tipo = $_FILES["imagen-upload"]["type"];

      if($tipo == "image/x-png" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/gif" || $tipo == "image/pjpeg" || $tipo == "image/jpeg"){

          session_start();

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

          if($imagen -> processed)
          {

            # Actualizamos la imagen de perfil en la base de datos
            require_once('../../model/Usuario.php');
            $usuario = new Usuario();

            $usuario -> step4('perfiles/perfil'.$_SESSION['id'].'.png', $ciudad, $tel, $idiomas, $des);

          }else{
            echo 'No se subio el archivo '. $imagen -> error;
          }

          $imagen->clean();

      }else{
        //Codigo cuando no es lo que menciono anteriomente
        echo 'error_2';
      }
    }


?>
