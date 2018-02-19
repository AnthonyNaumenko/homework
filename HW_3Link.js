"use strics"

// Задание 1.
// Создайте ассоциативный массив содержащий описание человека.
// Задайте поля: имя, возраст, пол, индивидуальный номер.
// Заполните массив. Выведите его в консоли.
var human = {};
    human.name = "Sveredyn";
    human.sex = "male";
    human.age = "26";
    human.Id = "9379992";
console.log(human);

// Задание 2.
// Создайте ассоциативный массив содержащий описание человека.
// Задайте поля: имя, возраст, пол, индивидуальный номер.
// Заполните массив. Выведите его в консоли.
// Добавьте в массив метод, который будет рассчитывать год рождения человека
// исходя из его возраста и возвращать его.
var human = {};
    human.name = "Sveredyn";
    human.sex = "male";
    human.age = "26";
    human.Id = "9379992";
var yearOfBirth = 2018-human.age;
    human.yearOfBirth = yearOfBirth;
console.log(human);

// Задание 3.
// Создайте ассоциативный массив свойство mas которое содержит массив чисел
// (любого количества), добавьте метод, который выводит сумму чисел
// содержащихся в mas.
var arr = {
    mas: [5,6,34,12,45]
};
arr.sum = function(){
    var res = 0;
    this.mas.forEach(function (value) {
        res += value;
    });
    return res;

};
alert('Sum:' + arr.sum());


// Задание 4.
// Создайте массив, ключами которого служат артикулы товара
// (любое пятизначное число), а значениями – ассоциативный массив, который содержит название товара,
// стоимость, вес единицы товара, ссылку на изображение, отметку о доступности товара на складе.
var results = document.getElementById('results1'),
    products = {
        '00001': {
            name: 'Товар 1',
            price: 1000,
            weight: 5,
            image: 'http://placehold.it/100x300',
            isAvailable: true,
        },
        '00002': {
            name: 'Товар 2',
            price: 2000,
            weight: 5,
            image: 'http://placehold.it/100x300',
            isAvailable: true,
        },
        '00003': {
            name: 'Товар 3',
            price: 3000,
            weight: 5,
            image: 'http://placehold.it/100x300',
            isAvailable: true,
        },
        '00004': {
            name: 'Товар 4',
            price: 4000,
            weight: 5,
            image: 'http://placehold.it/100x300',
            isAvailable: true,
        }
    };

console.log(products);
results.innerHTML += 'Назване:' + products['00001'].name +'<br>';
results.innerHTML += 'Стоимость:' + products['00001'].price +'<br>';
results.innerHTML += 'Веc:' + products['00001'].weight +'<br>';
results.innerHTML += 'фото:<img src="' + products['00001'].image +'"><br>';
results.innerHTML += 'Есть в наличии:' + (products['00001'].isAvailable ? ' да':' нет') +'<br>';

// Задание 5.
// Дан ассоциативный массив.
// Выведите его на страницу html в формате ключ — значение.
// Каждый элемент с новой строки.

var results = document.getElementById('results2')
var day = {
    "d1" : "Понедельник",
    "d2" : "Вторник",
    "d3" : "Среда",
    "d4" : "Четверг"
};

for (var i in day)
    results.innerHTML += i + " - " + day[i] + "<br>";

// Задание 6.
// Дан ассоциативный массив.
// Выведите его на страницу html в формате ключ *** значение.
// Каждый элемент с новой строки.
var results = document.getElementById('results3')
var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};
for (var i in arr)
    results.innerHTML += i + " *** " + arr[i] + "<br>"

// Задание 7.
// Дан ассоциативный массив.
// Выведите его в консоль.
// Преобразуйте строку и сохраните в LocalStorage под именем mass.
// Считайте из LocalStorage запись mass. Выведите в консоль.
// Преобразуйте в массив и повторите вывод в консоль.
var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};
console.log(arr);

// Задание 8.
// Дан массив товаров, выведите товары на страницу цены которых больше 20
var results = document.getElementById('results4')
var goods = {
    "dd" : {
        "name": "Яблоки",
        "cost": 13
    },
    "dc" : {
        "name": "Груши",
        "cost": 23
    },
    "cd" : {
        "name": "Абрикосы",
        "cost": 33
    },
    "dee" : {
        "name": "Сливы",
        "cost": 43
    },
    "dd2" : {
        "name": "Вишни",
        "cost": 19
    },
};

for (var i in goods)
 if(goods[i].cost>20) {
     results.innerHTML += "Название" + ':' + goods[i].name + "<br>";
     results.innerHTML += "Цена" + ':' + goods[i].cost + "<br>" + "<br>";
 }
// Задание 9.
// Дан массив товаров, выведите товары на страницу HTML,
// цены которых лежат в диапазоне от 220 до 300 и количество (amount) больше 200
var results = document.getElementById('results5')
var goods = {
    "apple" : {
        "name": "Яблоки",
        "cost": 230,
        "amount":300
    },
    "pear" : {
        "name": "Груши",
        "cost": 34,
        "amount":100
    },
    "apricot" : {
        "name": "Абрикосы",
        "cost": 23,
        "amount":170
    },
    "plum" : {
        "name": "Сливы",
        "cost": 21,
        "amount":250
    },
    "cherry" : {
        "name": "Вишни",
        "cost": 19,
        "amount":312
    },
};

for (var i in goods)
    if(goods[i].cost>=220 && goods[i].cost<=300 && goods[i].amount>200) {
        results.innerHTML += "Название" + ':' + goods[i].name + "<br>";
        results.innerHTML += "Цена" + ':' + goods[i].cost + "<br>";
        results.innerHTML += "Количество" + ':' + goods[i].amount + "<br>" + "<br>";
    }


