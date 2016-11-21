<?php
/* Smarty version 3.1.30, created on 2016-11-21 21:00:43
  from "/opt/lampp/htdocs/mentes/view/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5833526b6bed98_12234716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd454f2f531db35125aa1f53a9067f533984f967b' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/error.tpl',
      1 => 1479758440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5833526b6bed98_12234716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="col s10 offset-s1">
    <div class="alert red white-text">
      La página no fue localizada
    </div>
    <div class="spacing-1">

    </div>
    <a href="?view=index">
      <button type="button" class="btn waves-effect grey waves-light" name="button">Volver a salvo</button>
    </a>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
