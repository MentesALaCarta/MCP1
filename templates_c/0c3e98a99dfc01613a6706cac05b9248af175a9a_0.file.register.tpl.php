<?php
/* Smarty version 3.1.30, created on 2016-11-03 15:06:59
  from "C:\xampp\htdocs\mentes\view\user\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b448394daa3_76191537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c3e98a99dfc01613a6706cac05b9248af175a9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\user\\register.tpl',
      1 => 1478119943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_581b448394daa3_76191537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

  <!-- Imagen del logo -->
  <div class="row col s8 offset-s2 center-align">
    <div class="spacing-2"></div>
      <img src="images/bradlogo.png" alt="logo mentes a la carta">
  </div>

  <div class="row">
    <div class="spacing-2"></div>
    <div class="col s12 center-align">
      <h3 class="grey-text text-darken-4">Regístrate como Wit</h3>
    </div>


    <!-- Nombre -->
    <div class="input-field col s12 m4 offset-m2">
      <input id="nombres" type="text" class="validate">
      <label for="nombres">Nombres</label>
    </div>

    <!-- Apellidos -->
    <div class="input-field col s12 m4 ">
      <input id="apellidos" type="text" class="validate">
      <label for="apellidos">Apellidos</label>
    </div>

    <!-- Email -->
    <div class="input-field col s12 m4 offset-m2">
      <input id="email" type="text" class="validate">
      <label for="email">Dirección de correo electrónico</label>
    </div>

    <!-- Contraseña -->
    <div class="input-field col s12 m4">
      <input id="clave" type="password" class="validate">
      <label for="clave">Contraseña</label>
    </div>

    <div class="container" id="load" hidden="hidden">
      <div class="col s2 offset-s5 m1 offset-m5">
        <img src="images/perfiles/load.gif" alt="load aptitud" width="100%;">
      </div>
    </div>

    <div class="col s12 center-align">
      <span class="grey-text text-darken-1">Al inscribirte aceptas <a href="#">los términos y condiciones de servicio</a></span>
    </div>



    <div class="col s12 center-align">
      <div class="spacing-1"></div>
      <button id="registrar" class="btn waves-effect waves-light orange" type="button"  name="button">¡Sigamos!</button>
    </div>


  </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
