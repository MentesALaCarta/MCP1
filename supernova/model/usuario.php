<?php

  require_once('Conexion.php');


  /**
   *
   */
  class Usuario extends Conexion
  {

    function setSolicitud($email)
    {
      parent::conectar();
      $email = parent::salvar($email);

      $verificar = parent::verificarRegistros('select correo from solicitud where correo="'.$email.'"');

      if($verificar > 0){
        echo 'error_2';
      }else{
        $sql = parent::query('insert into solicitud(correo) values("'.$email.'")');

              /* Notificar email */

               //título
                   $titulo = 'Supernova: Registro de solicitud';

                   $mensaje = "
                       <html>
                           <head>
                             <title>Se ha registrado una solicitud en Supernova</title>
                           </head>
                           <body>
                       ";

                    $mensaje .= "

                       <h4 style='color: #03BBED;'>Datos:<h4>
                       <br>
                       <span>Correo: ".$email."</span>
                       <br>
                       ";

                   $mensaje .="
                               </body>
                           </html>
                           ";


                   # Cabeceras
                   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
                   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                   $cabeceras .= "From:". "juliana@mentesalacarta.com";

                   # Envio de mensaje
                  //  mail('mjyara9@misena.edu.co', $titulo, $mensaje, $cabeceras);
                   mail('juliana@mentesalacarta.com', $titulo, $mensaje, $cabeceras);

      }
      parent::cerrar();
    }


    public function registrar($empresa_nom, $empresa_nit, $empresa_sector, $empresa_ciudad, $empresa_web, $user_name, $user_cargo, $user_telefono, $user_email) {
      parent::conectar();
      $empresa_nom = $this->filtrar($empresa_nom);
      $empresa_nit = $this->filtrar($empresa_nit);
      $empresa_sector = $this->filtrar($empresa_sector);
      $empresa_ciudad = $this->filtrar($empresa_ciudad);
      $empresa_web = $this->filtrar($empresa_web);
      $user_name = $this->filtrar($user_name);
      $user_cargo = $this->filtrar($user_cargo);
      $user_telefono = $this->filtrar($user_telefono);
      $user_email = $this->filtrar($user_email);

      // verificamos que la empresa no este registrada
      $verificar = parent::verificarRegistros('select id from empresa where codigo ="'.$empresa_nit.'"');

      if($verificar > 0){
        echo 'error_2';
      }else{
        // Registramos la empresa
        parent::query('insert into empresa(nombre, codigo, sector, ciudad, url) values("'.$empresa_nom.'", "'.$empresa_nit.'", "'.$empresa_sector.'", "'.$empresa_ciudad.'", "'.$empresa_web.'")');

        // Extraemos el id de la empresa
        $empresa = parent::consultaArreglo('select id from empresa where codigo ="'.$empresa_nit.'"');

        // Registramos al usuario
        $usuario = parent::query('insert into personas(nombre, cargo, telefono, email, empresa_id) values("'.$user_name.'", "'.$user_cargo.'", "'.$user_telefono.'", "'.$user_email.'", "'.$empresa['id'].'")');

        if($usuario){
          echo 'se registro';
          session_start();
          session_destroy();

          $empresa_nom = $this->recuperar($empresa_nom);
          $empresa_nit = $this->recuperar($empresa_nit);
          $empresa_sector = $this->recuperar($empresa_sector);
          $empresa_ciudad = $this->recuperar($empresa_ciudad);
          $empresa_web = $this->recuperar($empresa_web);
          $user_name = $this->recuperar($user_name);
          $user_cargo = $this->recuperar($user_cargo);
          $user_telefono = $this->recuperar($user_telefono);
          $user_email = $this->recuperar($user_email);


          /* Notificar email */

           //título
               $titulo = 'Supernova: Registro de empresa';

               $mensaje = "
                   <html>
                       <head>
                         <title>Nuevo registro en Supernova </title>
                       </head>
                       <body>
                   ";

                $mensaje .= "

                   <h4 style='color: #03BBED;'>Datos Empresa:<h4>
                   <br>
                   <span>Nombre: ".$empresa_nom."</span><br>
                   <span>Nit: ".$empresa_nit."</span><br>
                   <span>Sector: ".$empresa_sector."</span><br>
                   <span>Ciudad: ".$empresa_ciudad."</span><br>
                   <span>Web: ".$$empresa_web."</span><br>
                   <br>
                   <h4 style='color: #03BBED;'>Datos Persona:<h4>
                   <br>
                   <span>Nombre: ".$user_name."</span><br>
                   <span>Nit: ".$user_cargo."</span><br>
                   <span>Sector: ".$user_telefono."</span><br>
                   <span>Ciudad: ".$user_email."</span><br>
                   <br>
                   ";

               $mensaje .="
                           </body>
                       </html>
                       ";


               # Cabeceras
               $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
               $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $cabeceras .= "From:". "juliana@mentesalacarta.com";

               # Envio de mensaje
              //  mail('mjyara9@misena.edu.co', $titulo, $mensaje, $cabeceras);
               mail('juliana@mentesalacarta.com', $titulo, $mensaje, $cabeceras);
        }

      }

      parent::cerrar();
    }

    public function filtrar($string){
      
      $res = parent::salvar($string);
      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $res = str_replace($buscar, $reemplazar, $string);

      $res = strtolower($res);

      return $res;
    }

    public function recuperar($string){
      $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $res = str_replace($buscar, $reemplazar, $string);

      return $res;
    }
  }

?>
