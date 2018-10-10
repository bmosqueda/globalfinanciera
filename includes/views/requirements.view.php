<style>
  #sectioncontainer {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 0;
    margin-top: 20px;
  }

  .board-item {
    margin: 5px 0;
    will-change: transform;
  }

  .board-item-content {
    word-wrap: normal;
    position: relative;
    padding: 20px;
    background: #fff;
    border-radius: 4px;
    font-size: 17px;
    text-align: center;
    cursor: pointer;
    -webkit-box-shadow: 0px 1px 3px 0 rgba(0,0,0,0.2);
    box-shadow: 0px 1px 3px 0 rgba(0,0,0,0.2);
    margin: 5px;
  }

  .board-item-content:hover {
    font-weight: bold;
  }
  

  .delete {
    pointer-events: auto;
  }

  .is-blue {
    background: #193862;
  }

  .is-purple {
    background: #752152;
  }

  .is-gray {
    background: #4a4a4a;
  }

  .title-center {
    margin-left: auto;
    margin-right: auto;
  }

  @media (min-width: 769px) {
    .collapse > i {
      display: none
    }
  }
</style>
<link rel="stylesheet" href="/public/css/privacy.css">
<section class="hero has-background-purple">
  <div class="hero-body"></div>
  <figure class="wrapper">
    <img src="/public/images/Logos/circle-white.png" style="clip: rect(0px,351px,166px,20px) !important;">
  </figure>
  <div class="hero-foot">
    <div class="container">
      <p class="title-hero is-size-1-desktop is-size-3-tablet is-size-4-mobile has-text-white">Requisitos</p>
    </div>
  </div>
</section>
<main class="section">  
  <div class="container">
    <div class="columns is-multiline is-centered" id="">
      <!-- <div class="column is-8-desktop is-10-tablet is-12-mobile"> -->
      <div class="column is-4-desktop is-12-tablet is-12-mobile">
        <article class="message">
            <div class="message-header is-blue collapse">
                <p class="is-size-4-tablet title-center">Requisitos</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <div class="message-body collapsable">
                <div class="board-item">
                    <div class="board-item-content"><span>Ser mayor de 18 años</span></div>
                </div>
                <div class="board-item">
                    <div class="board-item-content"><span>Residir en México</span></div>
                </div>
                <div class="board-item">
                    <div class="board-item-content"><span>Ingreso mínimo mensual de $5,000.00</span></div>
                </div>
            </div>
        </article>
      </div>
      <div class="column is-4-desktop is-12-tablet is-12-mobile">
        <article class="message">
            <div class="message-header is-purple collapse">
                <p class="is-size-4-tablet title-center">Documentos</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <div class="message-body collapsable">
                <!-- <div class="board-item">
                    <div class="board-item-content"><span>Solicitud de crédito completa</span></div>
                </div> -->
                <div class="board-item">
                    <div class="board-item-content"><span>Identificación oficial vigente</span></div>
                </div>
                <div class="board-item">
                    <div class="board-item-content"><span>Si eres extranjero, una copia de tu forma migratoria</span></div>
                </div>
                <div class="board-item">
                    <div class="board-item-content"><span>Comprobantes de ingresos o dos referencias personales</span></div>
                </div>
                <div class="board-item">
                    <div class="board-item-content"><span>Comprobante de domicilio fechado de no más de tres meses (recibo de luz, teléfono o agua)</span></div>
                </div>
                <!-- Se quita a petición del cliente -->
                <!-- <div class="board-item">
                    <div class="board-item-content"><span>Solicitud completada y firmada con la aprobación para consulta de buró de crédito</span></div>
                </div> -->
            </div>
        </article>
      </div>
      <div class="column is-4-desktop is-12-tablet is-12-mobile">
        <article class="message">
            <div class="message-header is-gray collapse">
                <p class="is-size-4-tablet title-center">Instrumento</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <div class="message-body collapsable">
                <div class="board-item">
                    <div class="board-item-content"><span>Financiamiento en efectivo en moneda nacional</span></div>
                </div>
            </div>
        </article>
      </div>
      <p class="help">* Sujeto a aprobación de crédito</p>
          <!-- <h1>Requisitos</h1>
          <ul>
            <li>Ser mayor de 18 años</li>
            <li>Residir en México</li> 
            <li>Ingreso mínimo mensual de $5,000</li> 
          </ul>
          <h1>Documentos</h1>
          <ul>            
            <li>Solicitud de crédito completa</li>
            <li>Identificación oficial vigente</li>
            <li>Si eres extranjero, una copia de tu forma migratoria</li>
            <li>Comprobantes de ingresos</li>
            <li>Comprobante de domicilio fechado de no más de tres meses (recibo de luz, teléfono o agua)</li>
            <li>Solicitud completada y firmada con la aprobación para consulta de buró de crédito</li>
          </ul>
          <h1>Instrumento</h1>
          <ul>
            <li>Financiamiento en efectivo en moneda nacional</li>
            Tarjeta de crédito
  Crédito en moneda nacional para comprar bienes y servicios en México y en el extranjero
          </ul>
          <p>* Sujeto a aprobación de crédito</p> -->
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  let collapsables = document.getElementsByClassName('collapsable');

  document.addEventListener('DOMContentLoaded', function () {
    let toogles = document.getElementsByClassName('collapse');
    for (let i = 0; i < toogles.length; i++) {
      toogles[i].addEventListener('click', e => {
        if (window.innerWidth < 769) {
          e.stopPropagation();
          e.currentTarget.parentElement.childNodes[3].style.display = e.currentTarget.parentElement.childNodes[3].style.display === 'none' ? '' : 'none';
        } 
      });
    }

    for (let i = 0; i < collapsables.length; i++) {
      if (window.innerWidth < 769) {
        collapsables[i].style.display = 'none';
      }
    }
  });

  window.addEventListener('resize', function () {
    for (let i = 0; i < collapsables.length; i++) {
      if (window.innerWidth < 769) {
        collapsables[i].style.display = 'none';
      } else {
        collapsables[i].style.display = '';
      }
    }
  })
</script>