  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <?php

 require_once 'connection.php';


$email= $_POST['email'];
$password= $_POST['password'];
if(!isset($_COOKIE['user_id'])){
	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($link, trim($_POST['email']));
		$password = mysqli_real_escape_string($link, trim($_POST['password']));
		if(!empty($email) && !empty($password)){
			$query="SELECT * FROM `users` WHERE `Email` = '$email' AND `Password` = '$password'";

			$result = mysqli_query($link , $query) or die(mysqli_error($link));
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				setcookie('email', $row['email'], time() + (60*60*24*30));
				setcookie('password', $row['password'], time() + (60*60*24*30));
			}
		}
	
	}

}

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
