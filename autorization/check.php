<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 4 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
  }
  else if(mb_strlen($login) < 3 || mb_strlen($login) > 50){
    echo "Недопустимая длина имени";
    exit();
  }
  else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6){
    echo "Недопустимая дина пароля";
    exit();
  }

  $pass = password_hash($pass, PASSWORD_BCRYPT);

  $mysql = new mysqli('localhost', 'root', 'root', 'cafe');
  $mysql->query("INSERT INTO `users` (`login`, `pass`)
  VALUES('$login', '$pass')");

  $mysql->close();

  header('Location: /');
  exit();

?>
