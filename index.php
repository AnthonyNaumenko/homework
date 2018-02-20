<?php
//Дан массив с числами. Числа могут быть положительными и отрицательными.
// Найдите сумму положительных элементов этого массива.
$arr = [3, -50, -40, 77, 89];
$sum=0;
foreach ($arr as $item){
    if ($item>0){
        $sum += $item;
    }
}
echo $sum.'<br>';
$huiSum=0;
foreach ($arr as $item){
    if ($item<=0) {
        continue;
    }
    $huiSum += $item;

}
echo $sum;




