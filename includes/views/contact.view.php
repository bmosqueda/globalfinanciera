<style>
  .left-margin {
    margin-left: 50px;
  }
  .value-img {
    margin: auto !important;
    padding-top: 8px;
  }
  .title-color {
    margin-bottom: 10px !important;
    color: #752152;
  }
  .is-purple {
    color: white;
    background-color: #752152 !important;
  }
  .data-color {
    margin: 0px !important;
    color: rgb(12,56,75);
  }
  .img:over{
    color: red;
  }
  i.facebook-color:hover {
    color: #3B5998;
  }
  i.facebook-color {
    color: #752152;
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
<link rel="stylesheet" href="/public/css/privacy.css">
<section class="hero has-background-blue">
  <div class="hero-body"></div>
  <div class="hero-foot">
    <div class="container">
      <p class="title-hero is-size-1-desktop is-size-3-tablet is-size-4-mobile has-text-white">Contacto</p>
    </div>
  </div>
</section>
<main class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-10-desktop is-10-tablet is-12-mobile">
        <div class="content">
          <div class="columns">
            <div class="column is-8-desktop is-8-tablet is-12-mobile">
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
              <button class="button is-dark is-purple is-pulled-right" id="btnSolicitar" onclick="alert('en desarrollo')">Enviar</button>
              <!-- <button class="button is-dark is-purple is-pulled-right" id="btnSolicitar">Enviar</button> -->
            </div>
            <div class="column is-4-desktop is-4-tablet is-12-mobile">
              <!-- <div class="card-image has-text-centered">
                  <i class="fas fa-phone fa-5x"></i>
              </div> -->
              <div class="content left-margin">
                
                
                <p class="title-color">
                  <i class="fa fa-phone"></i>
                  <span>&nbsp;TELEFÓNOS</span>
                </p>
                <p class="data-color">55 77 39 33 62</p>
                <p class="data-color">55 77 37 08 58</p>
                <p class="data-color">55 44 97 56 46</p>
                <p class="data-color">55 68 65 37 76</p>
                <p class="data-color">55 37 61 84 96</p>
                <br>

                <p class="title-color">
                  <i class="fa fa-envelope"></i>
                  <span>&nbsp;CORREOS</span>
                </p>
                <p class="data-color">admin@patrimoniosocial.org</p>
                <p class="data-color">programaciondecitas@globalfinanciera.com.mx</p>
                <p class="data-color">atencionaclientes@globalfinanciera.com.mx</p>
                <br>
                <a href="//www.facebook.com">
                  <i class="fab fa-facebook fa-3x facebook-color"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php  require_once(VIEW_PATH.'footer.view.php'); ?>
<!-- <script src="/public/js/http.js"></script> -->
<!-- <script src="/public/js/request-form.js"></script> -->