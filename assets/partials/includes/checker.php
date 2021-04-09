<?php
include_once 'classes/Handler.php';//includig class Handler
if (isset($_GET['error'])) {//if error is set this will fet it and pass true param
	$arg = $_GET['error'];
	$msg = new Handler();
  	$msg->errorMsg($arg);
	} elseif (isset($_GET['succ'])) {//if error is set this will fet it and pass true param
		$log = $_GET['succ'];
		$msg = new Handler();
	  	$msg->succMsg($log);
	}
