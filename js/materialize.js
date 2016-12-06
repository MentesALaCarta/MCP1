$(".button-collapse").sideNav({
    closeOnClick: true
});
$(".button-collapse").show();


/*Slider 1*/
 var slides = $('#slider-1').find('div').length;
 var next = 0;

/*Slider 2*/
 var slides2 = $('#slider-2').find('div').length;

/*Slider 3*/
 var slides3 = $('#slider-3').find('div').length;
 var next3 = 0;



//Slider
var pasar_slider;
 var pasar =  function(){

         $('#slider-1').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    if(index + 1 < slides )
                        {
                            $($('#slider-1').find('.s_element').get(index + 1)).addClass('s_visible animated fadeIn');

                        }else{
                            $($('#slider-1').find('.s_element').get(0)).addClass('s_visible animated fadeIn');
                        }


                    return false;
                }

        });


    }

 //Slider 2
 var pasar_slider2;
 var pasar2 =  function(){

         $('#slider-2').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    if(index + 1 < slides2 )
                        {
                            $($('#slider-2').find('.s_element').get(index + 1)).addClass('s_visible animated fadeIn');

                        }else{
                            $($('#slider-2').find('.s_element').get(0)).addClass('s_visible animated fadeIn');
                        }


                    return false;
                }

        });


    }

 //Slider 3
 var pasar_slider3;
 var pasar3 =  function(){

         $('#slider-3').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    if(index + 1 < slides3 )
                        {
                            $($('#slider-3').find('.s_element').get(index + 1)).addClass('s_visible animated fadeIn');

                        }else{
                            $($('#slider-3').find('.s_element').get(0)).addClass('s_visible animated fadeIn');
                        }


                    return false;
                }

        });


    }

$(document).ready(function(){
    $('.slider').slider({full_width: true});
    $('.carousel').carousel();
    $('ul.tabs').tabs();
    pasar_slider  = setInterval(pasar, 4000);
    pasar_slider2  = setInterval(pasar2, 4000);
    pasar_slider3  = setInterval(pasar3, 4000);
    setInterval(function(){
        $('.carousel').carousel('next',1); // Move next n times.
    }, 3000);

});


$('#btn_siguiente').click(function(){
  clearInterval(pasar_slider);
  pasar();
}); //End Function btn_seiguiente Click

$('#btn_anterior').click(function(){

        $('#slider-1').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    if(index == 0)
                        {
                            console.log('Slide equivale a ' + slides);
                            $($('#slider-1').find('.s_element').get(slides - 1)).addClass('s_visible animated fadeIn');
                        }else{
                             $($('#slider-1').find('.s_element').get(index - 1)).addClass('s_visible animated fadeIn');
                        }
                           return false;
                }

        });

        clearInterval(pasar_slider);

    });


$('#btn_siguiente_2').click(function(){
  pasar2();
  clearInterval(pasar_slider2);
}); //End Function btn_seiguiente Click


$('#btn_anterior_2').click(function(){

        $('#slider-2').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    if(index == 0)
                        {
                            $($('#slider-2').find('.s_element').get(slides2  - 1)).addClass('s_visible animated fadeIn');
                        }else{
                             $($('#slider-2').find('.s_element').get(index - 1)).addClass('s_visible animated fadeIn');
                        }
                           return false;
                }

        });
        clearInterval(pasar_slider2);
    });


/*End Slider*/


/*Slider 3 Boton Siguiente y Retroceso*/

$('#btn_siguiente_3').click(function(){
  pasar3();
  clearInterval(pasar_slider3);
}); //End Function btn_seiguiente Click

$('#btn_anterior_3').click(function(){

  $('#slider-3').find('div').each(

    function(index, value){
      if($(this).hasClass('s_visible'))
      {
        $(this).removeClass('animated fadeIn s_visible');

        console.log(index);
        if(index == 0)
        {
          $($('#slider-3').find('.s_element').get(slides3 - 1)).addClass('s_visible animated fadeIn');
        }else{
          $($('#slider-3').find('.s_element').get(index - 1)).addClass('s_visible animated fadeIn');
        }
        return false;
      }

    });

    clearInterval(pasar_slider3);

});

