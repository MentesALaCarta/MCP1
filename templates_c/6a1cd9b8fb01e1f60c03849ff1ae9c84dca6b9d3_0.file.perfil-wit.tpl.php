<?php
/* Smarty version 3.1.30, created on 2016-11-20 18:13:40
  from "/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5831d9c4418f94_06087116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1cd9b8fb01e1f60c03849ff1ae9c84dca6b9d3' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/perfil-wit.tpl',
      1 => 1478620412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_5831d9c4418f94_06087116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
  <div class="col s4 nav-wit">

    <div class="accent">

    </div>

      <!-- Imagen de perfil -->
      <div class="row">
        <div class="col s3 offset-s8" style="margin-top: 5em;">
          <div class="spacing-2"></div>
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
" class="circle" alt="Imagen de perfil wit michael" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s11 right-align">
          <h4 class="des-wit"><?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['nombres']);?>
 <br> <?php echo ucwords($_smarty_tpl->tpl_vars['usuario']->value['apellidos']);?>
</h4>
        </div>
      </div>

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

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Pais:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['pais'];?>
</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</span></div>
          </div>

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Idiomas:</span></div>
            <div class="col s6 "><span class="des-wit-2"><?php echo $_smarty_tpl->tpl_vars['idiomas']->value;?>
</span></div>
          </div>

        </div>
      </div>



      <!-- Si no esta aprobado -->

  </div>
  <div class="col s8 offset-s4">

    <div class="row">
      <div class="col s11">
        <h4 class="accent-text1">Experiencia</h4>
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
        <h4 class="accent-text1">Aptitudes</h4>
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
        <h4 class="accent-text1">Actividades</h4>
      </div>
    </div>

    <div class="row">

      <?php if ($_smarty_tpl->tpl_vars['brain']->value[0] == true) {?>
      <!-- Proyectos innovadores -->
      <div class="col s8 offset-s2 m4 l3 center-align" >
        <div class="spacing-1"></div>
        <div class="area-wit center-align circle hover" id="item1">
          <i class="fa fa-microphone" aria-hidden="true" style=" font-size: 4rem;"></i>
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
          <i class="fa fa-users" style=" font-size: 4rem;"></i>
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
          <i class="fa fa-pencil" style=" font-size: 4rem;"></i>
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
          <i class="fa fa-bullhorn" style=" font-size: 4rem;"></i>
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
          <i class="fa fa-check" style=" font-size: 4rem;"></i>
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
        <h4 class="accent-text1">Descripción de la mente a la carta</h4>
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
        <h4 class="accent-text1">Frase o pensamiento propio</h4>
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

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
