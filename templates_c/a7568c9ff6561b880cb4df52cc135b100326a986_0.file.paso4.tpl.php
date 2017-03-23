<?php
/* Smarty version 3.1.30, created on 2017-03-09 14:58:21
  from "C:\xampp\htdocs\Proyects\mentesCarta\view\wits\paso4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c15f7dc41f68_53945777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7568c9ff6561b880cb4df52cc135b100326a986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\mentesCarta\\view\\wits\\paso4.tpl',
      1 => 1483453826,
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
function content_58c15f7dc41f68_53945777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Imagen del logo -->
<div class="row">
  <div class="col s8 offset-s2 m2 offset-m1">
    <img src="images/bradlogo.png" alt="logo mentes a la carta" width="100%">
  </div>
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
          <label for="" style="font-size: 1rem; color: #424242;">Seleccionar foto de perfil</label>
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

      <div class="input-field col s12">
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

      <!-- Idiomas -->
      <div class="input-field col s6 m6">
        <input id="idiomas" value="" type="text" class="validate">
        <label for="idiomas">¿Qué idiomas hablas?</label>
      </div>
      <div class="col s6 m3">
        <div class="spacing-1"></div>
        <button type="button" class="btn waves-effect waves-light" name="button" style="background-color: #EBA820;" id="add_new_idioma">Agregar</button>
      </div>

      <div class="col s12 m8">
        <table>
          <thead>
            <tr>
              <th>Idiomas</th>
              <th></th>
            </tr>
          </thead>

          <tbody id="getIdiomas">
            <?php if ($_smarty_tpl->tpl_vars['idiomas']->value != 0) {?>
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['idiomas']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['idiomas']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <tr id="habilidad<?php echo $_smarty_tpl->tpl_vars['idiomas']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['idiomas']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
                <td class="hover eliminar_idioma" id="<?php echo $_smarty_tpl->tpl_vars['idiomas']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
"><i class="fa fa-close red-text "></i> <span class="red-text">Eliminar</span></td>
              </tr>
              <?php }
}
?>

            <?php }?>
          </tbody>
        </table>
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

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('body, html').animate({
    scrollTop: '0px'
  }, 0);
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
