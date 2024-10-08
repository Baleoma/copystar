
<h2>Вход</h2>
<div class="container mt-5">
    <h2>Авторизация</h2>
    <form id="loginForm" method="post" action="../controllers/login_handler.php">
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div id="errorMessage" class="text-danger"></div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
