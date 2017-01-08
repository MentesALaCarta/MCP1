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
                <li class="item-nav-right1">
                  <i class="fa fa-envelope left resize" style="font-size: 1.4rem;"></i>
                  Enviar correo
                </li>
              </a>
              <a href="?view=newProyect" class="accent-li1">
                <li class="item-nav-right1 active-item">
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
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Administrador de proyectos</a>
        </div>
      </nav>
    </div>

    <div class="row" style="padding: 0px 20px;">
      <div class="col s12 no-padding">
        <div class="spacing-1"></div>

        <div class="row">
          <div class="col s6 m2">
            <i class="fa fa-pencil grey-text"></i>
            <a  href="#modal1">
              <span class="hover underline grey-text">
                Editar proyecto
              </span>
            </a>
          </div>
          <div class="col s6 m2">
              <i class="fa fa-trash grey-text"></i>
              <span class="hover underline grey-text eliminar_proyect" id="{$smarty.get['proyect']}">
                Eliminar proyecto
              </span>
          </div>
        </div>

        <!-- Nombre del proyecto -->
        <div class="row">
          <div class="col s12">
            <span class="grey-text text-darken-2">
              Nombre del proyecto:
            </span>
            <br>
            <span class="grey-text">
              {ucfirst($proyectos[0])}
            </span>
          </div>
        </div>

        <!-- Descripcion -->
        <div class="row">
          <div class="col s12">
            <span class="grey-text text-darken-2">
              Descripción:
            </span>
            <br>
            <span class="grey-text">
              {ucfirst($proyectos[1])}
            </span>
          </div>
        </div>


        <div class="divider"></div>


        <div class="row">
          <div class="col s12">
            <div class="title-proyect grey-text text-darken-2">
              <div class="spacing-1"></div>
              Mentes a la Carta asignados al proyecto
            </div>
          </div>
        </div>

        <div class="row no-margin-b">
          <div class="col s12 m8">
            <div class="card no-margin-b" style="padding: 10px 20px 0px 0px;">
              <div class="row no-margin-b">

                <div class="col s2">
                  <img src="images/perfiles/perfil1.png" style="border-radius: 5px;" alt="foto de perfil de michael" width="100%">
                </div>

                <div class="col s4">
                  <div class="spacing-1"></div>
                  <span class="grey-text text-darken-1">
                    Michael yara
                  </span>
                </div>

                <div class="col s3 grey-text">
                  <div class="spacing-1"></div>
                  <i class="fa fa-user"></i>
                  <span class="hover underline">
                    Ver perfil
                  </span>
                </div>

                <div class="col s3 grey-text">
                  <div class="spacing-1"></div>
                  <i class="fa fa-trash"></i>
                  <span class="hover underline">
                    Eliminar
                  </span>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>

 <!-- Modal Structure -->
 <div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
     <h4 class="grey-text text-darken-2">Editar proyecto</h4>
     <p class="grey-text">Ingresa los datos del proyecto: </p>

     <div class="row">
       <div class="col s12 input-field">
         <input id="nombre" type="text" class="validate grey-text" value="{ucfirst($proyectos[0])}">
         <label for="nombre" class="grey-text text-darken-2">Nombre del proyecto</label>
       </div>
     </div>

     <div class="row">
       <div class="col s12 input-field">
         <textarea id="textarea" class="materialize-textarea grey-text">{ucfirst($proyectos[1])}</textarea>
         <label for="textarea" class="grey-text text-darken-2">Descripcion del proyecto</label>
       </div>
     </div>

     <div class="row">
       <div class="col s12">
         <button class="btn orange lighten-1 waves-effect waves-light actualizarProyect" id="{$smarty.get['proyect']}">Guardar cambios</button>
       </div>
     </div>

   </div>
   <div class="modal-footer">
     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
   </div>
 </div>
{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
