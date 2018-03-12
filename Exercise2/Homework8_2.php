<?php
//Сделать форму подписки. Пользователь должен ввести свой email.
// Если пользователь отправить пустой email - он должен получить сообщение об ошибке.
// Email’ы пользователей должны сохраняться в файле subscribers.txt. Каждый email в новой строке.

$errorMessage = '';
if(isset($_POST['email'])){
    $_POST['email']=trim($_POST['email']);
    if (empty($_POST['email'])) {
        $errorMessage = 'Введите email!';
}
if(!$errorMessage) {
    if (file_exists('subscribers.txt')) {
        $mail = explode("\n", file_get_contents('subscribers.txt'));
        $mail = array_filter($mail, function ($item){
            return trim($item);
        });
    } else {
        $mail = [];
    }
    $mail = array_map(function ($item) {
        return explode("\n", $item);
    }, $mail);
    $mailExists = false;
    foreach ($mail as $data) {
        if ($_POST['email'] == $data[0]) {
            $mailExists = true;
            break;
        }
    }
    if ($mailExists) {
        $errorMessage = 'Электронный адресс"' . $_POST['email'] . '" уже зарегистрирован.';
    }
}
 if (!$errorMessage){
     $mail = fopen('subscribers.txt', 'a');
     fwrite($mail, $_POST['email'] . "\n");
     fclose($mail);

        header('location:Success.php');
        exit();
    }
}
if ($errorMessage){
    echo $errorMessage;
}
?>


<form action="" method="POST">

Email: <input type="email" name="email"><br>
       <input type="submit" value="Register">
</form>