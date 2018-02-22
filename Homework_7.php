<?php
echo '<p>1.Дан массив с элементами 1, 2, 3, 4, 5. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат запишите переменную $result.</p>';
$arr=[1,2,3,4,5];
$result=0;
foreach($arr as $item){
    $result += $item*$item;
}
echo $result;
echo '<hr>';

echo '<p>2. Дан массив $arr с ключами \'Коля\', \'Вася\', \'Петя\' и с элементами \'200\', \'300\', \'400\'.
С помощью цикла foreach выведите на экран столбец строк такого формата:
\'Коля - зарплата 200 долларов.</p>';
$arr=['Коля'=>200,'Вася'=>300,'Петя'=>400];
foreach($arr as $name=>$money ){
    echo $name.  ' - зарплата '.$money. ' долларов'. '<br>';
}
echo '<hr>';

echo '<p>3. Составьте массив дней недели.
С помощью цикла foreach выведите все дни
недели, а текущий день выведите курсивом.
Текущий день должен храниться в
переменной $day.</p>';
$week=['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
foreach($week as $day){
    $dayToday = date("l");
    echo $day==$dayToday ? '<i>'.$day.'</i>'.'<br>': $day.'<br>';
}
echo '<hr>';

echo '<p>4. Дан массив $arr.
С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.</p>';
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];


foreach (array_keys($arr) as $eng) {
    $en[]=$eng;
}
foreach (array_values($arr) as $rus) {
    $ru[] = $rus;
}
echo '<h4>Массив $en</h4>';
var_dump($en);
echo '<h4>Массив $ru</h4>';
var_dump($ru);
