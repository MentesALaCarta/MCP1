{include file="view/principal/header.tpl"}

<!-- Imagen del logo -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <img src="images/bradlogo.png" alt="logo mentes a la carta">
</div>

<div class="row">
  <div class="col s12 m12 l8 offset-l2">
    <div class="spacing-1"></div>
    <!-- Progress bar -->
    <div class="container">
      <ul class="progressbar">
        <li id="step1" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Experiencia</span></li>
        <li id="step2" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Habilidades</span></li>
        <li id="step3" class="active"><span class="grey-text text-darken-2 hide-on-small-only">Brain mining</span></li>
        <li id="step4"><span class="grey-text text-darken-2 hide-on-small-only">Contacto</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="spacing-3"></div>

<!-- Titulo dinamico -->
<div class="row col s8 offset-s2 center-align">
  <div class="spacing-2"></div>
  <h3 class="title-orange">Elige en qué actividades de Brain Mining quisieras participar</h3>
</div>

<!-- Brain Mining -->
<form action="" id="form_services">
<div class="container">
  <div class="row">

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item1">
        <i class="fa fa-microphone" aria-hidden="true" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Ser consultado o entrevistado</span>
      <br>
      <span class="accent-grey">
        Ser entrevistado o participar en conversaciones con miembros de nuestro equipo
      </span>
      <input type="text" id="services1" name="services[0]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item2">
        <i class="fa fa-users" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Participar en dinámicas grupales</span>
      <br>
      <span class="accent-grey">
        Participar en actividades con otros Wits dinamizadas por nuestro equipo
      </span>
      <input type="text" id="services2" name="services[1]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item3">
        <i class="fa fa-pencil" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Generar contenido escrito <br><span style="visibility: hidden;">lorem ipsum</span></span>
      <br>
      <span class="accent-grey">
        Escribir o validar artículos, informes, ensayos o publicaciones en general.
      </span>
      <input type="text" id="services3" name="services[2]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1"></div>
      <div class="area center-align circle hover" id="item4">
        <i class="fa fa-bullhorn" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Impartir formación <br><span style="visibility: hidden;">lorem ipsum</span></span>
      <br>
      <span class="accent-grey">
        Dictar charlas, conferencias, cursos o seminarios. <br><span style="visibility: hidden;">lorem ipsum</span>
      </span>
      <input type="text" id="services4" name="services[3]"  hidden="hidden">
    </div>

    <!-- Section 2 -->

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1 hide-on-med-and-up"></div>
      <div class="spacing-3 hide-on-small-only"></div>
      <div class="area center-align circle hover" id="item5">
        <i class="fa fa-check" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Afrontar retos de innovación</span>
      <br>
      <span class="accent-grey">
        Proponer soluciones innovadoras a retos estratégicos de nuestros clientes o WITPICK.
      </span>
      <input type="text" id="services5" name="services[4]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1 hide-on-med-and-up"></div>
      <div class="spacing-3 hide-on-small-only"></div>
      <div class="area center-align circle hover" id="item6">
        <i class="fa  fa-bar-chart" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Proponer proyectos innovadores</span>
      <br>
      <span class="accent-grey">
        Proponer proyectos de negocios innovadores a ser per-acelerados a través del método WITPICK.
      </span>
      <input type="text" id="services6" name="services[5]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align  ">
      <div class="spacing-1 hide-on-med-and-up"></div>
      <div class="spacing-3 hide-on-small-only"></div>
      <div class="area center-align circle hover" id="item7">
        <i class="fa fa-lightbulb-o" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Participar en proyectos innovadores</span>
      <br>
      <span class="accent-grey">
        Participar como consultor en el desarrollo de proyectos para nuestros clientes.
      </span>
      <input type="text" id="services7" name="services[6]"  hidden="hidden">
    </div>

    <div class="col s8 offset-s2 m4 l3 center-align">
      <div class="spacing-1 hide-on-med-and-up"></div>
      <div class="spacing-3 hide-on-small-only"></div>
      <div class="area center-align circle hover" id="item8">
        <i class="fa fa-briefcase" style=" font-size: 8rem;"></i>
      </div>
      <div class="spacing-1"></div>
      <span style="color: #EBA820; font-size: 18px;">Apadrinar proyectos <br><span style="visibility: hidden">lorem ipsum</span></span>
      <br>
      <span class="accent-grey">
        Patrocinar proyectos inovadores ofreciendo conocimiento, acompañamiento o apoyo económico.
      </span>
      <input type="text" id="services8" name="services[7]"  hidden="hidden">
    </div>
  </div>

  </div>



<div class="spacing-3"></div>
</div>

</form>
<!-- /End Brain Mining -->

<div class="row spacing-bottom">
  <div class="col s6 m4 offset-m2 l3 offset-l3">
    <button id="step3_previous" style="width: 100%;" class="btn waves-effect waves-light grey" type="button"  name="button">Volver</button>
  </div>
  <div class="col s6 l3">
    <button id="step3" style="width: 100%;"class="btn waves-effect waves-light orange" type="button"  name="button">Continuar</button>
  </div>
</div>


{include file="view/principal/cerrarSesion.tpl"}
{include file="view/principal/script.tpl"}
