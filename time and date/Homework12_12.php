<?php
echo '<b>'.'12. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год'.'</b>'.'<br>';

$errorMessage='';

if (isset($_POST['year'])){
    if(empty($_POST['year'])){
        $errorMessage='Введите год';
    }
    if(!$errorMessage){
        $date = date('L', mktime(00,00,00,1,01, $_POST['year']));
        if($date==1){
            echo 'Високосный год';
        } else {
            echo 'Не високосный год';
        }
    }
}
?>

<form action="" method="POST">
    <p> Введите год: <input type="text" name="year"></p>
    <p><input type="submit"></p>
</form>



