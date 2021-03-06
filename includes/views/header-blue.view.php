<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/public/images/Logos/transparent-ico.png">

    <!-- Bulma -->
    <link rel="stylesheet" href="/public/css/bulma.min.css">

    <!-- Bulma Carousel -->
    <link rel="stylesheet" href="/public/css/bulma-carousel.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/fontawesome/css/all.min.css">

    <!-- Presonalized classes -->
    <!-- Colores -->
    <!-- Footer: 00577C -->
    <link rel="stylesheet" href="/public/css/header-blue.css">

    <title><?php echo $title; ?></title>
  </head>

  <body class="is-bold is-light">
    <!-- NavBar -->
      <nav class="navbar is-info"><!-- Quite class is-spaced -->
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <figure class="logo-mobile image is-32x32 is-pulled-right text-mobile">
              <img src="/public/images/Logos/transparent-white-ico.png" alt="Patrimonio Social 2018 ©">
            </figure><span class="logo-no-mobile nav-title is-size-5 has-text-weight-semibold">Patrimonio Social</span>
          </a>
          <div class="navbar-burger burger" data-target="navbar">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div id="navbar" class="navbar-menu">
          <div class="navbar-start"></div>
          <div class="navbar-end">
            <a id="home" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/">
              Inicio
            </a>
            <a id="about-us" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/nosotros/">
              Nosotros
            </a>
            <a id="services" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/servicios/">
              Servicios
            </a>
            <a id="privacy" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/privacidad/">
              Aviso de privacidad
            </a>
            <a id="requirements" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/requisitos/">
              Requisitos
            </a>
            <a id="faq" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/preguntas-frecuentes/">
              Preguntas frecuentes
            </a>
            <a id="contact" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/contacto/">
              Contacto
            </a>
            <a id="access" class="navbar-item is-size-5-mobile has-text-weight-bold" href="/acceso/">
              Acceso
            </a>
          </div>
        </div>
      </nav>
    <!-- NavBar Fin -->
    <script>document.getElementById("<?php echo $tabActive; ?>").classList.add("active")</script>