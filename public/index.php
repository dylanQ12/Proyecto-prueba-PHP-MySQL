<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\ProductController;

$router = new Router();

// Rutas del Controlador Productos.
$router->get('/', [ProductController::class, 'index']);
$router->get('/create-product', [ProductController::class, 'create']);
$router->post('/create-product', [ProductController::class, 'create']);
$router->get('/product/edit', [ProductController::class, 'update']);
$router->post('/product/edit', [ProductController::class, 'update']);
$router->post('/product/delete', [ProductController::class, 'delete']);

$router->comprobarRutas();
