<?php

  # Incluimos la clase conexion
  require_once('Conexion.php');

  /**
   *
   */
  class Firewall extends Conexion
  {

    public function iniciarSesion($email, $pass)
    {
      parent::conectar();

      # Verificamos que no contengan caracteres especiales
      $email = parent::salvar($email);
      $pass  = parent::salvar($pass);

      # Convertimos el texto a minusculas
      $email = strtolower($email);

      # Validar si existe un usuario con ese email
      $verificar = parent::verificarRegistros('select email from usuario where email="'.$email.'"');
      if($verificar > 0){

        $login = parent::verificarRegistros('select id from usuario where email="'.$email.'" and clave = MD5("'.$pass.'")');

        if($login > 0){
          $user = parent::consultaArreglo('select id, cargo from usuario where email="'.$email.'" and clave = MD5("'.$pass.'")');

          session_start();
          $_SESSION['id'] = $user['id'];
          $_SESSION['cargo'] = $user['cargo'];

          if($user['cargo'] == 1){
            echo '?view=panel';
          }else{
            echo '?view=perfil';
          }

        }else{
          echo 'error_3'; // La contraseña es incorrecta
        }

      }else{
        echo 'error_2';
      }

      parent::cerrar();
    }
  }

?>