$(window).scroll(function(){
   var banner = $("#home").height();
   if($(document).scrollTop() > (banner - 100)){
       $('#menu').addClass('grey-text text-darken-3');
       $('#logo-principal').hide();
       $('#logo-principal-2').show();
   }else{
       $('#menu').removeClass('grey-text text-darken-3');
       $('#menu').addClass('white-text');
       $('#logo-principal').show();
       $('#logo-principal-2').hide();
   }

   // Servicios Fijos
    var fijos = $('#section-innovafacil');
    var posi_fijo = fijos.position();
    var scrollVal = $(document).scrollTop();

    if((scrollVal + 50) > posi_fijo.top){
       $('#services').show();
    }else{
        $('#services').hide();
    }

});

$('.innovafacil').click(function(){
    var vaya = $('#section-innovafacil');
    var posicion = vaya.position();
    $('body, html').animate({
        scrollTop: posicion.top
    }, 1000);
    /*$(document).scrollTop(posicion.top);*/
});

$('.proyecto_innovacion').click(function(){
    var vaya = $('#section-proyectos_innovacion');
    var posicion = vaya.position();
    $('body, html').animate({
        scrollTop: posicion.top
    }, 1000);

});

$('.conocimiento_carta').click(function(){
    var vaya = $('#section-conocimiento_carta');
    var posicion = vaya.position();
    $('body, html').animate({
        scrollTop: posicion.top
    }, 1000);

});

$('.nuestras_mentes').click(function(){
    var vaya = $('#mentes_a_la_carta');
    var posicion = vaya.position();
    $('body, html').animate({
        scrollTop: posicion.top - 20
    }, 1000);

});

$('.inicio').click(function(){
    $('body, html').animate({
        scrollTop: 0
    }, 1000);

});


$('#registrar').click(function(){

  // Lectura de variables
  var nombres = $('#nombres').val();
  var apellidos = $('#apellidos').val();
  var email = $('#email').val();
  var clave = $('#clave').val();

  $.ajax({
    method: 'POST',
    url: 'controller/user/registrar.php',
    data: {nombres: nombres, apellidos: apellidos, email: email, clave: clave},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(respuesta){
      $('#load').hide();
      if(respuesta == 'error_1'){
        swal('', 'Por favor ingresa todos los campos', 'warning');
      }else if(respuesta == 'error_2'){
        swal('', 'El correo electrónico que ingresaste ya se encuentra registrado', 'warning');
      }else{
        window.location.href=respuesta;
      }

    }
  });
});


$(document).on('click', '#step1', function(){

  $.ajax({
    method: 'POST',
    url: 'controller/user/step1.php',
    data: $('#step1_form').serialize(),
    success: function(answer){
      location.reload();
    }
  });

});

var contador = 0;
$(document).on('click', '#add_new_experience', function(){
  contador++;
  $.ajax({
    method: 'post',
    url: 'controller/user/add_item_experience.php',
    data: {contador: contador},
    success: function(answer){
      $('#eliminar_1').show();
      $('#experience').append(answer);
    }
  });
});

$(document).on('click', '.delete_experience', function(){
    contador--;
    var id = $(this).attr('id');
    $('#experience_item'+id).remove();
});

$(document).on('click', '#step2_previous', function(){
  $.ajax({
    method: 'post',
    url: 'controller/user/step2_previous.php',
    success: function(answer){
      location.reload();
    }
  });
});

$(document).on('click', '#step3_previous', function(){
  $.ajax({
    method: 'post',
    url: 'controller/user/step3_previous.php',
    success: function(answer){
      location.reload();
    }
  });
});

$(document).on('click', '#step4_previous', function(){
  $.ajax({
    method: 'post',
    url: 'controller/user/step4_previous.php',
    success: function(answer){
      location.reload();
    }
  });
});


$(document).on('click', '#step2', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/user/step2.php',
    success: function(answer){
        location.reload();
    }
  });
});


$(document).on('click', '.area', function(){
  var id = $(this).attr('id');
  if($('#'+id).hasClass('area_active')){
    $('#'+id).removeClass('area_active');
  }else{
    $('#'+id).addClass('area_active');
  }
});


