<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_repeat = trim($_POST['password_repeat']);

    // Проверка совпадения паролей
    if ($password !== $password_repeat) {
        die('Пароли не совпадают!');
    }

    // Хеширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Вставка пользователя в базу данных
        $sql = "INSERT INTO users (name, surname, login, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $surname, $login, $email, $hashed_password]);

        // Перенаправление на страницу входа после успешной регистрации
        header("Location: login.php");
        exit;

    } catch (PDOException $e) {
        die('Ошибка при регистрации: ' . $e->getMessage());
    }
}
?>
