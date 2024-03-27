<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"), "@");

$router->namespace("App\Controllers");

$router->group(null);
$router->get("/", "Web@home", "web.home");
$router->get("/email", "Web@email", "web.email");
$router->get("/dicas", "Web@tips", "web.tips");
$router->post("/send", "Web@send", "web.send");

$router->dispatch();

if($router->error()) {
    echo "Página não encontrada";
}