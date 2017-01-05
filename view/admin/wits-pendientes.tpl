{include file="view/principal/header.tpl"}
<!-- Panel -->
<div class="row">

  <div class="col s3 no-padding-1 nav-right1 hide-on-med-and-down z-depth-1">
        <section class="row no-margin-b">
          <article class="col l4 offset-l2" style="padding-top: 1em;">
            <img src="images/bradlogo.png" width="100%" class="" alt="logo mentes a la carta">
          </article>
        </section>

        <section class="row" >
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=principal" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-home left resize"></i>
                  Página principal
                </li>
              </a>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-users left resize"></i>
                  Mentes a la carta
                </li>
              </a>
              <a href="?view=wits-pendientes">
                <li class="item-nav-right1 active-item" id="asesores-pro">
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
              <a href="?view=index">
                <li class="item-nav-right1" id="asesores-pro">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3 seccion-panel">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Mentes a la Carta pendientes</a>
        </div>
      </nav>
    </div>

    <!-- Contenido -->
    <div class="spacing-2"></div>

    <div class="row white">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr class="orange-text text-lighten-1">
              <th data-field="id">Nombre</th>
              <th data-field="name">Fecha registro</th>
              <th data-field="price">Ciudad</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          {if count($wit) > 0}
            {for $i = 0 to count($wit) -1}
            <tr id="{$wit[$i][0]}" class="grey-text">
              <td>{$wit[$i][1]} {$wit[$i][2]}</td>
              <td>{$wit[$i][3]}</td>
              <td>{$wit[$i][4]}</td>
              <td><a href="?view=perfil-wit&#38;id={$wit[$i][0]}">Ver perfil</a></td>
              <td><button width="100%" id="{$wit[$i][0]}" type="button" class="btn waves-effect waves-light green aprobar" name="button">Aprobar</button>
              </td>
              <td><button width="100%" id="{$wit[$i][0]}" type="button" class="btn waves-effect waves-light red denegar" name="button">Denegar</button></td>
            </tr>
            {/for}
          {else}
          <tr>
            <td class="grey-text">No hay Mentes a la Carta pendientes por aprobar</td>
          </tr>
          {/if}

        </tbody>
      </table>
      </div>
    </div>
  </div>

</div><!-- / End .Panel-->


{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
