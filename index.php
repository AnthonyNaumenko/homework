<?php
session_start();
$_SESSION['test'] = 'Тестовая запись в сессию';
?>

<a href="session.php"> go to the next page</a>
