<?php

  # Incluimos la clase de conexion
  require_once('Conexion.php');

  /**
   *
   */
  class Admin extends Conexion
  {

    public function listarWitsNoAprovados()
    {
      parent::conectar();
      $datos = array();

      # Consultamos todos los wits que no estan aprobados
      $sql = parent::query('select * from usuario inner join fire_step f on usuario.id = f.usuario_id where usuario.estado = "I" and step ="5" order by usuario.id ');

      while($row = mysqli_fetch_array($sql)){

        $ciudad = parent::consultaArreglo('select ciudad from contacto where usuario_id="'.$row['id'].'"');

        # Juntamos los nombres
        $nombres = $row['primer_nombre'] . ' ' . $row['segundo_nombre'];

        # Juntamos los apellido
        $apellidos = $row['primer_apellido'] . ' ' . $row['segundo_apellido'];

        $datos[] = array(
                         $row['id'], // 0
                         $nombres, // 1
                         $apellidos, // 2
                         $row['fecha'], // 5
                         $ciudad['ciudad'] // 6
                       );

      }

      return $datos;

      parent::cerrar();
    }


    # Funcion que aprueba al wits
    public function aprobarWit($id)
    {
      parent::conectar();
      parent::query('update usuario set estado ="A" where id="'.$id.'"');
      parent::cerrar();
    }

    # Funcion que aprueba al wits
    public function desAprobarWit($id)
    {
      parent::conectar();
      parent::query('update usuario set estado ="N" where id="'.$id.'"');
      parent::cerrar();
    }

    public function getSectores()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.sector) from experiencia b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['sector'])){
          $datos[] = $row['sector'];
        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getEmpresas()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.name_business) from experiencia b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['name_business'])){
          $datos[] = $row['name_business'];
        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getCiudades()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.ciudad) from contacto b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['ciudad'])){
          # Reemplazamos los acentos
          $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
          $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

          $datos[] = str_replace($buscar, $reemplazar, $row['ciudad']);
        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getCargos()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.position) from experiencia b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['position'])){
          $datos[] = $row['position'];
        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getBrains()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.descripcion) from brain b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['descripcion'])){
          $datos[] = $row['descripcion'];
        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getPaises()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.pais) from contacto b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['pais'])){

          # Reemplazamos los acentos
          $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
          $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

          $datos[] = str_replace($buscar, $reemplazar, $row['pais']);

        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getIdiomas()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.des) from idiomas b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['des'])){

          # Reemplazamos los acentos
          $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
          $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

          $datos[] = str_replace($buscar, $reemplazar, $row['des']);

        }
      }

      return $datos;
      parent::cerrar();
    }

    public function getHabilidades()
    {
      parent::conectar();
      $datos = array();
      $sql = parent::query('select DISTINCT(b.descripcion) from habilidades b inner join usuario u on b.usuario_id = u.id where u.estado ="A"');

      while($row = mysqli_fetch_array($sql)){
        if(!empty($row['descripcion'])){

          # Reemplazamos los acentos
          $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
          $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

          $datos[] = str_replace($buscar, $reemplazar, $row['descripcion']);

        }
      }

      return $datos;
      parent::cerrar();
    }


    # Funcion que consulta  wits aprobados por nombre de empresa y sector
    public function consultBySectorAndEmpresa($sectores, $empresas)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join experiencia e on e.usuario_id = u.id inner join contacto c on u.id = c.usuario_id where u.estado = "A" and ('.$sectores.') and ('.$empresas.')';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }


    public function consultBySector($sectores)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join experiencia e on e.usuario_id = u.id inner join contacto c on u.id = c.usuario_id where u.estado = "A" and ('.$sectores.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }

    public function consultByEmpresa($empresas)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join experiencia e on e.usuario_id = u.id inner join contacto c on u.id = c.usuario_id where u.estado = "A" and ('.$empresas.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }


    public function getWitsAprobados()
    {
      parent::conectar();
      $sql = parent::query('select u.id, u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join contacto c on u.id = c.usuario_id where estado ="A"');
      while($row = mysqli_fetch_array($sql)){
        echo '
        <tr class="verPerfil" id="'.$row['id'].'">
          <td>'.$row['primer_nombre']. ' ' .$row['segundo_nombre'].'</td>
          <td>'.$row['primer_apellido']. ' ' .$row['segundo_apellido'].'</td>
          <td>'.$row['ciudad'].'</td>
          <td>'.$row['pais'].'</td>
        </tr>
        ';
      }

      parent::cerrar();
    }

    public function consultByCiudad($ciudad)
    {
      parent::conectar();

      $consulta = 'select u.id, u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join contacto c on c.usuario_id = u.id where u.estado = "A" and ('.$ciudad.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }

    public function consultByCargo($cargos)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join experiencia e on e.usuario_id = u.id inner join contacto c on u.id = c.usuario_id where u.estado = "A" and ('.$cargos.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }

    public function consultByActividad($actividad)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join brain b on b.usuario_id = u.id inner join contacto c on u.id = c.usuario_id where u.estado = "A" and ('.$actividad.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }

    public function consultByAptitudes($aptitudes)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join habilidades h on h.usuario_id = u.id inner join contacto c on  u.id = c.usuario_id where u.estado = "A" and ('.$aptitudes.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }


    # Funcion que consulta  wits aprobados por nombre de empresa y sector
    public function consultByPaisAndIdioma($sectores, $empresas)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join idiomas i on i.usuario_id = u.id inner join contacto c on c.usuario_id = u.id where u.estado = "A" and ('.$sectores.') and ('.$empresas.')';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }


    public function consultByPais($sectores)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join contacto c on c.usuario_id = u.id where u.estado = "A" and ('.$sectores.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo ' No hay registros';
      }

      parent::cerrar();
    }

    public function consultByIdioma($empresas)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join idiomas i on i.usuario_id = u.id where u.estado = "A" and ('.$empresas.') ';

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){
        $sql = parent::query($consulta);
        while($row = mysqli_fetch_array($sql)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
            <td>'.$row['primer_nombre'] .' ' .$row['segundo_nombre'].'</td>
            <td>'.$row['primer_apellido']. ' '.$row['segundo_apellido'].'</td>
            <td>'.$row['ciudad'].'</td>
            <td>'.$row['pais'].'</td>
          </tr>

        ';
        }

      }else{
        echo 'No hay registros';
      }

      parent::cerrar();
    }

    # Funcion que permite consulta dinamica con varias parametros en una sola palabra
    public function buscarWit($busqueda)
    {
      parent::conectar();
      $busqueda = parent::salvar($busqueda);


      $sql = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u
      inner join
      brain b
      on u.id = b.usuario_id
      inner join
      contacto c
      on u.id = c.usuario_id
      inner join
      experiencia e
      on u.id = e.usuario_id
      inner join
      fire_step f
      on u.id = f.usuario_id
      inner join
      habilidades h
      on u.id = h.usuario_id
      inner join
      idiomas i
      on u.id = i.usuario_id
      where
      u.estado = "A"
      and
      (
        u.primer_nombre like "%'.$busqueda.'%"
        or
        u.segundo_nombre like "%'.$busqueda.'%"
        or
        u.primer_apellido like "%'.$busqueda.'%"
        or
        u.segundo_apellido like "%'.$busqueda.'%"
        or
        b.descripcion like "%'.$busqueda.'%"
        or
        c.ciudad like "%'.$busqueda.'%"
        or
        c.tel like "%'.$busqueda.'%"
        or
        c.pais like "%'.$busqueda.'%"
        or
        e.name_business like "%'.$busqueda.'%"
        or
        e.sector like "%'.$busqueda.'%"
        or
        e.position like "%'.$busqueda.'%"
        or
        e.country like "%'.$busqueda.'%"
        or
        h.descripcion like "%'.$busqueda.'%"
        or
        i.des like "%'.$busqueda.'%"
        )';

        $verificar = parent::verificarRegistros($sql);
        if($verificar > 0 ){

          $consulta = parent::query($sql);

          while($row = mysqli_fetch_array($consulta)){
            echo '
            <tr class="verPerfil" id="'.$row['id'].'">
              <td>'.$row['primer_nombre']. ' ' .$row['segundo_nombre'].'</td>
              <td>'.$row['primer_apellido']. ' ' .$row['segundo_apellido'].'</td>
              <td>'.$row['ciudad'].'</td>
              <td>'.$row['pais'].'</td>
            </tr>
            ';
          }
        }else{
          echo 'No se encontraron registros';
        }


      parent::cerrar();
    } // End function


    public function buscarByNombre($busqueda)
    {
      parent::conectar();

      $palabras = count($busqueda);

      if($palabras == 2){
        $busqueda[2] = 'lopez gobez hos dakjs';
        $busqueda[3] = 'lopez gobez hos dakjs';
      }else if($palabras == 3){
        $busqueda[3] = 'lopez gobez hos dakjs';
      }

      $busqueda[0] = parent::salvar($busqueda[0]);
      $busqueda[1] = parent::salvar($busqueda[1]);
      $busqueda[2] = parent::salvar($busqueda[2]);
      $busqueda[3] = parent::salvar($busqueda[3]);

      $sql = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u
      inner join
      brain b
      on u.id = b.usuario_id
      inner join
      contacto c
      on u.id = c.usuario_id
      inner join
      experiencia e
      on u.id = e.usuario_id
      inner join
      fire_step f
      on u.id = f.usuario_id
      inner join
      habilidades h
      on u.id = h.usuario_id
      inner join
      idiomas i
      on u.id = i.usuario_id
      where
      u.estado = "A"
      and
      (
        u.primer_nombre like "%'.$busqueda[0].'%"
        or
        u.primer_nombre like "%'.$busqueda[1].'%"
        or
        u.primer_nombre like "%'.$busqueda[2].'%"
        or
        u.primer_nombre like "%'.$busqueda[3].'%"
        or
        u.segundo_nombre like "%'.$busqueda[0].'%"
        or
        u.segundo_nombre like "%'.$busqueda[1].'%"
        or
        u.segundo_nombre like "%'.$busqueda[2].'%"
        or
        u.segundo_nombre like "%'.$busqueda[3].'%"
        or
        u.primer_apellido like "%'.$busqueda[0].'%"
        or
        u.primer_apellido like "%'.$busqueda[1].'%"
        or
        u.primer_apellido like "%'.$busqueda[2].'%"
        or
        u.primer_apellido like "%'.$busqueda[3].'%"
        or
        u.segundo_apellido like "%'.$busqueda[0].'%"
        or
        u.segundo_apellido like "%'.$busqueda[1].'%"
        or
        u.segundo_apellido like "%'.$busqueda[2].'%"
        or
        u.segundo_apellido like "%'.$busqueda[3].'%"
      )';

      $verificar = parent::verificarRegistros($sql);
      if($verificar > 0){
        $consulta = parent::query($sql);

        while($row = mysqli_fetch_array($consulta)){
          echo '
          <tr class="verPerfil" id="'.$row['id'].'">
          <td>'.$row['primer_nombre']. ' ' .$row['segundo_nombre'].'</td>
          <td>'.$row['primer_apellido']. ' ' .$row['segundo_apellido'].'</td>
          <td>'.$row['ciudad'].'</td>
          <td>'.$row['pais'].'</td>
          </tr>
          ';
        }

      }else{
        echo 'No se encontraron registro';
      }

      parent::cerrar();
    }

  } // END Class



?>
