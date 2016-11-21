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
    // setInterval(slider_principal, 7000);
});




/*$('#col-slider-1').hover(function(){
        clearInterval(pasar_slider);
    }, function(){
        pasar_slider = setInterval(pasar, 4000);
    });*/

$('#btn_siguiente').click(function(){
        pasar();

        clearInterval(pasar_slider);
       /*if(next == 0){
            clearInterval(pasar_slider);
            setTimeout(function(){
                pasar_slider = setInterval(pasar, 4000);
                setTimeout(function(){
                    console.log('Se inicio un intervalo pasar_slider con duracion de 4 segundos');
                    next = 0;
                    console.log('Se reestablecio el valor de next: ' + next);
                },4000);
            }, 3000);
            next = 1;
            console.log('Next es igual a ' + next);
        }*/


    }); //End Function btn_seiguiente Click

$('#btn_anterior').click(function(){


        $('#slider-1').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    console.log(index);
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


/*End Slider*/






/*$('#col-slider-1').hover(function(){
        clearInterval(pasar_slider);
    }, function(){
        pasar_slider = setInterval(pasar, 4000);
    });*/

$('#btn_siguiente_2').click(function(){
        pasar2();

        clearInterval(pasar_slider2);
       /*if(next == 0){
            clearInterval(pasar_slider);
            setTimeout(function(){
                pasar_slider = setInterval(pasar, 4000);
                setTimeout(function(){
                    console.log('Se inicio un intervalo pasar_slider con duracion de 4 segundos');
                    next = 0;
                    console.log('Se reestablecio el valor de next: ' + next);
                },4000);
            }, 3000);
            next = 1;
            console.log('Next es igual a ' + next);
        }*/


    }); //End Function btn_seiguiente Click

$('#btn_anterior_2').click(function(){


        $('#slider-2').find('div').each(

            function(index, value){
                if($(this).hasClass('s_visible'))
                {
                    $(this).removeClass('animated fadeIn s_visible');

                    console.log(index);
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
       /*if(next == 0){
            clearInterval(pasar_slider);
            setTimeout(function(){
                pasar_slider = setInterval(pasar, 4000);
                setTimeout(function(){
                    console.log('Se inicio un intervalo pasar_slider con duracion de 4 segundos');
                    next = 0;
                    console.log('Se reestablecio el valor de next: ' + next);
                },4000);
            }, 3000);
            next = 1;
            console.log('Next es igual a ' + next);
        }*/


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
    $('#services4').val('Formaci&oacuten');
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
  window.location.href= "?view=acceder";
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
          text: 'Te has registrado satisfactoriamente en Mentes a la carta, pronto nos contactaremos contigo',
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
      $('#getAptitudes').html('<div class="container" id="load"><div class="col s2 offset-s7"><img src="images/perfiles/load.gif" alt="load aptitud" width="100%;"></div></div>');
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

$(document).on('change', '#sectores_empresas', function(){
  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/sectores_empresas.php',
    data: {sectores_empresas: $(this).val()},
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

$(document).on('change', '#pais_idioma_dinamic', function(){

  $.ajax({
    method: 'POST',
    url: 'controller/admin/select/pais_idioma.php',
    data: {pais_idioma: $(this).val()},
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


// Funcionalidades para el slider principal
function slider_principal(){

  if($('#elemento1').hasClass('s_visible')){

    $('#elemento2').addClass('s_visible');
    $('#elemento1').removeClass('s_visible');
    $('#elemento3').removeClass('s_visible');


  }else if($('#elemento2').hasClass('s_visible')){
    $('#elemento1').removeClass('s_visible');
    $('#elemento2').removeClass('s_visible');
    $('#elemento3').addClass('s_visible');

  }else if($('#elemento3').hasClass('s_visible')){

    $('#elemento3').removeClass('s_visible');
    $('#elemento2').removeClass('s_visible');
    $('#elemento1').addClass('s_visible');
  }
  console.log('cambiar');
}
