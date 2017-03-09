<?php
    require_once('../../core/upload/class.upload.php');

    session_start();

    # Validamos que todos los campos lleguen bien
    $imagen = $_FILES['imagen_perfil'];

    if(!empty($_FILES["imagen_perfil"]["name"])){ // No selecciono imagen

      $tipo = $_FILES["imagen_perfil"]["type"];

      if($tipo == "image/x-png" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/pjpeg" || $tipo == "image/jpeg"){

        $imagen = new upload($_FILES['imagen_perfil']);

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


        $imagen->clean();
        clearstatcache();

        echo 'perfil'.$_SESSION['id'].'.png?'.time();

        require_once('../../model/wit.php');

        $persona = new Wit();

        $imagen = 'perfiles/perfil'.$_SESSION['id'].'.png';
        $persona -> updateImage($imagen);

      }else{
        echo 'Formato no valido';
      }

    }else{
      echo 'error_1';
    }
?>
