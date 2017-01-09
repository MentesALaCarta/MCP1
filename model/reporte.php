<?php

require_once('Conexion.php');
/**
 *
 */
class reporte extends Conexion
{

  public function conectar()
  {
    parent::conectar();
  }

  public function infoGeneral($id)
  {
    $id = parent::filtrar($id);

    $contacto = parent::consultaArreglo('select imagen, ciudad, tel, pais from contacto where usuario_id="'.$id.'"');
    $usuario = parent::consultaArreglo('select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email from usuario where id="'.$id.'"');
    $idiomas = parent::query('select des from idiomas where usuario_id="'.$id.'"');
    $idioma = '';
    while($row = mysqli_fetch_array($idiomas)){
      $idioma .= parent::rescatar(ucfirst($row['des'])) . ', ';
    }

    $idioma = substr($idioma, 0, -2);

    $datos = '
    <div class="row">
      <div class="col s2" style="margin-bottom: 10px;">
        <div class="spacing-1"></div>
        <img width="135px" src="images/'.$contacto['imagen'].'">
      </div>
      <div class="col s8">
        <span class="accent-text1">Nombre: </span><span class="grey-text">'.ucfirst(parent::rescatar($usuario['primer_nombre'])). ' ' . parent::rescatar($usuario['segundo_nombre']) . ' ' . parent::rescatar($usuario['primer_apellido']) . ' ' . parent::rescatar($usuario['segundo_apellido']) . '</span><br><br>
        <span class="accent-text1">Telefono: </span><span class="grey-text">'.ucfirst(parent::rescatar($contacto['tel'])).'</span><br><br>
        <span class="accent-text1">Ciudad: </span><span class="grey-text">'.ucfirst(parent::rescatar($contacto['ciudad'])).'</span><br><br>
        <span class="accent-text1">Pais: </span><span class="grey-text">'.ucfirst(parent::rescatar($contacto['pais'])).'</span><br><br>
        <span class="accent-text1">Correo electrónico: </span><span class="grey-text">'.ucfirst(parent::rescatar($usuario['email'])).'</span><br><br>
        <span class="accent-text1">Idiomas: </span><span class="grey-text">'.$idioma.'</span>
      </div>
    </div>
    ';

    return $datos;
  }

  public function experiencia($id)
  {
    $id = parent::filtrar($id);

    $experiencia = parent::query('select * from experiencia where usuario_id="'.$id.'"');

    $datos = '
    <div class="row">
      <div class="col s11">
      <div class="divider"></div>
        <div class="spacing-2 hide-on-large-only" ></div>
        <h5 class="accent-text1">Experiencia</h5>

        <div class="text-accent1">
          <table class="responsive-table">
            <thead>
              <tr>
                <th data-field="id" style="color: #787878;">Empresa</th>
                <th data-field="name" style="color: #787878;">Sector</th>
                <th data-field="price" style="color: #787878;">Cargo</th>
                <th data-field="price" style="color: #787878;">Pais</th>
              </tr>
            </thead>

            <tbody>';

            while($row = mysqli_fetch_array($experiencia)){
              $datos .= '
                <tr>
                <td class="grey-text">'.ucfirst(parent::rescatar($row['name_business'])).'</td>
                <td class="grey-text">'.ucfirst(parent::rescatar($row['sector'])).'</td>
                <td class="grey-text">'.ucfirst(parent::rescatar($row['position'])).'</td>
                <td class="grey-text">'.ucfirst(parent::rescatar($row['country'])).'</td>
                </tr>
              ';
            }

            $datos .= '
            </tbody>

          </table>
        </div>
      </div>
    </div>
    ';

    return $datos;
  }

  public function aptitudes($id)
  {
    $id = parent::filtrar($id);

    $aptitudes = parent::query('select descripcion from habilidades where usuario_id="'.$id.'"');

    $datos = '
    <div class="row">
      <div class="col s11">
      <div class="divider"></div>
        <h5 class="accent-text1">Aptitudes</h5>
        <ul class="grey-text">';

        while($row = mysqli_fetch_array($aptitudes)){
          $datos .= '
          <li>'.ucfirst(parent::rescatar($row['descripcion'])).'</li>
          ';
        }

        $datos .='
        </ul>
      </div>
    </div>
    ';

    return $datos;
  }

  public function brain($id)
  {
    $id = parent::filtrar($id);

    $datos = '
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Actividades</h5>
        <ul class="collection">
    ';

    $sql = parent::query('select descripcion from brain where usuario_id="'.$id.'"');
    $actividad = 1;
    $actividad1 = 'Proyectos innovadores';
    $actividad2 = 'Mentoring';
    $actividad3 = 'Asesoramiento';
    $actividad4 = 'Formaci&oacute;n';
    $actividad5 = 'Contenidos';

    $myList = '';
    // Lista que existe
    while($row = mysqli_fetch_array($sql)){
      $myList .= $row['descripcion'] . ' ';
    }

    # Actividad 1
    if(strpos($myList, $actividad1) === false){
      $datos .= '
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-briefcase activo circle"></i>
        <span class="grey-text text-darken-1">
          Proyectos innovadores <br>
          <small class="grey-text">Participar en proyectos innovadores</small>
        </span>
      </li>
      ';
    }

    # Actividad 2
    if(strpos($myList, $actividad2) === false){
      $datos .= '
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-users activo circle"></i>
        <span class="grey-text text-darken-1">
          Mentoring<br>
          <small class="grey-text">Ser mentor de emprendimientos y proyectos innovadores</small>
        </span>
      </li>
        ';
    }

    # Actividad 3
    if(strpos($myList, $actividad3) === false){
      $datos .= '
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-comments-o activo circle grey"></i>
        <span class="grey-text text-darken-1">
          Asesoramiento<br>
          <small class="grey-text">Brindar asesoría a empresas y emprendedores</small>
        </span>
      </li>
      ';
    }

    # Actividad 4
    if(strpos($myList, $actividad4) === false){
      $datos .= '
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-pencil-square-o activo circle grey"></i>
        <span class="grey-text text-darken-1">
          Formación<br>
          <small class="grey-text">Impartir charlas y formación</small>
        </span>
      </li>
      ';
    }

    # Actividad 5
    if(strpos($myList, $actividad5) === false){
      $datos .= '
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-file-text activo circle grey"></i>
        <span class="grey-text text-darken-1">
          Contenidos<br>
          <small class="grey-text">Generar contenido escrito o audiovisual</small>
        </span>
      </li>
        ';
    }

    $datos .= '
        </ul>
      </div>
    </div>
    ';

    return $datos;
  }

  public function dichos($id)
  {
    $id = parent::filtrar($id);
    $contacto = parent::consultaArreglo('select des, tweets from contacto where usuario_id="'.$id.'"');

    $datos ='
    <div class="row">
      <div class="col s12">
      <div class="divider"></div>
        <h5 class="accent-text1">Descripción de la Mente a la Carta</h5>
        <span class="text-accent1">
        '.ucfirst(parent::rescatar($contacto['tweets'])).'
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="divider"></div>
        <h5 class="accent-text1">Frase o pensamiento propio</h5>
        <span class="text-accent1">
          '.ucfirst(parent::rescatar($contacto['des'])).'
        </span>
      </div>
    </div>
    ';

    return $datos;
  }

  public function cerrar()
  {
    parent::cerrar();
  }
}


?>
