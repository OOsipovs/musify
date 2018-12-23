<?php 

function sanitizeFormUserName($inputText){
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormPasssword($inputText){
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormString($inputText){
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

if(isset($_POST['loginButton'])){
	//login button was pressed
}

if(isset($_POST['registerButton'])){
	//register button was pressed
	$username =  sanitizeFormUserName($_POST['username']);
	
	$firstname =  sanitizeFormString($_POST['firstName']);

	$lastname =  sanitizeFormString($_POST['lastName']);
	
	$email =  sanitizeFormString($_POST['email']);

	$email2 =  sanitizeFormString($_POST['email2']);

	$password = sanitizeFormPasssword($_POST['password']);

	$password2 = sanitizeFormPasssword($_POST['password2']);
	
}

 ?>