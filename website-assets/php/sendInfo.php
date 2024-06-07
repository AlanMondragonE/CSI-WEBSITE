<?php

use EmailManager\EmailManager;
use Template\Template;
use Conexion\Conexion;

require 'vendor/autoload.php';
require 'conexion.php';
require 'email_template.php';
require 'email_manager.php';

date_default_timezone_set('America/Mexico_City');
$data = json_decode(file_get_contents("php://input"), true);
$conexion = new Conexion();


if ($data['captcha'] != 0) {

    $username = $data['name'];
    $phone = $data['tel'];
    $email = $data['email'];
    $company = $data['company'];
    $charge = $data['charge'] ?? null;
    $message = $data['message'];
    $interests = $data['interests'];
    $comments = $data['comments'] ?? null;
    $channel = $data['channel'] ?? 'Formulario Web';
    $users = $data['emails'];
    $region = $data['region'];
    $location = getIP() . ' - ' .  $region;
    $link = $_SERVER["HTTP_REFERER"];
    $dateTime = new DateTime();
    $date = $dateTime->format('Y-m-d');
    $time = $dateTime->format('H:i:s');



    $template = new Template([
        'nombre' => $username,
        'correo' => $email,
        'telefono' => $phone,
        'empresa' => $company,
        'puesto' => $charge ?? 'No se agregó el puesto',
        'mensaje' => $message,
        'link' => $link,
        'intereses' => $interests,
        'ubicacion' => $location,
        'canal' => $channel,
        'comentarios' => $comments ?? 'No se agregaron comentarios',
    ]);


    $subject = 'Nuevo Envío de Formulario';
    $from = 'ventas@inolab.com';
    $to = $users;

    if ($channel == 'Formulario Web') {

        $emailManager = new EmailManager($subject, $from, $to, $template->getWebForm());
    } else {

        $emailManager = new EmailManager($subject, $from, $to, $template->getOtherForm());
    }

    try {

        if ($emailManager->sendMail() == 200) {

            $request = $conexion->query(
                'CALL strNewContact(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [$username, $email, $phone, $company, $charge, $message, $link, $interests, $location, $users, $comments, $channel, null, $date, 1]
            );

            if ($request['count'] > 0) {

                echo json_encode(['status' => 200, 'message' => 'Email sent correctly']);
            }
        } else {

            echo json_encode(['status' => 300, 'message' => 'Email not sent', 'error' => $emailManager->sendMail()]);
        }
    } catch (\Throwable $e) {

        echo json_encode(['status' => 301, 'message' => $e]);
    }
}


function getIp()
{

    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        return $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
        return $_SERVER["HTTP_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}
