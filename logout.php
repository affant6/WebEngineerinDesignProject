<?php
	session_start();
	session_destroy();
 
	if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
		setcookie("user", '', time() - (2592000));
		setcookie("pass", '', time() - (2592000));
	}
 
	header('location:login.html');
 
?>