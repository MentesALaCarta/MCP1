{include file="view/principal/header.tpl"}

<!-- Login para acceder a mentes a la carta -->

<div class="container">
  <div class="row">
    <div class="col s12">

      <!-- Logo Mentes a la Carta -->
      <div class="row">
        <div class="col s12 center-align">
          <div class="spacing-2"></div>
          <img src="images/bradlogo.png" alt="logo mentes a la carta">
        </div>
      </div>


      <!-- Nombre de usuario -->
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
          <input id="email" type="text" class="validate">
          <label for="email">Correo electrónico</label>
        </div>
      </div>

      <!-- Contraseña -->
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
          <input id="pass" type="password" class="validate">
          <label for="pass">Contraseña</label>
        </div>
      </div>


      <!-- Boton de inicar sesión -->
      <div class="row">
        <div class="col-s12 center-align">
          <a href="?view=panel">
            <button type="button" class="btn waves-effect waves-light amber darken-1" name="button">Iniciar sesión</button>
          </a>
        </div>
      </div>

      <!-- Registrarse -->
      <div class="row">
        <div class="col s12 center-align">
          <div class="spacing-1"></div>
          <span class="text-accent">¿Quieres ser parte de nuestras mentes a la carta? <a href="?view=registrar">Registrarte</a></span>
        </div>
      </div>


    </div><!-- / .Col Principal-->
  </div><!-- / .Row principal-->
</div><!-- / .Container-->

<!-- / End Login mentes a la carta -->

{include file="view/principal/script.tpl"}
