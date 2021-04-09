<?php 

include_once 'classes/Users.php';
include_once 'classes/Handler.php';


if (isset($_POST['registerbtn'])) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	if (!$email == '' && !$name == '' && !$lastname == '' && !$password == '') {

		$reg = new Users($password);
		$chk = $reg->register($name,$lastname,$email);
		if ($chk == true) {
			header('Location: login.php?succ=reg');
		}elseif ($chk == false) {
			header('register.php?error=email');
		}
		
	}else {
		header('Location: register.php?error=empfil');
	}

}

 ?>