<h2>Регистрация</h2>
<div class="container mt-5">
    <h2>Регистрация</h2>
    <form id="registerForm" method="post" action="register_handler.php">
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name" required pattern="[А-Яа-яЁё\s-]+">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Фамилия</label>
            <input type="text" class="form-control" id="surname" name="surname" required pattern="[А-Яа-яЁё\s-]+">
        </div>
        <div class="mb-3">
            <label for="patronymic" class="form-label">Отчество (необязательно)</label>
            <input type="text" class="form-control" id="patronymic" name="patronymic" pattern="[А-Яа-яЁё\s-]+">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login" required pattern="[A-Za-z0-9-]+">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required minlength="6">
        </div>
        <div class="mb-3">
            <label for="password_repeat" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="password_repeat" name="password_repeat" required minlength="6">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="rules" name="rules" required>
            <label class="form-check-label" for="rules">Я согласен с правилами регистрации</label>
        </div>
        <div id="errorMessage" class="text-danger"></div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
