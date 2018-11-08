 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <?php

 require_once 'connection.php';

 $data = $_POST;
 if( isset($data['do_signup'])) 
 {
 	// здесь регистрируем

 	$errors= array();
 	if (trim($data['login']) == '') 
 	{
 		$errors[] = 'Введите логин';	
 	}

	if (trim($data['email']) == '') 
 	{
 		$errors[] = 'Введите Email';	
 	}

 	if (($data['password']) == '') 
 	{
 		$errors[] = 'Введите пароль';	
 	}

 	if (($data['password_2']) == '') 
 	{
 		$errors[] = 'Повторный пароль введен не верно!';	
 	}

 	if (empty($errors)) 
 	{
 		// регистрируем
 	}	else
 	{
 		echo '<div style="color: red;">' .array_shift($errors).'</div><hr>';
 	}


 }
$login= $_POST['login'];
$email= $_POST['email'];
$password= $_POST['password'];
$password_2= $_POST['password_2'];


$query= "INSERT INTO `users`(`Name`, `Email`, `Password`, `Password_2`) VALUES ('$login','$email','$password','$password_2')";
$result = mysqli_query($link , $query) or die(mysqli_error($link));

	if ($row = mysqli_fetch_array($result))
		echo "Вы авторизованы как:" . $row ['Name'];

?>

<form action="/PHPlessons/PHPpractice/registration.php" method="POST">
<p>
	<p><strong>Ваш Логин</strong>:</p>
	<input type="text" name="login" value="<?php echo @$data['login'];
	?>">
</p>

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
	<p><strong>Подтвердите Пароль</strong>:</p>
	<input type="password" name="password_2" value="<?php echo @$data['password_2'];
	?>">
</p>

 <p>
 	<button type="submit" name="do_signup">Зарегистрироваться</button>
 </p>


</form>