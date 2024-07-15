<?php 
$conn = new mysqli("localhost", "user", "password");
if(conn->connect_error){
  die("Ошибка" .conn->connect_error);
}

if (isset($_POST["email_reg"]) && isset($_POST["user_name_reg"])) {
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