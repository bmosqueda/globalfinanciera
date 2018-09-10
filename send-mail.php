<?php
header("Access-Control-Allow-Origin: http://patrimoniosocial.org");
header('Content-Type: application/x-www-form-urlencoded');
$name = isset($_POST['name']) ? $_POST['name'] : FALSE;
$phone = $_POST['phone'];
$email = isset($_POST['email']) ? $_POST['email'] : FALSE;
$message = isset($_POST['message']) ? $_POST['message'] : FALSE;

$isValidEmail = preg_match("/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/", $email);

if ($name && $email && $message && $isValidEmail) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=utf-8',
        'From: <' . $email . '>',
        'BCC: crodriguez20@ucol.mx',
        'BCC: bmosqueda@ucol.mx'
    ];

    if (mail('admin@patrimoniosocial.org', 'Cliente busca ser contacatdo', $message, implode("\r\n", $headers))) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}

echo($name);
echo($phone);
echo($email);
echo($message);
echo(($isValidEmail ? 'valid email': 'not valid'));