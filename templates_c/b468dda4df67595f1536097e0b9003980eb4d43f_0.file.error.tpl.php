<?php
/* Smarty version 3.1.30, created on 2017-01-04 16:50:18
  from "C:\xampp\htdocs\mentesCarta\view\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586d19ba169664_37532932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b468dda4df67595f1536097e0b9003980eb4d43f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\error.tpl',
      1 => 1483453826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_586d19ba169664_37532932 (Smarty_Internal_Template $_smarty_tpl) {
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
