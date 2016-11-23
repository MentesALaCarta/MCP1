<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:02:22
  from "/opt/lampp/htdocs/mentes/view/wits/editar_perfil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583603de4882f9_87194717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96da133917190919b47ba36fcc6295c0231f68e1' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/view/wits/editar_perfil.tpl',
      1 => 1479934939,
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
function content_583603de4882f9_87194717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/principal/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

  <div class="spacing-3">
  </div>

  <div class="row">
    <div class="col s12 center-align">
      <h4>Editar perfil</h4>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col s12 center-align">
      <h5 class="red-text">Esta página esta en la fase de desarrollo por lo tanto, no funcionan todas las opciones.</h5>
    </div>
  </div> -->

  <div class="row">
    <div class="col s12 m10 offset-m1">
      <ul class="collapsible popout" data-collapsible="accordion">

        <!-- Datos generales -->
        <li>
          <div class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Datos generales</div>
          <div class="collapsible-body padding-edit">
            <!-- Descripción de la fase -->
            <span class="grey-text">
              Los siguientes datos nos ayudan a identificar en que proyectos te podemos asignar
            </span>
          </div>
        </li>

       <!-- Experiencia -->
       <li>
         <div class="collapsible-header"><i class="fa fa-briefcase" aria-hidden="true"></i> Experiencia</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Queremos conocer tu experiencia para así mismo asignarte en los proyectos en los cuales te puedas desempeñar mejor
           </span>

            <div class="spacing-1"></div>

            <!-- Formulario -->
            <form id="form_dd_empresa">
              <div class="row">

                <input type="text" id="identificador" value="0" name="identificador" hidden="hidden">

                <!-- company name -->
                <div class="input-field col s12 m6">
                  <div class="spacing-2"></div>
                  <input id="company" type="text" class="validate" name="empresa">
                  <label for="company">Empresa</label>
                </div>

                <!-- Sector -->
                <div class="input-field col s12 m6">
                  <div class="spacing-2"></div>
                  <input id="sector" type="text" class="validate" name="sector">
                  <label for="sector">Sector</label>
                </div>

                <!-- Cargo -->
                <div class="input-field col s12 m6">
                  <input id="position" type="text" class="validate" name="cargo">
                  <label for="position">Cargo</label>
                </div>

                <!-- Pais -->
                <div class="input-field col s12 m6">
                  <input id="country" type="text" class="validate" name="pais">
                  <label for="country">País</label>
                </div>

              </div><!-- / End Row datos form -->

              <div class="container" id="load" hidden="hidden">
                <div class="row">
                  <div class="col s2 offset-s5 m1 offset-m5">
                    <img src="images/perfiles/load.gif" alt="load aptitud" width="100%;">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col s6 m5 l3 black-text">
                  <i class="fa fa-floppy-o text-grey text-grey" aria-hidden="true"></i> <span id="guardar_experiencia" class="underline text-grey"> Guardar experiencia </span>
                </div>
                <div class="col s6 m5 l3 black-text" id="limpiar" hidden="hidden">
                  <i class="fa fa-eraser text-grey text-grey" aria-hidden="true"></i> <span  class="underline text-grey"> Limpiar </span>
                </div>
              </div>
            </form>

            <!-- Table -->
            <table class="responsive-table">
              <thead>
                <tr>
                    <th data-field="id">Empresas</th>
                </tr>
              </thead>

              <tbody id="lista_de_experiencia">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['experiencia']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['experiencia']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <tr>
                  <td><?php echo ucfirst($_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
</td>
                  <td><i class="fa fa-pencil text-grey" aria-hidden="true"></i> <span class="underline text-grey editar_empresa" id="<?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">Editar</span></td>
                  <td><i class="fa fa-trash text-grey" aria-hidden="true"></i> <span class="underline text-grey eliminar_empresa" id="<?php echo $_smarty_tpl->tpl_vars['experiencia']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">Eliminar</span></td>
                </tr>
                <?php }
}
?>

              </tbody>
            </table>

         </div>
       </li>

       <!-- Aptitudes -->
       <li>
         <div class="collapsible-header"><i class="fa fa-child" aria-hidden="true"></i> Aptitudes</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Hablanos de sus aptitudes para resaltar lo mejor de usted.
           </span>

           <!-- Formulario -->
           <div class="row">
             <div class="input-field col s6 m7">
                 <input id="aptitud" value="" type="text" class="validate">
                 <label for="aptitud">Aptitud</label>
             </div>
             <div class="col s6 m3">
               <div class="spacing-1"></div>
               <button type="button" class="btn waves-effect waves-light" name="button" style="background-color: #242424;" id="add_new_aptitud">Agregar</button>
             </div>
           </div>

           <!-- Lista -->
             <div class="row">
               <div class="col s12 m7">
                 <table>
                  <thead>
                    <tr>
                        <th data-field="id">Aptitudes</th>
                        <th data-field="name"></th>
                    </tr>
                  </thead>

                  <tbody id="getAptitudes">
                    <?php if ($_smarty_tpl->tpl_vars['aptitud']->value != 0) {?>
                      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['aptitud']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['aptitud']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                      <tr id="habilidad<?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
                        <td class="hover eliminar_habilidad" id="<?php echo $_smarty_tpl->tpl_vars['aptitud']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
"><i class="fa fa-close red-text "></i> <span class="red-text">Eliminar</span></td>
                      </tr>
                      <?php }
}
?>

                    <?php }?>
                  </tbody>
                </table>
               </div>
             </div>

         </div>

       </li>

       <!-- Actividades -->
       <li>
         <div class="collapsible-header active"><i class="fa fa-fire" aria-hidden="true"></i> Actividades</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Indícanos en que actividades le gustaría participar
           </span>

           <!-- Indicadores -->
           <div class="spacing-2"></div>

           <div class="row">
             <div class="col s12">
               <i class="fa fa-square" aria-hidden="true" style="color: #EBA820;"></i>
               <span class="grey-text text-darken-1">Estas participando</span>
             </div>
             <div class="col s12">
               <i class="fa fa-square grey-text" aria-hidden="true"></i>
                <span class="grey-text text-darken-1">No estas participando</span>
             </div>
           </div>

           <div class="row">
             <div class="col s12">

               <ul class="collection" id="lista_actividades_edit">

                 <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad1">
                   <i class="fa fa-microphone activo circle"></i>
                   <span>
                     Proyectos innovadores <br>
                     <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
                   </span>
                 </li>

                 <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad2">
                   <i class="fa fa-users activo circle"></i>
                   <span>
                     Mentoring<br>
                     <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
                   </span>
                 </li>

                 <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad3">
                   <i class="fa fa-pencil circle grey"></i>
                   <span>
                     Asesoramiento<br>
                     <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
                   </span>
                 </li>

                 <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad4">
                   <i class="fa fa-bullhorn circle grey"></i>
                   <span>
                     Formación<br>
                     <small class="grey-text text-darken-2">Impartir charlas y formación</small>
                   </span>
                 </li>

                 <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad5">
                   <i class="fa fa-check circle grey"></i>
                   <span>
                     Contenidos<br>
                     <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
                   </span>
                 </li>

               </ul>

             </div>
           </div>
         </div>
       </li>

       <!-- Descripción -->
       <li>
         <div class="collapsible-header"><i class="fa fa-exclamation" aria-hidden="true"></i> Descripción</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Describe tus habilidades, ha que te dedicas, cuales son tus pasiones o metas.
           </span>
         </div>
       </li>

       <!-- Frase o pensamiento -->
       <li>
         <div class="collapsible-header"><i class="fa fa-paper-plane" aria-hidden="true"></i> Frase o pensamiento propio</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Déjanos una frase o pensamiento propio, cuéntanos si hay algo más que debemos saber de ti
           </span>
         </div>
       </li>

     </ul>
    </div>
  </div><!-- End row-->
</div><!-- End container -->

<?php echo '<script'; ?>
>
$(document).ready(function(){

  $("#aptitud").autocomplete({
    source: "controller/user/traerAptitud.php"
  });

});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/cerrarSesion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/principal/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
