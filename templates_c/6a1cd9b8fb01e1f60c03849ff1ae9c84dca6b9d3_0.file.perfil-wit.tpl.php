<?php
/* Smarty version 3.1.30, created on 2016-12-09 14:33:40
  from "/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ab2b4bc0066_63345859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1cd9b8fb01e1f60c03849ff1ae9c84dca6b9d3' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl',
      1 => 1481290419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_584ab2b4bc0066_63345859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">

  <div class="col s4 nav-wit z-depth-5 hide-on-small-only">

    <div class="accent">

    </div>

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s4 offset-s7" style="margin-top: 2em;">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
?<?php echo time();?>
" class="circle" alt="Imagen de perfil wit <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s11 right-align">
          <h4 class="des-wit"><?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['nombres']);?>
 <br> <?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['apellidos']);?>
</h4>
        </div>
      </div>

      <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $_GET['id']) {?>
      <!-- Editar perfil -->
      <div class="row">
        <div class="col s11 right-align">
          <a href="?view=editar-perfil">
            <i class="fa fa-pencil" aria-hidden="true" style="letter-spacing: 7px; color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Editar perfil</span>
          </a>
        </div>
      </div>

      <!-- Más mentes -->
      <div class="row hide-on-small-only">
        <div class="col s11 right-align">
          <a href="?view=Mentes-a-la-Carta">
            <i class="fa fa-users" aria-hidden="true" style="letter-spacing: 7px; color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Ver más Mentes a la Carta</span>
          </a>
        </div>
      </div>
      <?php }?>

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s11 right-align">

          <!-- Telefono-->
          <div class="row">
            <div class="col s4"><span class="des-wit">Telefono:</span></div>
            <div class="col s8 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][2];?>
</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Ciudad:</span></div>
            <div class="col s8 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][1];?>
</span></div>
          </div>

          <!-- Pais -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Pais:</span></div>
            <div class="col s8 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['pais'];?>
</span></div>
          </div>

          <!-- email -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s8 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</span></div>
          </div>

          <!-- idiomas -->
          <div class="row">
            <div class="col s4"><span class="des-wit">Idiomas:</span></div>
            <div class="col s8 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['idiomas']->value;?>
</span></div>
          </div>

        </div>
      </div>
  </div>
  <!-- Encabezado de la primera seccion -->

  <!-- Inicio encabezado 2 -->
  <div class="col s12 nav-wit-2 hide-on-med-and-up">

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s6 offset-s3" style="margin-top: 3em;">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
?<?php echo time();?>
" class="circle" alt="Imagen de perfil wit <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s12 center-align">
          <h4 class="des-wit"><?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['nombres']);?>
 <br> <?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['apellidos']);?>
</h4>
        </div>
      </div>

      <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $_GET['id']) {?>
      <!-- Editar perfil -->
      <div class="row">
        <div class="col s12">
          <a href="?view=editar-perfil">
            <i class="fa fa-pencil" aria-hidden="true" style="color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Editar perfil</span>
          </a>
        </div>
      </div>
      <?php }?>

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s12">

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Telefono:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][2];?>
</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Ciudad:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][1];?>
</span></div>
          </div>

          <!-- Pais -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Pais:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['pais'];?>
</span></div>
          </div>

          <!-- email -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</span></div>
          </div>

          <!-- idiomas -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Idiomas:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['idiomas']->value;?>
</span></div>
          </div>

        </div>
      </div>

  </div>

  <!-- Encabezado de la segunda seccion -->

  <div class="col s12 m8 offset-m4">

    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $_GET['id'] && $_smarty_tpl->tpl_vars['estado']->value == 'I') {?>
      <!-- Si no esta aprobado -->
      <div class="row">
        <div class="col s12">
          <div class="alert">
            Estamos validando tu información para que hagas parte de las Mentes a la Carta.
          </div>
        </div>
      </div>
    <?php }?>

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
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['experiencia']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['experiencia']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
</td>
              </tr>
              <?php }
}
?>

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
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['aptitudes']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['aptitudes']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['aptitudes']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>
              </tr>
            <?php }
}
?>

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
          <?php if ($_smarty_tpl->tpl_vars['brain']->value[0] == true) {?>
          <!-- Proyectos innovadores -->
          <li class="collection-item avatar">
            <i class="fa fa-briefcase activo circle"></i>
            <span>
              Proyectos innovadores <br>
              <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
            </span>
          </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['brain']->value[1] == true) {?>
          <!-- Mentoring -->
          <li class="collection-item avatar">
            <i class="fa fa-users activo circle"></i>
            <span>
              Mentoring<br>
              <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
            </span>
          </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['brain']->value[2] == true) {?>
          <!-- Asesoramiento -->
          <li class="collection-item avatar">
            <i class="fa fa-comments-o activo circle grey"></i>
            <span>
              Asesoramiento<br>
              <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
            </span>
          </li>
          <?php }?>


          <?php if ($_smarty_tpl->tpl_vars['brain']->value[3] == true) {?>
          <!-- Formación -->
          <li class="collection-item avatar">
            <i class="fa fa-pencil-square-o activo circle grey"></i>
            <span>
              Formación<br>
              <small class="grey-text text-darken-2">Impartir charlas y formación</small>
            </span>
          </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['brain']->value[4] == true) {?>
          <!-- Contenidos -->
          <li class="collection-item avatar">
            <i class="fa fa-file-text activo circle grey"></i>
            <span>
              Contenidos<br>
              <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
            </span>
          </li>
          <?php }?>
        </ul>
    </div>
  </div>



    <!-- Descripcion del wit -->
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Descripción de la mente a la carta</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <span class="text-accent1">
          <?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][4];?>

        </span>
      </div>
    </div>

    <!-- Frase o pensamiento propio -->
    <div class="row">
      <div class="col s12">
        <h5 class="accent-text1">Frase o pensamiento propio</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <span class="text-accent1">
          <?php echo $_smarty_tpl->tpl_vars['contacto']->value[0][3];?>

        </span>
      </div>
    </div>

  </div>

</div>
<?php if (isset($_SESSION['id'])) {?>

  <div class="fixed-action-btn vertical hide-on-small-only">
    <a id="close-sesion" class="btn-floating tooltipped btn-large white waves-effect" data-position="left" data-delay="50" data-tooltip="Cerrar sesión">
      <i style="font-size: 1.7em; color: #727272;" class="fa fa-sign-out" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Menu para dispositivos moviles -->
  <div class="barra hide-on-med-and-up" style="width: 100%;background-color: white; position: fixed; z-index: 100; bottom: 0px;">
    <div class="row no-margin-b">
      <a href="?view=Mentes-a-la-Carta">
        <div class="col s6 center-align waves-effect grey-text" style="padding-top: 10px;">
          <i class="fa fa-users" style="font-size: 1.6rem;"></i>
          <br>
          Más mentes a la Carta
        </div>
      </a>
      <div class="col s6 center-align"  style="padding-top: 10px; border-bottom: 3px solid black;">
        <i class="fa fa-user" style="font-size: 1.6rem;"></i><br>
        Mi perfil
      </div>
    </div>
  </div>

<?php }?>

<div class="spacing-3"></div>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
