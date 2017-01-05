{include file="view/principal/header.tpl"}

<div class="row">

  <div class="col s4 nav-wit z-depth-5 hide-on-small-only">

    <div class="accent">

    </div>

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s4 offset-s7" style="margin-top: 2em;">
          <img src="images/{$usuario['imagen']}?{time()}" class="circle" alt="Imagen de perfil wit {$usuario['nombres']} {$usuario['apellidos']}" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s11 right-align">
          <h4 class="des-wit">{ucwords($usuario['nombres'])} <br> {ucwords($usuario['apellidos'])}</h4>
        </div>
      </div>

      {if isset($smarty.session.id) && $smarty.session.id == $smarty.get['id'] }
      <!-- Editar perfil -->
      <div class="row">
        <div class="col s11 right-align">
          <a href="?view=editar-perfil">
            <i class="fa fa-pencil" aria-hidden="true" style="letter-spacing: 7px; color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Editar perfil</span>
          </a>
        </div>
      </div>

      <!-- Más mentes -->
      <div class="row hide-on-small-only">
        <div class="col s11 right-align">
          <a href="?view=Mentes-a-la-Carta">
            <i class="fa fa-users" aria-hidden="true" style="letter-spacing: 7px; color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Ver más Mentes a la Carta</span>
          </a>
        </div>
      </div>
      {/if}

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s11 right-align">

          <!-- Telefono-->
          <div class="row">
            <div class="col s4"><span class="des-wit">Telefono:</span></div>
            <div class="col s8 "><span class="des-wit-2">{$contacto[0][2]}</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Ciudad:</span></div>
            <div class="col s8 "><span class="des-wit-2">{ucwords($contacto[0][1])}</span></div>
          </div>

          <!-- Pais -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Pais:</span></div>
            <div class="col s8 "><span class="des-wit-2">{ucwords($usuario['pais'])}</span></div>
          </div>

          <!-- email -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s8 "><span class="des-wit-2">{$usuario['email']}</span></div>
          </div>

          <!-- idiomas -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Idiomas:</span></div>
            <div class="col s8 "><span class="des-wit-2">{ucwords($idiomas)}</span></div>
          </div>

        </div>
      </div>
  </div>
  <!-- Encabezado de la primera seccion -->

  <!-- Inicio encabezado 2 -->
  <div class="col s12 nav-wit-2 hide-on-med-and-up">

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s6 offset-s3" style="margin-top: 3em;">
          <img src="images/{$usuario['imagen']}?{time()}" class="circle" alt="Imagen de perfil wit {$usuario['nombres']} {$usuario['apellidos']}" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s12 center-align">
          <h4 class="des-wit">{ucwords($usuario['nombres'])} <br> {ucwords($usuario['apellidos'])}</h4>
        </div>
      </div>

      {if isset($smarty.session.id) && $smarty.session.id == $smarty.get['id'] }
      <!-- Editar perfil -->
      <div class="row">
        <div class="col s12">
          <a href="?view=editar-perfil">
            <i class="fa fa-pencil" aria-hidden="true" style="color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Editar perfil</span>
          </a>
        </div>
      </div>
      {/if}

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s12">

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Telefono:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$contacto[0][2]}</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Ciudad:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$contacto[0][1]}</span></div>
          </div>

          <!-- Pais -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Pais:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$usuario['pais']}</span></div>
          </div>

          <!-- email -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$usuario['email']}</span></div>
          </div>

          <!-- idiomas -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Idiomas:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$idiomas}</span></div>
          </div>

        </div>
      </div>

  </div>

  <!-- Encabezado de la segunda seccion -->

  <div class="col s12 m8 offset-m4">

    {if isset($smarty.session.id) && $smarty.session.id == $smarty.get['id'] && $estado == 'I'}
      <!-- Si no esta aprobado -->
      <div class="row">
        <div class="col s12">
          <div class="alert">
            Estamos validando tu información para que hagas parte de las Mentes a la Carta.
          </div>
        </div>
      </div>
    {/if}

    <div class="row">
      <div class="col s11">
        <div class="spacing-2 hide-on-large-only" ></div>
        <h5 class="accent-text1">Experiencia</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="text-accent1">
          <table class="responsive-table">
            <thead>
              <tr>
                <th data-field="id">Empresa</th>
                <th data-field="name">Sector</th>
                <th data-field="price">Cargo</th>
                <th data-field="price">Pais</th>
                <!-- <th data-field="price">Actual trabajo</th> -->
              </tr>
            </thead>

            <tbody>
              {for $i=0 to count($experiencia) -1}
              <tr>
                <td>{$experiencia[$i][0]}</td>
                <td>{$experiencia[$i][1]}</td>
                <td>{$experiencia[$i][2]}</td>
                <td>{$experiencia[$i][3]}</td>
              </tr>
              {/for}
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- *Aptitudes -->
    <div class="row">
      <div class="col s11">
        <h5 class="accent-text1">Aptitudes</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12 text-accent1">
        <table>
          <thead>
            <tr>
              <th data-field="id">Aptitud</th>
            </tr>
          </thead>

          <tbody>
            {for $i = 0 to count($aptitudes) -1}
              <tr>
                <td>{$aptitudes[$i]}</td>
              </tr>
            {/for}
          </tbody>
        </table>
      </div>
    </div>

    <!-- Actividades -->
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Actividades</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <ul class="collection">
          {if $brain[0] == true }
          <!-- Proyectos innovadores -->
          <li class="collection-item avatar">
            <div style="margin-top: 0.5em;"></div>
            <i class="fa fa-briefcase activo circle"></i>
            <span class="grey-text text-darken-1">
              Proyectos innovadores <br>
              <small class="grey-text">Participar en proyectos innovadores</small>
            </span>
          </li>
          {/if}

          {if $brain[1] == true}
          <!-- Mentoring -->
          <li class="collection-item avatar">
            <div style="margin-top: 0.5em;"></div>
            <i class="fa fa-users activo circle"></i>
            <span class="grey-text text-darken-1">
              Mentoring<br>
              <small class="grey-text">Ser mentor de emprendimientos y proyectos innovadores</small>
            </span>
          </li>
          {/if}

          {if $brain[2] == true}
          <!-- Asesoramiento -->
          <li class="collection-item avatar">
            <div style="margin-top: 0.5em;"></div>
            <i class="fa fa-comments-o activo circle grey"></i>
            <span class="grey-text text-darken-1">
              Asesoramiento<br>
              <small class="grey-text">Brindar asesoría a empresas y emprendedores</small>
            </span>
          </li>
          {/if}


          {if $brain[3] == true}
          <!-- Formación -->
          <li class="collection-item avatar">
            <div style="margin-top: 0.5em;"></div>
            <i class="fa fa-pencil-square-o activo circle grey"></i>
            <span class="grey-text text-darken-1">
              Formación<br>
              <small class="grey-text">Impartir charlas y formación</small>
            </span>
          </li>
          {/if}

          {if $brain[4] == true}
          <!-- Contenidos -->
          <li class="collection-item avatar">
            <div style="margin-top: 0.5em;"></div>
            <i class="fa fa-file-text activo circle grey"></i>
            <span class="grey-text text-darken-1">
              Contenidos<br>
              <small class="grey-text">Generar contenido escrito o audiovisual</small>
            </span>
          </li>
          {/if}
        </ul>
    </div>
  </div>



    <!-- Descripcion del wit -->
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Descripción de la mente a la carta</h5>
        <span class="text-accent1">
          {$contacto[0][4]}
        </span>
      </div>
    </div>

    <!-- Frase o pensamiento propio -->
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Frase o pensamiento propio</h5>
        <span class="text-accent1">
          {$contacto[0][3]}
        </span>
      </div>
    </div>

  </div>

