<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include('handleform.php');
}else{
	include('sampleform.html');
}