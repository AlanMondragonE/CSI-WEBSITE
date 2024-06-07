<?php

    use Conexion\Conexion;

    require 'vendor/autoload.php';
    require 'conexion_quiz.php';

    try {
        
        date_default_timezone_set('America/Mexico_City');
        $data = json_decode(file_get_contents("php://input"), true);
        $conexion = new Conexion();
    
        $q1 = $data['q1'];
        $q2 = $data['q2'];
        $q3 = $data['q3'];
        $q4 = $data['q4'];
        $q5 = $data['q5'];
        $q6 = $data['q6'];
        $q7 = $data['q7'];
        $q8 = $data['q8'];
        $q9 = $data['q9'];
        $q10 = $data['q10'];
        $q11 = $data['q11'];
        $q12 = $data['q12'];
        $q13 = $data['q13'];
        $q14 = $data['q14'];
        $q15 = $data['q15'];

        $request = $conexion->query(
            'CALL strNewContact(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$username, $email, $phone, $company, $charge, $message, $link, $interests, $location, $users, $comments, $channel, null, $date, 1]
        );

        echo json_encode(['status' => 200, 'message' => 'Contacto guardado correctamente', 'response' =>  $request]);
        
    } catch (\Throwable $e) {

        echo json_encode(['status' => 301, 'message' => 'Ocurrió un error al registrar el formulario']);
        
    }
?>
