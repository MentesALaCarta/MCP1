<?php
/* Smarty version 3.1.30, created on 2017-01-31 16:47:04
  from "C:\xampp\htdocs\mentesCarta\view\masivos\plantilla1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5890b17807dba6_20061980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d654c33ba75cc89052b02fc2db1e01dd7ea9eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\masivos\\plantilla1.tpl',
      1 => 1485877581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/cerrarSesion.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5890b17807dba6_20061980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<span id="id_masivo" hidden="hidden"><?php echo $_GET['id'];?>
</span>
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

  <div class="col s12 m9 offset-m3 seccion-panel">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Envio de correo</a>
        </div>
      </nav>
    </div>


    <div class="row" style="padding: 0px 20px;">
      <div class="col s10 no-padding">
        <div class="spacing-1"></div>

        <div class="row">
          <div class="col s12 center-align">
            <img src="images/bradlogo.png" alt="logo mentes a la carta" width="150px">
          </div>
        </div>
        <div class="row">
          <div class="col s12 center-align">
            <h5>
              ¡Pon tu mente a volar, ayúdanos a afrontar los <br> siguientes retos de innovación!
            </h5>
            <div class="spacing-2"></div>
          </div>
        </div>

        <div class="row">

          <form id="destacado1" enctype="multipart/form-data">

            <div class="col s12 m4 center-align">

              <img style="border-radius: 5px;" class="hover" src="images/emails/picture.png" alt="email masivos" width="200px" id="picture1">

              <div class="spacing-1"></div>

              <div class="file-field input-field">
                <div class="btn orange lighten-1 waves-effect waves-light" style="width: 100%;">
                  <span>Subir imagen</span>
                  <input type="file" name="imagen_destacada">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" id="seleccion_imagen1">
                </div>
              </div>

              <div class="row" id="load1"  hidden="hidden">

                <div class="col s12 m6 offset-m3">

                  <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col s12 center-align">
                  <div class="spacing-1"></div>
                  <span class="grey-text text-darken-1">Subiendo imagen al servidor...</span>
                </div>

              </div>

            </form>

            <div class="spacing-1"></div>

            <div class="row">
              <div class="input-field col s12 left-align">
                <input id="empresa1" type="text" class="validate">
                <label for="empresa1">Empresa</label>
              </div>
              <div class="input-field col s12 left-align">
                <input id="sector1" type="text" class="validate">
                <label for="sector1">Sector</label>
              </div>
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Reto</label>
              </div>
            </div>

          </div>


          <div class="col s12 m4 center-align">

            <form id="destacado2" enctype="multipart/form-data">

              <div class="col s12 center-align">

                <img style="border-radius: 5px;" class="hover" src="images/emails/picture.png" alt="email masivos" width="200px" id="picture2">

                <div class="spacing-1"></div>

                <div class="file-field input-field">
                  <div class="btn orange lighten-1 waves-effect waves-light" style="width: 100%;">
                    <span>Subir imagen</span>
                    <input type="file" name="imagen_destacada">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" id="seleccion_imagen2">
                  </div>
                </div>

                <div class="row" id="load2"  hidden="hidden">

                  <div class="col s12 m6 offset-m3">

                    <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div><div class="gap-patch">
                          <div class="circle"></div>
                        </div><div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 center-align">
                    <div class="spacing-1"></div>
                    <span class="grey-text text-darken-1">Subiendo imagen al servidor...</span>
                  </div>

                </div>
                <div class="spacing-1"></div>
                <div class="spacing-1"></div>
              </div>
            </form>



            <div class="row">

              <div class="input-field col s12 left-align">
                <input id="empresa2" type="text" class="validate">
                <label for="empresa2">Empresa</label>
              </div>
              <div class="input-field col s12 left-align">
                <input id="sector2" type="text" class="validate">
                <label for="sector2">Sector</label>
              </div>
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea"></textarea>
                <label for="textarea2">Reto</label>
              </div>
            </div>
          </div>

          <div class="col s12 m4 center-align">
            <form id="destacado3" enctype="multipart/form-data">

              <div class="col s12 center-align">

                <img style="border-radius: 5px;" class="hover" src="images/emails/picture.png" alt="email masivos" width="200px" id="picture3">

                <div class="spacing-1"></div>

                <div class="file-field input-field">
                  <div class="btn orange lighten-1 waves-effect waves-light" style="width: 100%;">
                    <span>Subir imagen</span>
                    <input type="file" name="imagen_destacada">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" id="seleccion_imagen3">
                  </div>
                </div>

                <div class="row" id="load3"  hidden="hidden">

                  <div class="col s12 m6 offset-m3">

                    <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div><div class="gap-patch">
                          <div class="circle"></div>
                        </div><div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 center-align">
                    <div class="spacing-1"></div>
                    <span class="grey-text text-darken-1">Subiendo imagen al servidor...</span>
                  </div>

                </div>
                <div class="spacing-1"></div>
                <div class="spacing-1"></div>
              </div>
            </form>

            <div class="row">
              <div class="input-field col s12 left-align">
                <input id="empresa3" type="text" class="validate">
                <label for="empresa3">Empresa</label>
              </div>
              <div class="input-field col s12 left-align">
                <input id="sector3" type="text" class="validate">
                <label for="sector3">Sector</label>
              </div>
              <div class="input-field col s12">
                <textarea id="textarea3" class="materialize-textarea"></textarea>
                <label for="textarea3">Reto</label>
              </div>
            </div>
          </div>


      </div>


      <div class="row" id="load" hidden="hidden">

        <div class="col s12 center-align">

          <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 center-align">
          <div class="spacing-1"></div>
          <span class="grey-text text-darken-1" id="des_load"></span>
        </div>

      </div>

      <div class="row">
        <div class="col s12 center-align">
          <button type="button" class="btn waves-effect waves-light orange lighten-1" name="button" id="enviar_email_masivo">Enviar</button>
        </div>
      </div>

      </div>
    </div>

  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
