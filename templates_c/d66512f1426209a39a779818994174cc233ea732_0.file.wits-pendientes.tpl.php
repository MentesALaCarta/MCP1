<?php
/* Smarty version 3.1.30, created on 2016-11-04 15:15:45
  from "C:\xampp\htdocs\mentes\view\admin\wits-pendientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581c98119637d4_09823424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66512f1426209a39a779818994174cc233ea732' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\admin\\wits-pendientes.tpl',
      1 => 1478268944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_581c98119637d4_09823424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Panel -->
<div class="row">

  <div class="col s3 no-padding-1 nav-right1 hide-on-med-and-down">

        <section class="row">
          <article class="col l8 offset-l2">
            <div class="spacing-1"></div>
            <img src="images/bradlogo.png" width="100%" class="" alt="logo mentes a la carta">
          </article>
        </section>

        <section class="row" >
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1 " id="project-pro">
                  <i class="fa fa-users left resize"></i>
                  Wits
                </li>
              </a>
              <a href="?view=wits-pendientes " class="accent-li1">
                <li class="item-nav-right1 active-item" id="asesores-pro">
                  <i class="fa fa-user-secret left resize"></i>
                  Wits Pendientes
                </li>
              </a>
              <a href="?view=index" class="accent-li1">
                <li class="item-nav-right1" id="asesores-pro">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3">
    <!-- Contenido -->
    <div class="spacing-2"></div>
    <h3 class="accent-text">Lista de Mentes a la carta Pendientes</h3>


    <div class="row">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Fecha registro</th>
              <th data-field="price">Ciudad</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr id="1">
            <td>Michael velasquez</td>
            <td>03/11/2011</td>
            <td>Cali</td>
            <td><a href="?view=perfil-wit&id=1">Ver perfil</a></td>
            <td><button width="100%" id="1" type="button" class="btn waves-effect waves-light green aprobar" name="button">Aprobar</button>
            </td>
            <td><button width="100%" id="1" type="button" class="btn waves-effect waves-light red denegar" name="button">Denegar</button></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>

</div><!-- / End .Panel-->

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
