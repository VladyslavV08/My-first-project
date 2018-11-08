  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <?php

 require_once 'connection.php';


$email= $_POST['email'];
$password= $_POST['password'];

$query="SELECT * FROM `users` WHERE `Email` = '$email' AND `Password` = '$password'";

$result = mysqli_query($link , $query) or die(mysqli_error($link));

	if ($row = mysqli_fetch_array($result))
	{
		echo "Вы авторизованы как:" . $row ['Name'];
	}

	//if ($result = 
	//if (mysqli_fetch_array()) = 
// echo (вы авторизированны как )
?>
<form action="/PHPlessons/PHPpractice/Authorization.php" method="POST">

<p>
	<p><strong>Ваш Email</strong>:</p>
	<input type="email" name="email" value="<?php echo @$data['email'];
	?>">
</p>

<p>
	<p><strong>Ваш Пароль</strong>:</p>
	<input type="password" name="password" value="<?php echo @$data['password'];
	?>">
</p>

 <p>
 	<button type="submit" name="do_signup">Войти</button>
 </p>