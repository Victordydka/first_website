<?php 
$conn = new mysqli("localhost", "user", "password");
if(conn->connect_error){
  die("Ошибка" .conn->connect_error);
}

//Создание базы данных
$sql = "CREATE DATABASE Users_registr";
if(conn->query($sql)){
  echo "База данных успешно создана";
} else{
  echo "Ошибка" .conn->error;
}

$conn = new mysqli("localhost", "user", "password", "Users_registr");
if(conn->connect_error){
  die("Ошибка" .conn->connect_error);
}

//Создание таблицы
$sql = "CREATE Table Users_reg (
id INTENGER AUTO_INCREMENT PRIMARY KEY, 
username TEXT,
email TEXT
)";
if(conn->query($sql)){
  echo "Таблица успешно создана";
} else{
  echo "Ошибка" .conn->error;
}

if (isset($_POST["email_reg"]) && isset($_POST["user_name_reg"])) {
  $conn new mysqli("localhost", "user", "password", "Users_registr");
  if ($conn->connect_error) {
    die ("Ошибка: " . $conn->connect_error);
  }
  $email = $conn->real_escape_string($_POST["email_reg"]);
  $name = $conn->real_escape_string($_POST["user_name_reg"]);
  $sql = "INSERT INTO Users (email_reg, user_name_reg) VALUES ('$email', '$name')";
  if($conn->query($sql)){
    echo "Данные успешно добавлены";
  } else{
    echo "Ошибка: " . $conn->error;
  }
  $conn->close();
  
}
?>