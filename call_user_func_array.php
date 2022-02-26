<?php 
//вывод всех параметров на отдельных строках
function myecho(...$str)
{
	foreach ($str as $v) {
		echo "$v<br />\n";
	}
}
//То же самое, но предваряет параметры указанным числом пробелов
function tabber($spaces, ...$planets)
{
	//подгоьавливаем аргументы для myecho()
	$new = [];
	foreach ($planets as $planet) {
		$new[] = str_repeat("&nbsp;", $spaces).$planet;
	}
	// Вызываем myecho() с новыми параметрами
	call_user_func_array("myecho", $new);
}
// Отображаем строки одну под другой
tabber(10, "Меркурий", "Венера", "Земля", "Марс");
?>