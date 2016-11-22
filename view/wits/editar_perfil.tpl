{include file="view/principal/header.tpl"}

<div class="container">

  <div class="spacing-3">
  </div>

  <div class="row">
    <div class="col s12 center-align">
      <h4>Editar perfil</h4>
    </div>
  </div>



  <div class="row">
    <div class="col s12 m10 offset-m1">
      <ul class="collapsible popout" data-collapsible="accordion">
       <li>
         <div class="collapsible-header active"><i class="fa fa-briefcase" aria-hidden="true"></i> Experiencia</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Queremos conocer tu experiencia para así mismo asignarte en los proyectos en los cuales te puedas desempeñar mejor
           </span>

            <div class="spacing-1"></div>

            <!-- Formulario -->
            <form id="form_dd_empresa">
              <div class="row">
                <input type="text" id="identificador" hidden="hidden">

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
                <div class="col s12 black-text">
                  <i class="fa fa-floppy-o" aria-hidden="true"></i> <span class="underline"> Guardar experiencia </span>
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

              <tbody>
                {for $i = 0 to count($experiencia) -1}
                <tr>
                  <td>{$experiencia[$i][1]}</td>
                  <td><i class="fa fa-pencil" aria-hidden="true"></i> <span class="underline editar_empresa" id="{$experiencia[$i][0]}">Editar</span></td>
                  <td><i class="fa fa-trash" aria-hidden="true"></i> <span class="underline eliminar_empresa" id="{$experiencia[$i][0]}">Eliminar</span></td>
                </tr>
                {/for}
              </tbody>
            </table>

         </div>
       </li>
       <li>
         <div class="collapsible-header"><i class="fa fa-child" aria-hidden="true"></i> Aptitudes</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Hablenos de sus aptitudes para resaltar lo mejor de usted.
           </span>
         </div>
       </li>
       <li>
         <div class="collapsible-header"><i class="fa fa-fire" aria-hidden="true"></i> Actividades</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Indícanos en que actividades le gustaría participar
           </span>
         </div>
       </li>
       <li>
         <div class="collapsible-header"><i class="fa fa-exclamation" aria-hidden="true"></i> Descripción</div>
         <div class="collapsible-body padding-edit">
           <!-- Descripción de la fase -->
           <span class="grey-text">
             Describe tus habilidades, ha que te dedicas, cuales son tus pasiones o metas.
           </span>
         </div>
       </li>
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


{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
