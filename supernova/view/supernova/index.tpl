{include file="view/estructura/header.tpl"}

  <!-- Barra de Navegación -->
    <nav class="navbar navbar-default navbar-personalizado">
      <div class="container">

           <!-- Encabezado y boton para mobie -->
           <div class="navbar-header">
              <a class="navbar-brand" href="">
                  <img src="images/logo_supernova.png" alt="logo supernova" width="200">
              </a>
          </div>

      </div>
    </nav>

    <!-- Mensaje de error-->
    <div class="row" id="message-dialog" hidden="hidden">
        <div class="container">
           <div class="col-xs-12 col-md-10 col-md-offset-1" style="padding-left: 10%;">
               <div class="alert alert-info" role="alert" style="position: absolute; transform: translateY(-35%); top: 0; z-index: 10; width: 80%; padding-left: 2em; background-color: white; border: 1px solid #DDDDDD !important;">
                  <div class="row">
                      <div class="col-xs-11">
                        <span class="message-text">Por favor ingresa los campos obligatorios</span>
                      </div>
                      <div class="col-xs-1">
                          <i class="fa fa-times message-text icon-close" aria-hidden="true"></i>
                      </div>
                  </div>
               </div>
           </div>
        </div>
    </div>

    <div class="spacing-xs"></div>

    <!-- Formulario de Registro -->
    <div class="container">
      <form id="formulario-registro">

        <section class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1">
               <div class="panel panel-default panel-login">
                    <div class="panel-body">
                      <div class="row">
                         <div class="col-xs-12 col-md-10 col-md-offset-1">

                             <!-- Titulo -->
                             <div class="spacing-form hidden-xs"></div>
                             <h1 class="titulo">Registrate en Supernova</h1>

                             <!-- Datos del Formulario-->
                             <div class="row">
                                <div class="col-xs-12 col-sm-6 form-registro">
                                    <h2 class="titulo-2">Datos Empresa</h2>
                                    <input type="text" name="empresa_nom" class="form-control" placeholder="* Nombre empresa / Razón social">
                                    <input type="text" name="empresa_nit" class="form-control" placeholder="* NIT / RUT">
                                    <input type="text" name="empresa_sector" class="form-control" placeholder="* Sector">
                                    <input type="text" name="empresa_ciudad" class="form-control" placeholder="* Ciudad">
                                    <input type="text" name="empresa_web" class="form-control" placeholder="Página web">
                                </div>
                                <div class="col-xs-12 col-sm-6 form-registro">
                                    <h2 class="titulo-2">Datos Persona</h2>
                                    <input type="text" name="user_name" class="form-control" placeholder="* Nombre">
                                    <input type="text" name="user_cargo" class="form-control" placeholder="* Cargo">
                                    <input type="text" name="user_telefono" class="form-control" placeholder="Telefono / Celular">
                                    <input type="text" name="user_email" class="form-control" placeholder="* Email">

                                    <!-- Espaciador-->
                                    <div class="spacing-form hidden-xs"></div>

                                </div>

                             </div>
                             <br>


                             <section class="row">
                                 <div class="col-xs-12 col-md-4">
                                     <!-- Boton de registro-->
                                     <button type="button" class="btn btn-block btn-default btn-register">Continuar</button>
                                 </div>
                             </section>


                             <div class="spacing-xs"></div>

                         </div> <!-- / Fila secundaria-->
                      </div> <!-- / .row -->
                    </div> <!-- / .Panel-body-->
               </div> <!-- / .Panel .Panel-default -->
           </div><!-- / Fila primaria-->
        </section>

      </form>
    </div>


    <div class="container">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <div class="col-xs-6">
          <div class="row" id="load" hidden="hidden">
            <div class="col-xs-5 col-md-3">
              <img src="images/load.gif" alt="load aptitud" width="100%;">
              Enviando...
            </div>
          </div>
        </div>
      </div>

        <section class="row">
           <article class="col-xs-12 col-md-6 col-md-offset-1">
               <span class="bold">¡Contáctanos!</span><br>
               <span class="text-accent">juliana@mentesalacarta.com</span><br>
               <span>316 46 87300</span>
           </article>
           <article class="col-xs-12 col-md-4">
                <section class="row">
                    <article class="col-xs-6 col-md-7">
                        <img src="images/logo_witpick.png" alt="logo witpick" width="150" align="right">
                    </article>
                    <article class="col-xs-6 col-md-5">
                        <img src="images/4.png" alt="grupo multisectorial" width="140" style="margin-top: 1em;">
                    </article>
                </section>

           </article>
        </section>
    </div>


{include file="view/estructura/footer.tpl"}
