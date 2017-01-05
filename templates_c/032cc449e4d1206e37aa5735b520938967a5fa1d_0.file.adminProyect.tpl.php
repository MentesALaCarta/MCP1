<?php
/* Smarty version 3.1.30, created on 2017-01-05 06:35:16
  from "C:\xampp\htdocs\mentesCarta\view\admin\adminProyect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586ddb14337497_53949588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032cc449e4d1206e37aa5735b520938967a5fa1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\admin\\adminProyect.tpl',
      1 => 1483594513,
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
function content_586ddb14337497_53949588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

        <!-- Nombre del proyecto -->
        <div class="row">
          <div class="col s12">
            <span class="grey-text text-darken-2">
              Nombre del proyecto:
            </span>
            <br>
            <span class="grey-text">
              <?php echo ucfirst($_smarty_tpl->tpl_vars['proyectos']->value[0]);?>

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
              <?php echo ucfirst($_smarty_tpl->tpl_vars['proyectos']->value[1]);?>

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
<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
