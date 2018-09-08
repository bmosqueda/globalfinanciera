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
        background-color: #006B99;
      }
      nav.is-info {
        background-color: #006B99 !important;
      }
      .footer-title {
        margin-bottom: 20px;
        margin-top: 20px;
      }
      .pad-bot-li {
        padding-bottom: 10px;
      }
      @media (max-width: 768px) {
        .text-mobile {
          text-align: center;
        }
      }
    </style>
    <title><?php echo $title; ?></title>
  </head>
  <body class="is-bold is-light">
    <!-- NavBar -->
      <nav class="navbar <?php echo $navbarColor; ?>"><!-- Quite class is-spaced -->
        <div class="navbar-brand">
          <div class="navbar-burger burger" data-target="navbar">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navbar" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="./">
              Inicio
            </a>
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="#">
              Nosotros
            </a>
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="#">
              Servicios
            </a>
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="#">
              Aviso de privacidad
            </a>
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="faq.php">
              Preguntas frecuentes
            </a>
            <a class="navbar-item is-size-5-mobile has-text-weight-bold" href="#">
              Contacto
            </a>
          </div>
          <div class="navbar-end">
          </div>
        </div>
      </nav>
    <!-- NavBar Fin -->