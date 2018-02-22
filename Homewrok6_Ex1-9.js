$(document).ready(function(){
//простые селекторы

//Всем <h2> поставьте текст "!"
    $('h2').text('!');
//Всем <h3> сделайте синий цвет
	$('h3').css('color', 'blue') ;
//Всем <h2> сделайте зелёный  цвет и font-size: 30px
	$('h2').css({color:"green", fontSize :"30px"});
//Получите и покрасьте в красный цвет следующие элементы:
//Все элементы с классом test.
	$('.test').css('color', 'red') ;
//Все <h2> с классом test
	$('h2.test').css('color', 'red') ;
//Все абзацы которые следуют сразу за абзацами. 
	$('p+p').css('color', 'red') ;
//Все <li>, которые следуют сразу за <li> с классом www
	$('li.www~li').css('color', 'red') ;
//Все <i> внутри <h3>
	$('h3 i').css('color', 'red') ;
//Все <i> непосредственно внутри <h3>
	$('h3 > i').css('color', 'red') ;
});