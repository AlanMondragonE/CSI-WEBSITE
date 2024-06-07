<?php

    use EmailManager\EmailManager;
    use Template\Template;
    use Conexion\Conexion;

    require 'vendor/autoload.php';
    require 'conexion_pruebas.php';
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
        $charge =  $data['job'];
        $message = 'No aplica';
        $interests = $data['interests'];
        $comments = $data['comments'];
        $channel =  $data['channel'];
        $users =  "alanmondragon031011@gmail.com , alanelquelamonta@hotmail.com, amondragone1400@alumno.ipn.mx";
        $region = 'Ciudad de México';
        $location = 'Ciudad de México';
        $link = $_SERVER["HTTP_REFERER"];
        $dateTime = new DateTime();
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');


    
        $template = new Template([
            'channel' => $channel,
            'name' => $username,
            'email' => $email,
            'tel' => $phone,
            'ext' => $ext,
            'company' => $company,
            'job' => $charge ?? 'No se agregó el puesto',
            'comments' => $comments,
            'interest' => $interests ?? 'No se agregaron intereses',
        ]);

        //echo json_encode([$username, $email, $phone, $company, $charge, $message, $link, $interests, $location, $users, $comments, $channel, null, $date, 1]);


        $subject = 'Registro de Nuevo Prospecto';
        $from = $email;
        $to = $users;
        
        $emailManager = new EmailManager($subject, $from, $to, $template->getNewProspect()); 

        if ($emailManager->sendMail() == 200) {

            $request = $conexion->query(
                'CALL strNewContact(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [$username, $email, $phone, $company, $charge, $message, $link, $interests, $location, $users, $comments, $channel, null, $date, 1]
            );

            echo json_encode(['status' => 200, 'message' => 'Email sent correctly', 'response' =>  $request]);
          
        } else {

            echo json_encode(['status' => 300, 'message' => 'Email not sent', 'error' => $emailManager->sendMail()]);
        }

        
        } catch (\Throwable $e) {

            echo json_encode(['status' => 301, 'message' => 'Ocurrió un error al registrar el formulario']);

            
        }
?>
