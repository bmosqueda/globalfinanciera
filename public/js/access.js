
function setError(error = false, field) {
  if(error !== false) {
    $('#txt' + field).addClass('is-danger');
    $('#lbl' + field).text(error);
    $('#lbl' + field).show();
  }
  else {
    $('#txt' + field).removeClass('is-danger');
    $('#lbl' + field).text('');
    $('#lbl' + field).hide();
  }
}

function validateNumber(field) {
  var number = $('#txt' + field).val();
  var validation = true;

  if(number.length == 0)
    validation = '*No puede estar vacío';

  if(isNaN(number))
    validation = '*Sólo números';

  if(number.length > 15)
    validation = '*Máximo 15 caracteres';

  if(validation === true) {
    setError(false, field);
    return true;
  }

  setError(validation, field);
  return false;
}

function validateRFC() {
  var rfc = $('#txtRFC').val();
  var validation = true;

  if(rfc.length === 0)
    validation = '*No puede estar vacío';

  if(rfc.length !== 13)
    validation = '*El RFC consta de 13 caracteres';

  if(validation === true){
    setError(false, 'RFC');
    return true;
  }

  setError(validation, 'RFC');
  return false;
}

function validatePassword() {
  var password = $('#txtPassword').val();
  var validation = true;

  if(password.length === 0)
    validation = '*No puede estar vacío';

  if(password.length < 5)
    validation = '*Contraseña no válida';

  if(validation === true) {
    setError(false, 'Password');
    return true;
  }

  setError(validation, 'Password');
  return false;
}

$('#txtClient').blur(function() {validateNumber('Client');});
$('#txtContract').blur(function() {validateNumber('Contract');});
$('#txtRFC').blur(validateRFC);
$('#txtPassword').blur(validatePassword);

$('#btnEnter').click(function() {
  // validateNumber('Contract') &&
    // validateRFC() &&
  if(
    validateNumber('Client') &&
    validatePassword()
  ) {
    setError('*No se encontró el cliente con el número ' + $('#txtClient').val(), 'Result');
  }
  else
    setError(false, 'Result');

});