<?php
/* Smarty version 3.1.30, created on 2017-03-09 14:58:00
  from "C:\xampp\htdocs\Proyects\mentesCarta\view\wits\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c15f688d9167_84988710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a32bca43cdc439038355d4a93559a4ce8f8cf546' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\mentesCarta\\view\\wits\\index.tpl',
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
function content_58c15f688d9167_84988710 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h3 class="title-orange" style="margin-top: 0px;">¿En dónde está tu mente?</h3>
</div>


<div class="row">
  <div class="col s12 m12 l8 offset-l2">
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

<form name="step1" id="step1_form" >

  <div id="experience">

    <?php if ($_smarty_tpl->tpl_vars['experience']->value != 0) {?>
    <div id="experience_item0">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 item_experence">

            <!-- Bottom eliminar -->
            <div class="col s12 right-align" id="eliminar_1">
              <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
            </div>

            <!-- Datos form -->
            <div class="row">

              <!-- company name -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="company" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][1];?>
" class="validate" name="company[0]">
                <label for="company">Empresa</label>
              </div>

              <!-- Sector -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="sector" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][2];?>
" class="validate" name="sector[0]">
                <label for="sector">Sector</label>
              </div>

              <!-- Cargo -->
              <div class="input-field col s6">
                <input id="position" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][3];?>
" class="validate" name="position[0]">
                <label for="position">Cargo</label>
              </div>

              <!-- Pais -->
              <div class="input-field col s6">
                <input id="country" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[0][4];?>
" class="validate" name="country[0]">
                <label for="country">País</label>
              </div>

            </div><!-- / End Row datos form -->
          </div><!-- / Columnas del contendor principal-->
        </div><!-- Row contenedor principal -->
      </div><!-- / End Container -->
    </div> <!-- / Item  -->

    <?php if (count($_smarty_tpl->tpl_vars['experience']->value) > 1) {?>

      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['experience']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['experience']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

      <div id="experience_item<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
        <div class="container">
          <div class="row">
            <div class="col s12 m10 offset-m1 item_experence">

              <!-- Bottom eliminar -->
              <div class="col s12 right-align">
                <a class="delete_experience hover red-text" id="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
"><i class="fa fa-close"></i></a>
              </div>

              <!-- Datos form -->
              <div class="row">

                <!-- company name -->
                <div class="input-field col s6">
                  <div class="spacing-2"></div>
                  <input id="company" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
" class="validate" name="company[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
                  <label for="company">Nombre de la empresa</label>
                </div>

                <!-- Sector -->
                <div class="input-field col s6">
                  <div class="spacing-2"></div>
                  <input id="sector" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
" class="validate" name="sector[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
                  <label for="sector">Sector</label>
                </div>

                <!-- Cargo -->
                <div class="input-field col s6">
                  <input id="position" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
" class="validate" name="position[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
                  <label for="position">Cargo</label>
                </div>

                <!-- Pais -->
                <div class="input-field col s6">
                  <input id="country" type="text" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value[$_smarty_tpl->tpl_vars['i']->value][4];?>
" class="validate" name="country[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]">
                  <label for="country">País</label>
                </div>

              </div><!-- / End Row datos form -->
            </div><!-- / Columnas del contendor principal-->
          </div><!-- Row contenedor principal -->
        </div><!-- / End Container -->
      </div> <!-- / Item  -->
      <?php }
}
?>


    <?php }?>

    <?php } else { ?>

    <div id="experience_item0">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 item_experence">

            <!-- Bottom eliminar -->
            <div class="col s12 right-align" id="eliminar_1" hidden="hidden">
              <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
            </div>

            <!-- Datos form -->
            <div class="row">

              <!-- company name -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="company" type="text" class="validate" name="company[0]">
                <label for="company">Nombre de la empresa</label>
              </div>

              <!-- Sector -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="sector" type="text" class="validate" name="sector[0]">
                <label for="sector">Sector</label>
              </div>

              <!-- Cargo -->
              <div class="input-field col s6">
                <input id="position" type="text" class="validate" name="position[0]">
                <label for="position">Cargo</label>
              </div>

              <!-- Pais -->
              <div class="input-field col s6">
                <input id="country" type="text" class="validate" name="country[0]">
                <label for="country">País</label>
              </div>

            </div><!-- / End Row datos form -->
          </div><!-- / Columnas del contendor principal-->
        </div><!-- Row contenedor principal -->
      </div><!-- / End Container -->
    </div> <!-- / Item  -->
    <?php }?>


  </div> <!-- /. Experience -->

    <div class="row">

      <div class="col s6 m3 offset-m2 ">
        <div class="spacing-1"></div>
        <a id="add_new_experience" class="hover" style="color: #EBA820 !important;">Agregar otra experiencia</a>
      </div>
      <div class="col s5 right-align">
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
