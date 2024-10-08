<?php
session_start();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    try {
        // Поиск пользователя по логину
        $sql = "SELECT * FROM users WHERE login = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: index.php");
            exit;
        } else {
            echo 'Неверный логин или пароль!';
        }

    } catch (PDOException $e) {
        die('Ошибка при входе: ' . $e->getMessage());
    }
}
?>
