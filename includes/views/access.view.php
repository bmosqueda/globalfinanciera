<style>
  /*html,body {
    font-family: 'Open Sans', serif;
    font-size: 14px;
    font-weight: 300;
  }*/
  .hero.is-success {
    background: #F2F6FA;
  }
  .hero .nav, .hero.is-success .nav {
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .box {
    margin-top: 5rem;
  }
  .avatar {
    margin-top: -70px;
    padding-bottom: 20px;
  }
  .avatar img {
    padding: 5px;
    background: #fff;
    border-radius: 50%;
    -webkit-box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
    box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
  }
  /*input {
    font-weight: 300;
  }
  p {
    font-weight: 700;
  }
  p.subtitle {
    padding-top: 1rem;
  }*/
  .is-blue {
    background-color: #00577C !important;
  }
</style>
<link rel="stylesheet" href="/public/css/privacy.css">
<section class="hero has-background-purple">
  <div class="hero-body"></div>
  <div class="hero-foot">
    <div class="container">
      <p class="title-hero is-size-1-desktop is-size-3-tablet is-size-4-mobile has-text-white">Acceso</p>
    </div>
  </div>
</section>
<main class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-8-desktop is-10-tablet is-12-mobile">
            
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container">
                  <div class="columns">
                    <div>
                      <img src="/public/images/Logos/transparent-color.png" alt="Patrimonio social">
                    </div>
                  </div>
                  <div class="box">
                    <div class="field">
                      <label class="label is-medium">Número de cliente</label>
                      <div class="control">
                          <input id="txtClient" class="input is-medium" type="text" maxlength="15" placeholder="Número de cliente">
                      </div>
                      <p class="help is-danger" style="display: none;" id="lblClient"></p>
                    </div>
                    <!-- <div class="field">
                      <label class="label is-medium">Número de contrato</label>
                      <div class="control">
                          <input id="txtContract" class="input is-medium" type="text" maxlength="15" placeholder="Número de contrato">
                      </div>
                      <p class="help is-danger" style="display: none;" id="lblContract"></p>
                    </div> -->
                    <!-- <div class="field">
                      <label class="label is-medium">RFC</label>
                      <div class="control">
                          <input id="txtRFC" class="input is-medium" type="text" maxlength="13" placeholder="RFC">
                      </div>
                      <p class="help is-danger" style="display: none;" id="lblRFC"></p>
                    </div> -->
                    <div class="field">
                      <label class="label is-medium">Constraseña</label>
                      <div class="control">
                          <input id="txtPassword" class="input is-medium" type="password" placeholder="Contraseña">
                      </div>
                      <p class="help is-danger" style="display: none;" id="lblPassword"></p>
                    </div>
                    <div class="field">
                    </div>
                    <p class="has-text-danger" style="display: none;" id="lblResult"></p>
                    <button id="btnEnter" class="button is-block is-info is-blue is-medium is-fullwidth">Entrar</button>
                  </div>
                  <p class="has-text-grey is-pulled-right">
                    <a href="/contacto/">¿Necesitas ayuda?</a>
                  </p>
                </div>
            </div>
        </section>
        <!-- <script async type="text/javascript" src="../js/bulma.js"></script> -->


      </div>
    </div>
  </div>
</main>