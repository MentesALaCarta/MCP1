<?php
/* Smarty version 3.1.30, created on 2017-01-10 01:44:46
  from "C:\xampp\htdocs\mentesCarta\view\admin\panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58742e7e18b8e5_53921213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a981bfd2ab0c0b7969ed94eb7e67253471a6160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\admin\\panel.tpl',
      1 => 1484008669,
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
function content_58742e7e18b8e5_53921213 (Smarty_Internal_Template $_smarty_tpl) {
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

        <section class="row">
          <article class="col l12 no-padding-1">
            <ul>
              <a href="?view=principal" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-home left resize"></i>
                  Página principal
                </li>
              </a>
              <a href="?view=panel" class="accent-li1">
                <li class="item-nav-right1 active-item">
                  <i class="fa fa-users left resize"></i>
                  Mentes a la carta
                </li>
              </a>
              <a href="?view=wits-pendientes" class="accent-li1">
                <li class="item-nav-right1">
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
              <a href="?view=index" class="accent-li1">
                <li class="item-nav-right1">
                  <i class="fa fa-sign-out left resize"></i>
                  Cerrar sesión
                </li>
              </a>

            </ul>
          </article>
        </section>

  </div>

  <div class="col s12 m9 offset-m3 seccion-panel ">

    <div class="navbar-fixed">
      <nav class="orange lighten-1">
        <div class="nav-wrapper" style="padding-left: 15px;">
          <a href="#" class="brand-logo" style="font-size: 1.4rem;">Buscar Mentes a la Carta</a>
        </div>
      </nav>
    </div>

    <!-- Contenido -->
    <div class="spacing-2"></div>
    <div class="row" style="padding: 15px 20px;">

      <!-- Nombres o apellidos -->
      <div class="input-field col s12 m6">
        <input id="busqueda-text" type="text" class="validate">
        <label for="busqueda-text" class="grey-text">Ingresa tu búsqueda</label>
      </div>

      <!-- Sectores-->
      <div class="input-field col s12 m6">
        <select multiple id="sectores">
          <option value="" disabled selected>Sector</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['sectores']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['sectores']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['sectores']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['sectores']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Sectores</label>
      </div>

      <!-- Empresas -->
      <div class="input-field col s12 m6">
        <select multiple id="empresas">
          <option value="" disabled selected>Empresa</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['empresas']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['empresas']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['empresas']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Empresas </label>
      </div>

      <!-- Ciudades -->
      <div class="input-field col s12 m6">
        <select multiple id="ciudad_dinamic">
          <option value="" disabled selected>Ciudad</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ciudad']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ciudad']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['ciudad']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>
 
        </select>
        <label class="grey-text">Ciudades</label>
      </div>

      <!-- Cargos -->
      <div class="input-field col s12 m6">
        <select multiple id="cargos_dinamic">
          <option value="" disabled selected>Cargo</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['cargos']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['cargos']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cargos']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['cargos']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Cargos</label>
      </div>

      <!-- Actividades -->
      <div class="input-field col s12 m6">
        <select multiple id="actividad_dinamic">
          <option value="" disabled selected>Actividad</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['brains']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['brains']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['brains']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['brains']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Actividades</label>
      </div>

      <!-- Paises -->
      <div class="input-field col s12 m6">
        <select multiple id="paises">
          <option value="" disabled selected>Pais</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['paises']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['paises']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['paises']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['paises']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Paises </label>
      </div>

      <!-- Idiomas -->
      <div class="input-field col s12 m6">
        <select multiple id="idiomas">
          <option value="" disabled selected>Idioma</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['idiomas']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['idiomas']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['idiomas']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['idiomas']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text"> Idiomas </label>
      </div>

      <!-- Aptitudes -->
      <div class="input-field col s12">
        <select multiple id="aptitudes_dinamic">
          <option value="" disabled selected>Aptitud</option>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['habilidades']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['habilidades']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['habilidades']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['habilidades']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
</option>
          <?php }
}
?>

        </select>
        <label class="grey-text">Aptitudes</label>
      </div>

    </div>


    <div class="row">
      <div class="col s12">
        <span style="font-size: 1.4rem;" class="grey-text text-darken-2">Total de Mentes a la Carta - <?php echo $_smarty_tpl->tpl_vars['totalAdmintidos']->value;?>
</span>
      </div>
    </div>

    <div class="row white">
      <div class="col s12">
        <table class="highlight hover">
        <thead>
          <tr class="orange-text text-lighten-1">
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Ciudad</th>
              <th>País</th>
          </tr>
        </thead>

        <tbody id="wits-aprobados-panel" class="grey-text">

          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['wits']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['wits']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
          <tr class="verPerfil" id="<?php echo $_smarty_tpl->tpl_vars['wits']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
            <td><?php echo ucwords($_smarty_tpl->tpl_vars['wits']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
</td>
            <td><?php echo ucwords($_smarty_tpl->tpl_vars['wits']->value[$_smarty_tpl->tpl_vars['i']->value][2]);?>
</td>
            <td><?php echo ucwords($_smarty_tpl->tpl_vars['wits']->value[$_smarty_tpl->tpl_vars['i']->value][3]);?>
</td>
            <td><?php echo ucwords($_smarty_tpl->tpl_vars['wits']->value[$_smarty_tpl->tpl_vars['i']->value][4]);?>
</td>
          </tr>
          <?php }
}
?>


        </tbody>
      </table>
      </div>
    </div>


    <!-- End ultima lista -->
    <div class="row">
      <div class="col s12 center-align">
        <div class="spacing-3"></div>
        <ul class="pagination">

          <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <li><a href="?view=panel&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          <?php } else { ?>
            <li class="disabled"><a><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          <?php }?>

          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['wits']->value[0][5]+1 - (1) : 1-($_smarty_tpl->tpl_vars['wits']->value[0][5])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
              <li class="active grey darken-3"><a href="?view=panel&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php } else { ?>
              <li class="waves-effect"><a href="?view=panel&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }?>
          <?php }
}
?>


          <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['wits']->value[0][5]) {?>
            <li class="waves-effect disabled"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          <?php } else { ?>
            <li class="waves-effect"><a href="?view=panel&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          <?php }?>

        </ul>
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
