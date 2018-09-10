<style>
  .btn-purple {
    color: white;
    background-color: #752152 !important;
  }
</style>
<link rel="stylesheet" href="/public/css/index.css">
<!-- Carousel -->
  <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
    <div class='carousel-container'>
      <div class='carousel-item has-background is-active'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/imagen4.jpg" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/merry-christmas.jpg -->
        <div class="title">Confianza absoluta</div>
      </div>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/imagen1.jpg" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/singer.jpg -->
        <!-- <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div> -->
        <div class="title">Préstamos personales</div>
      </div>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/imagen2.jpg" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/sushi.jpg -->
        <div class="title">Préstamos empresariales</div>
      </div>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/imagen3.jpg" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/life.jpg -->
        <div class="title">Préstamos en máximo 72 horas</div>
      </div>
    </div>
    <div class="carousel-navigation is-overlay">
      <div class="carousel-nav-left">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="carousel-nav-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div>
  </div>     
<!-- Carousel Fin -->

<!-- Cards info -->
  <section class="is-medium">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          Bienvenido
        </h1>
        <h2 class="subtitle">
          Contamos con más de 19 años de experiencia otorgando créditos personales y empresariales, brindando siempre la mejor atención a nuestros clientes.

          Somos una empresa 100% regulada por dos instituciones, le invitamos a conocernos y saber más sobre todos los beneficios que ofrecemos para usted.
        </h2>
      </div>
      <hr>
      <section class="container">  
        <div class="columns features row is-multiline is-centered">
          <div class="column is-4-desktop is-4-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-money-bill fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4>Créditos personales y empresariales</h4>
                          <p>Préstamos en efectivo, no es determinante buró de crédito</p>
                          <!-- <p><a href="#">Learn more</a></p> -->
                      </div>
                  </div>
              </div>
          </div>
          <div class="column is-4-desktop is-4-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-user-shield fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4>Seguros</h4>
                          <p>Te brindamos soluciones a la medida con la mayor flexibilidad</p>
                          <!-- <p><a href="#">Learn more</a></p> -->
                      </div>
                  </div>
              </div>
          </div>
          <div class="column is-4-desktop is-4-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-home fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4>Liberación de ahorro en subcuenta de vivienda</h4>
                          <p>Te ayudamos a liberar el ahorro en tu subcuenta de vivienda</p>
                          <!-- <p><a href="#">Learn more</a></p> -->
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="section">
    <div class="container" style="text-align:center;">
      <h1 class="title is-3 has-text-centered">¿Desea conocer más acerca de nuestros servicios?</h1>  
      <h1 class="subtitle is-4 has-text-centered">Deje que uno de nuestros expertos lo oriente</h1>  
      <button class="button is-info" onclick="activeModalFormulario(true)">Llenar formulario</button>
    </div>
  </section>
<!-- Cards info FIN -->

<!-- <section class="hero is-medium has-carousel">
  <div class="hero-carousel carousel-animated carousel-animate-fade">
    <div class='carousel-container'>
      <div class='carousel-item has-background is-active'>
        <img class="is-background" src="public/images/imagen1.jpg" alt="" />
      </div>
      <div class='carousel-item has-background is-active'>
        <img class="is-background" src="public/images/imagen1.jpg" alt="" />
      </div>
    </div>
    <div class="carousel-navigation is-overlay">
      <div class="carousel-nav-left">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="carousel-nav-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="hero-body has-text-centered">
    <div class="columns is-mobile is-centered">
      <div class="column is-half is-narrow">
        <div class="field has-addons">
          <div class="control is-expanded" style="text-align:center !important;">

            <h1 class="title is-3 has-text-centered has-text-white">¿Desea conocer más acerca de nuestros servicios?</h1>  
            <h1 class="subtitle is-4 has-text-centered has-text-white">Deje que uno de nuestros expertos lo oriente</h1>  
              <button class="button is-info" onclick="activeModalFormulario(true)">Llenar formulario</button>            
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Modal section -->
  <div class="modal" id="modalFormulario">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Datos para contactarnos</p>
        <button class="delete" aria-label="close" onclick="activeModalFormulario(false)"></button>
      </header>
      <section class="modal-card-body">
        <div class="field">
          <label class="label modal-label">Nombre <span class="has-text-danger">*</span></label>
          <div class="control has-icons-left">
            <input class="input" id="txt-name" type="text" placeholder="Nombre" maxlength="50">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </div>
        </div>
        <p class="help feed is-danger" style="display: none;" id="feed-name"></p>
        <div class="field">
          <label class="label modal-label">Teléfono</label>
          <div class="control has-icons-left">
            <input class="input" type="text" id="txt-phone" maxlength="20" placeholder="Teléfono">
            <span class="icon is-small is-left">
              <i class="fas fa-phone"></i>
            </span>
          </div>
        </div>
        <p class="help feed is-danger" style="display: none;" id="feed-phone"></p>
        <div class="field">
          <label class="label modal-label">Correo <span class="has-text-danger">*</span></label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" id="txt-mail" maxlength="50" placeholder="Correo de contacto" value="">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fas fa-exclamation-triangle"></i>
            </span> -->
          </div>
        </div>
        <p class="help feed is-danger" style="display: none;" id="feed-mail"></p>
        <div class="field">
          <label class="label modal-label">Mensaje</label>
          <div class="control">
            <textarea id="txt-message" maxlength="300" class="textarea" placeholder="Cualquier cosa que quiera comunicarnos"></textarea>
          </div>
        </div>
        <p class="help feed is-danger" style="display: none;" id="feed-message"></p>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-dark btn-purple is-pulled-right" id="btnSolicitar" onclick="alert('en desarrollo')">Enviar</button>

        <!-- <button class="button is-success" id="btnSolicitar">Mandar solicitud</button> -->
        <button class="button" onclick="activeModalFormulario(false)">Cancelar</button>
      </footer>
    </div>
  </div>
  <div class="modal" id="modalEnviado">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <!-- <p class="modal-card-title">Sulici</p> -->
        <button class="delete" aria-label="close" onclick="activeModalEnviado(false)"></button>
      </header>
      <section class="modal-card-body">
        <h1 class="title is-4">Se envió correctamente su solicitud, en un momento uno de nuestros asesores se comunicará con usted</h1>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" onclick="activeModalEnviado(false)">Aceptar</button>
      </footer>
    </div>
  </div>
<!-- Modal section FIN -->
<?php  require_once(VIEW_PATH.'footer.view.php'); ?>
<script src="/public/js/request-form.js"></script>