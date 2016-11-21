{include file="view/principal/header.tpl"}

<div class="row">
  <div class="col s4 nav-wit">

    <div class="accent">

    </div>

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s3 offset-s8" style="margin-top: 5em;">
          <div class="spacing-2"></div>
          <img src="images/{$usuario['imagen']}" class="circle" alt="Imagen de perfil wit michael" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s11 right-align">
          <h4 class="des-wit">{ucwords($usuario['nombres'])} <br> {ucwords($usuario['apellidos'])}</h4>
        </div>
      </div>

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s11 right-align">

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

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Pais:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$usuario['pais']}</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$usuario['email']}</span></div>
          </div>

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Idiomas:</span></div>
            <div class="col s6 "><span class="des-wit-2">{$idiomas}</span></div>
          </div>

        </div>
      </div>




  </div>
  <div class="col s8 offset-s4">

    {if isset($smarty.session.id) && $smarty.session.id == $smarty.get['id'] }
    <!-- Si no esta aprobado -->
    <div class="row">
      <div class="col s12">
        <div class="alert">
          Estamos validando tu información para que hagas parte de las mentes a la carta.
        </div>
      </div>
    </div>
    {/if}
    <div class="row">
      <div class="col s11">
        <h4 class="accent-text1">Experiencia</h4>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="text-accent1">
          <table>
            <thead>
              <tr>
                <th data-field="id">Empresa</th>
                <th data-field="name">Sector</th>
                <th data-field="price">Cargo</th>
                <th data-field="price">Pais</th>
                <th data-field="price">Actual trabajo</th>
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
        <h4 class="accent-text1">Aptitudes</h4>
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
        <h4 class="accent-text1">Actividades</h4>
      </div>
    </div>

    <div class="row">

      {if $brain[0] == true }
      <!-- Proyectos innovadores -->
      <div class="col s8 offset-s2 m4 l3 center-align" >
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item1">
          <i class="fa fa-microphone" aria-hidden="true" style=" font-size: 4rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Proyectos innovadores</span>
        <br>
        <span class="accent-grey">
          Participar en proyectos innovadores <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services1" name="services[0]"  hidden="hidden">
      </div>
      {/if}

      {if $brain[1] == true}
      <!-- Mentoring -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item2">
          <i class="fa fa-users" style=" font-size: 4rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Mentoring</span>
        <br>
        <span class="accent-grey">
          Ser mentor de emprendimientos y proyectos innovadores
        </span>
        <input type="text" id="services2" name="services[1]"  hidden="hidden">
      </div>
      {/if}

      {if $brain[2] == true}
      <!-- Asesoramiento -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item3">
          <i class="fa fa-pencil" style=" font-size: 4rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Asesoramiento</span>
        <br>
        <span class="accent-grey">
          Brindar asesoría a empresas y emprendedores <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services3" name="services[2]"  hidden="hidden">
      </div>
      {/if}


      {if $brain[3] == true}
      <!-- Formación -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item4">
          <i class="fa fa-bullhorn" style=" font-size: 4rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Formación</span>
        <br>
        <span class="accent-grey">
          Impartir charlas y formación<br><span style="visibility: hidden;">lorem ipsum lorem ipsum lorem ipsum</span>
        </span>
        <input type="text" id="services4" name="services[3]"  hidden="hidden">
      </div>
      {/if}

      {if $brain[4] == true}
      <!-- Contenidos -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item5">
          <i class="fa fa-check" style=" font-size: 4rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Contenidos</span>
        <br>
        <span class="accent-grey">
          Generar contenido escrito o audiovisual <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services5" name="services[4]"  hidden="hidden">
      </div>
      {/if}

    </div>



    <!-- Descripcion del wit -->
    <div class="row">
      <div class="col s11">
        <h4 class="accent-text1">Descripción de la mente a la carta</h4>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <span class="text-accent1">
          {$contacto[0][4]}
        </span>
      </div>
    </div>

    <!-- Frase o pensamiento propio -->
    <div class="row">
      <div class="col s11">
        <h4 class="accent-text1">Frase o pensamiento propio</h4>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <span class="text-accent1">
          {$contacto[0][3]}
        </span>
      </div>
    </div>

  </div>
</div>
{if isset($smarty.session.id)}
  {include file="view/principal/cerrarSesion.tpl"}
{/if}

{include file="view/principal/script.tpl"}
