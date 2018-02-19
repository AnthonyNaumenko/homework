"use strict"

// Дан массив mas.
// Выведите его на страницу HTML в формате индекс элемента — значение (через три дефиса).
// Каждый элемент с новой строки.

var res = document.getElementById('exercise1');
var mas = [15, 'hello', 'trump', 23, 'world', 999, 176];
    for (var i = 0; i < mas.length; i++){
            res.innerHTML += "---" + mas[i] + "<br>";
        }



// Дан массив mas. Выведите его на страницу HTML в формате индекс элемента —
// значение (через дефис). Каждый элемент с новой строки. Выводить нужно те элементы,
// значение которых больше пяти (5).
var res = document.getElementById('exercise2');
var mas = [2, 3, 4, 5, 6, 4, 77, 32, 4];
for (var i = 0; i < mas.length; i++){
    if(mas[i]>5) res.innerHTML += "-" + mas[i] + "<br>";

}