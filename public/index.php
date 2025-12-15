<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../app/Controller/HomeController.php';

$controller = new HomeController();
$page = $_GET['page'] ?? 'home';

if ($page === 'error') {
    $controller->error();
} else {
    $controller->index();
}