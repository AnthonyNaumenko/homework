"use strict"

/*Объявите две переменные: admin и name.
    Запишите в name строку "Василий".
    Скопируйте значение из name в admin.
    Выведите admin (должно вывести «Василий»).*/
//Сделайте функцию, которая возвращает куб числа. Число передается параметром.
function sqr(number)
{
    return number * number;
}
console.log('квадрат 9 =' +sqr(9));

//Сделайте функцию, которая возвращает сумму двух чисел
function sum(number1, number2) {
    return number1 + number2;
}
var resultP = document.getElementById('results');
resultP.innerHTML = '2 + 15= ' + sum(2, 15);

//Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
function dayOfWeek(day)
{
switch (day) {
    case 1: return 'Mond';
    case 2: return 'Tue';
    case 3: return 'Wed';
    case 4: return 'Third';
    case 5: return 'Fri';
    case 6: return 'Sat';
    case 7: return 'Sun';
}
return 'Wrong day!';
}
resultP.innerHTML += '<br>';
resultP.innerHTML += 'День недели(2):' + dayOfWeek(2);
resultP.innerHTML += '<br>';
resultP.innerHTML += 'День недели(40):' + dayOfWeek(40);



function factorial(value) {
    var ret;
    if (value < 1) {
        ret = null;
    } else if (value == 1) {
        ret = 1;
    }else{
        ret = value * factorial(value - 1 )
    }

return ret;

}
resultP.innerHTML += '<br>';
debugger;
resultP.innerHTML += 'factorial 5:' + factorial(5);