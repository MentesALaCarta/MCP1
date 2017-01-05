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
                <li class="item-nav-right1 active-item">
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

  <div class="col s12 m9 offset-m3 seccion-panel">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Página principal</a>
        </div>
      </nav>
    </div>

    <div class="row" style="padding: 0px 20px;">
      <div class="col s10 no-padding">
        <div class="spacing-1"></div>

        <!-- Carta principal -->
        <div class="row">
          <div class="col s12">
            <div class="card card-spacing orange lighten-1">
              <span class="white-text title-card">
                Total de Mentes a la Carta
              </span>
              <div class="row">
                <div class="col s4">
                  <span class="white-text numeros-admin">
                    {$total_wits}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
            <a href="?view=wits-pendientes">
              <div class="waves-effect card card-spacing hover">
                <span class="grey-text text-darken-2">
                  Mentes a la Carta pendientes
                </span>
                <br>
                <span class="numeros-secundarios orange-text">
                  {$total_no_wits}
                </span>
              </div>
            </a>
          </div>
        </div>

        <div class="divider">

        </div>

        <div class="row">

          <div class="col s12">
            <div class="spacing-1"></div>
            <span class="title-proyect grey-text text-darken-2">
              Proyectos populares
            </span>
            <div class="spacing-2"></div>
          </div>

          <!-- Crear proyecto -->
          <div class="row">
            <div class="col s12">
              <a href="?view=newProyect">
                <button type="button" style="font-size: 0.9rem;" class="btn grey darken-1 waves-effect waves-light" name="button">Crear proyecto</button>
              </a>
            </div>
          </div>

          <div class="spacing-1"></div>

          <div class="row">
            <div class="col s12 m10">
                <div style="width: 100%;" class="card card-spacing hover">
                  <span class="grey-text text-darken-2">
                    Mentes a la Carta pendientes
                  </span>
                  <br>
                  <span class="grey-text spacing-parrafo">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae facilis minus minima id ducimus, beatae asperiores quaerat deserunt vel. Perspiciatis quam assumenda quas quos quo, sapiente, dolore pariatur minima dolor.
                  </span>
                  <br>
                  <button type="button" name="button" class="btn orange lighten-1 waves-effect waves-light">Administrar</button>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m10">
                <div style="width: 100%;" class="card card-spacing hover">
                  <span class="grey-text text-darken-2">
                    Mentes a la Carta pendientes
                  </span>
                  <br>
                  <span class="grey-text spacing-parrafo">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae facilis minus minima id ducimus, beatae asperiores quaerat deserunt vel. Perspiciatis quam assumenda quas quos quo, sapiente, dolore pariatur minima dolor.
                  </span>
                  <br>
                  <button type="button" name="button" class="btn orange lighten-1 waves-effect waves-light">Administrar</button>
                </div>
            </div>
          </div>


        </div>

      </div>
    </div>

  </div>

</div>


{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
