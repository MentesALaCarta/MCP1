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

