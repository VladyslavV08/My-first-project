
<form>
	<input type="hidden" name='ID' value= "<?= $_GET['ID'] ?>" >
	<input name='Price'>
	<input name='Name of product'>
	<input name='Name of state'>
	<input name=update type=submit>
</form>

<?php

include('errors.php');
include('connection.php');

if (isset ($_GET['update']))
 {
	
	$price = $_GET['Price'];
	$Name_of_product = $_GET['Name_of_product'];
	$Name_of_state = $_GET['Name_of_state'];

		

	$query = "UPDATE `my_first_project` SET `Price`= $price,`Name_of_product`='$Name_of_product',`Name_of_state`='$Name_of_state' WHERE ID={$_GET ['ID']}";

	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
} 

