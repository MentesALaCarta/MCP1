<?php
/* Smarty version 3.1.30, created on 2016-12-06 21:31:08
  from "/opt/lampp/htdocs/mentes/view/social/social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847200cb0eea6_23408942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52375238015f29a190947c97837fb1f8babcc900' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/social/social.tpl',
      1 => 1481056267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5847200cb0eea6_23408942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Nav -->
<div class="navbar-fixed">
  <nav class="white z-depth-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center black-text">Mentes a la Carta</a>
    </div>
  </nav>
</div>
<!-- End nav -->

<div class="spacing-2"></div>
<!-- Mentes a la carta -->
<div class="container">

    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['mentes']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['mentes']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <div class="row no-margin-b">
      <div class="col s12 m8 offset-m2">

        <a href="?view=perfil-wit& id=<?php echo $_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
">

        <section class="card padding-list">
          <div class="row no-margin-b">

            <!-- Imagen de perfil -->
            <div class="col s4 l2">
              <img src="images/<?php echo $_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['imagen'];?>
" class="img-bordered" alt="imagen de perfil de Michael" width="100%;">
            </div>
            <!-- / End imagen de perfil -->

            <!-- Datos de la Mente a la Carta-->
            <div class="col s8 l10">
              <span class="encabezado-list">
                <?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre']);?>

              </span>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">Sector:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['sector']);?>
</span>
                </div>
              </div>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">Ciudad:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['ciudad']);?>
</span>
                </div>
              </div>

              <div class="row no-margin-b">
                <div class="col s4 l2">
                  <span class="black-text">País:</span>
                </div>
                <div class="col s8 l10">
                  <span class="grey-text text-darken-1"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['pais']);?>
</span>
                </div>
              </div>

            </div>
            <!-- / End datos Mentes a la Carta -->
          </div>
        </section>
        </a>
      </div>
    </div>
    <?php }
}
?>


</div>




<!-- Botón flotante en la parte derecha -->
<div class="fixed-action-btn vertical">
  <a class="btn-floating btn-large grey darken-3">
    <i class="large material-icons"><i class="fa fa-plus"></i></i>
  </a>
  <ul>

    <li>
      <a href="?view=perfil-wit& id=<?php echo $_SESSION['id'];?>
" class="btn-floating tooltipped white waves-effect" data-position="left" data-delay="50" data-tooltip="Mi perfil">
        <i style="font-size: 1.2em; color: #727272;" class="fa fa-user" aria-hidden="true"></i>
      </a>
    </li>

    <li>
      <a id="close-sesion" class="btn-floating tooltipped white waves-effect" data-position="left" data-delay="50" data-tooltip="Cerrar sesión">
        <i style="font-size: 1.2em; color: #727272;" class="fa fa-sign-out" aria-hidden="true"></i>
      </a>
    </li>

  </ul>
</div>
<!-- / End boton -->

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
