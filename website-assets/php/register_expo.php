<?php

    use EmailManager\EmailManager;
    use Template\Template;
    use Conexion\Conexion;

    require 'vendor/autoload.php';
    require 'conexion.php';
    require 'email_template.php';   
    require 'email_manager.php';

    try {
        
        date_default_timezone_set('America/Mexico_City');
        $data = json_decode(file_get_contents("php://input"), true);
        $conexion = new Conexion();
    
        $username = $data['name'];
        $phone = $data['tel'];
        $email = $data['email'];
        $company = $data['company'];
        $charge =  'No Aplica';
        $message = 'No Aplica';
        $interests = 'No Aplica';
        $comments = 'Nombre del acompañante: '.$data['friendName'].' <br><br>
                     Correo del acompañante: '.$data['friendEmail'].'<br><br> 
                     Requiere muestra: '.$data['selectedSample']. '<br><br> 
                     Datos de la Muestra : '.$data['sampleText']; 
        $channel =  'Seminario de Analisis de Particulas';
        $users = 'marketing.contacto@inolab.com';
        $region = 'Ciudad de México';
        $location = 'Ciudad de México';
        $link = $_SERVER["HTTP_REFERER"];
        $dateTime = new DateTime();
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
    
        $template = new Template([
            'name' => $username,
            'email' => $email,
            'tel' => $phone,
            'company' => $company,
            'canal' => $channel,
            'comentarios' => $comments ?? 'No se agregaron comentarios',
        ]);
    
        $subject = 'Registro de invitado al seminario de Analisis de Particulas';
        $from = $email;
        $to = 'marketing.contacto@inolab.com';
        
        $emailManager = new EmailManager($subject, $from, $to, $template->getFormExpo()); 



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

            echo json_encode(['status' => 301, 'message' => $e->getMessage()]);
        }


?>
