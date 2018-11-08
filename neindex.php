<?php

include('errors.php');

$sdd_db_host = 'localhost'; // ваш хост
$sdd_db_name = 'my first try'; // ваша бд
$sdd_db_user = 'root'; // пользователь бд
$sdd_db_pass = ''; // пароль к бд

$link = mysqli_connect($sdd_db_host, $sdd_db_user, $sdd_db_pass, $sdd_db_name); // коннект с сервером бд

$result = mysqli_query($link, 'SELECT * FROM `my_first_project`') or die(mysqli_error($link)); // запрос на выборку

while ($row = mysqli_fetch_array($result))
{
	echo 'ID'.$row['ID'].
	'Price'.$row['Price'].
	'Name of product'.$row['Name_of_product'].
	'Name of state'.$row['Name_of_state'];

	echo '<a href = "/details.php?ID='.$row ['ID'] . '"> Product details </a>';
	echo '<a href = "/update.php?ID='.$row ['ID'] . '">  Update </a>';

}


