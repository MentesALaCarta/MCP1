<?php
/* Smarty version 3.1.30, created on 2017-01-03 15:40:24
  from "C:\xampp\htdocs\mentesCarta\view\user\acceder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586bb7d8062280_96688949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554d2610e396e2943d773bc4271e9834e8f60254' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\user\\acceder.tpl',
      1 => 1483453826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_586bb7d8062280_96688949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
  <div class="spacing-1"></div>
  <div class="col s12">
    <a href="?view=index">
    <button type="button" class="btn waves-effect waves-light grey darken-4" name="button"><i style="letter-spacing: 5px;" class="fa fa-arrow-left" aria-hidden="true"></i> Página principal</button>
    </a>
  </div>
</div>

<!-- Login para acceder a mentes a la carta -->

<div class="container">
  <div class="row">
    <div class="col s12">

      <!-- Logo Mentes a la Carta -->
      <div class="row">
        <div class="col s12 center-align">
          <div class="spacing-2"></div>
          <img src="images/bradlogo.png" alt="logo mentes a la carta">
        </div>
      </div>


      <!-- Nombre de usuario -->
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
          <input id="email" type="text" class="validate">
          <label for="email">Correo electrónico</label>
        </div>
      </div>

      <!-- Contraseña -->
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
          <input id="pass" type="password" class="validate" autocomplete="off">
          <label for="pass">Contraseña</label>
        </div>
      </div>

      <div class="row" id="load" hidden="hidden">
        <div class="col s4 offset-s4">
          <p class="center-align">
            Cargando...
          </p>
          <div class="progress">
              <div class="indeterminate"></div>
          </div>
        </div>
      </div>


      <!-- Boton de inicar sesión -->
      <div class="row">
        <div class="col-s12 center-align">
            <button type="button" class="btn waves-effect waves-light amber darken-1" name="button" id="login">Iniciar sesión</button>
        </div>
      </div>

      <!-- Registrarse -->
      <div class="row">
        <div class="col s12 center-align">
          <div class="spacing-1"></div>
          <span class="text-accent">¿Quieres ser parte de nuestras mentes a la carta? <a href="?view=registrar">Registrarte</a></span>
        </div>
      </div>


    </div><!-- / .Col Principal-->
  </div><!-- / .Row principal-->
</div><!-- / .Container-->

<!-- / End Login mentes a la carta -->

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
