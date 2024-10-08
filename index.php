<?php
require_once 'controllers/ProductsController.php';

$controller = new ProductsController();
$controller->index();



session_start();

// Получаем значение параметра 'page'. Если параметр не задан, устанавливаем 'about'.
$page = isset($_GET['page']) ? $_GET['page'] : 'about';


include 'views/header.php';

// Используем switch для подключения контента в зависимости от параметра 'page'
switch ($page) {
    case 'about':
        include 'views/about.php';  // Страница "О нас"
        break;
    case 'catalog':
        include 'views/catalog.php';  // Страница каталога
        break;
    case 'contact':
        include 'views/contact.php';  // Страница "Где нас найти?"
        break;
    case 'login':
        include 'views/login.php';  // Страница входа
        break;
    case 'register':
        include 'views/register.php';  // Страница регистрации
        break;
    case 'logout':
        include 'views/logout.php';  // Страница выхода
        break;
    default:
        // Если маршрут не найден, отображаем 404 страницу
        http_response_code(404);
        echo 'Страница не найдена!';
        break;
}


