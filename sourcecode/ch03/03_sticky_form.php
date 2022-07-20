<?php
$name = "";
$email = "";
$address = "";
if(isset($_POST['submit'])){
	$name = isset($_POST['name'])? $_POST['name'] : "";
	$email = isset($_POST['email'])? $_POST['email'] : "";
	$address = isset($_POST['address'])? $_POST['address'] : "";
	$error_message = "";
	if($name == "")
		$error_message .= "name is empty<br>";	
	if($email == "")
		$error_message .= "email is empty<br>";	
	if($address == "")
		$error_message .= "address is empty<br>";
	if($error_message == ""){
		echo "form submitted";
	}else{
		echo $error_message;
	}
}
?>
<form action="03_sticky_form.php" method="post">
	name: <input type="text" name="name" value="<?php echo $name; ?>"/><br>
	email: <input type="text" name="email" value="<?php echo $email; ?>"/><br>
	address: <input type="text" name="address" value="<?php echo $address; ?>"/><br>
	<input type="submit" name="submit" value="submit"/>
</form>