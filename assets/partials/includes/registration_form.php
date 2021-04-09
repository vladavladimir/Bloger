<?php 

include_once 'classes/Users.php';

include_once 'classes/Handler.php';

if (isset($_POST['registerbtn'])) {//geting all data when registerbtn is prest
	$email = htmlspecialchars($_POST['email']);//using htmlspecialchars to remov some unwanted entry
	$name = htmlspecialchars($_POST['name']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$password = htmlspecialchars($_POST['password']);
	if (!$email == '' && !$name == '' && !$lastname == '' && !$password == '') {//checking if any of filds is empty
		$reg = new Users($password);
		$chk = $reg->register($name,$lastname,$email);
		if ($chk == true) {//returning succ or err to handler
			header('Location: login.php?succ=reg');
		}elseif ($chk == false) {
			header('register.php?error=email');
		}
		
	}else {
		header('Location: register.php?error=empfil');
	}

}

 ?>