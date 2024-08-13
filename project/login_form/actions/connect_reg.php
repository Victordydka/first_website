<?php
  $conn = new mysqli('db:3306', 'root', '1960', 'website');
  if($conn->connect_error) {
    die("Failed to connect to database" . $conn->connect_error);
  }

  $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
  $name = trim($_POST['name']);
  $password = trim($_POST['password']);
  
  if(!$email) {
    echo "Вы не указали действительный адрес электронной почты";
    exit();
  }else if(mb_strlen($name) < 4 || mb_strlen($name) > 20) {
    echo "Ваше имя должно быть больше 4 и меньше 20 символов";
    exit();
  }else if(mb_strlen($password) < 3 || mb_strlen($password) > 20) {
    echo "Ваш пароль должен быть больше 3 и меньше 20 символов";
    exit();
  }
  $email_reg = $conn->query("SELECT * FROM users WHERE email = '$email' OR name = '$name'");
  if($email_reg->num_rows > 0) {
    echo "Пользователь уже существует, проверьти все введенные данные или измените имя";
  }else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $conn->query("INSERT INTO `users` (`email`, `name`, `password`) VALUES('$email', '$name', '$hashed_password')");
  }
  $conn->close();
?>


