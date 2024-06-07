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
    
        $message = '';
        $username = $data['name'];
        $phone = $data['tel'];
        $email = $data['email'];
        $company = $data['company'];
        $charge =  $data['job'];
        $interests = $data['interests'];
        $comments = $data['comments'];
        $channel =  'Expofarma';
        $users = null;
        $region = 'Ciudad de México';
        $location = 'CDMX';
        $link = $_SERVER["HTTP_REFERER"];
        $dateTime = new DateTime();
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        
        $template = new Template([
            'channel' => $channel,
            'name' => $username,
            'email' => $email,
            'tel' => $phone,
            'company' => $company,
            'job' => $charge,
            'channel' => $channel,
            'comments' => $comments ?? 'No se agregaron comentarios',
            'interest' => $interests,
        ]);
    
        $subject = 'Registro De Prospectos Expofarma';
        $from = $email;
        $to = 'marketing.contacto@inolab.com';
        
        $emailManager = new EmailManager($subject, $from, $to, $template->getFormExpoPros()); 
        
        if ($emailManager->sendMail() == 200) {

            $request = $conexion->query(
                'CALL strNewContact(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [$username, $email, $phone, $company, $charge, $message, $link, $interests, $location, $users, $comments, $channel, null, $date, 1]
            );

            if ($request['count'] > 0) {

                echo json_encode(['status' => 200, 'message' => 'Email sent correctly']);
                
                
            }else{
                
                  echo json_encode(['status' => 300, 'message' => 'Fallo la conexión']);
            }
            
        } else {

            echo json_encode(['status' => 300, 'message' => 'Email not sent', 'error' => $emailManager->sendMail()]);
        }
        } catch (\Throwable $e) {
            
            echo json_encode(['status' => 301, 'message' => $e->getMessage()]);
        }
?>
