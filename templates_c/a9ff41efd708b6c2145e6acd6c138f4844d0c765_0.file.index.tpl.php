<?php
/* Smarty version 3.1.30, created on 2016-11-01 16:02:27
  from "C:\xampp\htdocs\mentes\view\wits\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5818ae83c5bf31_63468305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ff41efd708b6c2145e6acd6c138f4844d0c765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\wits\\index.tpl',
      1 => 1478012546,
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
function content_5818ae83c5bf31_63468305 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h3 class="title-orange">¿En donde esta tu mente?</h3>

</div>


<div class="row">
  <div class="col s12 m8 offset-m2 l4 offset-l4 center-align">
    <span class="grey-text text-darken-2">
      La información que te pedimos en esta sección es de vital importancia para que tu mente pueda ser seleccionada en diversos proyectos.
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
        <li id="step2"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<form name="step1" id="step1_form">

  <div id="experience">

    <?php if ($_smarty_tpl->tpl_vars['experience']->value != 0) {?>
    <div id="experience_item0">

      <div class="container">
        <div class="col s12 right-align" id="eliminar_1">
          <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
        </div>
      </div>

    <!-- company name -->
    <div class="row">
      <div class="input-field col s6 m4 offset-m2">
        <div class="spacing-2"></div>
        <input id="company" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][1];?>
" type="text" class="validate" name="company[0]">
        <label for="company">Nombre de la empresa</label>
      </div>

      <div class="input-field col s6 m4">
        <div class="spacing-2"></div>
        <input id="sector" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][2];?>
" type="text" class="validate" name="sector[0]">
        <label for="sector">Sector</label>
      </div>

      <div class="input-field col s6 m4 offset-m2">
        <input id="position" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][3];?>
" type="text" class="validate" name="position[0]">
        <label for="position">Cargo</label>
      </div>

      <div class="input-field col s6 m4">
        <input id="country" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][4];?>
" type="text" class="validate" name="country[0]">
        <label for="country">Pais</label>
      </div>

    </div><!-- Row -->

  </div> <!-- Experience item -->
    <?php if (count($_smarty_tpl->tpl_vars['experience']->value) > 1) {?>

      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['experience']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['experience']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

      <!-- company name -->
      <div class="row" id="experience_item<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">

        <div class="container">
          <div class="divider"></div>
          <div class="spacing-2"></div>
          <div class="col s12 right-align">
            <a class="delete_experience hover red-text" id="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
"><i class="fa fa-close"></i></a>
          </div>
        </div>

        <div class="input-field col s6 m4 offset-m2">
          <div class="spacing-2"></div>
          <input id="company" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
" class="validate" name="company[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
          <label for="company">Nombre de la empresa</label>
        </div>

        <div class="input-field col s6 m4">
          <div class="spacing-2"></div>
          <input id="sector" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
" class="validate" name="sector[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
          <label for="sector">Sector</label>
        </div>

        <div class="input-field col s6 m4 offset-m2">
          <input id="position" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
" class="validate" name="position[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
          <label for="position">Cargo</label>
        </div>

        <div class="input-field col s6 m4">
          <input id="country" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][4];?>
" class="validate" name="country[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
          <label for="country">Pais</label>
        </div>

      </div>

      <?php }
}
?>

    <?php }?>

    <?php } else { ?>
    <div id="experience_item0">

      <div class="container">
        <div class="col s12 right-align" id="eliminar_1" hidden="hidden">
          <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
        </div>
      </div>

    <!-- company name -->
    <div class="row">
      <div class="input-field col s6 m4 offset-m2">
        <div class="spacing-2"></div>
        <input id="company" type="text" class="validate" name="company[0]">
        <label for="company">Nombre de la empresa</label>
      </div>

      <div class="input-field col s6 m4">
        <div class="spacing-2"></div>
        <input id="sector" type="text" class="validate" name="sector[0]">
        <label for="sector">Sector</label>
      </div>

      <div class="input-field col s6 m4 offset-m2">
        <input id="position" type="text" class="validate" name="position[0]">
        <label for="position">Cargo</label>
      </div>

      <div class="input-field col s6 m4">
        <input id="country" type="text" class="validate" name="country[0]">
        <label for="country">Pais</label>
      </div>

    </div><!-- Row -->

  </div> <!-- / End eliminar row -->

    <?php }?>


  </div> <!-- /. Experience -->

    <div class="row">
      <div class="col s12 m3 offset-m2 ">
        <a id="add_new_experience" class="hover">Agregar otra experiencia</a>
      </div>
    </div>

  <div class="row">
    <div class="col s12 center-align">
      <div class="spacing-1"></div>
      <button id="step1" class="btn waves-effect waves-light orange" type="button"  name="button">Siguiente</button>
    </div>
  </div>


</form>

<div class="spacing-2"></div>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
