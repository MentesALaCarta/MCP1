{include file="view/principal/header.tpl"}

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
          <div class="collapsible-header active"><i class="fa fa-book" aria-hidden="true"></i> Datos generales</div>
          <div class="collapsible-body padding-edit">
            <!-- Descripción de la fase -->
            <span class="grey-text">
              Los siguientes datos nos ayudan a identificar en que proyectos te podemos asignar
            </span>

            <div class="row">
              <div class="col s3 m2">
                <div class="spacing-1"></div>
                <img id="perfil" src="images/{$contacto.imagen}?{time()}" class="circle" alt="Imagen de perfil wit michael" width="100%">
              </div>
            </div>

            <form id="imagen_perfil">
              <div class="row">
                <div class="col s12">
                  <!-- Imagen de perfil -->
                  <div class="row">
                    <div class="col s12">
                        <label class="grey-text text-darken-2">Foto de perfil</label>
                        <div class="file-field input-field">
                          <div class="btn" style="background-color: #EBA820;">
                            <span><i class="fa fa-user" style="font-size: 2rem; color: white;"></i></span>
                            <input type="file" name="imagen_perfil">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" id="seleccion_imagen">
                          </div>
                        </div>
                    </div>

                      <div class="col s12 grey-text text-darken-2">
                        <i class="fa fa-save"></i> <span class="underline" id="actualizar_imagen">Actualizar imagen</span>
                      </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="row">
              <form class="col s12" enctype="multipart/form-data" id="form4">


                <div class="row">

                  <div class="input-field col s12 m6">
                    <input class="grey-text text-darken-1" type="text" id="ciudad" name="ciudad" value="{$contacto.ciudad}">
                    <label for="ciudad" class="black-text">¿En qué ciudad vives?</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input class="grey-text text-darken-1" type="text" id="Telefono" name="tel" value="{$contacto.tel}">
                    <label class="black-text" for="Telefono">Teléfono móvil</label>
                  </div>

                  <div class="input-field col s12">
                    <input class="grey-text text-darken-1" type="text" id="pais" name="pais" value="{$contacto.pais}">
                    <label class="black-text" for="pais">¿En que país vives?</label>
                  </div>

                  <div class="input-field col s12">
                    <textarea maxlength="144" id="tweets" class="materialize-textarea grey-text text-darken-1" name="tweets">{$contacto.tweets}</textarea>
                    <label class="black-text" for="tweets">Describete en <span class="text-accent">(<span id="pre-des">144</span>)</span> caracteres</label>
                  </div>

                  <div class="input-field col s12">
                    <textarea id="textarea" class="materialize-textarea grey-text text-darken-1" name="area">{$contacto.des}</textarea>
                    <label class="black-text" for="textarea">Déjanos una frase o pensamiento propio o cuéntanos si hay algo más que debemos saber de ti</label>
                  </div>

                  <!-- Idiomas -->
                  <div class="input-field col s6 m6">
                    <input id="idiomas" value="" type="text" class="validate">
                    <label for="idiomas" class="black-text">¿Qué idiomas hablas?</label>
                  </div>
                  <div class="col s6 m3">
                    <div class="spacing-1"></div>
                    <button type="button" class="btn waves-effect waves-light" name="button" style="background-color: #EBA820;" id="add_new_idioma">Agregar</button>
                  </div>

                  <div class="col s12 m8">
                    <table>
                      <thead>
                        <tr>
                          <th>Idiomas</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody id="getIdiomas">
                        {if $idiomas != 0}
                          {for $i = 0 to count($idiomas) - 1}
                          <tr id="habilidad{$idiomas[$i][0]}">
                            <td>{$idiomas[$i][1]}</td>
                            <td class="hover eliminar_idioma" id="{$idiomas[$i][0]}"><i class="fa fa-close red-text "></i> <span class="red-text">Eliminar</span></td>
                          </tr>
                          {/for}
                        {/if}
                      </tbody>
                    </table>
                  </div>


                </div>
              </form>
            </div>

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
                {for $i = 0 to count($experiencia) -1}
                <tr>
                  <td>{ucfirst($experiencia[$i][1])}</td>
                  <td><i class="fa fa-pencil text-grey" aria-hidden="true"></i> <span class="underline text-grey editar_empresa" id="{$experiencia[$i][0]}">Editar</span></td>
                  <td><i class="fa fa-trash text-grey" aria-hidden="true"></i> <span class="underline text-grey eliminar_empresa" id="{$experiencia[$i][0]}">Eliminar</span></td>
                </tr>
                {/for}
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
                    {if $aptitud != 0}
                      {for $i = 0 to count($aptitud) - 1}
                      <tr id="habilidad{$aptitud[$i][0]}">
                        <td>{$aptitud[$i][1]}</td>
                        <td class="hover eliminar_habilidad" id="{$aptitud[$i][0]}"><i class="fa fa-close red-text "></i> <span class="red-text">Eliminar</span></td>
                      </tr>
                      {/for}
                    {/if}
                  </tbody>
                </table>
               </div>
             </div>

         </div>

       </li>

       <!-- Actividades -->
       <li>
         <div class="collapsible-header"><i class="fa fa-fire" aria-hidden="true"></i> Actividades</div>
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
              <!-- Declaracion de variables -->
              {$actividad1 = 'Proyectos innovadores'}
              {$actividad2 = 'Mentoring'}
              {$actividad3 = 'Asesoramiento'}
              {$actividad4 = 'Formación'}
              {$actividad5 = 'Contenidos'}


               <ul class="collection" id="lista_actividades_edit">
                 <!-- Actividad 1-->
                 {if strpos($brains, $actividad1) === false}
                   <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad1">
                     <i class="fa fa-microphone circle"></i>
                     <span>
                       Proyectos innovadores <br>
                       <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
                     </span>
                   </li>
                 {else}
                     <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad1">
                       <i class="fa fa-microphone activo circle"></i>
                       <span>
                         Proyectos innovadores <br>
                         <small class="grey-text text-darken-2">Participar en proyectos innovadores</small>
                       </span>
                     </li>
                 {/if}


                 <!-- Actividad 2-->
                 {if strpos($brains, $actividad2) === false}
                     <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad2">
                       <i class="fa fa-users circle"></i>
                       <span>
                         Mentoring<br>
                         <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
                       </span>
                     </li>

                 {else}
                     <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad2">
                       <i class="fa fa-users activo circle"></i>
                       <span>
                         Mentoring<br>
                         <small class="grey-text text-darken-2">Ser mentor de emprendimientos y proyectos innovadores</small>
                       </span>
                     </li>
                 {/if}

                 <!-- Actividad 3-->
                 {if strpos($brains, $actividad3) === false}
                   <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad3">
                     <i class="fa fa-pencil circle grey"></i>
                     <span>
                       Asesoramiento<br>
                       <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
                     </span>
                   </li>
                 {else}
                     <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad3">
                       <i class="fa fa-pencil activo circle grey"></i>
                       <span>
                         Asesoramiento<br>
                         <small class="grey-text text-darken-2">Brindar asesoría a empresas y emprendedores</small>
                       </span>
                     </li>
                 {/if}

                 <!-- Actividad 4-->
                 {if strpos($brains, $actividad4) === false}
                   <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad4">
                     <i class="fa fa-bullhorn circle grey"></i>
                     <span>
                       Formación<br>
                       <small class="grey-text text-darken-2">Impartir charlas y formación</small>
                     </span>
                   </li>
                 {else}
                     <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad4">
                       <i class="fa fa-bullhorn activo circle grey"></i>
                       <span>
                         Formación<br>
                         <small class="grey-text text-darken-2">Impartir charlas y formación</small>
                       </span>
                     </li>
                 {/if}

                 <!-- Actividad 5-->
                 {if strpos($brains, $actividad5) === false}
                     <li class="hover grey-hover collection-item avatar actividad_inactivo" id="actividad5">
                       <i class="fa fa-check circle grey"></i>
                       <span>
                         Contenidos<br>
                         <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
                       </span>
                     </li>

                 {else}
                     <li class="hover grey-hover collection-item avatar actividad_activo" id="actividad5">
                       <i class="fa fa-check activo circle grey"></i>
                       <span>
                         Contenidos<br>
                         <small class="grey-text text-darken-2">Generar contenido escrito o audiovisual</small>
                       </span>
                     </li>
                 {/if}


               </ul>

             </div>
           </div>
         </div>
       </li>

     </ul>
    </div>
  </div><!-- End row-->
</div><!-- End container -->

<script>
$(document).ready(function(){

  $("#aptitud").autocomplete({
    source: "controller/user/traerAptitud.php"
  });

});
</script>

{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