$(document).on('click', '#step3', function(){

  if($('#item1').hasClass('area_active')){
    $('#services1').val('Proyectos innovadores');
  }

  if($('#item2').hasClass('area_active')){
    $('#services2').val('Mentoring');
  }

  if($('#item3').hasClass('area_active')){
    $('#services3').val('Asesoramiento');
  }

  if($('#item4').hasClass('area_active')){
    $('#services4').val('Formaci&oacute;n');
  }

  if($('#item5').hasClass('area_active')){
    $('#services5').val('Contenidos');
  }

  $.ajax({
    method: 'POST',
    url: 'controller/user/step3.php',
    data: $('#form_services').serialize(),
    success: function(answer){
      if(answer == 'error_1'){
        swal('', 'Por favor selecciona almenos una opción', 'warning');
      }else{
        location.reload();
      }
    }
  });
});

$(document).on('click', '#close-sesion', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/user/cerrarSesion.php',
    success: function(res){
      window.location.href=res;
    }
  });
});


$(document).on('click', '#step4', function(){

  var formData = new FormData(document.getElementById("form4"));

  $.ajax({
    method: 'POST',
    url: 'controller/user/step4.php',
    data: formData,
    dataType: "html",
    contentType: false,
    processData: false,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(answer){
      $('#load').hide();

      if(answer == 'error_2'){
        swal('', 'Por favor selecciona una imagen', 'error');
      }else{
        swal({
          title: 'Gracias',
          text: 'Te has registrado satisfactoriamente en Mentes a la carta, revizaremos tu datos para validar tu mente, seras notificado cuando sea aprobado tu perfil.',
          type: 'success'
        }, function(){
          window.location.href= answer;
        });
      }
    }
  });

});

function setAptitud(){
  var aptitud = $('#aptitud').val();

  $.ajax({
    method: 'POST',
    url: 'controller/user/validarDes.php',
    data: {des: aptitud},
    success: function(answer) {
      if(answer == 'error_1'){
        swal('', 'Por favor ingresa una aptitud', 'warning');
      }else{

        $.ajax({
          method: 'POST',
          url: 'controller/user/setAptitud.php',
          data: {aptitud: aptitud},
          beforeSend: function(){
            $('#getAptitudes').html('<div class="container" id="load"><div class="col s2 offset-s7"><img src="images/perfiles/load.gif" alt="load aptitud" width="100%;"></div></div>');
          },
          success: function(answer){
            $('#load').remove();
            $('#aptitud').val('')
            $('#getAptitudes').html(answer);
          }
        });

      }
    }
  });



}


$('#add_new_aptitud').click(function(){
  setAptitud();
});


$('#aptitud').keyup(function(e){
  if(e.which == 13){
    setAptitud();
  }
});


