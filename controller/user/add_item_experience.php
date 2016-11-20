<?php
  $contador = $_POST['contador'];
?>
<div id="experience_item<?php echo $contador; ?>">
  <div class="container">
    <div class="row">
      <div class="col s12 m10 offset-m1 item_experence">

        <!-- Bottom eliminar -->
        <div class="col s12 right-align">
          <a class="delete_experience hover red-text" id="<?php echo $contador; ?>"><i class="fa fa-close"></i></a>
        </div>

        <!-- Datos form -->
        <div class="row">

          <!-- company name -->
          <div class="input-field col s6">
            <div class="spacing-2"></div>
            <input id="company" type="text" class="validate" name="company[<?php echo $contador; ?>]">
            <label for="company">Nombre de la empresa</label>
          </div>

          <!-- Sector -->
          <div class="input-field col s6">
            <div class="spacing-2"></div>
            <input id="sector" type="text" class="validate" name="sector[<?php echo $contador; ?>]">
            <label for="sector">Sector</label>
          </div>

          <!-- Cargo -->
          <div class="input-field col s6">
            <input id="position" type="text" class="validate" name="position[<?php echo $contador; ?>]">
            <label for="position">Cargo</label>
          </div>

          <!-- Pais -->
          <div class="input-field col s6">
            <input id="country" type="text" class="validate" name="country[<?php echo $contador; ?>]">
            <label for="country">País</label>
          </div>

        </div><!-- / End Row datos form -->
      </div><!-- / Columnas del contendor principal-->
    </div><!-- Row contenedor principal -->
  </div><!-- / End Container -->
</div> <!-- / Item  -->