</div>

{if isset($smarty.session.id) && $smarty.session.cargo == 2}

  <div class="fixed-action-btn vertical hide-on-small-only">
    <a id="close-sesion" class="btn-floating tooltipped btn-large white waves-effect" data-position="left" data-delay="50" data-tooltip="Cerrar sesión">
      <i style="font-size: 1.7em; color: #727272;" class="fa fa-power-off" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Menu para dispositivos moviles -->
  <div class="barra hide-on-med-and-up" style="width: 100%;background-color: white; position: fixed; z-index: 100; bottom: 0px;">
    <div class="row no-margin-b">
      <a href="?view=Mentes-a-la-Carta">
        <div class="col s6 center-align waves-effect grey-text" style="padding-top: 10px;">
          <i class="fa fa-users" style="font-size: 1.6rem;"></i>
          <br>
          Más mentes a la Carta
        </div>
      </a>
      <div class="col s6 center-align"  style="padding-top: 10px; border-bottom: 3px solid black;">
        <i class="fa fa-user" style="font-size: 1.6rem;"></i><br>
        Mi perfil
      </div>
    </div>
  </div>

{/if}

{if isset($smarty.session.id) && $smarty.session.cargo == 1}
<div class="fixed-action-btn click-to-toggle vertical hide-on-small-only">
  <a class="btn-floating btn-large white waves-effect">
    <i style="font-size: 1.7em; color: #727272;" class="fa fa-bars" aria-hidden="true"></i>
  </a>
  <ul>
    <li><a class="btn-floating tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Descargar perfil" style="background-color: #727272;"><i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 1.2rem;"></i></a></li>
    <li><a class="btn-floating tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Asignar proyecto" style="background-color: #727272;"><i class="fa fa-briefcase" aria-hidden="true" style="font-size: 1.2rem;"></i></a></li>
    <li><a class="btn-floating tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Enviar mensaje" style="background-color: #727272;"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 1.2rem;"></i></a></li>
  </ul>
</div>

{/if}

<div class="spacing-3"></div>

{include file="view/principal/script.tpl"}
