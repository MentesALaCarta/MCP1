<?php
  $contador = $_POST['contador'];
?>

<!-- company name -->
<div class="row" id="experience_item<?php echo $contador; ?>">
  <div class="container">
    <div class="divider"></div>
    <div class="spacing-2">

    </div>
    <div class="col s12 right-align">
      <a class="delete_experience hover red-text" id="<?php echo $contador; ?>"><i class="fa fa-close"></i></a>
    </div>
  </div>


  <div class="input-field col s6 m4 offset-m2">
    <div class="spacing-2"></div>
    <input id="company" type="text" class="validate" name="company[<?php echo $contador; ?>]">
    <label for="company">Nombre de la empresa</label>
  </div>

  <div class="input-field col s6 m4">
    <div class="spacing-2"></div>
    <input id="sector" type="text" class="validate" name="sector[<?php echo $contador; ?>]">
    <label for="sector">Sector</label>
  </div>

  <div class="input-field col s6 m4 offset-m2">
    <input id="position" type="text" class="validate" name="position[<?php echo $contador; ?>]">
    <label for="position">Cargo</label>
  </div>

  <div class="input-field col s6 m4">
    <input id="country" type="text" class="validate" name="country[<?php echo $contador; ?>]">
    <label for="country">Pais</label>
  </div>


</div>
