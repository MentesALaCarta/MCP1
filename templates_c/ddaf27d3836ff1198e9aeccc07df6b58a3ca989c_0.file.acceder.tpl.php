<?php
/* Smarty version 3.1.30, created on 2016-11-03 21:45:49
  from "C:\xampp\htdocs\mentes\view\user\acceder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581ba1fda0fe08_46029714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddaf27d3836ff1198e9aeccc07df6b58a3ca989c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\user\\acceder.tpl',
      1 => 1478205940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_581ba1fda0fe08_46029714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
          <input id="pass" type="password" class="validate">
          <label for="pass">Contraseña</label>
        </div>
      </div>


      <!-- Boton de inicar sesión -->
      <div class="row">
        <div class="col-s12 center-align">
          <a href="?view=panel">
            <button type="button" class="btn waves-effect waves-light amber darken-1" name="button">Iniciar sesión</button>
          </a>
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
