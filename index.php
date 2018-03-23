<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=Anthony;charset=utf8','Anthony','4044059860');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение успешно.  ';
} catch(PDOException $exception){
    echo $exception->getMessage();
}
$sql = "SELECT * FROM slim_users ORDER BY username";
$result = $pdo->query($sql);

/*foreach($result as $row) {
    echo "<p>".$row['id']." | ".$row['username'].'</p>';
}*/
while($row = $result->fetch(PDO::FETCH_OBJ)) {
   // echo "<p>".$row['id']." | ".$row['username'];
    var_dump($row);
}

$users = ['user10','user11','user12'];
$sql = "INSERT INTO slim_users (username) VALUES (:user)";
$query = $pdo->prepare($sql);

foreach ($users as $user){
    $query->bindParam('user',$user);
    $query->execute();
    $lastID = $pdo->lastInsertId();
    echo 'Пользвоатель '.$user.' вставлен с id = '.$lastID.'<br>';
}

