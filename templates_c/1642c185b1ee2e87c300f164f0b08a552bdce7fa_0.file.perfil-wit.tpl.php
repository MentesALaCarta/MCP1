<?php
/* Smarty version 3.1.30, created on 2016-11-04 15:08:47
  from "C:\xampp\htdocs\mentes\view\wits\perfil-wit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581c966f81df72_20570629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1642c185b1ee2e87c300f164f0b08a552bdce7fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mentes\\view\\wits\\perfil-wit.tpl',
      1 => 1478268525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/principal/header.tpl' => 1,
    'file:view/principal/script.tpl' => 1,
  ),
),false)) {
function content_581c966f81df72_20570629 (Smarty_Internal_Template $_smarty_tpl) {
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
          <img src="images/perfiles/perfil12.png" class="circle" alt="Imagen de perfil wit michael" width="100%">
        </div>
      </div>

      <div class="row">
        <div class="col s11 right-align">
          <h4 class="des-wit">Michael yara</h4>
        </div>
      </div>

      <!-- Datos de contacto -->
      <div class="row">
        <div class="col s11 right-align">

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Telefono:</span></div>
            <div class="col s6 "><span class="des-wit-2">3168848349</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Ciudad:</span></div>
            <div class="col s6 "><span class="des-wit-2">Cali</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Pais:</span></div>
            <div class="col s6 "><span class="des-wit-2">Colombia</span></div>
          </div>

          <!-- Ciudad -->
          <div class="row">
            <div class="col s6"><span class="des-wit">Correo electrónico:</span></div>
            <div class="col s6 "><span class="des-wit-2">mjyara9agmail.com</span></div>
          </div>

          <!-- Telefono-->
          <div class="row">
            <div class="col s6"><span class="des-wit">Idiomas:</span></div>
            <div class="col s6 "><span class="des-wit-2">Inglés, Español</span></div>
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
              <tr>
                <td>Mentes a la carta</td>
                <td>Software</td>
                <td>Desarrollador web</td>
                <td>Colombia</td>
                <td>Si</td>
              </tr>
              <tr>
                <td>Mentes a la carta</td>
                <td>Software</td>
                <td>Desarrollador web</td>
                <td>Colombia</td>
                <td>No</td>
              </tr>
              <tr>
                <td>Mentes a la carta</td>
                <td>Software</td>
                <td>Desarrollador web</td>
                <td>Colombia</td>
                <td>No</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- Actividades -->
    <div class="row">
      <div class="col s12">
        <h4 class="accent-text1">Actividades</h4>
      </div>
    </div>

    <div class="row">

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
            <tr>
              <td>Desarrollo web</td>
            </tr>
            <tr>
              <td>Trabajo en equipo</td>
            </tr>
            <tr>
              <td>susceptible</td>
            </tr>
          </tbody>
        </table>
      </div>
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
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </span>
      </div>
    </div>

  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
