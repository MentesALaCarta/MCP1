<?php

  # Incluimos la clase de conexion
  require_once('Conexion.php');


  class Wit extends Conexion
  {

    public function experiencia($id)
    {
      parent::conectar();
      $datos = array();
      $consulta = parent::query('select name_business, sector, position, country from experiencia where usuario_id="'.$id.'"');
      while($row = mysqli_fetch_array($consulta)){
        $datos[] = array($row['name_business'], $row['sector'], $row['position'], $row['country']);
      }
      return $datos;
      parent::cerrar();
    }

    public function aptitudes($id)
    {
      parent::conectar();
      $datos = array();
      $consulta = parent::query('select descripcion from habilidades where usuario_id="'.$id.'"');
      while($row = mysqli_fetch_array($consulta)){
        $datos[] = $row['descripcion'];
      }
      return $datos;
      parent::cerrar();
    }

    public function brain($id)
    {
      parent::conectar();
      $datos = array();
      $consulta = parent::query('select descripcion from brain where usuario_id="'.$id.'"');
      while($row = mysqli_fetch_array($consulta)){

        if($row['descripcion'] == 'Proyectos innovadores'){
          $datos[0] = true;
        }else if($row['descripcion'] == 'Mentoring'){
          $datos[1] = true;
        }else if($row['descripcion'] == 'Asesoramiento'){
          $datos[2] = true;
        }else if($row['descripcion'] == 'Formaci&oacuten'){
          $datos[3] = true;
        }else if($row['descripcion'] == 'Contenidos'){
          $datos[4] = true;
        }

      }

      if(!isset($datos[0])){
        $datos[0] = false;
      }

      if(!isset($datos[1])){
        $datos[1] = false;
      }

      if(!isset($datos[2])){
        $datos[2] = false;
      }

      if(!isset($datos[3])){
        $datos[3] = false;
      }

      if(!isset($datos[4])){
        $datos[4] = false;
      }

      return $datos;
      parent::cerrar();
    }

    public function contacto($id)
    {
      parent::conectar();
      $datos = array();

      $sql = parent::query('select * from contacto where usuario_id="'.$id.'"');

      while($row = mysqli_fetch_array($sql)){
        $datos[] = array(
                          $row['imagen'],
                          $row['ciudad'],
                          $row['tel'],
                          $row['des'],
                          $row['tweets']
                        );
      }

      return $datos;

      parent::cerrar();
    }

    public function idiomas($id)
    {
      parent::conectar();
      $datos = '';
      $consulta = parent::query('select DISTINCT(des) from idiomas where usuario_id="'.$id.'"');
      while($row = mysqli_fetch_array($consulta)){
        $datos .= $row['des'] . ', ';
      }

      $datos = substr($datos, 0, -2);

      return $datos;
      parent::cerrar();
    }

    public function usuario($id)
    {
      parent::conectar();
      $datos = array();
      $wit = parent::consultaArreglo('select * from usuario where id="'.$id.'"');

      $nombres = $wit['primer_nombre'] . ' ' . $wit['segundo_nombre'];
      $apellidos = $wit['primer_apellido'] . ' ' . $wit['segundo_apellido'];

      $pais = parent::consultaArreglo('select pais, imagen from contacto where usuario_id="'.$id.'"');

      $datos = array(
          'nombres'   => $nombres,
          'apellidos' => $apellidos,
          'imagen'    => $pais['imagen'],
          'email'     => $wit['email'],
          'pais'      => $pais['pais']
      );

      return $datos;

      parent::cerrar();
    }

    public function getWitsAprobados()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select id, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido from usuario where estado ="A"');
      while($row = mysqli_fetch_array($sql)){

        # Extraemos la ciudad y el pais
        $contacto = parent::consultaArreglo('select ciudad, pais from contacto where usuario_id="'.$row['id'].'"');
        $nombres = $row['primer_nombre'] . ' ' . $row['segundo_nombre'];
        $apellidos = $row['primer_apellido'] . ' ' . $row['segundo_apellido'];

        $datos[] = array($row['id'], $nombres, $apellidos, $contacto['ciudad'], $contacto['pais']);
      }
      return $datos;
      parent::cerrar();
    }

    # Extra el estado de la mente a la carta
    public function estado($id)
    {
      parent::conectar();
      parent::salvar($id);
      $estado = parent::consultaArreglo('select estado from usuario where id="'.$id.'"');
      return $estado['estado'];
      parent::cerrar();
    }

    # Valida si el usuario existe o no
    public function validarPerfil($id)
    {
      parent::conectar();
      $id = parent::salvar($id);
      $validar = parent::verificarRegistros('select id from usuario where id ="'.$id.'" and cargo="2"');
      if($validar > 0)
      {
        return true;
      }else{
        return false;
      }
      parent::cerrar();
    }


    # Extrae el nombre de la empresa
    public function getNameEmpresas(){
      parent::conectar();
      $datos = array();
      $sql = 'select id, name_business from experiencia where usuario_id="'.$_SESSION['id'].'" order by id desc';
      $verificar = parent::verificarRegistros($sql);
      if($verificar > 0){
        $consulta = parent::query($sql);

        while($row = mysqli_fetch_array($consulta)){
          $datos[] = array($row['id'], $row['name_business']);
        }
        return $datos;
      }else{
        return 0;
      }

      parent::cerrar();
    }

    # Carga los datos de la empresa
    public function loadEmpresa($id)
    {
      parent::conectar();
      $id = parent::salvar($id);
      $datos = array();
      // Validamos con id y con id de usuario por seguridad a algun hackeo
      $verificar = parent::verificarRegistros('select id from experiencia where id="'.$id.'" and usuario_id="'.$_SESSION['id'].'"');

      if($verificar > 0){
        $empresa = parent::consultaArreglo('select * from experiencia where id="'.$id.'"');

        $datos['identificador']  = $empresa['id'];
        $datos['nombre']         = $this->recuperar($empresa['name_business']);
        $datos['sector']         = $this->recuperar($empresa['sector']);
        $datos['cargo']          = $this->recuperar($empresa['position']);
        $datos['ciudad']         = $this->recuperar($empresa['country']);
        $datos['error']          = false;
      }else{
        $datos['error'] = true;
      }

      echo json_encode($datos);

      parent::cerrar();
    }

    public function recuperar($string){
      $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      $res = str_replace($buscar, $reemplazar, $string);

      return $res;
    }

    # Valida si el id enviado pertenece al usuario logueado
    public function esMiId($id){
      parent::conectar();
      $id = parent::salvar($id);

      if($id == 0){
        return true;
      }else{

        $verificar = parent::verificarRegistros('select id from experiencia where id="'.$id.'" and usuario_id="'.$_SESSION['id'].'"');

        if($verificar > 0 ){
          // Si es tu id
          return true;
        }else{
          // No es tu id
          return false;
        }

      }

      parent::cerrar();
    }


    # Registra o actualiza una experiencia
    public function setExperiencia($id, $empresa, $sector, $cargo, $pais)
    {
      parent::conectar();
      // FIltramos los datos de hackeo o mayusculas o acentos
      $id = parent::filtrar($id);
      $empresa = parent::filtrar($empresa);
      $sector = parent::filtrar($sector);
      $cargo = parent::filtrar($cargo);
      $pais = parent::filtrar($pais);

      if($id == 0){
        // Registrar
        $verificar = parent::query('insert into experiencia(name_business, sector, position, country, usuario_id) values("'.$empresa.'", "'.$sector.'", "'.$cargo.'", "'.$pais.'", "'.$_SESSION['id'].'")');
        $this->getExperiencia();
      }else{
        // Actualizar
        $verificar = parent::query('update experiencia set name_business="'.$empresa.'", sector = "'.$sector.'", position = "'.$cargo.'",  country= "'.$pais.'" where id="'.$id.'" and usuario_id="'.$_SESSION['id'].'"');
        $this->getExperiencia();
      }

      parent::cerrar();
    }

    public function getExperiencia()
    {
      $sql = parent::query('select id, name_business from experiencia where usuario_id="'.$_SESSION['id'].'" order by id desc');
      while($row = mysqli_fetch_array($sql)){
        echo '
        <tr>
          <td>'.ucfirst($row['name_business']).'</td>
          <td><i class="fa fa-pencil text-grey" aria-hidden="true"></i> <span class="underline text-grey editar_empresa" id="'.$row['id'].'">Editar</span></td>
          <td><i class="fa fa-trash text-grey" aria-hidden="true"></i> <span class="underline text-grey eliminar_empresa" id="'.$row['id'].'">Eliminar</span></td>
        </tr>
        ';
      }
    }


    public function deleteExperiencia($id)
    {
      parent::conectar();
      $id = parent::salvar($id);
      $verificar = parent::verificarRegistros('select id from experiencia where id="'.$id.'" and usuario_id="'.$_SESSION['id'].'"');
      if($verificar > 0){

        // Borrar
        $sql = parent::query('delete from experiencia where id="'.$id.'" and usuario_id="'.$_SESSION['id'].'"');
        if($sql){
          $this->getExperiencia();
        }else{
          echo 'error';
        }

      }else{
        echo 'error';
      }
      parent::cerrar();
    }

    # Permite marcar una actividad
    public function seguirActividad($actividad)
    {
      parent::conectar();
      // Verificamos que no sea un hack
      $actividad = parent::salvar($actividad);


      switch ($actividad) {
        case 'actividad1':
          $actividad = 'Proyectos innovadores';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            echo 'error_1';
          }else{
            parent::query('insert into brain(descripcion, usuario_id) values("'.$actividad.'", "'.$_SESSION['id'].'")');
            $this->getBrains();
          }
          break;

        case 'actividad2':
          $actividad = 'Mentoring';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            echo 'error_1';
          }else{
            parent::query('insert into brain(descripcion, usuario_id) values("'.$actividad.'", "'.$_SESSION['id'].'")');
            $this->getBrains();
          }
          break;

        case 'actividad3':
          $actividad = 'Asesoramiento';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            echo 'error_1';
          }else{
            parent::query('insert into brain(descripcion, usuario_id) values("'.$actividad.'", "'.$_SESSION['id'].'")');
            $this->getBrains();
          }
          break;

        case 'actividad4':
          $actividad = 'Formaci&oacuten';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            echo 'error_1';
          }else{
            parent::query('insert into brain(descripcion, usuario_id) values("'.$actividad.'", "'.$_SESSION['id'].'")');
            $this->getBrains();
          }
          break;

        case 'actividad5':
          $actividad = 'Contenidos';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            echo 'error_1';
          }else{
            parent::query('insert into brain(descripcion, usuario_id) values("'.$actividad.'", "'.$_SESSION['id'].'")');
            $this->getBrains();
          }
          break;

        default:
          # code...
          break;
      }

      parent::cerrar();
    }

    # Lista actualizada de brains
    public function getBrains()
    {
      $sql = parent::query('select descripcion from brain where usuario_id="'.$_SESSION['id'].'"');
      $actividad = 1;
      $actividad1 = 'Proyectos innovadores';
      $actividad2 = 'Mentoring';
      $actividad3 = 'Asesoramiento';
      $actividad4 = 'Formaci&oacuten';
      $actividad5 = 'Contenidos';

      $myList = '';
      // Lista que existe
      while($row = mysqli_fetch_array($sql)){
        $myList .= $row['descripcion'] . ' ';
      }

      # Actividad 1
      if(strpos($myList, $actividad1) === false){
        echo '
        <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad1">
          <i class="fa fa-microphone circle"></i>
          <span>
            Proyectos innovadores <br>
            <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
          </span>
        </li>
        ';
      }else{
        echo '
          <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad1">
            <i class="fa fa-microphone activo circle"></i>
            <span>
              Proyectos innovadores <br>
              <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
            </span>
          </li>
          ';
      }


      # Actividad 2
      if(strpos($myList, $actividad2) === false){
        echo '
          <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad2">
            <i class="fa fa-users circle"></i>
            <span>
              Mentoring<br>
              <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
            </span>
          </li>
          ';
      }else{
        echo '
          <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad2">
            <i class="fa fa-users activo circle"></i>
            <span>
              Mentoring<br>
              <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
            </span>
          </li>
          ';
      }

      # Actividad 3
      if(strpos($myList, $actividad3) === false){
        echo '
        <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad3">
          <i class="fa fa-pencil circle grey"></i>
          <span>
            Asesoramiento<br>
            <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
          </span>
        </li>
        ';
      }else{
          echo '
          <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad3">
            <i class="fa fa-pencil activo circle grey"></i>
            <span>
              Asesoramiento<br>
              <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
            </span>
          </li>
          ';
      }

      # Actividad 4
      if(strpos($myList, $actividad4) === false){
        echo '
        <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad4">
          <i class="fa fa-bullhorn circle grey"></i>
          <span>
            Formación<br>
            <small class="grey-text text-darken-2">Impartir charlas y formación</small>
          </span>
        </li>
        ';
      }else{
          echo '
          <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad4">
            <i class="fa fa-bullhorn activo circle grey"></i>
            <span>
              Formación<br>
              <small class="grey-text text-darken-2">Impartir charlas y formación</small>
            </span>
          </li>
          ';
      }

      # Actividad 5
      if(strpos($myList, $actividad5) === false){
        echo '
          <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad5">
            <i class="fa fa-check circle grey"></i>
            <span>
              Contenidos<br>
              <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
            </span>
          </li>
          ';
      }else{
        echo '
          <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad5">
            <i class="fa fa-check activo circle grey"></i>
            <span>
              Contenidos<br>
              <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
            </span>
          </li>
          ';
      }

    }


    # Permite dejar una actividad
    public function dejarActividad($actividad)
    {
      parent::conectar();

      // Verificamos que no sea un hack
      $actividad = parent::salvar($actividad);

      $cuantosBrains = parent::verificarRegistros('select id from brain where usuario_id="'.$_SESSION['id'].'"');
      if($cuantosBrains > 1){


      switch ($actividad) {
        case 'actividad1':
          $actividad = 'Proyectos innovadores';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            parent::query('delete from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
            $this->getBrains();
          }else{
            echo 'error_1';
          }
          break;

        case 'actividad2':
          $actividad = 'Mentoring';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            parent::query('delete from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
            $this->getBrains();
          }else{
            echo 'error_1';
          }
          break;

        case 'actividad3':
          $actividad = 'Asesoramiento';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            parent::query('delete from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
            $this->getBrains();
          }else{
            echo 'error_1';
          }
          break;

        case 'actividad4':
          $actividad = 'Formaci&oacuten';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            parent::query('delete from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
            $this->getBrains();
          }else{
            echo 'error_1';
          }
          break;

        case 'actividad5':
          $actividad = 'Contenidos';
          $verificar = parent::verificarRegistros('select id from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
          if($verificar > 0){
            parent::query('delete from brain where descripcion="'.$actividad.'" and usuario_id="'.$_SESSION['id'].'"');
            $this->getBrains();
          }else{
            echo 'error_1';
          }
          break;

      }

    }else{
      echo 'error_5';
    }

      parent::cerrar();
    }


    # Encapsula en un string las actividades del usuario
    public function misBrains($id)
    {
      parent::conectar();

      $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');
      $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');

      $id = parent::salvar($id);
      $datos = '';
      $consulta =  parent::query('select descripcion from brain where usuario_id="'.$id.'"');
      while($row = mysqli_fetch_array($consulta)){
        $res = str_replace($buscar, $reemplazar, $row['descripcion']);
        $datos .= $res . ' ';
      }
      return $datos;
      parent::cerrar();
    }

    public function infoContacto($id)
    {
      parent::conectar();
      $id = parent::salvar($id);
      $contacto = parent::consultaArreglo('select imagen, ciudad, tel, des, tweets, pais from contacto where usuario_id="'.$id.'"');

      $datos = array(
          'imagen' => $contacto['imagen'],
          'ciudad' => $contacto['ciudad'],
          'tel'    => $contacto['tel'],
          'des'    => $contacto['des'],
          'tweets' => $contacto['tweets'],
          'pais'   => $contacto['pais']
        );
      return $datos;
      parent::cerrar();
    }


    public function updateImage($imagen)
    {
      parent::conectar();
      parent::query('update contacto set imagen = "'.$imagen.'" where usuario_id="'.$_SESSION['id'].'"');
      parent::cerrar();
    }

    # Actualiza los datos
    public function actualizarDatos($ciudad, $tel, $pais, $tweets, $area)
    {
      parent::conectar();
      $ciudad = parent::filtrar($ciudad);
      $tel = parent::filtrar($tel);
      $pais = parent::filtrar($pais);
      $tweets = parent::filtrar($tweets);
      $area  = parent::filtrar($area);
      session_start();
      $sql = parent::query('update contacto set ciudad = "'.$ciudad.'", tel="'.$tel.'", pais = "'.$pais.'", des="'.$area.'", tweets = "'.$tweets.'" where usuario_id="'.$_SESSION['id'].'"');

      parent::cerrar();
    }

    public function consultarEstado($id)
    {
      parent::conectar();
      $id = parent::salvar($id);
      $user = parent::consultaArreglo('select estado from usuario where id="'.$id.'"');
      return $user['estado'];
      parent::cerrar();
    }

  } // End class


?>
