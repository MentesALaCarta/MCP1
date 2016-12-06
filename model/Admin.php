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
      $sql = parent::query('select u.id, u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, u.fecha, c.ciudad from usuario u inner join fire_step f on u.id = f.usuario_id inner join contacto c on u.id = c.usuario_id where u.estado = "I" and f.step ="5" and u.cargo = "2" order by u.id desc');

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
      $id = parent::salvar($id);
      parent::query('update usuario set estado ="A" where id="'.$id.'"');

      $user = parent::consultaArreglo('select primer_nombre, email from usuario where id="'.$id.'"');
      $myList = '';

      $actividades = parent::query('select descripcion from brain where usuario_id="'.$id.'"');

      while($row = mysqli_fetch_array($actividades)){
        $myList .= ' ' . $row['descripcion'] . ' ';
      }

      $actividad1 = 'Proyectos innovadores';
      $actividad2 = 'Mentoring';
      $actividad3 = 'Asesoramiento';
      $actividad4 = 'Formaci&oacute;n';
      $actividad5 = 'Contenidos';

       /* Notificar email */

       //título
       $titulo = 'Bienvenido a Mentes a la Carta';

       $mensaje = '
       <html>
         <head>
           <meta charset="utf-8">
           <title>Perfil Aprobado</title>
         </head>
         <body>
       ';

       $mensaje .= '
       <div align="center">
         <img src="http://www.mentesalacarta.com/images/bradlogo.png" alt="logo mentes a la carta">
       </div>

       <div style="padding: 2em; border-radius:4px;border:1px #eaeaea solid; width: 100%; margin: 0px auto; color:#444444; font-size:11pt; font-family:proxima_nova,Arial,Verdana,Tahoma; max-width:454px">

           <div style="text-align: center;">
             <h1>¡Felicitaciones '.$user['primer_nombre'].'!</h1>
           </div>

           <span>
             Tu perfil de <span style="font-weight: bold;">mentes a la carta</span> ha sido aprobado, ahora puedes participar en las siguientes <span style="font-weight: bold;">actividades:</span>
           </span>

           <div style="margin-top: 1.5em;">
             <ul style="list-style: none;">';

               if(strpos($myList, 'Proyectos innovadores')){
                 $mensaje .= '
                 <li style="margin-top: 0.5em; color: #EBA820;">
                   Proyectos innovadores<br>
                   <span style="color: #767676;">Participar en proyectos innovadores </span>
                 </li>
                 ';
               }

               if(strpos($myList, $actividad2)){
                 $mensaje .= '
                 <li style="margin-top: 0.5em; color: #EBA820;">
                   Mentoring<br>
                   <span style="color: #767676;">Ser mentor de emprendimientos y proyectos innovadores </span>
                 </li>
                 ';
               }

               if(strpos($myList, $actividad3)){
                 $mensaje .= '
                 <li style="margin-top: 0.5em; color: #EBA820;">
                   Asesoramiento<br>
                   <span style="color: #767676;">Brindar asesoría a empresas y emprendedores</span>
                 </li>
                 ';
               }

               if(strpos($myList, $actividad4)){
                 $mensaje .= '
                 <li style="margin-top: 0.5em; color: #EBA820;">
                   Formación<br>
                   <span style="color: #767676;">Impartir charlas y formación</span>
                 </li>
                 ';
               }

               if(strpos($myList, $actividad5)){
                 $mensaje .= '
                 <li style="margin-top: 0.5em; color: #EBA820;">
                   Contenidos<br>
                   <span style="color: #767676;">Generar contenido escrito o audiovisual </span>
                 </li>
                 ';
               }

             $mensaje .='</ul>
           </div>

           <div style="margin-top: 2.5em;">
             <a href="http://www.mentesalacarta.com/?view=acceder" style="border-radius:3px; font-size:15px; color:white; border:1px #DF980B solid; text-decoration:none; padding:14px 7px 14px 7px; width:210px; max-width:210px; font-family:proxima_nova,arial,verdana,tahoma,sans-serif; margin:6px auto; display:block; background-color:#EBA820; text-align:center" target="_blank">
               Iniciar sesión
             </a>
           </div>
       </div>
       ';

       $mensaje .="
        </body>
       </html>
       ";


       # Cabeceras
       $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
       $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $cabeceras .= "From:". "juliana@witpick.com.co";

       # Envio de mensaje
       if(mail($user['email'], $titulo, $mensaje, $cabeceras)){
         echo 'se envio: ' .$user['email'] . ' ' . $myList;
       }else{
         echo 'no se envio';
       }


      parent::cerrar();
    }

    # Funcion que aprueba al wits
    public function desAprobarWit($id)
    {
      parent::conectar();
      $consulta = parent::query('update usuario set estado ="N" where id="'.$id.'"');
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

    public function consultByIdioma($idiomas)
    {
      parent::conectar();

      $consulta = 'select DISTINCT(u.id), u.primer_nombre, u.segundo_nombre, u.primer_apellido, u.segundo_apellido, c.ciudad, c.pais from usuario u inner join idiomas i on i.usuario_id = u.id inner join contacto c on c.usuario_id = u.id where u.estado = "A" and ('.$idiomas.') ';

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
