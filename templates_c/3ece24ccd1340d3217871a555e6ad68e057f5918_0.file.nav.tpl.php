<?php
/* Smarty version 3.1.30, created on 2016-11-20 05:54:47
  from "/opt/lampp/htdocs/mentes/view/principal/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58312c974bdda6_63617007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ece24ccd1340d3217871a555e6ad68e057f5918' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/principal/nav.tpl',
      1 => 1478187414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58312c974bdda6_63617007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="navbar-fixed fix">
  <nav class="transparent-nav">
   <!--<div class="container">-->
        <div class="nav-wrapper">
           <a href="#" data-activates="mobile-demo" class="button-collapse">
               <i id="menu" class="fa fa-bars spacing-icon" aria-hidden="true"></i>
               <p hidden="hidden">Menu</p>
           </a>

           <ul class="left">
             <li>
               <img src="images/bradlogo2.png" alt="logo witpick mentes a la carta" id="logo-principal" width="150">
               <img src="images/bradlogo.png" hidden="hidden" alt="logo witpick mentes a la carta" id="logo-principal-2" width="150">
             </li>
           </ul>

           <!--Nav de Phone-->
              <ul class="side-nav nav-perfil-phone trans-bg" id="mobile-demo">
               <a href="#" class="inicio accent-li no-padding-1 waves-effect waves-light">
                    <li class="item-nav-right">
                       <i class="fa fa-home left icon-transform" aria-hidden="true"></i>
                        <span>Inicio</span>
                    </li>
               </a>

                <a class="nuestras_mentes accent-li no-padding-1 waves-effect waves-light">
                    <li class="item-nav-right">
                        <i class="fa fa-users left icon-transform" aria-hidden="true"></i>
                        <span>Nuestras mentes</span>
                    </li>
                </a>

                <li class="item no-hover">
                    <span>Servicios</span>
                </li>

                <li class="divider"></li>

                <a class="innovafacil accent-li no-padding-1  waves-effect waves-light">
                    <li class="item-nav-right">
                         <i class="fa fa-mouse-pointer left icon-transform" aria-hidden="true" style="margin-left: 3px;"></i>
                         InnovaFácil
                    </li>
                </a>
                <div class="clearfix"></div>
                <a class="proyecto_innovacion accent-li no-padding-1  waves-effect waves-light">
                    <li class="item-nav-right">
                        <i class="fa fa-globe left icon-transform" aria-hidden="true"></i>
                        Proyectos Especiales
                    </li>
                </a>

                <div class="clearfix"></div>
                <a class="conocimiento_carta accent-li no-padding-1  waves-effect waves-light">
                    <li class="item-nav-right">
                       <i class="fa fa-book left icon-transform" aria-hidden="true"></i>
                        Conocimiento a la Carta
                    </li>
                </a>

                <div class="clearfix"></div>
                <a class="accent-li no-padding-1 waves-effect waves-light" href="?view=acceder">
                    <li class="item-nav-right">
                      <i class="fa fa-sign-in left icon-transform" aria-hidden="true"></i>
                      Iniciar sesión
                    </li>
                </a>

              </ul>

        </div>
    <!--</div>-->
  </nav>
</div>
<?php }
}
