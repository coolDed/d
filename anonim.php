<?php 
$myecho = function (...$str)
{
	foreach ($str as $v) {
		echo "$v<br />\n";
	}
};
$myecho("Меркурий", "Венера", "Земля", "Марс");
?> 