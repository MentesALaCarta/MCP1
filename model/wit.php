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
          $datos[4] = true;
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
      $validar = parent::verificarRegistros('select id from usuario where id ="'.$id.'"');
      if($validar > 0)
      {
        return true;
      }else{
        return false;
      }
      parent::cerrar();
    }


  }


?>
