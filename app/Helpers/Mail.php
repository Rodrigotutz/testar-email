<?php

namespace App\Helpers;

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

class Mail {

    private $mail;
    private $data;

    public function __construct($host, $port, $secure, $user, $pass) {
        $this->mail = new PHPMailer();
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage("br");
        
        $this->mail->SMTPAuth = true;
        $this->mail->CharSet = "utf-8";
        
        $this->mail->Host = $host;
        $this->mail->Port = $port;
        $this->mail->SMTPSecure = $secure;
        $this->mail->Username = $user;
        $this->mail->Password = $pass;
    }

    public function add(string $subject, string $body, string $recipientName, string $recipientEmail): Mail {
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipientName = $recipientName;
        $this->data->recipientEmail = $recipientEmail;
        return $this;
    }

    public function send(): bool {

        $this->mail->Subject = $this->data->subject;
        $this->mail->msgHTML($this->data->body);
        $this->mail->addAddress($this->data->recipientEmail, $this->data->recipientEmail);
        $this->mail->setFrom($this->data->recipientEmail);
            
        if(!$this->mail->send()) {
            return false;
        }

        return true;
    }

}