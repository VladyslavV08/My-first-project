<?php
include('errors.php');
?>
<form>
	<input name = 'Price'>
	<input name = 'Name of product'>
	<input name = 'Name of state'>
	<input name = add type = submit>
</form>

<?php

if (!empty($_GET['add'])) {
	
	$price = $_GET['Price'];
	$Name_of_product = $_GET['Name_of_product'];
	$Name_of_state = $_GET['Name_of_state'];
	
		include('connection.php');
	 
	$query = "INSERT INTO `my_first_project` (`price`, `Name_of_product`, `Name_of_state`) VALUES ($price, '$Name_of_product' , '$Name_of_state')";

	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	 
}
