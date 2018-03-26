<?php
echo '<b>'.'5. Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени'.'</b>'.'<br>';
$dTime=time() - mktime(7, 23, 48);
    echo $dTime=$dTime/3600 .'<br>'.'<br>';


echo '<b>'.'9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. 
Узнайте какой день недели был 06.06.2006, в ваш день рождения.'.'</b>'.'<br>';
$week=[ 1=>'monday',2=>'tuesday',3=>'wednesday',4=>'thursday', 5=>'friday', 6=>'saturday',7=>'sunday'];
$dateNow = date('w', mktime());
    echo 'Today is '.$week[$dateNow].'<br>';
$date = date('w', mktime(00,00,00,6,06,2006));
    echo 'At 06.06.2006 was '.$week[$date].'<br>';
$birthDate = date('w', mktime(00,00,00,1,07,1992));
    echo 'My birthday was '.$week[$birthDate].'<br>'.'<br>';


echo '<b>'.'18.  В переменной $date лежит дата в формате \'2025-12-31\'. 
Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.'.'</b>'.'<br>';
$date1=date_create('2025-12-31');
$date1=date_modify($date1, '2 day');
$date1=date_format($date1, 'Y.m.d');

$date2=date_create('2025-12-31');
$date2=date_modify($date2, '3 days 1 month');
$date2=date_format($date2, 'Y.m.d');

$date3=date_create('2025-12-31');
$date3=date_modify($date3, '1 year');
$date3=date_format($date3, 'Y.m.d');

$date4=date_create('2025-12-31');
$date4=date_modify($date4, '-3 days');
$date4=date_format($date4, 'Y.m.d');

echo $date1.'<br>';
echo $date2.'<br>';
echo $date3.'<br>';
echo $date4.'<br>';


echo '<b>'.'19.  Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.'.'</b>'.'<br>';
$dateNow = time();
$newYearDay = mktime(0,0,0,1,1,2019);
echo ($newYearDay-$dateNow)/86400;















