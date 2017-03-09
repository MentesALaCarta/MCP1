<?php
/* Smarty version 3.1.30, created on 2017-01-31 00:12:01
  from "C:\xampp\htdocs\mentesCarta\view\masivos\asunto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588fc8410545c0_82085880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473a120a6f7a4967261aa1a500ce22d433b479e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\masivos\\asunto.tpl',
      1 => 1485817896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_588fc8410545c0_82085880 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
