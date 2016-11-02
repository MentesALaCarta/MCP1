<?php

  # Incluimos la clase a heredar
  require_once('Conexion.php');

  /**
   * Todas las funciones correspondientes a logistica de usuario
   */
  class Usuario extends Conexion
  {


    function registrar($nombres, $apellidos, $email, $clave)
    {


      parent::conectar();

      # Prevenimos inyección SQL
      $nombres = parent::salvar($nombres);
      $apellidos = parent::salvar($apellidos);
      $email = parent::salvar($email);
      $clave = parent::salvar($clave);



      /* Notificar email */

      // título
          $titulo = 'Registro de un nuevo usuario';

          $mensaje = "
              <html>
                  <head>
                    <title>Registro de usuario</title>
                  </head>
                  <body>
              ";

           $mensaje .= "

              <h4 style='color: #03BBED;'>Datos Wits:<h4>
              <br>
              <span>Nombre: ".$nombres."</span><br>
              <span>Apellido: ".$apelidos."</span><br>
              <span>E-mail: ".$email."<span><br>
              ";

          $mensaje .="
                      </body>
                  </html>
                  ";


          # Cabeceras
          $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
          $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $cabeceras .= "From:". "info@mentesalacarta.com";

          # Envio de mensaje
          mail('mjyara9@misena.edu.co', $titulo, $mensaje, $cabeceras);
          mail('juliana@witpick.com.co', $titulo, $mensaje, $cabeceras);


      /* End notificar email */


      # Convertir todos los datos a minuculas
      $nombres    = $this->filterName($nombres);
      $apellidos  = $this->filterName($apellidos);
      $email      = strtolower($email);
      $clave      = strtolower($clave);

      # Verificamos que el email no exista
      $verificar = parent::verificarRegistros('select email from usuario where email="'.$email.'"');

      if($verificar > 0)
      {
        echo 'error_2';
      }else{

        $consulta = parent::query('insert into usuario(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email, clave) values("'.$nombres[0].'", "'.$nombres[1].'", "'.$apellidos[0].'", "'.$apellidos[1].'", "'.$email.'", MD5("'.$clave.'") )');

        if($consulta){


          $id = parent::consultaArreglo('select id from usuario where email="'.$email.'"');

          session_start();
          $_SESSION['id']               = $id['id'];

          # in the Fire_step table we are going one row
          parent::query('insert into fire_step(step, usuario_id) values("1", "'.$id['id'].'")');
          $_SESSION['primer_nombre']    = $nombres[0];
          $_SESSION['segundo_nombre']   = $nombres[1];
          $_SESSION['primer_apellido']  = $apellidos[0];
          $_SESSION['segundo_apellido'] = $apellidos[1];
          $_SESSION['email']            = $email;

          echo '?view=perfil';
        }else{
          echo 'no se registro';
        }

      }

      parent::cerrar();

    }


    # Convierte un string a minuscula y devuelve 2 valores en un array
    public function filterName($string)
    {

      # Convertir caracteres especiales
      $string = $this->acentos($string);

      # Convertimos el string a minusculas
      $string = strtolower($string);

      $string = explode(' ', $string);

      if(count($string) == 1)
      {
        $string[1] = null;
      }

      return $string;

    }

    # Formatea un string para soportar acentos especiales
    public function acentos($string){

      $buscar     = array('á','Á','é','É','í','Í','ó','Ó','ú','Ú','ñ','Ñ');
      $reemplazar = array('&aacute','&Aacute','&eacute','&Eacute','&iacute','&Iacute','&oacute','&Oacute','&uacute','&Uacute', '&ntilde', '&Ntilde');

      $string     = str_replace($buscar, $reemplazar, $string);

      return $string;
    }

    public function fire_step($id){
      parent::conectar();
      $step = parent::consultaArreglo('select step from fire_step where usuario_id="'.$id.'"');
      return $step['step'];
      parent::cerrar();
    }

    public function setExperiencia($datos){
      parent::conectar();
      # Reiniciar datos de experiencia
      parent::query('delete from experiencia where usuario_id="'.$_SESSION['id'].'"');

      $consulta = parent::query('insert into experiencia(name_business, sector, position, country, usuario_id) values'.$datos.'');
      if($consulta){
        parent::query('update fire_step set step = 2 where usuario_id="'.$_SESSION['id'].'"');
        echo 'se registro';
      }else{
        echo 'no se registro';
      }
      parent::cerrar();
    }

    public function previous_step($step)
    {
      parent::conectar();
      $consulta = parent::query('update fire_step set step="'.$step.'" where usuario_id="'.$_SESSION['id'].'"');
      if($consulta){
        echo 'se actualizo';
      }else{
        echo 'no se actualizo';
      }
      parent::cerrar();
    }

    public function getExperience($id)
    {
      parent::conectar();
      $verificar = parent::verificarRegistros('select id from experiencia where usuario_id="'.$id.'"');
      if($verificar > 0 ){
        $datos = array();

        $sql = parent::query('select * from experiencia where usuario_id="'.$id.'"');
        while($row = mysqli_fetch_array($sql)){
          $datos[] = array($row['id'], $row['name_business'], $row['sector'], $row['position'], $row['country']);
        }

        return $datos;
      }else{
        return 0;
      }

      parent::cerrar();
    }

    public function step2($des)
    {
      parent::conectar();
      $des = parent::salvar($des);
      $verificar = parent::verificarRegistros('select id from habilidades where usuario_id="'.$_SESSION['id'].'"');

      if($verificar > 0){
        $sql = parent::query('update habilidades set descripcion= "'.$des.'" where usuario_id="'.$_SESSION['id'].'"');
        if($sql){
          echo 'se actualizo';
        }else{
          echo 'no se actualizo';
        }
      }else{
        $sql = parent::query('insert into habilidades(descripcion, usuario_id) values("'.$des.'", "'.$_SESSION['id'].'")');
        if($sql){
          echo 'se registro';
        }else{
          echo 'no se registro';
        }
      }
      parent::cerrar();
    }

    public function getHabilidades(){
      parent::conectar();

      $verificar = parent::verificarRegistros('select id from habilidades where usuario_id="'.$_SESSION['id'].'"');

      if($verificar > 0){
        $datos = array();

        $consulta = parent::query('select id, descripcion from habilidades where usuario_id="'.$_SESSION['id'].'" order by id desc');

        while($row = mysqli_fetch_array($consulta)){
          $datos[] = array($row['id'], ucwords($row['descripcion']));
        }

        return $datos;
      }else{
        return 'cero';
      }
      parent::cerrar();
    }

    public function conectardb(){parent::conectar();}

    public function getConexion(){return parent::getLink();}

    public function cerrardb(){parent::cerrar();}


    public function setBrain($datos)
    {
      parent::conectar();
      parent::query('delete from brain where usuario_id="'.$_SESSION['id'].'"');

      $consulta = parent::query('insert into brain(descripcion, usuario_id) values'.$datos.'');
      if($consulta){
        parent::query('update fire_step set step=4 where usuario_id="'.$_SESSION['id'].'"');
        echo 'se registro';
      }else{
        echo 'no se registro';
      }

      parent::cerrar();
    }

    public function step4($imagen, $ciudad, $tel, $idiomas, $des, $tweets){
      # Reemplazamos los acentos
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      parent::conectar();
      $ciudad = parent::salvar($ciudad);
      $tel = parent::salvar($tel);
      $idiomas = parent::salvar($idiomas);
      $idiomas = str_replace(' ', '', $idiomas);
      $des = parent::salvar($des);
      $tweets = parent::salvar($tweets);
      $idiomas = str_replace($buscar, $reemplazar, $idiomas);
      $idiomas = explode(',', $idiomas);


      $ciudad = str_replace($buscar, $reemplazar, $ciudad);
      $des = str_replace($buscar, $reemplazar, $des);

      $consulta = parent::query('insert into contacto(imagen, ciudad, tel, des, tweets, usuario_id) values("'.$imagen.'", "'.$ciudad.'", "'.$tel.'",  "'.$des.'", "'.$tweets.'", "'.$_SESSION['id'].'")');

      $string = '';
      for($i= 0; $i < count($idiomas); $i++){
        $string .= '("'.$idiomas[$i].'", "'.$_SESSION['id'].'"),';
      }
      $string = substr($string, 0, -1);

      $idiomas = parent::query('insert into idiomas(des, usuario_id) values'.$string.'');

      parent::query('update fire_step set step="5" where usuario_id="'.$_SESSION['id'].'"');

      parent::cerrar();
    }


    public function setAptitud($des)
    {
      parent::conectar();
      # Validaciones posibles para la cadena

      # Eliminamos acentos
      $des = $this->acentos($des);

      # Eliminamos los espacios iniciales y finales
      $des = trim($des);

      # Convertimos la cadena en minusculas
      $des = strtolower($des);

      # Prevenimos inyeccion sql
      $des = parent::salvar($des);

      $verificar = parent::verificarRegistros('select id from habilidades where descripcion="'.$des.'"');
      if($verificar > 0){
        $this->getHabilidades1();
      }else{
        parent::query('insert into habilidades(descripcion, usuario_id) values("'.$des.'", "'.$_SESSION['id'].'")');
        $this->getHabilidades1();
      }



      parent::cerrar();
    }


    public function deleteHabilidad($id){
      parent::conectar();
      $id = parent::salvar($id);
      parent::query('delete from habilidades where id="'.$id.'"');
      $this->getHabilidades1();
      parent::cerrar();
    }

    public function getHabilidades1()
    {
      $consulta = parent::query('select * from habilidades where usuario_id="'.$_SESSION['id'].'" order by id desc');

      # Extraemos las habilidades del usuario
      while($row = mysqli_fetch_array($consulta)){
        echo '
        <tr id="habilidad'.$row['id'].'">
          <td>'.ucwords($row['descripcion']).'</td>
          <td class="hover eliminar_habilidad" id="'.$row['id'].'"><i class="fa fa-close red-text "></i> <span class="red-text">Eliminar</span></td>
        </tr>
        ';
      }
    }

    public function getAptitudes($des)
    {
      parent::conectar();
      $datos = array();
      $consulta = parent::query('select DISTINCT(descripcion) from habilidades where descripcion like "%'.$des.'%"');
      while($row = mysqli_fetch_array($consulta)){
        $datos[] = $row['descripcion'];
      }
      echo json_encode($datos);
      parent::cerrar();
    }

    public function new_step($paso)
    {
      parent::conectar();
      parent::query('update fire_step set step="'.$paso.'" where usuario_id="'.$_SESSION['id'].'"');
      parent::cerrar();
    }

  }

?>
