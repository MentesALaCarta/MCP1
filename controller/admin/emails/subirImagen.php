<?php
    require_once('../../../core/upload/class.upload.php');

    session_start();

    # Validamos que todos los campos lleguen bien
    $imagen = $_FILES['imagen_destacada'];
    // $destacado = $_POST['tipo_destacado'];
    $destacado = $_POST['destacado'];
    $id_masivo = $_POST['id_masivo'];

    if(!empty($_FILES["imagen_destacada"]["name"])){ // No selecciono imagen

      $tipo = $_FILES["imagen_destacada"]["type"];

      if($tipo == "image/x-png" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/pjpeg" || $tipo == "image/jpeg"){

        $imagen = new upload($_FILES['imagen_destacada']);

        require_once('../../../model/emails.php');
        $persona = new emails();

        $id = $persona -> idDestacado($destacado, $id_masivo);

        if(file_exists('../../../images/destacado/destacado'.$id.'.png')){
          unlink('../../../images/destacado/destacado'.$id.'.png');
        }

        # Cambiamos el nombre
        $imagen ->  file_new_name_body = 'destacado'.$id;
        $imagen ->  image_convert = 'png';

        # Indica si queremos redimencionar la imagen
        $imagen -> image_resize = true;
        $imagen -> image_x      = 256;
        $imagen -> image_y      = 256;
        $imagen -> Process('../../../images/destacado');


        $imagen->clean();
        clearstatcache();

        echo 'images/destacado/destacado'.$id.'.png?'.time();


      }else{
        echo 'Formato no valido';
      }

    }else{
      echo 'error_1';
    }
?>
