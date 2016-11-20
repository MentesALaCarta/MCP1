<?php
/* Smarty version 3.1.30, created on 2016-11-20 18:12:23
  from "/opt/lampp/htdocs/mentes/view/wits/paso4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5831d977edf4b3_49912610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1096c29859726e2c8f481569b5c2a4486247a73d' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/paso4.tpl',
      1 => 1478618200,
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
function content_5831d977edf4b3_49912610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Imagen del logo -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <img src="images/bradlogo.png" alt="logo mentes a la carta">
</div>


<!-- Titulo dinamico -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <h3 class="title-orange">¡Listo! ¡Estos son los últimos datos!</h3>

</div>

<div class="row">
  <div class="col s12 m8 offset-m2 l4 offset-l4 center-align">
    <span class="grey-text text-darken-2">
      ¡Compártenos estos datos y así podremos contactarte de una manera fácil cuando necesitemos tu mente!
    </span>
  </div>
</div>


<div class="row">
  <div class="col s12 m12 l8 offset-l2">
    <div class="spacing-1"></div>
    <!-- Progress bar -->
    <div class="container">
      <ul class="progressbar">
        <li id="step1" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Experiencia</span></li>
        <li id="step2" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="spacing-2"></div>
<div class="row">
  <form class="col s12 m6 offset-m3" enctype="multipart/form-data" id="form4">
    <div class="row">

      <div class="col s12">
          <label for="" style="font-size: 1rem; color: #424242;">Foto de perfil</label>
          <div class="file-field input-field">
            <div class="btn" style="background-color: #EBA820;">
              <span><i class="fa fa-user" style="font-size: 2rem; color: white;"></i></span>
              <input type="file" name="imagen-upload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <span style="font-size: 0.9em;" class="grey-text">(Solo si subes la foto aparecerás en nuestra página)</span>
      </div>

      <div class="input-field col s12 m6">
        <input type="text" id="ciudad" name="ciudad">
        <label for="ciudad">¿En qué ciudad vives?</label>
      </div>

      <div class="input-field col s12 m6">
        <input type="text" id="Telefono" name="tel">
        <label for="Telefono">Teléfono móvil</label>
      </div>


      <div class="input-field col s12 m6">
        <input type="text" id="idiomas" name="idiomas">
        <label for="idiomas">¿Qué idiomas hablas?</label>
      </div>

      <div class="input-field col s12 m6">
        <input type="text" id="pais" name="pais">
        <label for="pais">¿En que país vives?</label>
      </div>

      <div class="input-field col s12">
        <textarea maxlength="144" id="tweets" class="materialize-textarea" name="tweets"></textarea>
        <label for="tweets">Describete en <span class="text-accent">(<span id="pre-des">144</span>)</span> caracteres</label>
      </div>

        <div class="input-field col s12">
          <textarea id="textarea" class="materialize-textarea" name="area"></textarea>
          <label for="textarea">Déjanos una frase o pensamiento propio o cuéntanos si hay algo más que debemos saber de ti</label>
        </div>

    </div>
  </form>
</div>

<div class="container" id="load" hidden="hidden">
  <div class="row">
    <div class="col s2 offset-s5 m1 offset-m5">
      <img src="images/perfiles/load.gif" alt="load aptitud" width="100%;">
    </div>
  </div>
</div>

<div class="row spacing-bottom">
  <div class="col s6 m4 offset-m2 l3 offset-l3">
    <button id="step4_previous" style="width: 100%;" class="btn waves-effect waves-light grey" type="button"  name="button">Volver</button>
  </div>
  <div class="col s6 l3">
    <button id="step4" style="width: 100%; background-color: #EBA820;"class="btn waves-effect waves-light" type="button"  name="button">¡Finalizar!</button>
  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
