<?php
/* Smarty version 3.1.30, created on 2016-11-20 21:03:31
  from "/opt/lampp/htdocs/mentes/view/wits/paso3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832019303aca6_67782070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4e5745cb22e4823dd44f3e677f4e65b95fca3e' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/paso3.tpl',
      1 => 1479672209,
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
function content_5832019303aca6_67782070 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h4 class="title-orange">Elige en qué actividades quisieras participar</h4>
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

    <!-- Proyectos innovadores -->
    <div class="col s8 offset-s2 m4 l2 offset-l1 center-align" >
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item1">
        <i class="fa fa-microphone" aria-hidden="true" style=" font-size: 4rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Proyectos innovadores</span>
      <br>
      <span class="accent-grey">
        Participar en proyectos innovadores <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services1" name="services[0]"  hidden="hidden">
    </div>

    <!-- Mentoring -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item2">
        <i class="fa fa-users" style=" font-size: 4rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Mentoring</span>
      <br>
      <span class="accent-grey">
        Ser mentor de emprendimientos y proyectos innovadores
      </span>
      <input type="text" id="services2" name="services[1]"  hidden="hidden">
    </div>


    <!-- Asesoramiento -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item3">
        <i class="fa fa-pencil" style=" font-size: 4rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Asesoramiento</span>
      <br>
      <span class="accent-grey">
        Brindar asesoría a empresas y emprendedores <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services3" name="services[2]"  hidden="hidden">
    </div>


    <!-- Formación -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item4">
        <i class="fa fa-bullhorn" style=" font-size: 4rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Formación</span>
      <br>
      <span class="accent-grey">
        Impartir charlas y formación<br><span style="visibility: hidden;">lorem ipsum lorem ipsum lorem ipsum</span>
      </span>
      <input type="text" id="services4" name="services[3]"  hidden="hidden">
    </div>

    <!-- Contenidos -->
    <div class="col s8 offset-s2 m4 l2 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item5">
        <i class="fa fa-check" style=" font-size: 4rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Contenidos</span>
      <br>
      <span class="accent-grey">
        Generar contenido escrito o audiovisual <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services5" name="services[4]"  hidden="hidden">
    </div>

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


<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}