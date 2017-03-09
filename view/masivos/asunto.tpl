{include file="view/principal/header.tpl"}

<!-- principal -->
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
                <li class="item-nav-right1 ">
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
                <li class="item-nav-right1 active-item">
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

  <div class="col s12 m9 offset-m3" style="padding: 0px;">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Envio de correo</a>
        </div>
      </nav>
    </div>

    <div class="row" style="padding: 0px 20px;">

      <div class="col s12 no-padding">
        <div class="spacing-1"></div>

        <div class="row" style="margin-top: 5rem;">
          <div class="col s12">
            <div class="input-field col s6">
              <input id="asunto" type="text" class="validate" >
              <label for="asunto">Asunto</label>
            </div>
            <div class="col s12">
              <button class="btn orange lighten-1 waves-effect waves-light" id="asunto_email">Continuar</button>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>

<!-- / End Login mentes a la carta -->

{include file="view/principal/script.tpl"}
