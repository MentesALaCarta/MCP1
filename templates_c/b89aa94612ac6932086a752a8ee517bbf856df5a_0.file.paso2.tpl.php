<?php
/* Smarty version 3.1.30, created on 2016-11-29 15:33:35
  from "/opt/lampp/htdocs/mentes/view/wits/paso2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d91bfebbd54_85268143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b89aa94612ac6932086a752a8ee517bbf856df5a' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/paso2.tpl',
      1 => 1480202575,
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
function content_583d91bfebbd54_85268143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Imagen del logo -->
<div class="row" style="margin-bottom: 0px;">
  <div class="col s8 offset-s2 m2 offset-m1">
    <img src="images/bradlogo.png" alt="logo mentes a la carta" width="100%">
  </div>
</div>

<!-- Titulo dinamico -->
<div class="row col s8 offset-s2 center-align">
  <h3 class="title-orange" style="margin-top: 0px;">¿Qué otras aptitudes tiene tu mente?</h3>

</div>

<div class="row">
  <div class="col s12 m10 offset-m1 center-align">
    <span class="grey-text text-darken-2">
      ¿Cuáles son las áreas de tu profesión en las que te sientes más fuerte?
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
        <li id="step3"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="spacing-2"></div>
<div class="row">
  <div class="input-field col s6 m3 offset-m3">
      <input id="aptitud" value="" type="text" class="validate">
      <label for="aptitud">Aptitud</label>
  </div>
  <div class="col s6 m3">
    <div class="spacing-1"></div>
    <button type="button" class="btn waves-effect waves-light" name="button" style="background-color: #EBA820;" id="add_new_aptitud">Agregar</button>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col s12 m8 offset-m2" style="padding-left: 0px;">
      <table>
       <thead>
         <tr>
             <th data-field="id">Aptitudes</th>
             <th data-field="name"></th>
         </tr>
       </thead>

       <tbody id="getAptitudes">
         <?php if ($_smarty_tpl->tpl_vars['aptitud']->value != 0) {?>
           <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['aptitud']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['aptitud']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
           <tr id="habilidad<?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
             <td><?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
             <td class="hover eliminar_habilidad" id="<?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
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
</div>

<div class="row spacing-bottom">
  <div class="col s6 m4 offset-m2 l3 offset-l3">
    <button id="step2_previous" style="width: 100%; " class="btn waves-effect waves-light grey" type="button"  name="button">Volver</button>
  </div>
  <div class="col s6 l3">
    <button id="step2" style="width: 100%; background-color: #EBA820;" class="btn waves-effect waves-light" type="button"  name="button">
      <span class="hide-on-small-only">¡Vamos al siguiente paso!</span>
      <span class="hide-con-med-and-up">Continuar</span>
    </button>
  </div>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function(){

  $("#aptitud").autocomplete({
    source: "controller/user/traerAptitud.php"
  });

});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
