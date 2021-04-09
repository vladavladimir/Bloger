<?php 

include_once 'classes/Users.php';

if (isset($_POST['loginbtn'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

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