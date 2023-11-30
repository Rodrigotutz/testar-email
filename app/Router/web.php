<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"), "@");

$router->namespace("App\Controllers");

$router->group(null);
$router->get("/", "Web@home", "web.home");
$router->post("/send", "Web@send", "web.send");

$router->dispatch();

if($router->error()) {
    echo "Erro";
}