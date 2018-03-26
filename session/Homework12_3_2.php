<?php
session_start();

if(!empty($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email = '';
?>

<form action="" method="GET">
    <p>Введите имя:<input type="text" name="name"></p>
    <p>Введите Фамилию:<input type="text" name="surname"></p>
    <p>Введите email:<input type="email" name="email" value="<?php echo $email ?>"></p>
    <p>Введите пароль:<input type="password" name="password"></p>
    <input type="submit">
</form>