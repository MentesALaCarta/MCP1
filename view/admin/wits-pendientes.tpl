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
                <li class="item-nav-right1 " id="project-pro">
                  <i class="fa fa-users left resize"></i>
                  Wits
                </li>
              </a>
              <a href="?view=wits-pendientes " class="accent-li1">
                <li class="item-nav-right1 active-item" id="asesores-pro">
                  <i class="fa fa-user-secret left resize"></i>
                  Wits Pendientes
                </li>
              </a>
              <a href="?view=acceder" class="accent-li1">
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
    <h3 class="accent-text">Lista de Mentes a la carta Pendientes</h3>


    <div class="row">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Fecha registro</th>
              <th data-field="price">Ciudad</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          {for $i = 0 to count($wit) -1}
          <tr id="{$wit[$i][0]}">
            <td>{$wit[$i][1]} {$wit[$i][2]}</td>
            <td>{$wit[$i][3]}</td>
            <td>{$wit[$i][4]}</td>
            <td><a href="?view=perfil-wit&id={$wit[$i][0]}">Ver perfil</a></td>
            <td><button width="100%" id="{$wit[$i][0]}" type="button" class="btn waves-effect waves-light green aprobar" name="button">Aprobar</button>
            </td>
            <td><button width="100%" id="{$wit[$i][0]}" type="button" class="btn waves-effect waves-light red denegar" name="button">Denegar</button></td>
          </tr>
          {/for}
        </tbody>
      </table>
      </div>
    </div>
  </div>

</div><!-- / End .Panel-->

{include file="view/principal/script.tpl"}
