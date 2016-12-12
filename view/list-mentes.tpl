{include file="view/principal/header.tpl"}


<section class="row">
   <div class="container">

     <article class="col s12 center">
       <h3 class="grey-text text-darken-3 title-home">Algunas mentes a la carta</h3>
       <div class="spacing-2"></div>
     </article>

     {for $i = 0 to count($mentes) -1}
     <!--Mentes a la carta -->
     <article class="col s12 m6 l3">
       <div class="card">
         <div class="card-image waves-effect waves-block waves-light bordes-imagen">
           <img class="activator " width="150" src="images/{$mentes[$i].imagen}" alt="mentes a la carta {$mentes[$i].nombre}">
         </div>
         <div class="card-content descripcion">
           <span class="activator grey-text text-darken-4">
             <span class="nombre grey-text text-darken-3 font-400 truncate">{$mentes[$i].nombre}</span>
             <i class="fa fa-info-circle hover-icon right accent-orange" style="font-size: 1.5em;" aria-hidden="true"></i>
             <br class="hide-on-med-up">
             <span class="grey-text truncate">{ucwords($mentes[$i].pais)}-{ucwords($mentes[$i].ciudad)}</span>
           </span>

         </div>
         <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">{$mentes[$i].nombre}<i class="fa fa-times right red-text" aria-hidden="true"></i></span>
           <p class="text-accent">Sectores: {$mentes[$i].sector}</p>
         </div>
       </div>
     </article>
     {/for}

    <!-- End ultima lista -->
    <div class="row">
      <div class="col s12 center-align">
        <div class="spacing-3"></div>
        <ul class="pagination">

          {if $page > 1}
            <li><a href="?view=mentes-a-la-carta&page={$page - 1}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          {else}
            <li class="disabled"><a><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
          {/if}

          {for $i= 1 to $mentes[0].can}
            {if $i == $page}
              <li class="active grey darken-3"><a href="?view=mentes-a-la-carta&page={$i}">{$i}</a></li>
            {else}
              <li class="waves-effect"><a href="?view=mentes-a-la-carta&page={$i}">{$i}</a></li>
            {/if}
          {/for}

          {if $page == $mentes[0].can}
            <li class="waves-effect disabled"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          {else}
            <li class="waves-effect"><a href="?view=mentes-a-la-carta&page={$page + 1}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          {/if}

        </ul>
      </div>
    </div>

  </div>
</section>

{include file="view/principal/footer.tpl"}
{include file="view/principal/script.tpl"}
