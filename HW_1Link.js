"use strict"

//Получить последний элемент массива
var goods = [12, 32, 34, 65];
var n = goods.length;
    alert(goods[--n]);

//Добавить новый элемент в массив
goods.push('Computer');
    alert(goods);

//Создание массива
var styles = ['Jazz', 'Bluse'];     //Создайте массив styles с элементами «Джаз», «Блюз».
    alert(styles);
styles.push('RocKnRoll');           //Добавьте в конец значение «Рок-н-Ролл»
    alert(styles);
styles[styles.length-2] = 'Classic'; //Замените предпоследнее значение с конца на «Классика». Код замены предпоследнего значения должен работать для массивов любой длины.
    alert(styles);
    alert(styles.shift());        //Удалите первое значение массива и выведите его alert.
    alert(styles);
styles.unshift('Rap', 'Reggae');    //Добавьте в начало значения «Рэп» и «Регги».
    alert(styles);

//Напишите код для вывода alert случайного значения из массива
var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var random = (Math.floor(Math.random() * (arr.length)));
    alert(arr[random]);

//Создайте калькулятор для введённых значений
// Запрашивает по очереди значения при помощи prompt и сохраняет их в массиве.
var calcMas = [];
while(true) {
    var znach = prompt('Vvedite znachenie', 0);
    calcMas.push(+znach);
    // Заканчивает ввод, как только посетитель введёт пустую строку, не число или нажмёт «Отмена».
    // При этом ноль 0 не должен заканчивать ввод, это разрешённое число.
    if (znach === "" || isNaN(znach)|| znach === null) break;
}
// Выводит сумму всех значений массива
var sum = 0;
for (var i=0; i<calcMas.length; i++){
    sum += calcMas[i];
}
alert("Summa elementov masiva" + " [ " + calcMas + " ] " + ' = ' + sum);


// Создайте функцию find(arr, value),
// которая ищет в массиве arr значение value и
// возвращает его номер, если найдено, или -1, если не найдено.

var arr = ['apple','icecream','banana','tomato'];
var value = prompt('Find');
    function find(arr,value) {
        if (arr.indexOf) {
            return arr.indexOf(value);
        }

        else
            {
            for (var i = 0; i < arr.length; i++)
                {
                if (arr[i] != value) return -1;
                }
            }
    }
var res=find(arr,value);
alert(res);


//Фильтр диапазона
//Создайте функцию filterRange(arr, a, b),
// которая принимает массив чисел arr и возвращает новый массив,
// который содержит только числа из arr из диапазона от a до b.
// То есть, проверка имеет вид a ≤ arr[i] ≤ b. Функция не должна менять arr.

var arr = [0,2,4,6,8,10];
var a = prompt('Vvedite nachalo diapazona');
var b = prompt('Vvedite konec diapazona');
function filterRange(arr, a ,b) {
    var arrNew = [];
    for (var i = 0; i < arr.length; i++){
        if (arr[i]>=a && arr[i]<= b) {
            arrNew.push(arr[i]);
        }
    }
    return arrNew;
}
var filtered = filterRange(arr, a ,b);
alert(filtered);

// Решето Эратосфена
/*
1.Создать список последовательных чисел от 2 до n: 2, 3, 4, ..., n.
2.Пусть p=2, это первое простое число.
3.Зачеркнуть все последующие числа в списке с разницей в p, т.е.
2*p, 3*p, 4*p и т.д. В случае p=2 это будут 4,6,8....
4.Поменять значение p на первое не зачеркнутое число после p.
5.Повторить шаги 3-4 пока p2 < n.
6.Все оставшиеся не зачеркнутыми числа – простые.*/
var resh = [];

for (var i = 2; i < 100; i++) {
    resh[i] = true
}

var p = 2;
do {
    for (i = 2 * p; i < 100; i += p) {
        resh[i] = false;
    }
    for (i = p + 1; i < 100; i++) {
        if (resh[i]) break;
    }
    p = i;
} while (p * p < 100);
var sum = 0;
for (i = 0; i < resh.length; i++) {
    if (resh[i]) {
        sum += i;
    }
}
alert(sum);