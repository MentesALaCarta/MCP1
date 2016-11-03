{include file="view/principal/header.tpl"}

<div class="container">

  <!-- Imagen del logo -->
  <div class="row col s8 offset-s2 center-align">
    <div class="spacing-2"></div>
      <img src="images/bradlogo.png" alt="logo mentes a la carta">
  </div>

  <div class="row">
    <div class="spacing-2"></div>
    <div class="col s12 center-align">
      <h3 class="grey-text text-darken-4">Regístrate como Wit</h3>
    </div>


    <!-- Nombre -->
    <div class="input-field col s12 m4 offset-m2">
      <input id="nombres" type="text" class="validate">
      <label for="nombres">Nombres</label>
    </div>

    <!-- Apellidos -->
    <div class="input-field col s12 m4 ">
      <input id="apellidos" type="text" class="validate">
      <label for="apellidos">Apellidos</label>
    </div>

    <!-- Email -->
    <div class="input-field col s12 m4 offset-m2">
      <input id="email" type="text" class="validate">
      <label for="email">Dirección de correo electrónico</label>
    </div>

    <!-- Contraseña -->
    <div class="input-field col s12 m4">
      <input id="clave" type="password" class="validate">
      <label for="clave">Contraseña</label>
    </div>

    <div class="container" id="load" hidden="hidden">
      <div class="col s2 offset-s5 m1 offset-m5">
        <img src="images/perfiles/load.gif" alt="load aptitud" width="100%;">
      </div>
    </div>

    <div class="col s12 center-align">
      <span class="grey-text text-darken-1">Al inscribirte aceptas <a href="#">los términos y condiciones de servicio</a></span>
    </div>



    <div class="col s12 center-align">
      <div class="spacing-1"></div>
      <button id="registrar" class="btn waves-effect waves-light orange" type="button"  name="button">¡Sigamos!</button>
    </div>


  </div>

</div>

{include file="view/principal/script.tpl"}