$(document).on('click', '.eliminar_habilidad', function(){
  var id = $(this).attr('id');
  $.ajax({
    method: 'POST',
    url: 'controller/user/deleteHabilidad.php',
    data: {id: id},
    beforeSend: function(){
      $('#getAptitudes').html('<div class="container" id="load"><div class="col s2 offset-s7"><img src="data:image/gif;base64,R0lGODlh8ABAAecAAEhno0look1rpE5spVFuplNwp1NwqFZyqVt3rF14rGN9sGR+sWeAsWmBsm2FtHKJt3SJt3SKuHeMuXiNuXuQu36SvX+UvoCTvYKVvoOXwISYwIibwYicwoyexI6gxZKixpSkx5WlyJmoyZyqyp2sy6GuzKOxzqSxzqWz0Ka00ai10au406y406661LC81bS/17S/2LXA17bA2LjD2brE2r3G3L/I3MDJ3cTM38XN4MjO4cfQ4snQ4s3V5NDX5tHY5tPa6NTb6Nbc6tne6////////////////////////////////////////////////////////////////////////////w8P/w8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////w8P/w8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////w8P/w8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQUCgD/ACH+ClBob3RvU2NhcGUALAAAAADwAEABAAj+AIkIHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqXMmypcuXMGPKnEmzps2bOHPq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JIZaoTlLFSsyt19rr5kKtHJLt3pbs/V6s/cat1Oxt3trsC+KsDIruB9CuDhquGOLuImLTS0QuZI7uZRbuZZ7uZT7AimFGxR3AJ77uaAbuqI7uqQ7uqHBuSBRGQSwuqzbuq77urAbu7B7uqjrEbZxu8VRu7aLu7z7tLqLjb0LG7+bJcHLGsObR8W7Gse7ZsmrGsv7vNAbvdI7vdRbvdZQe73Ym73au73c273e+73gG77iO77kW77me77om77qu77s277u+77wG7/yO7/0W7/2e7/4m7/6u7/827/++78AHMACPMAEXMAGfMAInMDHGxAAIfkEFAoA/wAsAAAAAPAAQAEACP4AiQgcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4ocSbKkyZMoU6pcybKly5cwY8qcSbOmzZs4c+rcybOnz59AgwodSrSo0aNIkypdyrSp06dQo0qdSrWq1atYs2rdyrWr169gw4odS7as2bNo06pdy7at27dw48qdS7eu3bt48+rdy7ev37+AAwseTLiw4cOIEytezLix48eQI0ueTLmy5cuYi07YzLmz58+gQ4sezTlzR9KoU6sObZrj6tewR7feGLu27QmzNd7evTp3Rt7ASfvGCFqC8ePIkytfzly56OEXPUdYQWOG9evYs2vfzh27DQ8RQP5Dtyj9BY4b6NOrX8++vXv1Oj6E/zy+onQX59/r3/8+/nzP9VF0X378FVigf+IFKNGABja4H4L0KRgRgw5WyB6EAEoIEYUWdngDhp1puGFnEeDnoYcgluYVCSy26OKLMMYo44w0tngaiSaeaGGKm31V449ABinjjZyVSKCODfKI24pCNunkjERuZiSSFSrp45NYZhnlBFNSmaR8CXaV5ZhObtmllweCGaGYZLb5o5k5osmflUy6aWeMcB4pZ39qZsimiyOo4EMPhBZq6KGIJqrooT7gIMKLee45Z58h1tlioED4oOmmnHbq6aegdvpDDo+6GKmk+tH556UqZBrqq/6wvjpqqTa6hqOeqK6nKlcwYhrrr8BqOiukthYZZ64XUqriqiz6GuyzoQ5rarFSHossfMr2aGmzrULrrafS1krbrde2t+tWvXb77bo+hMviqeVi+1+lzJLgLLveuksCvPGid65W6bqKL7T68tvvv1kFPHC+pBI7rrG4loswVgov/GzB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" alt="load aptitud" width="100%;"></div></div>');
    },
    success: function(answer) {
      $('#load').remove();
      $('#getAptitudes').html(answer);
    }
  });
});


$(document).ready(function() {
    $('select').material_select();
  });


var pre_des = 144;
$('#tweets').keyup(function(Event){
    caracteres = $('#tweets').val().length;
    var diferencia = pre_des - caracteres;
    $('#pre-des').html(diferencia);
});

$(document).on('click', '.verPerfil', function(){
  var id = $(this).attr('id');
  window.location.href="?view=perfil-wit&id="+id;
});

$(document).on('click', '.aprobar', function(){
  var id = $(this).attr('id');

      swal({
      title: "Aprobar wit",
      text: "",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Aprobar",
      cancelButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        swal({
          title: "Wit aprobado",
          text: "Se ha aprobado el wit correctamente",
          type: "success"
        }, function(){
          $.ajax({
            method: 'POST',
            url: 'controller/admin/aprobar.php',
            data: {id: id},
            success: function(res){
              // location.reload();
              console.log(res);
            }
          });
        });
      } else {
    	    swal("Cancelado", "Se ha cancelado el proceso", "error");
      }
    });


});

$(document).on('click', '.denegar', function(){

  var id = $(this).attr('id');

      swal({
      title: "No aprobar wit",
      text: "",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "No aprobar",
      cancelButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        swal({
          title: "Denegar wit",
          text: "El wit ha sido denegado en Mentes a la carta correctamente",
          type: "success"
        }, function(){
          $.ajax({
            method: 'POST',
            url: 'controller/admin/desAprobar.php',
            data: {id: id},
            success: function(){
              location.reload();
            }
          });
        });
      } else {
          swal("Cancelado", "Se ha cancelado el proceso", "error");
      }
    });
});

