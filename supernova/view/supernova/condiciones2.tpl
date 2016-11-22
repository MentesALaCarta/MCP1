{include file="view/estructura/header.tpl"}
<div class="container">


  <div class="row">
    <div class="col-xs-8">
      <div class="spacing-3"></div>
      <img src="images/logo_supernova.png" alt="logo supernova" width="200">
    </div>
  </div>


  <div class="row">
    <div class="col-xs-12">
      <div class="spacing-2">

      </div>
      <span class="strong">
        La empresa debe cumple con los siguientes requisitos para participar como beneficiario de Supernova Fábrica de Innovación
      </span>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="spacing-2">

      </div>
      <div class="form-group">
        <input id="requisito1" type="checkbox" name="item1" value="requisito1">
        <label for="requisito1">Está registrada en la Cámara de comercio de Cali</label>
      </div>
      <div class="form-group">
        <input id="requisito2" type="checkbox" name="item2" value="requisito1">
        <label for="requisito2">Cuenta con la matrícula mercantil renovada</label>
      </div>
      <div class="form-group">
        <input id="requisito3" type="checkbox" name="item3" value="requisito1">
        <label for="requisito3">Tiene 10 o menos empleados</label>
      </div>
      <div class="form-group">
        <input id="requisito4" type="checkbox" name="item4" value="requisito1">
        <label for="requisito4">Tiene 500 o menos SMLV en activos totales</label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="spacing-3"></div>
        <button type="button" class="btn btn-warning continuar" name="button">Continuar</button>
    </div>
  </div>


  <!-- Logo y formulario -->

    <div class="row">
      <div class="spacing-2">

      </div>
      <div class="col-xs-12 col-md-6">
        <div class="row">
          <div class="col-xs-12">
            <span class="strong">
              ¿No comples con los requisitos?
            </span><br>
            <span>Ingresa tu correo electrónico y nos comunicaremos contigo</span>
          </div>
          <div class="col-xs-8">
            <div class="spacing-3"></div>
            <input type="text" id="email" class="form-control" name="name" placeholder="Correo electrónico">
          </div>
          <div class="col-xs-4">
            <button type="button" class="btn btn-primary solicitud" name="button">Solicitar</button>
          </div>
        </div>
        <div class="row" id="load" hidden="hidden">
            <div class="col-xs-2 col-md-1">
              <img src="images/load.gif" alt="load aptitud" width="100%;">
              Enviando...
            </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="row">
          <div class="spacing-1">

          </div>
          <div class="col-xs-4 col-xs-offset-4">
            <img src="images/logo_witpick.png" alt="logo witpick mentes a la carta" width="100%"/>
          </div>
          <div class="col-xs-4">
            <div class="spacing-1"></div>
            <img src="images/multisectorial.png" alt="logo witpick mentes a la carta" width="100%"/>
          </div>
        </div>
      </div>
    </div>

</div>

{include file="view/estructura/footer.tpl"}
