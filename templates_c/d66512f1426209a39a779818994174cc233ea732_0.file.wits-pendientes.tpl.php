<?php
/* Smarty version 3.1.30, created on 2016-11-08 18:58:56
  from "C:\xampp\htdocs\mentes\view\admin\wits-pendientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58221260504e51_78151256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66512f1426209a39a779818994174cc233ea732' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\admin\\wits-pendientes.tpl',
      1 => 1478627934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_58221260504e51_78151256 (Smarty_Internal_Template $_smarty_tpl) {
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
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['wit']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['wit']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
          <tr id="<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
 <?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][4];?>
</td>
            <td><a href="?view=perfil-wit&id=<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">Ver perfil</a></td>
            <td><button width="100%" id="<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
" type="button" class="btn waves-effect waves-light green aprobar" name="button">Aprobar</button>
            </td>
            <td><button width="100%" id="<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
" type="button" class="btn waves-effect waves-light red denegar" name="button">Denegar</button></td>
          </tr>
          <?php }
}
?>

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
