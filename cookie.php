<?php 
//вначале счеткик равен нулю
$count = 0;
//если в кукисах что-то есть, то берем счеткичк оттуда
if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
setcookie("count", $count, 0x7FFFFFFF, "/");
echo $count;
?>