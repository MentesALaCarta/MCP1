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


// Registro de solicitud
$('.solicitud').click(function(){

  // Leemos la variable
  var email = $('#email').val();

  $.ajax({
    method: 'POST',
    url: 'controller/solicitud/setSolicitud.php',
    data: {email: email},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      if(res == 'error_1'){
        swal('Correo electrónico obligatorio', 'por favor ingresa un correo electrónico válido', 'warning');
      }else if(res == 'error_2'){
        swal('Gracias', 'Recibimos satisfactoriamente tu correo electrónico pronto nos contactaremos contigo', 'success');
      }else{
        $('#email').val('');
        swal('Gracias', 'Se ha registrado la solicitud correctamente', 'success');
      }
    }

  })
});


// COntinual con los requisitos
$('.continuar').click(function(){

  if($('#requisito1').prop('checked') && $('#requisito2').prop('checked') && $('#requisito3').prop('checked') && $('#requisito4').prop('checked')){
    $.ajax({
      method: 'POST',
      url: 'controller/user/pasar.php',
      success: function(res){
        window.location.href=res;
      }
    });
  }else{
    swal('Requisitos obligatorios', 'Debes cumplir con todos los requisitos encionados, sino cumples con ellos puedes dejarnos tu correo electrónico para comunicarnos contigo.', 'error');
  }

});


$('.btn-register').click(function(){
  $.ajax({
    method: 'POST',
    url: 'controller/user/registrar.php',
    data: $('#formulario-registro').serialize(),
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      if(res == 'error_1'){
        swal('Campos requeridos', 'Por favor ingresa todos los campos marcados (*)', 'warning');
      }else if(res == 'error_2'){
         swal('Empresa registrada', 'La empresa que ingresaste ya se encuentra registrada', 'error');
      }else{
        swal({
          title: 'Registro exitoso',
          text: 'Gracias por registrarte en Supernova, solo falta un paso, realizar el test de ADNe',
          confirmButtonText: "¡Realizar test!",
          type: 'success'
        }, function(){
          window.location.href="https://docs.google.com/forms/d/e/1FAIpQLSfjAis-ZKK_fx6CrQ8RDJ-VeVxBD3pDhrk7mb_m47_wMLucxA/viewform";
        });
      }
    }
  });

});
