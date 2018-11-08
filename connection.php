<?php

	$sdd_db_host = 'localhost'; // ваш хост
	$sdd_db_name = 'my first try'; // ваша бд
	$sdd_db_user = 'root'; // пользователь бд
	$sdd_db_pass = ''; // пароль к бд

	$connection = mysqli_connect($sdd_db_host, $sdd_db_user, $sdd_db_pass, $sdd_db_name);

	if ($connection == false)
	{
		echo 'Не удалось подключиться к базе';
		echo mysqli_connect_error ();
		exit();
	}	

