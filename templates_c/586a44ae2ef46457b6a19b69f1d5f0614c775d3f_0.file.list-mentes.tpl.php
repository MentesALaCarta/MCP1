<?php
/* Smarty version 3.1.30, created on 2017-01-03 15:33:42
  from "C:\xampp\htdocs\mentesCarta\view\list-mentes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586bb64640fa21_22758467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586a44ae2ef46457b6a19b69f1d5f0614c775d3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\list-mentes.tpl',
      1 => 1483453826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/footer.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_586bb64640fa21_22758467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
  <div class="spacing-1"></div>
  <div class="col s12">
    <a href="?view=index">
    <button type="button" class="btn waves-effect waves-light grey darken-4" name="button"><i style="letter-spacing: 5px;" class="fa fa-arrow-left" aria-hidden="true"></i> Página principal</button>
    </a>
  </div>
</div>

<section class="row">
   <div class="container">

     <article class="col s12 center">
       <h3 class="grey-text text-darken-3 title-home">Algunas mentes a la carta</h3>
       <div class="spacing-2"></div>
     </article>

     <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['mentes']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['mentes']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
     <!--Mentes a la carta -->
     <article class="col s12 m6 l3">
       <div class="card">
         <div class="card-image waves-effect waves-block waves-light bordes-imagen">
           <img class="activator " width="150" src="images/<?php echo $_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['imagen'];?>
" alt="mentes a la carta <?php echo $_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre'];?>
">
         </div>
         <div class="card-content descripcion">
           <span class="activator grey-text text-darken-4">
             <span class="nombre grey-text text-darken-3 font-400 truncate"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre']);?>
</span>
             <i class="fa fa-info-circle hover-icon right accent-orange" style="font-size: 1.5em;" aria-hidden="true"></i>
             <br class="hide-on-med-up">
             <span class="grey-text truncate"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['pais']);?>
-<?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['ciudad']);?>
</span>
           </span>

         </div>
         <div class="card-reveal">
           <span class="card-title grey-text text-darken-4"><?php echo ucwords($_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre']);?>
<i class="fa fa-times right red-text" aria-hidden="true"></i></span>
           <p class="text-accent">Sectores: <?php echo $_smarty_tpl->tpl_vars['mentes']->value[$_smarty_tpl->tpl_vars['i']->value]['sector'];?>
</p>
         </div>
       </div>
     </article>
     <?php }
}
?>


    <!-- End ultima lista -->
    <div class="row">
      <div class="col s12 center-align">
        <div class="spacing-3"></div>
        <ul class="pagination">

          <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <li><a href="?view=mentes-a-la-carta&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          <?php } else { ?>
            <li class="disabled"><a><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          <?php }?>

          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['mentes']->value[0]['can']+1 - (1) : 1-($_smarty_tpl->tpl_vars['mentes']->value[0]['can'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
              <li class="active grey darken-3"><a href="?view=mentes-a-la-carta&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php } else { ?>
              <li class="waves-effect"><a href="?view=mentes-a-la-carta&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }?>
          <?php }
}
?>


          <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['mentes']->value[0]['can']) {?>
            <li class="waves-effect disabled"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          <?php } else { ?>
            <li class="waves-effect"><a href="?view=mentes-a-la-carta&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          <?php }?>

        </ul>
      </div>
    </div>

  </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
