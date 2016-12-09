<?php
/* Smarty version 3.1.30, created on 2016-12-07 17:21:40
  from "/opt/lampp/htdocs/mentes/view/social/social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58483714df31d9_82351727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52375238015f29a190947c97837fb1f8babcc900' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/social/social.tpl',
      1 => 1481127699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_58483714df31d9_82351727 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php if ($_smarty_tpl->tpl_vars['mentes']->value != 0) {?>
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

<?php } else { ?>
  <h3 class="grey-text text-darken-2 center-align">Lista vacía</h3>
<?php }?>
</div>

<div class="fixed-action-btn vertical hide-on-small-only">
  <a href="?view=perfil-wit& id=<?php echo $_SESSION['id'];?>
" class="btn-floating tooltipped btn-large white waves-effect" data-position="left" data-delay="50" data-tooltip="Mi perfil">
    <i style="font-size: 1.7em; color: #727272;" class="fa fa-user" aria-hidden="true"></i>
  </a>
</div>

<!-- Menú -->
<div class="barra hide-on-med-and-up" style="width: 100%;background-color: white; position: fixed; z-index: 100; bottom: 0px;">
  <div class="row no-margin-b">
    <div class="col s6 center-align waves-effect" style="padding-top: 10px;border-bottom: 3px solid black;">
      <i class="fa fa-users" style="font-size: 1.6rem;"></i>
      <br>
      Más mentes a la Carta
    </div>
    <a href="?view=perfil-wit& id=<?php echo $_SESSION['id'];?>
">
      <div class="col s6 center-align grey-text waves-effect"  style="padding-top: 10px;">
        <i class="fa fa-user" style="font-size: 1.6rem;"></i><br>
        Mi perfil
      </div>
    </a>
  </div>
</div>
<!-- / End menú -->

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
