<?php
//Сделать вывод пользователей из файла users.txt (который создали на уроке) в виде “красивой” HTML-таблицы
$errorMessage = '';
if (!file_exists('users.txt')){
    $errorMessage = 'There is no file in derictory!';
    echo $errorMessage;
}

if(!$errorMessage) {
if (file_exists('users.txt')) {
    $users = explode("\n", file_get_contents('users.txt'));
    $users = array_filter($users, function ($item){
        return trim($item);
    });
} else {
    $users = [];
}
$users = array_map(function ($item) {
    return explode("\t", $item);
}, $users);

};

?>

<table border="1">
    <tr><td>Users</td><td>Password</td></tr>

    <?php
foreach ($users as  $log){
   echo '<tr>'.'<td>'.$log[0].'</td>'.'<td>'.$log[1].'</td>'.'</tr>';
    }
    ?>

</table>



