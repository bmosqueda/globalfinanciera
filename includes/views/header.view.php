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
    <style>
      .is-facebook-color {
        color: #3B5998;
      }
      hr {
        background-color: rgb(164, 170, 171, 0.3);
      }
      .navbar.is-spaced {
          padding: 1rem 2rem;
      }
      .navbar-item img {
        max-height: 4.75rem !important;
      }
      /*Para que el carousel se vea chido en móviles*/
      .image.is-3by1 {
        min-height: 188px;
      }
      /*Para que el carousel se vea chido en móviles*/
      .carousel-container {
        min-height: 200px;
      }
      .navbar-item {
        margin-right: 10px !important
      }
      .image.is-3by1 {
        padding-top: 31.333% !important;
      }
      .has-background-blue {
        background-color: #00577C;
      }
      .footer-title {
        margin-bottom: 20px;
        margin-top: 20px;
      }
      .pad-bot-li {
        padding-bottom: 10px;
      }
      
      @media (min-width: 769px) {
        .logo-mobile {
          display: none
        }
        nav.navbar {
          padding-bottom: 5px;
        }
      }

      @media (max-width: 768px) {
        .text-mobile {
          text-align: center;
        }
        
        .modal-card-title {
          font-size: 1.2rem;
        }

        .logo-no-mobile {
          display: none;
        }
        
        .modal-label {
          font-weight: normal;
        }
      }
      .is-purple {
        color: #752152 !important;
      }
    </style>
    <title><?php echo $title; ?></title>
  </head>
  <body class="is-bold is-light">
    <!-- NavBar -->
      <nav class="navbar is-white">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img class="logo-no-mobile" src="/public/images/Logos/logo-10.jpeg" alt="Sociedad Patrimonial 2018 ©"  width="300" height="2000">
            <figure class="logo-mobile image is-32x32 is-pulled-right text-mobile">
              <img src="/public/images/Logos/transparent-ico.png" alt="Sociedad Patrimonial 2018 ©">
          </figure>
          </a>
          <div class="navbar-burger burger" data-target="navbar">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navbar" class="navbar-menu">
          <div class="navbar-start">
          </div>
          <div class="navbar-end">
            <a class="navbar-item  is-purple has-text-weight-semibold" href="/">
              Inicio
            </a>
            <a class="navbar-item is-purple has-text-weight-semibold" href="/nosotros/">
              Nosotros
            </a>
            <a class="navbar-item is-purple has-text-weight-semibold" href="/servicios/">
              Servicios
            </a>
            <a class="navbar-item is-purple has-text-weight-semibold" href="/privacidad/">
              Aviso de privacidad
            </a>
            <a class="navbar-item is-purple has-text-weight-semibold" href="/preguntas-frecuentes/">
              Preguntas frecuentes
            </a>
            <a class="navbar-item is-purple has-text-weight-semibold" href="/contacto/">
              Contacto
            </a>
          </div>
        </div>
      </nav>
    <!-- NavBar Fin -->