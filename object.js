// Мини-задача на синтаксис объектов. Напишите код, по строке на каждое действие.
//
var user = {};//     Создайте пустой объект user.
user.name = 'Вася';//     Добавьте свойство name со значением Вася.
user.surname = 'Петров';//     Добавьте свойство surname со значением Петров.
user.name = 'Сергей';//     Поменяйте значение name на Сергей.
delete user.name;//     Удалите свойство name из объекта.

user.name = 'Сергей';
console.log(user);

//delete user.name;
console.log(user);

for (var key in user) {
    alert('Свойства: ' + key +  ', значение:' + user[key]);
}

var goods = [5,3,72,5498,888];

alert(goods[goods.length - 1]);
