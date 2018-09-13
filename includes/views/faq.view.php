<style>
  .wrapper > img {
    position: absolute !important;
    opacity: 0.9;
    right: -1%;
    top: 12%;
    /* height: 268px;
    width: 256px; */
  }

  @media (min-width: 796px) and (max-width: 1023px) {
    .is-question {
      padding-bottom: 10px !important;
    }

    .question {
      margin-top: 15px;
      margin-bottom: 15px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  }

  @media (max-width: 1023px) {
    .wrapper > img {
      display: none;
    }
  }

  @media (min-width: 1024px) {
    .is-question {
      padding-bottom: 15px !important;
    }

    .question {
      margin-top: 20px;
      margin-bottom: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  }

  @media (min-width: 769px) {
    .collapsible, .fa-3x {
      display: none;
    }
  }

  @media (max-width: 768px) {
    .collapsible {
      padding-bottom: 10px;
      border-bottom: 1px solid #ccd6dd;
    }
    /*
    .hero-body p {
      font-weight: 700 !important;
    }

    .hero-body {
      padding: 10px 24px;
    }
    */

    header.card-toggle.card-header {
      cursor: pointer
    }

    .is-question, .question, .fa-5x, hr,
    .logo {
      display: none
    }
  }
</style>
<!--
<section class="hero has-background-purple">
  <div class="hero-body">
    <div class="container has-text-white">
      <div class="columns">
        <div class="column is-half">
          <!-- <p class="is-size-1-desktop is-size-2-tablet is-d-mobile is-pulled-left">Preguntas Frecuentes</p> -->
          <!-- <p class="is-size-1-desktop is-size-2-tablet is-size-4-mobile is-pulled-left">Preguntas Frecuentes</p>
        </div>
        <div class="logo column is-half">
          <figure class="image is-128x128 is-pulled-right text-mobile">
            <img src="/public/images/Logos/transparent-white-ico.png" alt="Sociedad Patrimonial 2018 ©" width="350"
              height="2000">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="hero has-background-purple">
  <div class="hero-body"></div>
  <figure class="wrapper">
    <img src="/public/images/Logos/transparent-white-ico.png">
  </figure>
  <div class="hero-foot">
    <div class="container">
      <p class="title-hero is-size-1-desktop is-size-3-tablet is-size-4-mobile has-text-white">Preguntas Frecuentes</p>
    </div>
  </div>
</section>
<link rel="stylesheet" href="/public/css/privacy.css">
<main class="section">
  <div class="columns is-centered">
    <div class="column is-2-desktop is-2-tablet is-12-mobile">
      <div class="text-mobile"><!-- Quite class question-->
        <i class="fas fa-money-bill-wave fa-5x"></i>
        <i class="fas fa-money-bill-wave fa-3x"></i>
      </div>
    </div>
    <div class="column is-8-desktop is-10-tablet is-12-mobile">
      <!-- Collapsible -->
        <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿Cu&aacute;les son los montos a financiar?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              Desde $5,000.00 hasta $2,000,000.00 de pesos.
            </div>
          </div>
        </div>
      <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿Cu&aacute;les son los montos a financiar?
          </p>
          <p>Desde $5,000 hasta $2,000,000 de pesos.</p>
        </div>
      <!-- Collapsible -->
        <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿C&oacute;mo es la entrega del cr&eacute;dito?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              Por medio de una transferencia bancaria a cuenta del beneficiario o cheque certificado.
            </div>
          </div>
        </div>
      <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿C&oacute;mo es la entrega del cr&eacute;dito?
          </p>
          <p>Por medio de una transferencia bancaria a cuenta del beneficiario o cheque certificado.</p>
        </div>
      <!-- Collapsible -->
        <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿Se otorgan pr&eacute;stamos grupales?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              No, únicamente otorgamos pr&eacute;stamos a particulares y empresas.
            </div>
          </div>
        </div>
      <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿Se otorgan pr&eacute;stamos grupales?
          </p>
          <p>No, únicamente otorgamos pr&eacute;stamos a particulares y empresas.</p>
        </div>
      <!-- /Collapsible -->
      <hr>
    </div>
  </div>
  <div class="columns is-centered">
    <div class="column is-2-desktop is-2-tablet is-12-mobile">
      <div class="text-mobile"><!-- Quite class question-->
        <i class="far fa-id-card fa-5x"></i>
        <i class="far fa-id-card fa-3x"></i>
      </div>
    </div>
    <div class="column is-8-desktop is-10-tablet is-12-mobile">
      <!-- Collapsible -->
        <!-- <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿Cu&aacute;les son los requisitos para solicitar un pr&eacute;stamo?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              INE, comprobante de domicilio, comprobante de ingresos, dos referencias personales con nombre completo y tel&eacute;fono.
            </div>
          </div>
        </div> -->
      <!-- /Collapsible -->
      <!-- <div class="question">
        <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
          ¿Cu&aacute;les son los requisitos para solicitar un pr&eacute;stamo?
        </p>
        <p>INE, comprobante de domicilio, comprobante de ingresos, dos referencias personales con nombre completo y tel&eacute;fono.</p>
      </div> -->
      <!-- Collapsible -->
        <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿Qu&eacute; sucede si no tengo comprobante de ingreso?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              No hay inconveniente, se puede realizar el trámite con los dem&aacute;s documentos y proporcionar dos referencias personales (únicamente nombre y teléfono).
            </div>
          </div>
        </div>
      <!-- /Collapsible -->
      <div class="question">
        <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
          ¿Qu&eacute; sucede si no tengo comprobante de ingreso?
        </p>
        <p>No hay inconveniente, se puede realizar el trámite con los dem&aacute;s documentos y proporcionar dos referencias personales (únicamente nombre y teléfono).</p>
      </div>
      <!-- Collapsible -->
        <div class="collapsible card is-fullwidth is-shadowless">
          <header class="card-toggle card-header is-shadowless">
            <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
              ¿Consultan bur&oacute; de cr&eacute;dito?
            </p>
            <a class="card-header-icon">
              <i class="fa fa-angle-down"></i>
            </a>
          </header>
          <div class="card-content is-paddingless is-hidden">
            <div class="content">
              La consulta de buró de crédito es obligatoria, pero no es determinante para el otorgamiento financiero.
            </div>
          </div>
        </div>
      <!-- /Collapsible -->
      <div class="question">
        <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
          ¿Consultan bur&oacute; de cr&eacute;dito?
        </p>
        <p>La consulta de buró de crédito es obligatoria, pero no es determinante para el otorgamiento financiero.</p>
      </div>
      <hr>
    </div>
  </div>
    <div class="columns is-centered">
      <div class="column is-2-desktop is-2-tablet is-12-mobile">
        <div class="text-mobile"><!-- Quite class question-->
          <i class="far fa-clock fa-5x"></i>
          <i class="far fa-clock fa-3x"></i>
        </div>
      </div>
      <div class="column is-8-desktop is-10-tablet is-12-mobile">
        <!-- Collapsible -->
          <div class="collapsible card is-fullwidth is-shadowless">
            <header class="card-toggle card-header is-shadowless">
              <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
                ¿En cuanto tiempo puedo disponer del cr&eacute;dito?
              </p>
              <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
              </a>
            </header>
            <div class="card-content is-paddingless is-hidden">
              <div class="content">
                <p>En préstamos express la entrega no excede de 5 horas hábiles*.</p>
                <p>En préstamos personales 72 horas*.</p>
                <span class="help">*Una vez que se cubran los requisitos</span>
              </div>
            </div>
          </div>
        <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿En cuanto tiempo puedo disponer del cr&eacute;dito?
          </p>
          <p>En préstamos express la entrega no excede de 5 horas hábiles*.</p>
          <p>En préstamos personales 72 horas*.</p>
          <span class="help">*Una vez que se cubran los requisitos</span>
        </div>
        <!-- Collapsible -->
          <div class="collapsible card is-fullwidth is-shadowless">
            <header class="card-toggle card-header is-shadowless">
              <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
                ¿Cu&aacute;nto dura el trámite?
              </p>
              <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
              </a>
            </header>
            <div class="card-content is-paddingless is-hidden">
              <div class="content">
                Una vez confirmada la recepción de su solicitud de crédito le daremos respuesta en máximo 24 horas.
              </div>
            </div>
          </div>
        <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿Cu&aacute;nto dura el trámite?
          </p>
          <p>Una vez confirmada la recepción de su solicitud de crédito le daremos respuesta en máximo 24 horas.</p>
        </div>
        <hr>
      </div>
    </div>
    <div class="columns is-centered">
      <div class="column is-2-desktop is-2-tablet is-12-mobile">
        <div class="text-mobile"><!-- Quite class question-->
          <i class="fas fa-globe-americas fa-5x"></i>
          <i class="fas fa-globe-americas fa-3x"></i>
        </div>
      </div>
      <div class="column is-8-desktop is-10-tablet is-12-mobile">
        <!-- Collapsible -->
          <!-- <div class="collapsible card is-fullwidth is-shadowless">
            <header class="card-toggle card-header is-shadowless">
              <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
                ¿En d&oacute;nde se encuentran ubicados?
              </p>
              <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
              </a>
            </header>
            <div class="card-content is-paddingless is-hidden">
              <div class="content">
                Nuestro innovador sistema de visita a domicilio nos permite acudir hasta usted para otorgarle un cr&eacute;dito.
              </div>
            </div>
          </div> -->
        <!-- /Collapsible -->
        <!-- <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿En d&oacute;nde se encuentran ubicados?
          </p>
          <p>Nuestro innovador sistema de visita a domicilio nos permite acudir hasta usted para otorgarle un cr&eacute;dito.</p>
        </div> -->
        <!-- Collapsible -->
          <div class="collapsible card is-fullwidth is-shadowless">
            <header class="card-toggle card-header is-shadowless">
              <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
                ¿Autorizan a toda la república mexicana?
              </p>
              <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
              </a>
            </header>
            <div class="card-content is-paddingless is-hidden">
              <div class="content">
                Sí, abarcamos toda la república mexicana.
              </div>
            </div>
          </div>
        <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿Autorizan a toda la república mexicana?
          </p>
          <p>Sí, abarcamos toda la república mexicana.</p>
        </div>
        <!-- Collapsible -->
          <div class="collapsible card is-fullwidth is-shadowless">
            <header class="card-toggle card-header is-shadowless">
              <p class="card-header-title has-text-grey has-text-weight-normal is-size-5-mobile">
                ¿Autorizan pr&eacute;stamos a personas extranjeras?
              </p>
              <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
              </a>
            </header>
            <div class="card-content is-paddingless is-hidden">
              <div class="content">
                Sí, siempre y cuando tengan residencia en M&eacute;xico.
              </div>
            </div>
          </div>
        <!-- /Collapsible -->
        <div class="question">
          <p class="has-text-grey has-text-weight-bold is-d-desktop is-size-4-tablet is-size-5-mobile is-question">
            ¿Autorizan pr&eacute;stamos a personas extranjeras?
          </p>
          <p>Sí, siempre y cuando tengan residencia en M&eacute;xico.</p>
        </div>
        <hr>
      </div>
    </div>
    </div>
  </main>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let cardToggles = document.getElementsByClassName('card-toggle');
      for (let i = 0; i < cardToggles.length; i++) {
        cardToggles[i].addEventListener('click', e => {
          // e.currentTarget.parentElement.parentElement.childNodes[3].classList.toggle('is-hidden');
          e.currentTarget.parentElement.childNodes[3].classList.toggle('is-hidden');
        });
      }
    });
  </script>