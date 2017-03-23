<?php
/* Smarty version 3.1.30, created on 2017-03-09 14:58:18
  from "C:\xampp\htdocs\Proyects\mentesCarta\view\wits\paso3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c15f7a433fb8_20138998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75946b67d668b77933187554db05f03b62cb0ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\mentesCarta\\view\\wits\\paso3.tpl',
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
function content_58c15f7a433fb8_20138998 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h4 class="title-orange" style="margin-top: 0px;">Elige en qué actividades quisieras participar</h4>
</div>

<div class="row">
  <div class="col s12 m12 l8 offset-l2">
    <!-- Progress bar -->
    <div class="container">
      <ul class="progressbar">
        <li id="step1" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Experiencia</span></li>
        <li id="step2" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>


<!-- Brain Mining -->
<form action="" id="form_services">

  <div class="row">

    <?php $_smarty_tpl->_assignInScope('actividad1', 'Proyectos innovadores');
?>
    <?php $_smarty_tpl->_assignInScope('actividad2', 'Mentoring');
?>
    <?php $_smarty_tpl->_assignInScope('actividad3', 'Asesoramiento');
?>
    <?php $_smarty_tpl->_assignInScope('actividad4', 'Formaci&oacute;n');
?>
    <?php $_smarty_tpl->_assignInScope('actividad5', 'Contenidos');
?>

    <?php if (strpos($_smarty_tpl->tpl_vars['actividad']->value,$_smarty_tpl->tpl_vars['actividad1']->value) === false) {?>
      <!-- Proyectos innovadores -->
      <div class="col s8 offset-s2 m4 l2 offset-l1 center-align" >
        <div class="area center-align circle hover" id="item1">
          <i class="fa fa fa-briefcase" aria-hidden="true" style=" font-size: 3.5rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Proyectos innovadores</span>
        <br>
        <span class="accent-grey">
          Participar en proyectos innovadores <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services1" name="services[0]"  hidden="hidden">
      </div>
    <?php } else { ?>
        <!-- Proyectos innovadores -->
        <div class="col s8 offset-s2 m4 l2 offset-l1 center-align" >
          <div class="area center-align circle hover area_active" id="item1">
            <i class="fa fa fa-briefcase" aria-hidden="true" style=" font-size: 3.5rem;"></i>
          </div>
          <div class="spacing-1"></div>
          <span style="color: #EBA820; font-size: 18px;">Proyectos innovadores</span>
          <br>
          <span class="accent-grey">
            Participar en proyectos innovadores <br><span style="visibility: hidden;">lorem ipsum</span>
          </span>
          <input type="text" id="services1" name="services[0]"  hidden="hidden">
        </div>
    <?php }?>

    <?php if (strpos($_smarty_tpl->tpl_vars['actividad']->value,$_smarty_tpl->tpl_vars['actividad2']->value) === false) {?>
      <!-- Mentoring -->
      <div class="col s8 offset-s2 m4 l2 center-align">
        <div class="area center-align circle hover" id="item2">
          <i class="fa fa-users" style=" font-size: 3.2rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Mentoring</span>
        <br>
        <span class="accent-grey">
          Ser mentor de emprendimientos y proyectos innovadores
        </span>
        <input type="text" id="services2" name="services[1]"  hidden="hidden">
      </div>
    <?php } else { ?>
      <!-- Mentoring -->
      <div class="col s8 offset-s2 m4 l2 center-align">
        <div class="area center-align circle hover area_active" id="item2">
          <i class="fa fa-users" style=" font-size: 3.2rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Mentoring</span>
        <br>
        <span class="accent-grey">
          Ser mentor de emprendimientos y proyectos innovadores
        </span>
        <input type="text" id="services2" name="services[1]"  hidden="hidden">
      </div>
    <?php }?>


    <?php if (strpos($_smarty_tpl->tpl_vars['actividad']->value,$_smarty_tpl->tpl_vars['actividad3']->value) === false) {?>
    <!-- Asesoramiento -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="area center-align circle hover" id="item3">
        <i class="fa fa-comments-o" style=" font-size: 3.3rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Asesoramiento</span>
      <br>
      <span class="accent-grey">
        Brindar asesoría a empresas y emprendedores <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services3" name="services[2]"  hidden="hidden">
    </div>
    <?php } else { ?>
    <!-- Asesoramiento -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="area center-align circle hover area_active" id="item3">
        <i class="fa fa-comments-o" style=" font-size: 3.3rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Asesoramiento</span>
      <br>
      <span class="accent-grey">
        Brindar asesoría a empresas y emprendedores <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services3" name="services[2]"  hidden="hidden">
    </div>
    <?php }?>


    <?php if (strpos($_smarty_tpl->tpl_vars['actividad']->value,$_smarty_tpl->tpl_vars['actividad4']->value) === false) {?>
      <!-- Formación -->
      <div class="col s8 offset-s2 m4 l2 center-align">
        <div class="area center-align circle hover" id="item4">
          <i class="fa fa-pencil-square-o" style=" font-size: 3.3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Formación</span>
        <br>
        <span class="accent-grey">
          Impartir charlas y formación<br><span style="visibility: hidden;">lorem ipsum lorem ipsum lorem ipsum</span>
        </span>
        <input type="text" id="services4" name="services[3]"  hidden="hidden">
      </div>
    <?php } else { ?>
      <!-- Formación -->
      <div class="col s8 offset-s2 m4 l2 center-align">
        <div class="area center-align circle hover area_active" id="item4">
          <i class="fa fa-pencil-square-o" style=" font-size: 3.3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Formación</span>
        <br>
        <span class="accent-grey">
          Impartir charlas y formación<br><span style="visibility: hidden;">lorem ipsum lorem ipsum lorem ipsum</span>
        </span>
        <input type="text" id="services4" name="services[3]"  hidden="hidden">
      </div>
    <?php }?>

    <?php if (strpos($_smarty_tpl->tpl_vars['actividad']->value,$_smarty_tpl->tpl_vars['actividad5']->value) === false) {?>
    <!-- Contenidos -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="area center-align circle hover" id="item5">
        <i class="fa fa-file-text" style=" font-size: 3.2rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Contenidos</span>
      <br>
      <span class="accent-grey">
        Generar contenido escrito o audiovisual <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services5" name="services[4]"  hidden="hidden">
    </div>
    <?php } else { ?>
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="area center-align circle hover area_active" id="item5">
        <i class="fa fa-file-text" style=" font-size: 3.2rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Contenidos</span>
      <br>
      <span class="accent-grey">
        Generar contenido escrito o audiovisual <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services5" name="services[4]"  hidden="hidden">
    </div>
    <?php }?>


  </div>

  </div>



<div class="spacing-3"></div>


</form>
<!-- /End Brain Mining -->

<div class="row spacing-bottom">
  <div class="col s6 m4 offset-m2 l3 offset-l3">
    <button id="step3_previous" style="width: 100%;" class="btn waves-effect waves-light grey" type="button"  name="button">Volver</button>
  </div>
  <div class="col s6 l3">
    <button id="step3" style="width: 100%;"class="btn waves-effect waves-light orange" type="button"  name="button">Continuar</button>
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
