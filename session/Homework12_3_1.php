<?php
//3.Спросите у пользователя email с помощью формы.
// Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
// при ее открытии поле email было автоматически заполнено.

	if (!empty($_REQUEST['email'])) {
        session_start();
        $_SESSION['email'] = $_REQUEST['email'];
    }
?>

<form action="" method="GET">
    <p>Введите email: <input type="email" name="email"></p>
	<input type="submit">
</form>

