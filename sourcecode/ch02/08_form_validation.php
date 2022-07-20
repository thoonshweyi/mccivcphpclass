<?php
//this code will run only if form is submitted.
if(isset($_POST['submit'])){
	$name = $_POST["name"];
	$email = $_POST['email'];

	$error_message = "";

	if(empty($name) || $name == ''){
		$error_message .= "Your name is empty.<br>";	
	}

	if(empty($email) || $email == ''){
		$error_message .= "Your email is empty.<br>";
		
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error_message .= "Your email invalid.<br>";		
	}

	if($error_message == ""){
		echo "Hello! {$name}. Your email is {$email}";
	}else{
		echo $error_message;
	}
}
?>
<!DOCTYPE html>
<html>
<head><title>PHP</title></head>
<body>
	<form action="08_form_validation.php" method="post">
		Enter your name: <input type="text" name="name"/><br>
		Enter email: <input type="text" name="email"/><br>
		<input type="submit" name="submit" value="Submit"/>
	</form>
</body>
</html>

