{include file="view/principal/header.tpl"}

<!-- Panel -->
<div class="row">

  <div class="col s3 no-padding-1 nav-right1 hide-on-med-and-down z-depth-1">
        <section class="row no-margin-b">
          <article class="col l4 offset-l2" style="padding-top: 1em;">
            <img src="images/bradlogo.png" width="100%" class="" alt="logo mentes a la carta">
          </article>
        </section>

        <section class="row">
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=principal" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-home left resize"></i>
                  Página principal
                </li>
              </a>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1 active-item">
                  <i class="fa fa-users left resize"></i>
                  Mentes a la carta
                </li>
              </a>
              <a href="?view=wits-pendientes" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-user-secret left resize"></i>
                  Mentes a la carta pendientes
                </li>
              </a>
              <a href="?view=emailMasivo" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-envelope left resize" style="font-size: 1.4rem;"></i>
                  Enviar correo
                </li>
              </a>
              <a href="?view=newProyect" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-briefcase left resize"></i>
                  Proyectos
                </li>
              </a>
              <a href="?view=index" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3 seccion-panel ">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Buscar Mentes a la Carta</a>
        </div>
      </nav>
    </div>

    <!-- Contenido -->
    <div class="spacing-2"></div>
    <div class="row" style="padding: 15px 20px;">

      <!-- Nombres o apellidos -->
      <div class="input-field col s12 m6">
        <input id="busqueda-text" type="text" class="validate">
        <label for="busqueda-text" class="grey-text">Ingresa tu búsqueda</label>
      </div>

      <!-- Sectores-->
      <div class="input-field col s12 m6">
        <select multiple id="sectores">
          <option value="" disabled selected>Sector</option>
          {for $i = 0 to count($sectores) -1}
            <option value="{$sectores[$i]}">{ucwords($sectores[$i])}</option>
          {/for}
        </select>
        <label class="grey-text">Sectores</label>
      </div>

      <!-- Empresas -->
      <div class="input-field col s12 m6">
        <select multiple id="empresas">
          <option value="" disabled selected>Empresa</option>
          {for $i = 0 to count($empresas) -1}
            <option value="{$empresas[$i]}">{ucwords($empresas[$i])}</option>
          {/for}
        </select>
        <label class="grey-text">Empresas </label>
      </div>

      <!-- Ciudades -->
      <div class="input-field col s12 m6">
        <select multiple id="ciudad_dinamic">
          <option value="" disabled selected>Ciudad</option>
          {for $i = 0 to count($ciudad) -1}
            <option value="{$ciudad[$i]}">{ucwords($ciudad[$i])}</option>
          {/for}
        </select>
        <label class="grey-text">Ciudades</label>
      </div>

      <!-- Cargos -->
      <div class="input-field col s12 m6">
        <select multiple id="cargos_dinamic">
          <option value="" disabled selected>Cargo</option>
          {for $i = 0 to count($cargos) -1}
            <option value="{$cargos[$i]}">{$cargos[$i]}</option>
          {/for}
        </select>
        <label class="grey-text">Cargos</label>
      </div>

      <!-- Actividades -->
      <div class="input-field col s12 m6">
        <select multiple id="actividad_dinamic">
          <option value="" disabled selected>Actividad</option>
          {for $i = 0 to count($brains) -1}
            <option value="{$brains[$i]}">{$brains[$i]}</option>
          {/for}
        </select>
        <label class="grey-text">Actividades</label>
      </div>

      <!-- Paises -->
      <div class="input-field col s12 m6">
        <select multiple id="paises">
          <option value="" disabled selected>Pais</option>
          {for $i = 0 to count($paises) -1}
            <option value="{$paises[$i]}">{ucwords($paises[$i])}</option>
          {/for}
        </select>
        <label class="grey-text">Paises </label>
      </div>

      <!-- Idiomas -->
      <div class="input-field col s12 m6">
        <select multiple id="idiomas">
          <option value="" disabled selected>Idioma</option>
          {for $i = 0 to count($idiomas) -1}
            <option value="{$idiomas[$i]}">{ucwords($idiomas[$i])}</option>
          {/for}
        </select>
        <label class="grey-text"> Idiomas </label>
      </div>

      <!-- Aptitudes -->
      <div class="input-field col s12">
        <select multiple id="aptitudes_dinamic">
          <option value="" disabled selected>Aptitud</option>
          {for $i = 0 to count($habilidades) -1}
            <option value="{$habilidades[$i]}">{ucwords($habilidades[$i])}</option>
          {/for}
        </select>
        <label class="grey-text">Aptitudes</label>
      </div>

    </div>


    <div class="row">
      <div class="col s12">
        <span style="font-size: 1.4rem;" class="grey-text text-darken-2">Total de Mentes a la Carta - {$totalAdmintidos}</span>
      </div>
    </div>

    <div class="row white">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr class="orange-text text-lighten-1">
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Ciudad</th>
              <th>País</th>
          </tr>
        </thead>

        <tbody id="wits-aprobados-panel" class="grey-text">

          {for $i = 0 to count($wits) -1}
          <tr class="verPerfil" id="{$wits[$i][0]}">
            <td>{ucwords($wits[$i][1])}</td>
            <td>{ucwords($wits[$i][2])}</td>
            <td>{ucwords($wits[$i][3])}</td>
            <td>{ucwords($wits[$i][4])}</td>
          </tr>
          {/for}

        </tbody>
      </table>
      </div>
    </div>


    <!-- End ultima lista -->
    <div class="row">
      <div class="col s12 center-align">
        <div class="spacing-3"></div>
        <ul class="pagination">

          {if $page > 1}
            <li><a href="?view=panel&page={$page - 1}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          {else}
            <li class="disabled"><a><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          {/if}

          {for $i= 1 to $wits[0][5]}
            {if $i == $page}
              <li class="active grey darken-3"><a href="?view=panel&page={$i}">{$i}</a></li>
            {else}
              <li class="waves-effect"><a href="?view=panel&page={$i}">{$i}</a></li>
            {/if}
          {/for}

          {if $page == $wits[0][5]}
            <li class="waves-effect disabled"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          {else}
            <li class="waves-effect"><a href="?view=panel&page={$page + 1}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          {/if}

        </ul>
      </div>
    </div>

  </div>

</div><!-- / End .Panel-->
{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