// Detecta el evento del teclado
$(document).on('keyup', '#busqueda-text', function(){

  // Leemos la busqueda
  var busqueda = $(this).val();

  $.ajax({
    method: 'POST',
    url: 'controller/admin/busqueda.php',
    data: {busqueda: busqueda},
    success: function(respuestas){
      $('#wits-aprobados-panel').html(respuestas);
    }
  });

});


// ******** Algoritmo para el buscador ******

/*

  Primera funcionalidad:
  Al seleccionar una opcion del criterio de busqueda se desplegaran las sugerencias
  segun sea el caso.

*/

$(document).on('change', '#sectores', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/sectores.php',
    data: {sectores: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#empresas', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/empresas.php',
    data: {empresas: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#ciudad_dinamic', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/ciudad.php',
    data: {ciudad: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});



$(document).on('change', '#cargos_dinamic', function(){

  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/cargos.php',
    data: {cargos: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#actividad_dinamic', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/actividad.php',
    data: {actividad: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#aptitudes_dinamic', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/aptitudes.php',
    data: {aptitud: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#paises', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/pais.php',
    data: {pais: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

$(document).on('change', '#idiomas', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/idioma.php',
    data: {idioma: $(this).val()},
    success: function(res){
      $('#wits-aprobados-panel').html(res);
    }
  });
});

// *********    End Algoritmo     *********


// Login
$(document).on('click', '#login', function(){

  // Leemos las variables
  var $email = $('#email').val();
  var $pass  = $('#pass').val();

  $.ajax({
    method: 'POST',
    url: 'controller/firewall/validarLogin.php',
    data: {email: $email, pass: $pass },
    beforeSend: function(){
      $('#load').show();

    },
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){
        swal('Campos requeridos', 'Por favor ingrese todos los campos', 'warning');
      }else if(res == 'error_2'){
        swal('Usuario no registrado', 'No hemos podido encontrar a un usuario con esa dirección de correo electrónica', 'error');
      }else if(res == 'error_3'){
        swal('Usuario no registrado', 'La contraseña que ingresaste no es correcta', 'error');
      }else{
        window.location.href= res;
      }

    }
  });

});

$("#idiomas").autocomplete({
  source: "controller/user/traerIdiomas.php"
});

// Agregar idioma

  // Funcion que agrega un nuevo idioma
  function agregarIdioma(){

    // Leemos la variable de texto
    var idioma = $('#idiomas').val();

    $.ajax({
      method: 'POST',
      url: 'controller/user/setIdiomas.php',
      data: {idioma: idioma},
      beforeSend: function(){
        $('#getIdiomas').html('<div class="container" id="load"><div class="col s2 offset-s7"><img src="images/perfiles/load.gif" alt="load aptitud" width="100%;"></div></div>');
      },
      success: function(res){
        $('#load').hide();
        $('#idiomas').val('');
        $('#getIdiomas').html(res);
      }
    });


  }

  // Por click
  $('#add_new_idioma').click(function(){
    agregarIdioma();
  });

  // Por Tecla enter
  $(document).on('keyup', '#idiomas', function(e){

    if(e.which == 13){
      agregarIdioma();
    }

  });


  // Eliminar idioma
  $(document).on('click', '.eliminar_idioma', function(){
    var id = $(this).attr('id');
    $.ajax({
      method: 'POST',
      url: 'controller/user/deleteIdioma.php',
      data: {id: id},
      beforeSend: function(){
        $('#getIdiomas').html('<div class="container" id="load"><div class="col s2 offset-s7"><img src="images/perfiles/load.gif" alt="load aptitud" width="100%;"></div></div>');
      },
      success: function(res) {
        $('#load').remove();
        $('#getIdiomas').html(res);
      }
    });
  });



function limpiar(){
  $('#company').val('');
  $('#sector').val('');
  $('#position').val('');
  $('#country').val('');
  $('#limpiar').hide();

  // Removemos el focus
  $('#country').blur();
  $('#position').blur();
  $('#company').blur();
  $('#sector').blur();

  // Reiniciamos el id
  $('#identificador').val('0');
}

// Eliminar empresa
$(document).on('click', '.eliminar_empresa', function(){

  var id = $(this).attr('id');

  swal({
    title: "¿Estás seguro?",
    text: "¡No podras recuperar la información!",
    showCancelButton: true,
    confirmButtonColor: "#424242",
    confirmButtonText: "Si, ¡Eliminar!",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      method: 'POST',
      url: 'controller/wit/eliminarExperiencia.php',
      data: {id: id},
      success: function(res){
            swal({
              title: 'Eliminado',
              text: "La experiencia ha sido eliminada satisfactoriamente",
              type: "success",
              confirmButtonColor: "#424242",
              confirmButtonText: "Aceptar"
            }, function(){

              limpiar();
              $('#lista_de_experiencia').html(res);
            });

      }
    });

  });


});

// Editar empresa
$(document).on('click', '.editar_empresa', function(){

  $.ajax({
    method: 'POST',
    dataType: 'json',
    url: 'controller/wit/loadEmpresa.php',
    data: {id: $(this).attr('id')},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
        if(res.error == true){
          swal('error', 'Error inesperado');
        }else{
          $('#limpiar').show();
          $('#country').focus();
          $('#country').val(res.ciudad);
          $('#position').focus();
          $('#position').val(res.cargo);
          $('#company').focus();
          $('#company').val(res.nombre);
          $('#sector').focus();
          $('#sector').val(res.sector);
          $('#identificador').val(res.identificador);
        }
    }
  });
});



