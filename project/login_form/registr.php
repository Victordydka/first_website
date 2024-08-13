<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registr and login</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="container">
    <!-- Регистрация -->
    <div id="registration-form" class="form-container">
      <h2>Регистрация</h2>
      <form action="actions/connect_reg.php" method="post">
        <label for="email">Email:</label>
        <input name="email" type="email" id="reg-email" required />

        <label for="name">Имя пользователя:</label>
        <input name="name" type="text" id="reg-name" required />

        <label for="password">Пароль:</label>
        <input name="password" type="password" id="reg-password" required />

        <button type="submit">Зарегистрироваться</button>
      </form>
      <p>Уже есть аккаунт? <a href="#" onclick="showLoginForm()">Войти</a></p>
    </div>

    <!-- Войти -->
    <div id="login-form" class="form-container hidden">
      <h2>Вход</h2>
      <form action="profile_con/connect_log.php" id="login" method="post">
        
        <label for="email">Email:</label>
        <input name="email_log" type="email" id="login-email" required />

        <label for="password">Пароль:</label>
        <input name="password_log" type="password" id="login-password" required />
        
        <button type="submit">Войти</button>
      </form>
      <p>
        Нет аккаунта?
        <a href="#" onclick="showRegisterForm()">Зарегистрироваться</a>
      </p>
    </div>
  </div>
  <script src="scripts.js"></script>
</body>
</html>
