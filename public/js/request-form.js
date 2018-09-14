function setError(fieldName, error = false) {
  if(error) {
    if(typeof error !== 'string')
      throw 'El error debe ser un texto';

    $('#feed-' + fieldName).text(error);
    $('#feed-' + fieldName).show();
    $('#txt-' + fieldName).addClass('is-danger');
  }
  else {
    $('#feed-' + fieldName).text('');
    $('#feed-' + fieldName).hide();
    $('#txt-' + fieldName).removeClass('is-danger');
  }
}

/*Validaciones*/
  function validateNombre() {
    var name = $('#txt-name').val().trim();
    if(name == '') {
      setError('name', 'Por favor ingresa tu nombre');
      return false;
    }
    setError('name');
    return true;
  }

  function validateEmailRegex(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function validatePhone() {
    var name = $('#txt-phone').val().trim();

    if(name == '') {
      setError('name', 'Por favor ingresa tu nombre');
      return false;
    }
    setError('name');
    return true;
  }

  function validateEmail() {
    var email = $('#txt-mail').val().trim();
    if(email == '') {
      setError('mail', 'Por favor ingresa un correo electrónico');
      return false;
    }
    else if(!validateEmailRegex(email)) {
      setError('mail', 'Por favor ingresa un correo electrónico válido');
      return false;
    }
    setError('mail');
    return true;
  }

  $('#txt-name').blur(validateNombre);
  $('#txt-mail').blur(validateEmail);
/*Validaciones FIN*/

$('#btnSolicitar').click(function() {
  if(validateNombre() && validateEmail()) {
    var request = {
      name: $('#txt-name').val(),
      phone: $('#txt-phone').val(),
      email: $('#txt-mail').val(),
      message: $('#txt-message').val()
    };

    $('#txt-name').val('');
    $('#txt-phone').val('');
    $('#txt-mail').val('');
    $('#txt-message').val('');

    $('.feed').hide();

    activeModalFormulario(false);

    http.post('/send-mail.php', request, function(error, res, status) {
      if(error !== undefined) {
        console.error(error);
        console.error(status);
        alert('Hubo un problema al cargar sus datos, por favor inténtelo nuevamente');
        return;
      }
      
      activeModalEnviado(true);
    });
  }
});

function test() {
  $('#txt-name').val('Donte Simeona');
  $('#txt-phone').val('79.160.155.152');
  $('#txt-mail').val('unkamed@seamed.edu');
  $('#txt-message').val('precaptivity triplum robot attain townman azon Rostellaria suguaro lucible discovery demoniac benedict prefright disvalue cathodical betone Alouatta vitellarium quizzism hardystonite microlepidopteran bonbon scissurellid sulphonium');
}