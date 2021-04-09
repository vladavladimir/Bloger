<?php
include_once 'classes/Handler.php';
if (isset($_GET['error'])) {
	$arg = $_GET['error'];
	$msg = new Handler();
  	$msg->errorMsg($arg);
	} elseif (isset($_GET['succ'])) {
		$log = $_GET['succ'];
		$msg = new Handler();
	  	$msg->succMsg($log);
	}
