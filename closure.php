<?php 
$message = "Работа не может продолжена из-за ошибок:<br />";
$check = function(array $errors) use ($message)
{
	if (isset($errors) && count($errors) > 0) {
		echo $message;
		foreach($errors as $error) {
			echo "$error<br />";
		}
	}
};

$check([]);
// ...
$errors[] = "Заполните имя пользователя";
$check($errors);
// ...
$message = "Список требований";
$errors = ["PHP", "MySQL", "memcache"];
$check($errors);
?>