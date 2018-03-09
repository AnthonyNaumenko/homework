<?php
require 'TagA.php';
require 'TagUL.php';

$google = new TagA;
$google
 ->setText('в гугл')
 ->setHref('https://google.com')
 ->setTargetBlank();

echo $google->show();

$list = new TagUL();
$list
    ->addItem('пЕрвый')
    ->addItem('Второвй')
    ->addItem('Nhtnbq')
    ->addItem('Четверты')
    ->addItem('пятый');
echo $list->show();