{include file="view/principal/header.tpl"}

<!-- Imagen del logo -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <img src="images/bradlogo.png" alt="logo mentes a la carta">
</div>


<!-- Titulo dinamico -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <h3 class="title-orange">¿En donde esta tu mente?</h3>

</div>


<div class="row">
  <div class="col s12 m8 offset-m2 l4 offset-l4 center-align">
    <span class="grey-text text-darken-2">
      La información que te pedimos en esta sección es de vital importancia para que tu mente pueda ser seleccionada en diversos proyectos.
    </span>
  </div>
</div>


<div class="row">
  <div class="col s12 m12 l8 offset-l2">
    <div class="spacing-1"></div>
    <!-- Progress bar -->
    <div class="container">
      <ul class="progressbar">
        <li id="step1" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Experiencia</span></li>
        <li id="step2"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<form name="step1" id="step1_form" >

  <div id="experience">

    {if $experience != 0 }
    <div id="experience_item0">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 item_experence">

            <!-- Bottom eliminar -->
            <div class="col s12 right-align" id="eliminar_1">
              <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
            </div>

            <!-- Datos form -->
            <div class="row">

              <!-- company name -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="company" type="text" value="{$experience[0][1]}" class="validate" name="company[0]">
                <label for="company">Empresa</label>
              </div>

              <!-- Sector -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="sector" type="text" value="{$experience[0][2]}" class="validate" name="sector[0]">
                <label for="sector">Sector</label>
              </div>

              <!-- Cargo -->
              <div class="input-field col s6">
                <input id="position" type="text" value="{$experience[0][3]}" class="validate" name="position[0]">
                <label for="position">Cargo</label>
              </div>

              <!-- Pais -->
              <div class="input-field col s6">
                <input id="country" type="text" value="{$experience[0][4]}" class="validate" name="country[0]">
                <label for="country">País</label>
              </div>

            </div><!-- / End Row datos form -->
          </div><!-- / Columnas del contendor principal-->
        </div><!-- Row contenedor principal -->
      </div><!-- / End Container -->
    </div> <!-- / Item  -->

    {if count($experience) > 1}

      {for $i = 1 to count($experience) -1}

      <div id="experience_item{$experience[$i][0]}">
        <div class="container">
          <div class="row">
            <div class="col s12 m10 offset-m1 item_experence">

              <!-- Bottom eliminar -->
              <div class="col s12 right-align">
                <a class="delete_experience hover red-text" id="{$experience[$i][0]}"><i class="fa fa-close"></i></a>
              </div>

              <!-- Datos form -->
              <div class="row">

                <!-- company name -->
                <div class="input-field col s6">
                  <div class="spacing-2"></div>
                  <input id="company" type="text" value="{$experience[$i][1]}" class="validate" name="company[{$i}]">
                  <label for="company">Nombre de la empresa</label>
                </div>

                <!-- Sector -->
                <div class="input-field col s6">
                  <div class="spacing-2"></div>
                  <input id="sector" type="text" value="{$experience[$i][2]}" class="validate" name="sector[{$i}]">
                  <label for="sector">Sector</label>
                </div>

                <!-- Cargo -->
                <div class="input-field col s6">
                  <input id="position" type="text" value="{$experience[$i][3]}" class="validate" name="position[{$i}]">
                  <label for="position">Cargo</label>
                </div>

                <!-- Pais -->
                <div class="input-field col s6">
                  <input id="country" type="text" value="{$experience[$i][4]}" class="validate" name="country[{$i}]">
                  <label for="country">País</label>
                </div>

              </div><!-- / End Row datos form -->
            </div><!-- / Columnas del contendor principal-->
          </div><!-- Row contenedor principal -->
        </div><!-- / End Container -->
      </div> <!-- / Item  -->
      {/for}

    {/if}

    {else}

    <div id="experience_item0">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 item_experence">

            <!-- Bottom eliminar -->
            <div class="col s12 right-align" id="eliminar_1" hidden="hidden">
              <a class="delete_experience hover red-text" id="0"><i class="fa fa-close"></i></a>
            </div>

            <!-- Datos form -->
            <div class="row">

              <!-- company name -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="company" type="text" class="validate" name="company[0]">
                <label for="company">Nombre de la empresa</label>
              </div>

              <!-- Sector -->
              <div class="input-field col s6">
                <div class="spacing-2"></div>
                <input id="sector" type="text" class="validate" name="sector[0]">
                <label for="sector">Sector</label>
              </div>

              <!-- Cargo -->
              <div class="input-field col s6">
                <input id="position" type="text" class="validate" name="position[0]">
                <label for="position">Cargo</label>
              </div>

              <!-- Pais -->
              <div class="input-field col s6">
                <input id="country" type="text" class="validate" name="country[0]">
                <label for="country">País</label>
              </div>

            </div><!-- / End Row datos form -->
          </div><!-- / Columnas del contendor principal-->
        </div><!-- Row contenedor principal -->
      </div><!-- / End Container -->
    </div> <!-- / Item  -->
    {/if}


  </div> <!-- /. Experience -->

    <div class="row">
      <div class="col s12 m3 offset-m2 ">
        <a id="add_new_experience" class="hover" style="color: #EBA820 !important;">Agregar otra experiencia</a>
      </div>
    </div>

  <div class="row">
    <div class="col s12 center-align">
      <div class="spacing-1"></div>
      <button id="step1" class="btn waves-effect waves-light orange" type="button"  name="button">Siguiente</button>
    </div>
  </div>


</form>

<div class="spacing-2"></div>

{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
