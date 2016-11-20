<?php

    # Clase conexion: permite conectar a la base de datos y ejecutar consultas sql

    class Conexion
    {

        # Atributos de la clase conexion

        private $mysqli = '';
        private $usuario = 'root';
        private $clave = '';
        private $server = 'localhost';
        private $db = 'mentes';

        // private $usuario = 'witpickc_mentes';
        // private $clave = 'Maicolyara11079?';
        // private $server = 'localhost';
        // private $db = 'witpickc_mentes';


        # Funcion que permite conectarnos a la base de datos

        public function conectar()
        {
            # Creamos un objeto de conexion MySQLI

            $this->mysqli = new mysqli($this->server, $this->usuario, $this->clave, $this->db);

            # Validamos si existe un error al conectarnos

            if($this->mysqli->connect_errno)
            {
                # Imprimimos el error

                echo 'Fallo al conectarse con MySQL: ' . $this->mysqli->connect_error;
            }
        }


        # Function que retorna un objeto de MySQL

        public function query($consulta)
        {
            return $this->mysqli->query($consulta);
        }

        # Escapa los caracteres especiales de un string para evitar las inyecciones sql

        public function salvar($des)
        {
          $string = $this->mysqli->real_escape_string($des);
          return $string;
        }

        # Funcion que retorna el numero de filas afectadas por una consulta sql

        public function verificarRegistros($consulta)
        {
            return $verificarRegistros = mysqli_num_rows($this->mysqli->query($consulta));
        }


        # Funcion que retorna un arreglo con los registros de una consulta

        public function consultaArreglo($consulta)
        {
            return mysqli_fetch_array($this->mysqli->query($consulta));
        }


        # Function que permite cerrar una conexion de MySQL

        public function cerrar()
        {
            # Accedemos al atributo de conexion y cerramos la conexion

            $this->mysqli->close();
        }


        # Retorna el objeto de conexion

        public function getLink()
        {
          return $this->mysqli;
        }


    }

    # Objeto de pruebas para la clase conexion

    /*
        $conexion = new conexion();
    */
?>
