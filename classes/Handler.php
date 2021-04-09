<?php

// error and succes handler
class Handler
{

	public function errorMsg(string $arg):void{
		// error handlers
		if(isset($_GET['error']) && $_GET['error'] == $arg){
			if ($arg == 'email') {
				echo "<script>alert('Email is allready in use pls use another email')</script>";
			}elseif ($arg == 'empfil') {
				echo "<script>alert('You need to fill all input fields')</script>";
			}elseif ($arg == 'loged') {
				echo "<script>alert('You are all ready registerd and login')</script>";
			}elseif ($arg == 'wrng') {
				echo "<script>alert('Pls enter true credencials')</script>";
			}elseif ($arg == 'err') {
				echo "<script>alert('You are not registerd')</script>";
			}elseif ($arg == 'sout') {
				echo "<script>alert('Something went wrong try again')</script>";
			}elseif ($arg == 'noblog') {
				echo "<script>alert('Something went south, try creating blog later')</script>";
			}elseif ($arg == 'blogno') {
				echo "<script>alert('Blog not updated try again in 5 min')</script>";
			}elseif ($arg == 'nodel') {
				echo "<script>alert('Blog not deleted try again in 5 min')</script>";
			}elseif ($arg == 'usrwrg') {
				echo "<script>alert('No delete check code')</script>";
			}elseif ($arg == 'noapp') {
				echo "<script>alert('No approved hapend check code')</script>";
			}
		}

	}

	public function succMsg($log):void
	{
		// success handler
		if (isset($_GET['succ']) && $_GET['succ'] == $log) {
			if ($log == 'reg') {
				echo "<script>alert('You have Register, now just login')</script>";
			}elseif ($log == 'ok') {
				echo "<script>alert('You have Login, Wellcome to Bloger')</script>";
			}elseif ($log == 'blogok') {
				echo "<script>alert('You have succesfuly created blog now admin needs to approve it and it can be read by many. Tnx for submiting')</script>";
			}elseif ($log == 'blogup') {
				echo "<script>alert('You have succesfuly updatet your blog it is sent to admin to approve it')</script>";
			}elseif ($log == 'del') {
				echo "<script>alert('You have succesfuly deleted your blog')</script>";
			}elseif ($log == 'usrdel') {
				echo "<script>alert('You have succesfuly deleted this user')</script>";
			}elseif ($log == 'blapp') {
				echo "<script>alert('You have succesfuly approved this blog')</script>";
			}
			
		}
	}
	
}