// Limpiar texto en editar perfil: Experiencia
$('#limpiar').click(function(){
  limpiar();
});


// Boton de guardar experiencia
$('#guardar_experiencia').click(function(){

  $.ajax({
    method: 'POST',
    url: 'controller/wit/setExperiencia.php',
    data: $('#form_dd_empresa').serialize(),
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      if(res == 'error_1'){
        // El id que se envio no es del usuario
        console.log('El id no te pertenece');
      }else if(res == 'error_2'){
        console.log('Error de inserción');
      }else if(res == 'error_3'){

      }else{
        limpiar();

        // Cualquier otra respuesta error o lista actualizada con los cambios
        $('#lista_de_experiencia').html(res);
      }

    }
  });
});


// Dejar de seguir una actividad
$(document).on('click', '.actividad_activo', function(){

  var actividad = $(this).attr('id');

  $.ajax({
    method: 'POST',
    url: 'controller/wit/dejarActividad.php',
    data: {id: actividad},
    success: function(res){
      if(res == 'error_5'){
        swal('Error', 'Debes tener por lo menos una actividad seleccionada', 'error');
      }else{
        $('#lista_actividades_edit').html(res);
      }
    }
  });

});


// COmenzar a seguir una actividad
$(document).on('click', '.actividad_inactivo', function(){
  var actividad = $(this).attr('id');

  $.ajax({
    method: 'POST',
    url: 'controller/wit/seguirActividad.php',
    data: {id: actividad},
    success: function(res){
      $('#lista_actividades_edit').html(res);
    }
  });

});


// Actualizar imagen de perfil
$('#seleccion_imagen').change(function(){

  var formData = new FormData(document.getElementById("imagen_perfil"));

  $.ajax({
    method: 'POST',
    url: 'controller/wit/actualizarImagen.php',
    data: formData,
    dataType: "html",
    contentType: false,
    processData: false,
    beforeSend: function(){
      $('#loadImagen').show();
    },
    success: function(answer){

      if(answer == 'Formato no valido'){
        swal('error', 'Por favor seleciona una imagen de perfil', 'error');
      }else{
        $('#perfil').attr('src', 'images/perfiles/'+answer);
      }
      $('#loadImagen').hide();
      $('#seleccion_imagen').val('');

    }
  });


});

$('#actualizar_datos').click(function(){
  $.ajax({
    method: 'POST',
    url: 'controller/wit/actualizarDatos.php',
    data: $('#datos_contacto').serialize(),
    beforeSend: function(){
      $('#load3').show();
    },
    success: function(res){
      $('#load3').hide();
      swal('Datos guardados', 'Se guardo la información correctamente', 'success');
      console.log(res);
    }
  });
});
