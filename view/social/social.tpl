{include file="view/principal/header.tpl"}

<!-- Nav -->
<div class="navbar-fixed">
  <nav class="white z-depth-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center black-text">Mentes a la Carta</a>
    </div>
  </nav>
</div>
<!-- End nav -->

<div class="spacing-2"></div>
<!-- Mentes a la carta -->
<div class="container">

{if $mentes != 0}
    {for $i = 0 to count($mentes) -1}
    <div class="row no-margin-b">
      <div class="col s12 m8 offset-m2">

        <a href="?view=perfil-wit& id={$mentes[$i]['id']}">

        <section class="card padding-list">
          <div class="row no-margin-b">

            <!-- Imagen de perfil -->
            <div class="col s4 l2">
              <img src="images/{$mentes[$i]['imagen']}" class="img-bordered" alt="imagen de perfil de Michael" width="100%;">
            </div>
            <!-- / End imagen de perfil -->

            <!-- Datos de la Mente a la Carta-->
            <div class="col s8 l10">
              <span class="encabezado-list">
                {ucwords($mentes[$i]['nombre'])}
              </span>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">Sector:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1">{ucwords($mentes[$i]['sector'])}</span>
                </div>
              </div>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">Ciudad:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1">{ucwords($mentes[$i]['ciudad'])}</span>
                </div>
              </div>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">País:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1">{ucwords($mentes[$i]['pais'])}</span>
                </div>
              </div>

            </div>
            <!-- / End datos Mentes a la Carta -->
          </div>
        </section>
        </a>
      </div>
    </div>
    {/for}
{else}
  <h3 class="grey-text text-darken-2 center-align">Lista vacía</h3>
{/if}
</div>

<div class="fixed-action-btn vertical hide-on-small-only">
  <a href="?view=perfil-wit& id={$smarty.session.id}" class="btn-floating tooltipped btn-large white waves-effect" data-position="left" data-delay="50" data-tooltip="Mi perfil">
    <i style="font-size: 1.7em; color: #727272;" class="fa fa-user" aria-hidden="true"></i>
  </a>
</div>

<!-- Menú -->
<div class="barra hide-on-med-and-up" style="width: 100%;background-color: white; position: fixed; z-index: 100; bottom: 0px;">
  <div class="row no-margin-b">
    <div class="col s6 center-align waves-effect" style="padding-top: 10px;border-bottom: 3px solid black;">
      <i class="fa fa-users" style="font-size: 1.6rem;"></i>
      <br>
      Más mentes a la Carta
    </div>
    <a href="?view=perfil-wit& id={$smarty.session.id}">
      <div class="col s6 center-align grey-text waves-effect"  style="padding-top: 10px;">
        <i class="fa fa-user" style="font-size: 1.6rem;"></i><br>
        Mi perfil
      </div>
    </a>
  </div>
</div>
<!-- / End menú -->

{include file="view/principal/script.tpl"}
