<?php

  # Incluimos la clase de conexion
  include('Conexion.php');

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


  }



?>
