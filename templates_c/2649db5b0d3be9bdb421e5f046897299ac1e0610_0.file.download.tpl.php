<?php
/* Smarty version 3.1.30, created on 2017-01-09 17:19:44
  from "C:\xampp\htdocs\mentesCarta\view\admin\download.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5873b820f3e0c5_25174866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2649db5b0d3be9bdb421e5f046897299ac1e0610' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentesCarta\\view\\admin\\download.tpl',
      1 => 1483978783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5873b820f3e0c5_25174866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col s2">
    <div class="spacing-1"></div>
    <img width="100%" src="images/perfiles/perfil1.png" alt="imagen de perfil de michael">
  </div>
  <div class="col s10">
    <div class="spacing-1"></div>
    <span class="grey-text text-darken-2">Nombre: </span><span class="grey-text"> Michael yara</span><br><br>
    <span class="grey-text text-darken-2">Telefono:</span><span class="grey-text"> 3168848349</span><br><br>
    <span class="grey-text text-darken-2">Ciudad:</span><span class="grey-text"> Cali</span><br><br>
    <span class="grey-text text-darken-2">Pais:</span><span class="grey-text"> Colombia</span><br><br>
    <span class="grey-text text-darken-2">Correo electrónico:</span><span class="grey-text"> mjyara9@gmail.com</span><br><br>
    <span class="grey-text text-darken-2">Idiomas:</span><span class="grey-text"> Inglés, Español</span>
  </div>
</div>

<div class="row">
  <div class="col s11">
    <div class="spacing-2 hide-on-large-only" ></div>
    <h5 class="accent-text1">Experiencia</h5>
  </div>
</div>

<div class="row">
  <div class="col s12">
    <div class="text-accent1">
      <table class="responsive-table">
        <thead>
          <tr>
            <th data-field="id">Empresa</th>
            <th data-field="name">Sector</th>
            <th data-field="price">Cargo</th>
            <th data-field="price">Pais</th>
            <!-- <th data-field="price">Actual trabajo</th> -->
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Mentes a la Carta</td>
            <td>Sector</td>
            <td>Cargo</td>
            <td>Pais</td>
          </tr>
        </tbody>

      </table>
    </div>
  </div>
</div>

<!-- *Aptitudes -->
<div class="row">
  <div class="col s11">
    <h5 class="accent-text1">Aptitudes</h5>
  </div>
</div>

<div class="row">
  <div class="col s12 text-accent1">
    <table>
      <thead>
        <tr>
          <th data-field="id">Aptitud</th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <td>Aptitudes</td>
          </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Actividades -->
<div class="row">
  <div class="col s12">
    <h5 class="accent-text1">Actividades</h5>
  </div>
</div>

<div class="row">
  <div class="col s12">
    <ul class="collection">
      <!-- Proyectos innovadores -->
      <li class="collection-item avatar">
        <div style="margin-top: 0.5em;"></div>
        <i class="fa fa-briefcase activo circle"></i>
        <span class="grey-text text-darken-1">
          Proyectos innovadores <br>
          <small class="grey-text">Participar en proyectos innovadores</small>
        </span>
      </li>
    </ul>
  </div>
</div>

<!-- Descripcion del wit -->
<div class="row">
  <div class="col s12">
    <h5 class="accent-text1">Descripción de la mente a la carta</h5>
    <span class="text-accent1">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci voluptatibus veniam aliquam, atque numquam molestias ratione necessitatibus quo nostrum quasi delectus! A quasi dignissimos architecto, doloribus placeat autem labore accusantium!
    </span>
  </div>
</div>

<!-- Frase o pensamiento propio -->
<div class="row">
  <div class="col s12">
    <h5 class="accent-text1">Frase o pensamiento propio</h5>
    <span class="text-accent1">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias vel numquam labore, ipsum mollitia. Consequatur blanditiis nostrum itaque quidem debitis, facere aut quis. Molestias dolores atque, dolorem, consectetur provident earum.
    </span>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
