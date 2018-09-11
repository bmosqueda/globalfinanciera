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
    else if(!emailRegex.test(email)) {
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
    var formData = new FormData();

    formData.append('name', $('#txt-name').val());
    formData.append('phone', $('#txt-phone').val());
    formData.append('email', $('#txt-mail').val());
    formData.append('message', $('#txt-message').val());

    $('#txt-name').val('');
    $('#txt-phone').val('');
    $('#txt-mail').val('');
    $('#txt-message').val('');

    $('.feed').hide();

    activeModalFormulario(false);
    activeModalEnviado(true);

    var req = new XMLHttpRequest();

    req.open('POST', 'http://www.patrimoniosocial.org/send-mail.php', true);
    req.setRequestHeader("Content-type", 'application/x-www-form-urlencoded');
    req.setRequestHeader("Access-Control-Allow-Origin", "*");

    req.onerror = function() {
      console.error(req.responseText);
      console.error(req.status);
    }

    req.onload = function() {
      console.error(req.responseText);
      console.error(req.status);      
    }

    //La función send valida internamente que sea una petición que acepte parámetros, de lo contrario lo setea a null
    req.send(formData);
  }
});

function test() {
  $('#txt-name').val('Donte Simeona');
  $('#txt-phone').val('79.160.155.152');
  $('#txt-mail').val('unkamed@seamed.edu');
  $('#txt-message').val('precaptivity triplum robot attain townman azon Rostellaria suguaro lucible discovery demoniac benedict prefright disvalue cathodical betone Alouatta vitellarium quizzism hardystonite microlepidopteran bonbon scissurellid sulphonium');
}