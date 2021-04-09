<?php 

include_once 'classes/Users.php';

if (isset($_POST['loginbtn'])) {// geting data when liginbtn is pressed
	
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	if (!$email == '' && !$password == '') {
		$login = new Users($password);
		$chk = $login->login($email);
		if ($chk ) {
			header('Location: index.php?succ=ok');
		}
	}else{
		header('Location: login.php?error=empfil');
	}
}