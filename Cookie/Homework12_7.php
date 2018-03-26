<?php
//Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
// Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.

if(!isset($_COOKIE['banner'])){
    ?>
    <img src="http://vse-zdes.ua/media/k2/items/cache/ac7c43b062cac545f5c33d94c2d38252_XL.jpg"><br>
    <form action="" method="POST">
        <input type="submit" name="button" value=" Не показывать больше!">
    </form>
    <?php
    if (!isset($_POST['button'])){
        setcookie('banner','ban',time() + 31*24*3600);
    }
}