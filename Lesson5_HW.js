// Задание 4. Создайте массив, ключами которого служат артикулы товара
// (любое пятизначное число), а значениями – ассоциативный массив, который содержит название товара,
// стоимость, вес единицы товара, ссылку на изображение, отметку о доступности товара на складе.
var results = document.getElementById('results'),
 products = {
    '12345': {
        name: 'Товар 1',
        price: 1000,
        weight: 5,
        image: 'http://placehold.it/100x300',
        isAvailable: true,
    },
    '12345': {
        name: 'Товар 2',
        price: 2000,
        weight: 5,
        image: 'http://placehold.it/100x300',
        isAvailable: true,
    },
    '12345': {
        name: 'Товар 3',
        price: 3000,
        weight: 5,
        image: 'http://placehold.it/100x300',
        isAvailable: true,
    },
    '12345': {
        name: 'Товар 4',
        price: 4000,
        weight: 5,
        image: 'http://placehold.it/100x300',
        isAvailable: true,
    }
};

console.log(products);
results.innerHTML = 'Назване:' + products['12345'].name +'<br>';
results.innerHTML +='Стоимость:' + products['12345'].price +'<br>';
results.innerHTML +='Веc:' + products['12345'].weight +'<br>';
results.innerHTML += 'фото:<img src="' + products['12345'].image +'"><br>';
results.innerHTML +='Есть в наличии:' + (products['12345'].isAvailable ? 'да':'нет') +'<br>';