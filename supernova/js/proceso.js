/* Funcionalidad de la página como envio de formularios y efectos */

var usuarios = 2;

// Evento que permite cerrar la ventana de error
$('.icon-close').click(function(){
    
    $('#message-dialog').hide();
    
});


// Evento que permite agregar un nuevo usuario
$('#agregar').click(function(){
    
   if(!(usuarios > 5)){
        $('#nuevos-usuarios').append('<h2 class="titulo-2">Persona ' + usuarios + '</h2><input type="text" class="form-control" placeholder="Nombre"><input type="text" class="form-control" placeholder="Cargo"><input type="text" class="form-control" placeholder="Telefono / Celular"><input type="text" class="form-control" placeholder="Email">');
        
        usuarios++;
       
   }
    
});