<?php

$conn = new mysqli('db:3306', 'root', '1960', 'website');
if($conn->connect_error) {
  die("Failed to connect to database". $conn->connect_error);
}

$email = filter_var(trim($_POST['email_log']), FILTER_VALIDATE_EMAIL);
$password = trim($_POST['password_log']);

$login = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $login);
if(mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result); /* извлекает строку результата запроса из базы данных */
    // Проверяем, совпадает ли введенный пароль с хэшированным паролем в базе данных
    if (password_verify($password, $user['password'])) {
      $userEmail = $user['email'];
      $userName = $user['name'];
    } else {
      $userEmail = "Не найден";
      $userName = "Не найден";
    }
}else {
  $userEmail = "Не найден";
  $userName = "Не найден";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <link rel="stylesheet" href="style_account.css" />
</head>
<body>
  <div class="container">
    <div id="profile" class="form-container hidden">
      <h2>Профиль пользователя</h2>
      <p>Email: <?php echo htmlspecialchars($userEmail); ?></p>
      <p>Имя пользователя: <?php echo htmlspecialchars($userName); ?></p>
      <button onclick="logout()">Выйти</button>
    </div>
  </div>
  <script src="scripts.js"></script>
</body>
</html>