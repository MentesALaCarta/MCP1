<?php
/* Smarty version 3.1.30, created on 2016-11-22 15:44:13
  from "/opt/lampp/htdocs/mentes/supernova/view/supernova/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583459bd142aa9_91317799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef417e988bff1bc79c21a4fe19170177d50fb3c' => 
    array (
      0 => '/opt/lampp/htdocs/mentes/supernova/view/supernova/index.tpl',
      1 => 1473823534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/estructura/header.tpl' => 1,
    'file:view/estructura/footer.tpl' => 1,
  ),
),false)) {
function content_583459bd142aa9_91317799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/estructura/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
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
                                    <input type="text" class="form-control" placeholder="Nombre empresa / Razón social">
                                    <input type="text" class="form-control" placeholder="NIT / RUT">
                                    <input type="text" class="form-control" placeholder="Sector">
                                    <input type="text" class="form-control" placeholder="Ciudad">
                                    <input type="text" class="form-control" placeholder="Página web">
                                </div>
                                <div class="col-xs-12 col-sm-6 form-registro">
                                    <h2 class="titulo-2">Datos Persona</h2>
                                    <input type="text" class="form-control" placeholder="Nombre">
                                    <input type="text" class="form-control" placeholder="Cargo">
                                    <input type="text" class="form-control" placeholder="Telefono / Celular">
                                    <input type="text" class="form-control" placeholder="Email">
                                    
                                   <!-- <div class="form-registro" id="nuevos-usuarios"></div>
      
                                    <span class="agregar">
                                        <i class="fa fa-user-plus icon-add" aria-hidden="true"></i>
                                        <span href="#" class="accent-blue" id="agregar">Agregar otra persona</span>
                                    </span>-->
                                    
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
    </div>
    
    <div class="container">
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


<?php $_smarty_tpl->_subTemplateRender("file:view/estructura/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
