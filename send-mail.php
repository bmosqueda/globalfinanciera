<?php
header('Content-Type: application/json');
$json = json_decode(file_get_contents("php://input"));



$name = isset($json->name) ? $json->name : FALSE;
$phone = isset($json->phone) ? $json->phone : FALSE;
$email = isset($json->email) ? $json->email : FALSE;
$message = isset($json->message) ? $json->message : FALSE;
$regex = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i';
$isValidEmail = preg_match($regex, $email);

$json->isValidEmail = $isValidEmail;

if ($name && $email && $isValidEmail) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=utf-8',
        'From: <admin@patrimoniosocial.org>',
        'BCC: bmosqueda@ucol.mx'
    ];

    $body = "
        <div>
          <p>
            El cliente <strong>".$name."</strong> con el correo <strong>".$email."</strong> ha ingresado a nuestra página y busca obtener más información, por favor contáctenlo.
          </p>";

    if($message) 
        $body .= "
            <p>Dejó el siguiete mensaje:</p>
            <pre>".$message."</pre>
        ";

    if($phone)
        $body .= "
            <p>
              También ha proporcionado su número de teléfono (<strong>".$phone."</strong>) para que nos comuniquemos con él.
            </p>
        ";

    $body .= "</div>";

    if (mail('admin@patrimoniosocial.org', 'Cliente busca ser contactado', $body, implode("\r\n", $headers))) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}

echo json_encode($json);