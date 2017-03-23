<?php
/* Smarty version 3.1.30, created on 2017-03-09 14:57:32
  from "C:\xampp\htdocs\Proyects\mentesCarta\view\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c15f4c23e830_52435511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc15807f94e2b803e4b4e9f8e7abf71e43c5c53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\mentesCarta\\view\\error.tpl',
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
function content_58c15f4c23e830_52435511 (Smarty_Internal_Template $_smarty_tpl) {
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
