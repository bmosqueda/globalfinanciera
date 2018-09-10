
var datos = {};
var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function activeModalFormulario(isActive) {
  if(isActive){
    $('#modalFormulario').addClass('is-active');
  }
  else
    $('#modalFormulario').removeClass('is-active');
}

function activeModalEnviado(isActive) {
  if(isActive){
    $('#modalEnviado').addClass('is-active');
  }
  else
    $('#modalEnviado').removeClass('is-active');
}

//Carousel
window.onload = function() {
  console.log('On load');
  var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
}

//NavBar
document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }
});