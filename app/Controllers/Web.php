<?php

namespace App\Controllers;

use Rodrigotutz\Controller;

class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router, dirname(__DIR__, 1). "/Views/pages/");
    }

    public function home(): void {
        echo $this->view->render("home");
    }

}