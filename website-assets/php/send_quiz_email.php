<?php

    use EmailManager\EmailManager;
    use Template\Template;


    require 'vendor/autoload.php';
    require 'conexion_quiz.php';
    require 'email_template.php';   
    require 'email_manager.php';

    try {
        
        $data = json_decode(file_get_contents("php://input"), true);
        
        $id = $data['id'];
        $username = $data['name'];
        $lastName = $data['lastName'];
        $date = $data['date'];
        $folio = $data['folio'];
        
    
        $template = new Template([
            'name' => $username,
            'lastName' => $lastName,
            'date' => $date,
            'folio' => $folio,
            'id' => $id,  
        ]);
    
        $subject = 'Evio de Encuesta Inolab';
        $from = 'alanelquelamonta@hotmail.com';
        $to = 'alanmondragon031011@gmail.com';
        
        $emailManager = new EmailManager($subject, $from, $to, $template->quizInolab()); 



        if ($emailManager->sendMail() == 200) {
            echo json_encode(['status' => 200, 'message' => 'Email sent correctly']);
        } else {
            echo json_encode(['status' => 300, 'message' => 'Email not sent', 'error' => $emailManager->sendMail()]);
        }

        } catch (\Throwable $e) {

            echo json_encode(['status' => 301, 'message' => $e->getMessage()]);
        }


?>
