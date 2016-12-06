<?php
/* Smarty version 3.1.30, created on 2016-12-06 18:12:17
  from "/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5846f171b8ac16_98575846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1cd9b8fb01e1f60c03849ff1ae9c84dca6b9d3' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl',
      1 => 1481044276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5846f171b8ac16_98575846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
  <div class="col s4 nav-wit z-depth-5">

    <div class="accent">

    </div>

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s3 offset-s8" style="margin-top: 5em;">
          <div class="spacing-2"></div>
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
            <i class="fa fa-pencil" aria-hidden="true" style="color: white; font-size: 2em;"></i> <span class="white-text" style="font-size: 1.2rem;">Editar perfil</span>
          </a>
        </div>
      </div>
      <?php }?>

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s11 right-align">

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
  <div class="col s8 offset-s4">

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
        <h5 class="accent-text1">Experiencia</h5>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="text-accent1">
          <table>
            <thead>
              <tr>
                <th data-field="id">Empresa</th>
                <th data-field="name">Sector</th>
                <th data-field="price">Cargo</th>
                <th data-field="price">Pais</th>
                <th data-field="price">Actual trabajo</th>
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

      <?php if ($_smarty_tpl->tpl_vars['brain']->value[0] == true) {?>
      <!-- Proyectos innovadores -->
      <div class="col s8 offset-s2 m4 l3 center-align" >
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item1">
          <i class="fa fa-microphone" aria-hidden="true" style=" font-size: 3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Proyectos innovadores</span>
        <br>
        <span class="accent-grey">
          Participar en proyectos innovadores <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services1" name="services[0]"  hidden="hidden">
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['brain']->value[1] == true) {?>
      <!-- Mentoring -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item2">
          <i class="fa fa-users" style=" font-size: 3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Mentoring</span>
        <br>
        <span class="accent-grey">
          Ser mentor de emprendimientos y proyectos innovadores
        </span>
        <input type="text" id="services2" name="services[1]"  hidden="hidden">
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['brain']->value[2] == true) {?>
      <!-- Asesoramiento -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item3">
          <i class="fa fa-pencil" style=" font-size: 3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Asesoramiento</span>
        <br>
        <span class="accent-grey">
          Brindar asesoría a empresas y emprendedores <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services3" name="services[2]"  hidden="hidden">
      </div>
      <?php }?>


      <?php if ($_smarty_tpl->tpl_vars['brain']->value[3] == true) {?>
      <!-- Formación -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item4">
          <i class="fa fa-bullhorn" style=" font-size: 3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Formación</span>
        <br>
        <span class="accent-grey">
          Impartir charlas y formación<br><span style="visibility: hidden;">lorem ipsum lorem ipsum lorem ipsum</span>
        </span>
        <input type="text" id="services4" name="services[3]"  hidden="hidden">
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['brain']->value[4] == true) {?>
      <!-- Contenidos -->
      <div class="col s8 offset-s2 m4 l3 center-align">
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item5">
          <i class="fa fa-check" style=" font-size: 3rem;"></i>
        </div>
        <div class="spacing-1"></div>
        <span style="color: #EBA820; font-size: 18px;">Contenidos</span>
        <br>
        <span class="accent-grey">
          Generar contenido escrito o audiovisual <br><span style="visibility: hidden;">lorem ipsum</span>
        </span>
        <input type="text" id="services5" name="services[4]"  hidden="hidden">
      </div>
      <?php }?>

    </div>



    <!-- Descripcion del wit -->
    <div class="row">
      <div class="col s11">
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
      <div class="col s11">
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

  <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large grey darken-3">
      <i class="large material-icons"><i class="fa fa-plus"></i></i>
    </a>
    <ul>
      <li>
        <a  href="?view=Mentes-a-la-Carta" class="btn-floating tooltipped white waves-effect" data-position="left" data-delay="50" data-tooltip="Mentes a la Carta">
          <i style="font-size: 1.2em; color: #727272;" class="fa fa-search" aria-hidden="true"></i>
        </a>
      </li>

      <li>
        <a id="close-sesion" class="btn-floating tooltipped white waves-effect" data-position="left" data-delay="50" data-tooltip="Cerrar sesión">
          <i style="font-size: 1.2em; color: #727272;" class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
