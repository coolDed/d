<?php 
function tabber($spaces, $echo, ...$planets)
{
	//Подготавливаем аргументы для mycho()
	$new = [];
	foreach ($planets as $planet) {
		$new[] = str_repeat("&nbsp;", $spaces).$planet;
	}
	//ПОльзовательский ввод задается извне
	$echo(...$new);
}

//Массив для вывода
$planets = ["Меркурий", "Венера", "Земля", "Марс"];
//Отображаем строки одну под другой
tabber(10, function(...$str) {
	foreach ($str as $v) {
		echo "$v<br />\n";
	}
}, ...$planets);
?>