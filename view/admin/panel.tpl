{include file="view/principal/header.tpl"}

<!-- Panel -->
<div class="row">

  <div class="col s3 no-padding-1 nav-right1 hide-on-med-and-down">

        <section class="row">
          <article class="col l8 offset-l2">
            <div class="spacing-1"></div>
            <img src="images/bradlogo.png" width="100%" class="" alt="logo mentes a la carta">
          </article>
        </section>

        <section class="row" >
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1 active-item" id="project-pro">
                  <i class="fa fa-users left resize"></i>
                  Wits
                </li>
              </a>
              <a href="?view=wits-pendientes" class="accent-li1">
                <li class="item-nav-right1" id="asesores-pro">
                  <i class="fa fa-user-secret left resize"></i>
                  Wits Pendientes
                </li>
              </a>
              <a href="?view=index" class="accent-li1">
                <li class="item-nav-right1" id="asesores-pro">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3">
    <!-- Contenido -->
    <div class="spacing-2"></div>
    <h3 class="accent-text">Lista de Mentes a la carta</h3>

    <div class="row">

      <!-- Nombres o apellidos -->
      <div class="input-field col s12 m6">
        <input id="busqueda-text" type="text" class="validate">
        <label for="busqueda-text">Ingresa tu búsqueda</label>
      </div>

      <!-- Tipo de busqueda / Test -->
      <!-- <div class="input-field col s12 m4">
        <select id="tipo_busqueda_dinamic">
          <option value="" disabled selected></option>
          <option value="name">Nombre o Apellido</option>
          <option value="sector">Sector</option>
          <option value="empresa">Empresa</option>
          <option value="ciudad">Ciudad</option>
          <option value="cargo">Cargo</option>
          <option value="actividad">Actividades</option>
          <option value="pais">País</option>
          <option value="idiomas">Idiomas</option>
          <option value="aptitud">Aptitud</option>

        </select>
        <label>Tipo de búsqueda</label>
      </div> -->

      <!-- Sectores y empresas -->
      <div class="input-field col s12 m6">
        <select multiple id="sectores_empresas">
          <option value="" disabled selected>Sectores</option>
          {for $i = 0 to count($sectores) -1}
            <option value="sector{$sectores[$i]}">{$sectores[$i]}</option>
          {/for}
          <option value="" disabled selected>Empresas</option>
          {for $i = 0 to count($empresas) -1}
            <option value="empresa{$empresas[$i]}">{$empresas[$i]}</option>
          {/for}
        </select>
        <label>Sectores / Empresas </label>
      </div>

      <!-- Ciudades -->
      <div class="input-field col s12 m6">
        <select multiple id="ciudad_dinamic">
          <option value="" disabled selected></option>
          {for $i = 0 to count($ciudad) -1}
            <option value="{$ciudad[$i]}">{$ciudad[$i]}</option>
          {/for}
        </select>
        <label>Ciudades</label>
      </div>

      <!-- Cargos -->
      <div class="input-field col s12 m6">
        <select multiple id="cargos_dinamic">
          <option value="" disabled selected></option>
          {for $i = 0 to count($cargos) -1}
            <option value="{$cargos[$i]}">{$cargos[$i]}</option>
          {/for}
        </select>
        <label>Cargos</label>
      </div>

      <!-- Actividades -->
      <div class="input-field col s12 m6">
        <select multiple id="actividad_dinamic">
          <option value="" disabled selected></option>
          {for $i = 0 to count($brains) -1}
            <option value="{$brains[$i]}">{$brains[$i]}</option>
          {/for}
        </select>
        <label>Actividades</label>
      </div>

      <!-- Paises y empresas -->
      <div class="input-field col s12 m6">
        <select multiple id="pais_idioma_dinamic">
          <option value="" disabled selected>Paises</option>
          {for $i = 0 to count($paises) -1}
            <option value="pais{$paises[$i]}">{ucwords($paises[$i])}</option>
          {/for}
          <option value="" disabled selected>Idiomas</option>
          {for $i = 0 to count($idiomas) -1}
            <option value="idioma{$idiomas[$i]}">{ucwords($idiomas[$i])}</option>
          {/for}
        </select>
        <label>Paises / Idiomas </label>
      </div>

      <!-- Aptitudes -->
      <div class="input-field col s12">
        <select multiple id="aptitudes_dinamic">
          <option value="" disabled selected></option>
          {for $i = 0 to count($habilidades) -1}
            <option value="{$habilidades[$i]}">{ucwords($habilidades[$i])}</option>
          {/for}
        </select>
        <label>Aptitudes</label>
      </div>

    </div>

    <div class="row">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Ciudad</th>
              <th>País</th>
          </tr>
        </thead>

        <tbody id="wits-aprobados-panel">

          {for $i = 0 to count($wits) -1}
          <tr class="verPerfil" id="{$wits[$i][0]}">
            <td>{$wits[$i][1]}</td>
            <td>{$wits[$i][2]}</td>
            <td>{$wits[$i][3]}</td>
            <td>{$wits[$i][4]}</td>
          </tr>
          {/for}

        </tbody>
      </table>
      </div>
    </div>

  </div>

</div><!-- / End .Panel-->

{include file="view/principal/script.tpl"}
