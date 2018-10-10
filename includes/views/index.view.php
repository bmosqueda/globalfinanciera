<style>
  .btn-purple {
    color: white;
    background-color: #752152 !important;
  }
  .carousel-title {
    font-size: 1rem !important;
  }
</style>
<link rel="stylesheet" href="/public/css/index.css">
<!-- Carousel -->
  <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
    <div class='carousel-container'>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/carousel/confianza.jpg" alt="" width="640" height="310" />
        </figure>
        <div class="title carousel-title">Confianza absoluta</div>
      </div>
      <div class='carousel-item has-background is-active'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/carousel/personales.jpg" alt="" width="640" height="310" />
        </figure>
        <div class="title carousel-title">Préstamos personales</div>
      </div>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/carousel/empresariales2.jpg" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/sushi.jpg -->
        <div class="title carousel-title">Préstamos empresariales</div>
      </div>
      <div class='carousel-item has-background'>
        <figure class="image is-3by1">
          <img class="is-background" src="/public/images/carousel/72horas.png" alt="" width="640" height="310" />
        </figure>
        <!-- https://wikiki.github.io/images/life.jpg -->
        <div class="title carousel-title">PRÉSTAMOS EXPRESS (CAT 20% ANUAL)</div>
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
      <div class="container">
        <h1 class="title has-text-centered">
          Bienvenido
        </h1>
        <h2 class="subtitle has-text-justified">
          Patrimonio Social es una empresa con más de 19 años de experiencia en el mercado financiero mexicano en el otorgamiento, gestión y asesoría en la adquisición de créditos a personas físicas y morales. Nos hemos destacado por ofrecer siempre la mejor atención a nuestros clientes y ser una de más mejores alternativas financieras del mercado. Somos una empresa 100% regulada y transparente, su bienestar es nuestra prioridad.
          
          <!-- Patrimonio social es una empresa consolidada que cuenta con más de 19 años de experiencia otorgando créditos a particulares y empresas. Nos hemos destacado por ofrecer siempre la mejor atención a nuestros clientes y ser una de más mejores alternativas financieras del mercado.
          Somos una empresa 100% regulada dedicada al otorgamiento de créditos, su satisfacción es nuestra prioridad. -->
        </h2>
        <h2 class="subtitle has-text-justified">
          Somos una empresa 100% regulada dedicada al otorgamiento de créditos, su satisfacción es nuestra prioridad.
        </h2>
      </div>
      <hr>
      <section class="container">  
        <div class="columns features row is-multiline is-centered">
          <div class="column is-3-desktop is-6-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-user-shield fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4 class="has-text-centered">Seguros</h4>
                          <p class="has-text-justified">Con soluciones a la medida y la mayor flexibilidad.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="column is-3-desktop is-6-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-money-bill-wave fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4 class="has-text-centered">Créditos personales y empresariales</h4>
                          <p class="has-text-justified">Préstamos en efectivo, desde $20,000.00 hasta $2,000,000.00 de pesos. El buró de crédito no es determinante.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="column is-3-desktop is-6-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-shipping-fast fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4 class="has-text-centered">Créditos express</h4>
                          <p class="has-text-justified">En menos de 24 horas, con la mejor tasa de interés.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="column is-3-desktop is-6-tablet is-12-mobile col">
              <div class="card is-shady text-mobile">
                  <div class="card-image has-text-centered">
                      <i class="fas fa-home fa-5x"></i>
                  </div>
                  <div class="card-content">
                      <div class="content">
                          <h4 class="has-text-centered">Liberación de ahorro en subcuenta de vivienda</h4>
                          <p class="has-text-justified">Te ayudamos a liberar el ahorro en tu subcuenta de vivienda.</p>
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
      <button class="button is-dark btn-purple" onclick="activeModalFormulario(true)">Datos de contacto</button>
    </div>
  </section>
<!-- Cards info FIN -->

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
        <button class="button is-dark btn-purple is-pulled-right" id="btnSolicitar">Enviar</button>

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
        <h1 class="title is-4">Se envió correctamente su información, en breve nos comunicaremos con usted</h1>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" onclick="activeModalEnviado(false)">Aceptar</button>
      </footer>
    </div>
  </div>
<!-- Modal section FIN -->
<?php  require_once(VIEW_PATH.'footer.view.php'); ?>
<script src="/public/js/http.js"></script>
<script src="/public/js/request-form.js"></script>