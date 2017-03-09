<?php

  # Incluimos la clase conexion
  require_once('Conexion.php');

  class emails extends Conexion
  {

    public function setAsunto($asunto)
    {
      parent::conectar();
      $asunto = parent::filtrar($asunto);

      date_default_timezone_set('America/bogota');
      //Fecha registro
      $fecha_registro = date("d-m-Y, g:i:s A");

      parent::query('insert into masivo(asunto, fecha) values("'.$asunto.'", "'.$fecha_registro.'")');

      $id = parent::consultaArreglo('select id from masivo order by id desc');

      echo "?view=masivosPlantilla&id=". $id['id'];

      parent::cerrar();
    }

    public function idDestacado($destacado, $id_masivo)
    {
      parent::conectar();

      $verificar = parent::verificarRegistros('select id from des_masivo where posicion ="'.$destacado.'" and masivo_id="'.$id_masivo.'"');

      if($verificar > 0){
        parent::query('update des_masivo set imagen ="images/destacado/destacado'.$id_masivo.$destacado.'.png" where posicion ="'.$destacado.'" and masivo_id="'.$id_masivo.'"');
      }else{
        parent::query('insert into des_masivo(posicion, imagen, masivo_id) values("'.$destacado.'", "images/destacado/destacado'.$id_masivo.$destacado.'.png", "'.$id_masivo.'")');
      }
      $id = $id_masivo . $destacado;
      return $id;
      parent::cerrar();
    }

    public function setDesMasivo($masivo, $empresa1, $sector1, $textarea1, $empresa2, $sector2, $textarea2, $empresa3, $sector3, $textarea3)
    {
      parent::conectar();

      // Verificar Niveles

      //Nivel 1
      $masivo1 = parent::verificarRegistros('select id from des_masivo where masivo_id = "'.$masivo.'" and posicion ="1"');

      if($masivo1 > 0){
        // Update
        parent::query('update des_masivo set empresa ="'.parent::filtrar($empresa1).'", sector="'.parent::filtrar($sector1).'", reto ="'.parent::filtrar($textarea1).'" where masivo_id="'.$masivo.'" and posicion="1"');
      }else{
        // Register
        parent::query('insert into des_masivo(posicion, imagen, empresa, sector, reto, masivo_id) values("1", "images/emails/picture.png", "'.parent::filtrar($empresa1).'", "'.parent::filtrar($sector1).'", "'.parent::filtrar($textarea1).'", "'.$masivo.'")');
      }

      // //Nivel 2
      $masivo2 = parent::verificarRegistros('select id from des_masivo where masivo_id = "'.$masivo.'" and posicion ="2"');

      if($masivo2 > 0){
        // Update
        parent::query('update des_masivo set empresa ="'.parent::filtrar($empresa2).'", sector="'.parent::filtrar($sector2).'", reto ="'.parent::filtrar($textarea2).'" where masivo_id="'.$masivo.'" and posicion="2"');
      }else{
        // Register
        parent::query('insert into des_masivo(posicion, imagen, empresa, sector, reto, masivo_id) values("2", "images/emails/picture.png", "'.parent::filtrar($empresa2).'", "'.parent::filtrar($sector2).'", "'.parent::filtrar($textarea2).'", "'.$masivo.'")');
      }

      //Nivel 3
      $masivo3 = parent::verificarRegistros('select id from des_masivo where masivo_id = "'.$masivo.'" and posicion ="3"');

      if($masivo3 > 0){
        // Update
        parent::query('update des_masivo set empresa ="'.parent::filtrar($empresa3).'", sector="'.parent::filtrar($sector3).'", reto ="'.parent::filtrar($textarea3).'" where masivo_id="'.$masivo.'" and posicion="3"');
      }else{
        // Register
        parent::query('insert into des_masivo(posicion, imagen, empresa, sector, reto, masivo_id) values("3", "images/emails/picture.png", "'.parent::filtrar($empresa3).'", "'.parent::filtrar($sector3).'", "'.parent::filtrar($textarea3).'", "'.$masivo.'")');
      }

      echo 'actualizado';

      parent::cerrar();
    }


    public function sendEmailMasivo($masivo)
    {
      parent::conectar();

      // Enviar emails masivos
      $asunto = parent::consultaArreglo('select asunto from masivo where id="'.$masivo.'"');
      $titulo = ucfirst(parent::rescatar($asunto['asunto']));

      // Consultamos los datos de des_masivo

      $mensaje = '
      <html>
        <head>
          <meta charset="utf-8">
          <title>Retos innovadores</title>
        </head>
        <body>

          <div align="center">
            <img src="http://www.mentesalacarta.com/images/bradlogo.png" alt="logo mentes a la carta">
          </div>

          <div style="padding: 2em; border-radius:4px;border:1px #eaeaea solid; width: 100%; margin: 0px auto; color:#444444; font-size:11pt; font-family:proxima_nova,"Open Sans","Lucida Grande","Segoe UI",Arial,Verdana,"Lucida Sans Unicode",Tahoma,"Sans Serif"; max-width: 1200px;">

              <div style="text-align: center; width: 100%;">
                <h1>¡Pon tu mente a volar, ayúdanos a afrontar los <br> siguientes retos de innovación!</h1>
              </div>
          ';

          $datos = parent::query('select imagen, empresa, sector, reto from des_masivo where masivo_id="'.$masivo.'" order by posicion ASC');


          while($row = mysqli_fetch_array($datos)){
            $mensaje .= '
            <div style="margin-top: 8em;"></div>
            <div style="width: 33%; display: inline-block;">
              <img src="http://www.mentesalacarta.com/'.$row['imagen'].'" style="width: 70%; border-radius: 5px;"></img>

              <!-- Descripcion -->
              <span style="display: block; margin-top: 1em;">
                Empresa: <span style="color: #727272">'.ucfirst(parent::rescatar($row['empresa'])).'</span>
              </span>

              <span style="display: block; margin-top: 1em;">
                Sector: <span style="color: #727272">'.ucfirst(parent::rescatar($row['sector'])).'</span>
              </span>
              <span style="display: block; margin-top: 1em;">
                Reto: <span style="color: #727272">
                  '.ucfirst(parent::rescatar($row['reto'])).'
                </span>
              </span>
              <!-- Descripcion -->

            </div>
            ';
          }

          $mensaje .= '
          </div>

        </body>
      </html>
      ';

      # Cabeceras
      $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $cabeceras .= "From:". "juliana@mentesalacarta.com";

      if(mail('mjyara9@gmail.com', $titulo, $mensaje, $cabeceras)){
        echo 'se envio';
      }else{
        echo 'no se envio';
      }

      parent::cerrar();
    }

  }

?>
