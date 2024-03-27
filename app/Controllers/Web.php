<?php

namespace App\Controllers;

use Rodrigotutz\Controller;
use App\Helpers\Mail;

class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router, dirname(__DIR__, 1). "/Views/pages/");
    }

    public function home(): void {
        $this->view->addData([
            "title" => "Página Inicial"
        ]);

        echo $this->view->render("home");
    }

    public function email(): void {
        $this->view->addData([
            "title" => getenv("APP_NAME")
        ]);
        echo $this->view->render("smtp");
    }

    public function send($data) {
        $host = filter_var($data['host'], FILTER_DEFAULT);
        $port = filter_var($data['port'], FILTER_VALIDATE_INT);
        $secure = filter_var($data['security'], FILTER_DEFAULT);
        $user = filter_var($data['user'], FILTER_DEFAULT);
        $pass = filter_var($data['password'], FILTER_DEFAULT);
        $fromName = filter_var($data['fromName'], FILTER_DEFAULT);
        $mailFrom = filter_var($data['mailFrom'], FILTER_VALIDATE_EMAIL);
        $message = filter_var($data['message'], FILTER_DEFAULT);

        if(!$host || !$port || !$user || !$pass || !$fromName || !$mailFrom) {
            $this->router->redirect('web.email', ['error' => 'invalid-fields']);
        }

        $mail = new Mail($host, $port, $secure, $user, $pass);

        $mail->add('Teste de e-mail', "<h1>$message</h1>", $fromName, $mailFrom);

        if(!$mail->send()) {
            $this->router->redirect('web.email', ['error' => 'invalid-credentials']);
        }

        $this->router->redirect('web.email', ['success' => "email-send"]);
    }

    public function tips(): void {
        $this->view->addData([
            "title" => "Dicas"
        ]);
        
        echo $this->view->render("tips");
    }

}