<?php
/* Smarty version 3.1.30, created on 2017-01-09 08:23:40
  from "C:\xampp\htdocs\mentesCarta\view\admin\wits-pendientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58733a7cb9c112_65502425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5389b2e592f7abe03822dda91bc9f1c5dda1cc4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\admin\\wits-pendientes.tpl',
      1 => 1483946617,
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
function content_58733a7cb9c112_65502425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Panel -->
<div class="row">

  <div class="col s3 no-padding-1 nav-right1 hide-on-med-and-down z-depth-1">
        <section class="row no-margin-b">
          <article class="col l4 offset-l2" style="padding-top: 1em;">
            <img src="images/bradlogo.png" width="100%" class="" alt="logo mentes a la carta">
          </article>
        </section>

        <section class="row" >
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=principal" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-home left resize"></i>
                  Página principal
                </li>
              </a>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-users left resize"></i>
                  Mentes a la carta
                </li>
              </a>
              <a href="?view=wits-pendientes">
                <li class="item-nav-right1 active-item" id="asesores-pro">
                  <i class="fa fa-user-secret left resize"></i>
                  Mentes a la carta pendientes
                </li>
              </a>
              <a href="?view=emailMasivo" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-envelope left resize" style="font-size: 1.4rem;"></i>
                  Enviar correo
                </li>
              </a>
              <a href="?view=newProyect" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-briefcase left resize"></i>
                  Proyectos
                </li>
              </a>
              <a href="?view=index">
                <li class="item-nav-right1" id="asesores-pro">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3 seccion-panel">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Mentes a la Carta pendientes</a>
        </div>
      </nav>
    </div>

    <!-- Contenido -->
    <div class="spacing-2"></div>

    <div class="row white">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr class="orange-text text-lighten-1">
              <th data-field="id">Nombre</th>
              <th data-field="name">Fecha registro</th>
              <th data-field="price">Ciudad</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <?php if (count($_smarty_tpl->tpl_vars['wit']->value) > 0) {?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['wit']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['wit']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <tr id="<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
" class="grey-text">
              <td><?php echo ucfirst($_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][2]);?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
</td>
              <td><?php echo ucfirst($_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][4]);?>
</td>
              <td><a href="?view=perfil-wit&#38;id=<?php echo $_smarty_tpl->tpl_vars['wit']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
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

          <?php } else { ?>
          <tr>
            <td class="grey-text">No hay Mentes a la Carta pendientes por aprobar</td>
          </tr>
          <?php }?>

        </tbody>
      </table>
      </div>
    </div>
  </div>

</div><!-- / End .Panel-->


<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
