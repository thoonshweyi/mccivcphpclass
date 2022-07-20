<?php

if(isset($_POST["submit"])) {
	$name = $_POST["name"];
	$alias = implode(",", $_POST["alias"]);
	$gender = $_POST["gender"];
	$education = $_POST["education"];
	$bio = $_POST["bio"];

	
	$tmp_name = $_FILES["photo"]["tmp_name"];
	$filename = basename($_FILES["photo"]["name"]);

	$target_dir = "upload";
	move_uploaded_file($tmp_name, "$target_dir/$filename");    

	echo "<img src=\" $target_dir/$filename \" width=\"200\"/><br>";
	echo "Name: {$name} <br>";
	echo "Alias: {$alias} <br>";
	echo "Gender: {$gender} <br>";
	echo "Education: {$education} <br>";
	echo "bio: {$bio} <br>";
}