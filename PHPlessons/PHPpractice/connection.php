<?php

$host = 'localhost'; // адрес сервера 
$database = 'my first try'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль


 

 $link=mysqli_connect($host, $user, $password, $database) 
 	or die("Ошибка" . mysql_error($link));

?>