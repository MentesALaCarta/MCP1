{include file="view/principal/header.tpl"}

<!-- Imagen del logo -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <img src="images/bradlogo.png" alt="logo mentes a la carta">
</div>


<!-- Titulo dinamico -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <h3 class="title-orange">¿Qué otras aptitudes tiene tu mente?</h3>

</div>

<div class="row">
  <div class="col s12 m8 offset-m2 l4 offset-l4 center-align">
    <span class="grey-text text-darken-2">
      ¿Cuáles son las áreas de tu profesión en las que te sientes más fuerte?
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
        <li id="step2" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="spacing-2"></div>
<div class="row">
  <div class="input-field col s6 m3 offset-m3">
      <input id="aptitud" value="" type="text" class="validate">
      <label for="aptitud">Aptitud</label>
  </div>
  <div class="col s6 m3">
    <div class="spacing-1"></div>
    <button type="button" class="btn waves-effect waves-light" name="button" style="background-color: #EBA820;" id="add_new_aptitud">Agregar</button>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <table>
       <thead>
         <tr>
             <th data-field="id">Aptitudes</th>
             <th data-field="name">Operaciones</th>
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

<div class="row spacing-bottom">
  <div class="col s6 m4 offset-m2 l3 offset-l3">
    <button id="step2_previous" style="width: 100%; " class="btn waves-effect waves-light grey" type="button"  name="button">Volver</button>
  </div>
  <div class="col s6 l3">
    <button id="step2" style="width: 100%; background-color: #EBA820;" class="btn waves-effect waves-light" type="button"  name="button">
      <span class="hide-on-small-only">¡Vamos al siguiente paso!</span>
      <span class="hide-con-med-and-up">Continuar</span>
    </button>
  </div>
</div>

{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
