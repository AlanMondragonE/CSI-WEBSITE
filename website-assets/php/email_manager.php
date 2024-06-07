<?php

namespace EmailManager;

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailManager
{

    protected $subject;
    protected $from;
    protected $to;
    protected $body;

    function __construct($subject, $from, $to, $body)
    {
        $this->subject = $subject;
        $this->from = $from;
        $this->to = explode(',', $to);
        $this->body = $body;

    }

    public function getSMTPOptions()
    {
        return array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
    }

    public function getSubject(){

        return $this->subject;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getBody(){

        return $this->body;

    }

    public function sendMail()
    {

        $mail = new PHPMailer(true);

        try {

            $mail->CharSet = 'utf-8';
            $mail->SMTPDebug = 0;
            $mail->IsSMTP();
            $mail->Host       = 'smtp.inolab.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply@inolab.com';
            $mail->Password   = 'M_InolabMail22*';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 1025;
            $mail->SMTPOptions = $this->getSMTPOptions();
            $mail->setFrom('noreply@inolab.com', 'Inolab Especialistas');

            foreach($this->getTo() as $user){      
                $mail->addAddress($user);  
            } 


            $mail->isHTML(true);
            $mail->Subject = $this->getSubject();
            $mail->Body = $this->getBody();


            if ($mail->send()) {

                return 200;

            } else {

                return $mail->ErrorInfo;
            }


        } catch (Exception $e) {

            return 500;
        }
    }
}


?>